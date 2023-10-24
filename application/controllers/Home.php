<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    var $view_dir = "admin/home";
    var $view_dir_demo = "demo/home";
    var $js_init = "home";
    var $js_path = "assets/js/userdefined/home/home.js";
    function __construct()
    {
        parent::__construct();
        $this->load->model("M_Master", "m_ref");
        date_default_timezone_set("Asia/Jakarta");
    }
    public function index()
    {

        try {
            if (!$this->session->userdata(SESSION_LOGIN))
                throw new Exception("Session Expired", 2);

            date_default_timezone_set("Asia/Jakarta");

            $sidebar_view = "admin/template/sidebar/sidebar";

            $main_content = $this->view_dir . "/home_page";

            $home_properties = array();
            //MAIN CONTENT
            $main_content = $this->view_dir . "/home_page_" . $this->session->userdata(SESSION_LOGIN)->groupid;

            //SIDEBAR

            $db = $this->load->database('default', TRUE);
            $totaldataindikator = $this->db->query('SELECT COUNT(*) as total FROM nilai_indikator')->result_array();
            $totalindikator = $this->db->query('SELECT COUNT(*) as total FROM indikator WHERE ppd=1')->result_array();
            $totalapbd = $this->db->query('SELECT COUNT(*) as total FROM nilaianggaran_apbd')->result_array();


            $ekonomi = $this->db->query("SELECT * FROM (select * from nilai_indikator where (id_indikator='1' AND wilayah='1000') AND periode !='01' AND (id_periode, versi) in (select id_periode, max(versi) as versi from nilai_indikator WHERE id_indikator='1' AND wilayah='1000' group by id_periode) group by id_periode order by id_periode desc limit 6) y order by id_periode ASC")->result_array();
            foreach ($ekonomi as $eko) {
                $ekonomitahun[] = $eko['tahun'];
                $ekonominilai[] = $eko['nilai'];
            }
            $ekonomitahun = str_replace('"', '', json_encode($ekonomitahun));
            $ekonominilai = str_replace('"', '', json_encode($ekonominilai));

            $bulan = array('00' => '', '01' => 'Januari', '02' => 'Februari', '03' => 'Maret', '04' => 'April', '05' => 'Mei', '06' => 'Juni', '07' => 'Juli', '08' => 'Agustus', '09' => 'September', '10' => 'Oktober', '11' => 'November', '12' => 'Desember', );
            $kemiskinan = $this->db->query("SELECT * FROM (select * from nilai_indikator where (id_indikator='36' AND wilayah='1000') AND (id_periode, versi) in (select id_periode, max(versi) as versi from nilai_indikator WHERE id_indikator='36' AND wilayah='1000' group by id_periode) group by id_periode order by id_periode desc limit 6) y order by id_periode ASC")->result_array();
            foreach ($kemiskinan as $kem) {
                $kemiskinantahun[] = $bulan[$kem['periode']] . "  " . $kem['tahun'];
                $kemiskinannilai[] = $kem['nilai'];
            }
            $kemiskinantahun = str_replace('', '', json_encode($kemiskinantahun));
            $kemiskinannilai = str_replace('"', '', json_encode($kemiskinannilai));

            $tpt = $this->db->query("SELECT * FROM (select * from nilai_indikator where (id_indikator='6' AND wilayah='1000') AND (id_periode, versi) in (select id_periode, max(versi) as versi from nilai_indikator WHERE id_indikator='6' AND wilayah='1000' group by id_periode) group by id_periode order by id_periode desc limit 6) y order by id_periode ASC")->result_array();
            foreach ($tpt as $tpt) {
                $tpttahun[] = $bulan[$tpt['periode']] . " " . $tpt['tahun'];
                $tptnilai[] = $tpt['nilai'];
            }
            $tpttahun = str_replace('', '', json_encode($tpttahun));
            $tptnilai = str_replace('"', '', json_encode($tptnilai));

            $sidebar_view = "admin/template/sidebar/sidebar_" . $this->session->userdata(SESSION_LOGIN)->groupid;
            // $this->js_path = "assets/js/admin/home/home_" . $this->session->userdata(SESSION_LOGIN)->groupid . ".js";
            $this->js_init = "home.init();";
            $data_page = array(
                "tag_title" => APP_TITLE,
                "main_content" => $main_content,
                "sidebar" => $sidebar_view,
                "profile" => $this->session->userdata(SESSION_LOGIN)->name,
                "home_properties" => $home_properties,
                "totaldataindikator" => $totaldataindikator,
                "totalindikator" => $totalindikator,
                "totalapbd" => $totalapbd,
                "ekonomitahun" => $ekonomitahun,
                "ekonominilai" => $ekonominilai,
                "kemiskinantahun" => $kemiskinantahun,
                "kemiskinannilai" => $kemiskinannilai,
                "tpttahun" => $tpttahun,
                "tptnilai" => $tptnilai,
                "group" => $this->session->userdata(SESSION_LOGIN)->groupname,
                "notif" => '0',
                "csrf" => array(
                    'name' => $this->security->get_csrf_token_name(),
                    'hash' => $this->security->get_csrf_hash()
                ),
                "js_path" => base_url($this->js_path),
                "js_init" => $this->js_init,
            );
            $this->load->view("admin/template/template", $data_page);

        } catch (Exception $exc) {
            if ($exc->getCode() == 2)
                redirect("Welcome?err=session_expired");
            else
                show_error($exc->getMessage(), 500, "Error");
        }

    }

    /*
     * get data detail alamat
     */
    public function detail_get()
    {
        if ($this->input->is_ajax_request()) {
            try {
                if (!$this->session->userdata(SESSION_LOGIN))
                    throw new Exception("Session berakhir, silahkan login ulang", 2);



                date_default_timezone_set("Asia/Jakarta");
                $current_date_time = date("Y-m-d H:i:s");


                $address = "Direktorat PEPPD <br/>
                            Jalan Taman Sunda Kelapa No.9 Jakarta 10310,<br>
                            Telp. 021 3193 6207 <br/>
                            Fax 021 3145 374";
                $cond = array($this->session->userdata(SESSION_LOGIN)->id_group);
                $sql = "SELECT alamat FROM tbl_profile_kl WHERE iddept=?";
                $list_data = $this->db->query($sql, $cond);
                if ($list_data->num_rows() > 0)
                    $address = $list_data->row()->alamat;

                //sukses
                $output = array(
                    "status" => 1,
                    "msg" => "Success",
                    "address" => $address,
                    "csrf_hash" => $this->security->get_csrf_hash(),
                );
                exit(json_encode($output));
            } catch (Exception $exc) {
                $output = array(
                    "status" => $exc->getCode(),
                    "msg" => $exc->getMessage(),
                    "csrf_hash" => $this->security->get_csrf_hash(),
                );
                exit(json_encode($output));
            }
        } else {
            exit("Access Denied");
        }
    }

    /*
     * get Demo
     */
    public function demo()
    {

        //  try {
//            if(!$this->session->userdata(SESSION_LOGIN))
//                throw new Exception("Session Expired",2);

        date_default_timezone_set("Asia/Jakarta");

        $sidebar_view = "admin/template/sidebar/sidebar";

        $main_content = $this->view_dir_demo . "/home_page";

        $home_properties = array();
        //MAIN CONTENT
        $main_content = $this->view_dir_demo . "/home_page_demo";
        //SIDEBAR
        $sidebar_view = "demo/template/sidebar/sidebar_demo";
        $this->js_path = "assets/demo/home/home_demo.js";
        $this->js_init = "home.init();";
        $data_page = array(
            "tag_title" => APP_TITLE,
            "main_content" => $main_content,
            "sidebar" => $sidebar_view,
            "profile" => 'Demo',
            "home_properties" => $home_properties,
            "group" => 'Demo',
            "notif" => '0',
            "csrf" => array(
                'name' => $this->security->get_csrf_token_name(),
                'hash' => $this->security->get_csrf_hash()
            ),
            "js_path" => base_url($this->js_path),
            "js_init" => $this->js_init,
        );
        $this->load->view("demo/template/template", $data_page);

        //        } catch (Exception $exc) {
//            if($exc->getCode()==2)
//                redirect ("Welcome?err=session_expired");
//            else
//                show_error($exc->getMessage(), 500, "Error");
//        }

    }



}