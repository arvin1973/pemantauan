<div class="left-side-menu shadow-lg bg-white rounded" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1rem !important;">

    <div class="slimscroll-menu">

        <!--                        - Sidemenu -->
        <div id="sidebar-menu">

            <div class="user-box">
            </div>

            <ul class="metismenu" id="side-menu">

                <li class="active">
                    <a href="" <?php echo site_url("home") ?>" class="waves-effect">
                        <i class="mdi mdi-home"></i>
                        <span> Beranda </span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="mdi mdi-chart-bell-curve-cumulative"></i>
                        <span> Pencapaian </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a class="link_target" href="#"
                                data-target="<?php echo site_url("Pencapaian_indikator") ?>">Pencapaian Indikator
                                Makro</a></li>
                        <li><a class="link_target" href="#" data-target="<?php echo site_url("Test_indikator") ?>">Test
                                indikator
                                Makro</a></li>
                        <li><a class="link_target" href="#"
                                data-target="<?php echo site_url("Laporan_perkembangan") ?>">Laporan Perkembangan</a>
                        </li>
                        <li><a class="link_target" href="#" data-target="<?php echo site_url("ArcGis") ?>">Sistem
                                Informasi Geografis</a></li>
                    </ul>
                </li>


                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="mdi   mdi mdi-ballot-recount-outline "></i>
                        <span>Evaluasi Kinerja</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a class="waves-effect link_target" data-target="<?php echo site_url("Gis") ?>">Indikator
                                Makro
                            </a>
                        </li>

                        <li><a class="waves-effect link_target"
                                data-target="<?php echo site_url("Laporan_2") ?>">Laporan</a></li>
                    </ul>
                </li>

                <li>
                    <a class="waves-effect link_target" data-target="<?php echo site_url("Apbd_2") ?>"
                        class="waves-effect">
                        <i class=" mdi mdi-calendar"></i>
                        <span> APBD </span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class=" mdi mdi-table-plus"></i>
                        <span> Data Tabel </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a class="link_target" href="#"
                                data-target="<?php echo site_url("List_data_capaian") ?>">Data Indikator</a></li>
                        <li><a class="link_target" href="#" data-target="<?php echo site_url("Upload_data") ?>">Upload
                                Data</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="mdi mdi-account-edit-outline"></i>
                        <span> Manajemen Pengguna </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a class="link_target" href="#"
                                data-target="<?php echo site_url("M_users_pemantauan") ?>">Tim Pemantauan</a></li>
                        <li><a class="link_target" href="#" data-target="<?php echo site_url("M_users_peppd") ?>">User
                                PEPPD</a></li>
                        <li><a class="link_target" href="#" data-target="<?php echo site_url("M_users") ?>">User</a>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>
        <!--                         End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!--                     Sidebar -left -->

</div>