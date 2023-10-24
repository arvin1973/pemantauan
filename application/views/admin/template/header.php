<div class="navbar-custom">
    <ul class="list-unstyled topnav-menu float-right mb-0">

        <!--                    <li class="dropdown d-none d-lg-block">
                        <a class="nav-link dropdown-toggle mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="assets/images/flags/us.jpg" alt="user-image" class="mr-2" height="12"> <span class="align-middle">English <i class="mdi mdi-chevron-down"></i> </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                             item
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="assets/images/flags/germany.jpg" alt="user-image" class="mr-2" height="12"> <span class="align-middle">German</span>
                            </a>

                             item
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="assets/images/flags/italy.jpg" alt="user-image" class="mr-2" height="12"> <span class="align-middle">Italian</span>
                            </a>

                             item
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="assets/images/flags/spain.jpg" alt="user-image" class="mr-2" height="12"> <span class="align-middle">Spanish</span>
                            </a>

                             item
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="assets/images/flags/russia.jpg" alt="user-image" class="mr-2" height="12"> <span class="align-middle">Russian</span>
                            </a>
                        </div>
                    </li>-->

        <li class="dropdown notification-list d-none d-md-inline-block">
        </li>

        <!--                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle  waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="mdi mdi-bell noti-icon"></i>
                            <span class="badge badge-danger rounded-circle noti-icon-badge">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                             item
                            <div class="dropdown-item noti-title">
                                <h5 class="font-16 m-0">
                                    <span class="float-right">
                                        <a href="" class="text-dark">
                                            <small>Clear All</small>
                                        </a>
                                    </span>Notification
                                </h5>
                            </div>

                            <div class="slimscroll noti-scroll">
                    
                                 item
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon">
                                        <i class="fa fa-user-plus text-info"></i>
                                    </div>
                                    <p class="notify-details">New user registered
                                        <small class="noti-time">You have 10 unread messages</small>
                                    </p>
                                </a>

                                 item
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon text-success">
                                        <i class="far fa-gem text-primary"></i>
                                    </div>
                                    <p class="notify-details">New settings
                                        <small class="noti-time">There are new settings available</small>
                                    </p>
                                </a>

                                 item
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon text-danger">
                                        <i class="far fa-bell text-danger"></i>
                                    </div>
                                    <p class="notify-details">Updates
                                        <small class="noti-time">There are 2 new updates available</small>
                                    </p>
                                </a>
                            </div>

                             All
                            <a href="javascript:void(0);" class="dropdown-item text-center notify-item notify-all">
                                    See all notifications
                            </a>

                        </div>
                    </li>-->

        <li class="dropdown notification-list">
            <div style="display: inline-flex">
                <p style="font-family: 'Montserrat', sans-serif; color: white; font-weight: 500; align-self: center; padding-top: 18px;">
                    <?php echo $this->session->userdata(SESSION_LOGIN)->name; ?>
                </p>
                <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="<?php echo base_url("assets") ?>/images/users/images_(1).png" alt="user-image" class="rounded-circle">
                </a>
            </div>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                <!-- item-->
                <div class="dropdown-header noti-title">
                    <h6 class="text-overflow m-0"></h6>
                </div>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="mdi mdi-face-profile"></i>
                    <span>
                        <?php echo $this->session->userdata(SESSION_LOGIN)->name; ?>
                    </span>
                </a>

                <!-- item-->
                <a href="javascript:void(0)" class="dropdown-item notify-item btn_change_password"><i class="fa fa-lock"></i> Change Password</a>
                <div class="dropdown-divider"></div>

                <!-- item-->
                <a href="<?php echo site_url("Welcome/logout") ?>" class="dropdown-item notify-item btn_logout"><i class="md md-settings-power"></i> Logout</a>
            </div>
        </li>

        <!--                    <li class="dropdown notification-list">
                        <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                            <i class="mdi mdi-settings-outline noti-icon"></i>
                        </a>
                    </li>-->


    </ul>

    <!-- LOGO -->
    <div class="logo-box">
        <!-- <a href="index.html" class="logo text-center logo-dark">
            <span class="logo-lg">
                <img src="assets/images/logo-dark.png" alt="" height="16">
                <span class="logo-lg-text-dark"></span>
            </span>
            <span class="logo-sm">
                <span class="logo-lg-text-dark"></span>
                <img src="assets/images/logo-sm.png" alt="" height="25">
            </span>
        </a> -->

        <a href="" class="logo text-center logo-light">
            <span class="logo-lg">
                <img src="<?php echo base_url("assets") ?>/images/new_logo_bappenas.png" alt="" height="40" style="margin-top: -10px;">
            </span>
            <span class="logo-sm">
                <img src="<?php echo base_url("assets") ?>/images/logo-bappenas_2_lite.png" alt="" height="40" style="margin-top: -10px;">
            </span>
        </a>

        <a href="" class="logo text-center logo-light">
            <span class="logo-lg">
                <img src="<?php echo base_url("assets") ?>/images/logo_d.png" alt="#" height="50">
            </span>

        </a>
    </div>

    <!-- LOGO -->


    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
        <li>
            <button class="button-menu-mobile waves-effect waves-light">
                <i class="mdi mdi-menu" style="color: white"></i>
            </button>
        </li>

        <!--                    <li class="d-none d-sm-block">
                        <form class="app-search">
                            <div class="app-search-box">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <div class="input-group-append">
                                        <button class="btn" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </li>-->
    </ul>
</div>