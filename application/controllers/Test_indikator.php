<?php defined('BASEPATH') or exit('No direct script access allowed');

ini_set('max_execution_time', 0);
// ini_set('memory_limit', '2048M');

class Test_indikator extends CI_Controller
{
    var $view_dir = "grafik/";
    var $js_init = "main";

    function __construct()
    {
        parent::__construct();
        $this->load->model("M_Master", "m_ref");
    }

    public function index()
    {
        if ($this->input->is_ajax_request()) {
            try {
                if (!$this->session->userdata(SESSION_LOGIN)) {
                    throw new Exception("Session expired, please login", 2);
                }
                //var_dump($this->session->userdata(SESSION_LOGIN)->groupid);

                $data_page = array();
                $str = $this->load->view($this->view_dir . "content", $data_page, TRUE);

                $output = array(
                    "status" => 1,
                    "str" => $str,
                    "js_initial" => $this->js_init . ".init();",
                    "csrf_hash" => $this->security->get_csrf_hash(),
                );
                exit(json_encode($output));


            } catch (Exception $exc) {
                $this->db->trans_rollback();
                $output = array(
                    "status" => $exc->getCode(),
                    "msg" => $exc->getMessage(),
                    "csrf_hash" => $this->security->get_csrf_hash(),
                );
                exit(json_encode($output));

            }
        } else {
            exit("Denied");
        }

    }

    function indikator_list()
    {
        if ($this->input->is_ajax_request()) {
            try {
                $list_indikator = $this->db->query("SELECT * FROM indikator WHERE group_id = 1 ORDER BY id ASC")->result();

                $json_data = array(
                    "data" => $list_indikator // total data array
                );
                exit(json_encode($json_data));
            } catch (Exception $exc) {
                echo $exc->getTraceAsString();
            }
        } else {
            die;
        }
    }


}