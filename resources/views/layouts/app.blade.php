<!DOCTYPE html>
<html lang="en">

<head>
    <base href="http://localhost/portal/">
    <meta charset="utf-8" />
    <title>Tech Resource Company | Attendance Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <link href="assets/css/common.css" id="app-style" rel="stylesheet" type="text/css" />
    <link href="assets/css/software.css" id="app-style" rel="stylesheet" type="text/css" />
    <link href="assets/css/v2.css" id="app-style" rel="stylesheet" type="text/css" />
    <style>
        .get-vaccinated {
            background: #d80025;
            color: #fff;
            padding: 20px;
            position: absolute;
            top: 0;
            z-index: 9999;
            height: 100%;
            display: flex;
            opacity: 0.95;
            align-content: stretch;
            justify-content: center;
            align-items: center;
        }

        .time-in-out {
            position: relative;
        }
    </style>
</head>

<body data-sidebar="dark">
    <!-- Begin page -->
    <div id="layout-wrapper">
        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="../portal" class="logo logo-dark">
                            <span class="logo-lg">
                                <img src="assets/images/logo-light.png" alt="" height="29">
                            </span>
                        </a>

                        <a href="../portal" class="logo logo-light">
                            <span class="logo-lg">
                                <img src="assets/images/logo-light.png" alt="" height="29">
                            </span>
                        </a>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="dropdown d-inline-block d-lg-none ms-2">
                        <button type="button" class="btn header-item noti-icon waves-effect"
                            id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="mdi mdi-magnify"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                            aria-labelledby="page-header-search-dropdown">
                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ..."
                                            aria-label="Recipient's username">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"><i
                                                    class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{-- <img class="rounded-circle header-profile-user" src="path_to_profile_picture" alt="Header Avatar"> --}}
                            <span class="d-none d-xl-inline-block ms-1" key="t-henry">Name: {{ $user->name }} </span>
                        </button>
                    </div>
                    <div class="d-inline-block">
                        <a href="logout" target="_self"
                            style="display:block; font-size:22px; padding:20px 20px 0 20px">
                            <i class="bx bx-cog bx-power-off"></i>
                        </a>
                    </div>
                </div>
        </header>
        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">
            <div data-simplebar class="h-100">
                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <div class="time-in-out">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="cube-switch">
                                    <span class="switch">
                                        <span class="switch-state off">Click <br> to <br> Timeout</span>
                                        <span class="switch-state on">Click <br> to <br> Timein</span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="currentstatus">
                                    <h5>Current Status: <br> <span class="user_status_class" id="usercurrentstatus">User
                                            Status</span></h5>
                                    <h6 class="timestatus">Last Status</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li>
                            <a href="../portal" class="waves-effect">
                                <i class="bx bx-home-circle"></i>
                                <span key="t-dashboards">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" class="drop-btn" rel="1"><i
                                    class="bx bx-layout"></i>Attendance</a>
                            <div class="dropdown" id="dropdown1">
                                <ul>
                                    <li><a href="../portal/attendance"><i class="bx bx-layout"></i>Attendance</a></li>
                                    <li><a href="../portal/attendance/team.php"><i class="bx bx-layout"></i>Team
                                            Members</a></li>
                                    <li><a href="../portal/attendance/department.php"><i
                                                class="bx bx-layout"></i>Department</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="../portal/shift" class="waves-effect">
                                <i class="bx bx-layout"></i>
                                <span key="t-layouts">Mark Shift</span>
                            </a>
                        </li>
                        <li>
                            <a href="../portal/department" data-toggle="tooltip" class="waves-effect">
                                <i class="bx bx-layout"></i>
                                <span key="t-layouts">Departments</span>
                            </a>
                        </li>
                        <li>
                            <a href="../portal/users" data-toggle="tooltip" class="waves-effect">
                                <i class="bx bx-layout"></i>
                                <span key="t-layouts">Users</span>
                            </a>
                        </li>
                        <li>
                            <a href="../portal/users/addnewuser.php" data-toggle="tooltip" class="waves-effect">
                                <i class="bx bx-layout"></i>
                                <span key="t-layouts">Add New User</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" class="drop-btn" rel="2"><i
                                    class="bx bx-layout"></i>Discrepancy</a>
                            <div class="dropdown" id="dropdown2">
                                <ul>
                                    <li><a href="../portal/discrepancy/department.php"><i
                                                class="bx bx-layout"></i>User Discrepancy</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="../portal/report" class="waves-effect">
                                <i class="bx bx-layout"></i>
                                <span key="t-layouts">Attendance Report</span>
                            </a>
                        </li>
                        <li>
                            <a href="users/userdirectory.php" class="waves-effect">
                                <i class="bx bx-chart"></i>
                                <span key="t-ecommerce">User Directory</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <div class="main-content">
            <div class="page-content">
                @yield('content')
            </div>
        </div>
    </div>

    </div>
    <!-- End Page-content -->


    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> © TRC Portal.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Designed & Developed by Software Department
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </div>
    <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">
            <div class="rightbar-title d-flex align-items-center px-3 py-4">

                <h5 class="m-0 me-2">Settings</h5>

                <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
            </div>

            <!-- Settings -->
            <hr class="mt-0" />
            <h6 class="text-center mb-0">Choose Layouts</h6>

            <div class="p-4">
                <div class="mb-2">
                    <img src="assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">
                </div>

                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                    <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                </div>

                <div class="mb-2">
                    <img src="assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch"
                        data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css">
                    <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                </div>

                <div class="mb-2">
                    <img src="assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="form-check form-switch mb-5">
                    <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch"
                        data-appStyle="assets/css/app-rtl.min.css">
                    <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                </div>

                <div class="mb-2">
                    <img src="assets/images/layouts/layout-4.jpg" class="img-thumbnail" alt="layout images">
                </div>
                <div class="form-check form-switch mb-5">
                    <input class="form-check-input theme-choice" type="checkbox" id="dark-rtl-mode-switch">
                    <label class="form-check-label" for="dark-rtl-mode-switch">Dark RTL Mode</label>
                </div>

            </div>

        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>
</body>

</html>
