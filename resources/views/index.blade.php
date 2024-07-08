@extends('layouts.app')

@section('content')

    <body>
        <div class="container homepage">
            <!-- start page title -->
            <!-- end page title -->
            <div class="row">
                <div class="col-xl-3">
                    <div class="card overflow-hidden">
                        <div class="bg-primary_ bg-soft_ text-center">
                            <div class="user-card">
                                <div class="theprofilepicbox">
                                    <a href="javascript:;" id="changeprofilepic"> <i class="fa fa-camera fa-1x"></i></a>
                                    <img src="path/to/profile-pic.jpg" alt="" class="img-thumbnail rounded-circle_"
                                        style="">
                                </div>
                                <h5>Hello, {{ $user->name }}</h5>
                                <h6>{{ $user->designation }}</h6>
                                <div class="theicons">
                                    <a href="javascript:;" data-toggle="tooltip" title="Coming Soon!"><i
                                            class="fa fa-dollar-sign fa-lg"></i></a>
                                    <a href="javascript:;" data-toggle="tooltip" title="Coming Soon!"><i
                                            class="fa fa-users fa-lg"></i></a>
                                    <a href="javascript:;" data-toggle="tooltip" title="Coming Soon!"><i
                                            class="fa fa-clock"></i></a>
                                    <a href="javascript:;" data-toggle="tooltip" title="Coming Soon!"><i
                                            class="fa fa-id-card fa-lg"></i></a>
                                    <a href="javascript:;" data-toggle="tooltip" title="Coming Soon!"><i
                                            class="fa fa-scroll fa-lg"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card leftbg mini-stats-wid noticeboard">
                                <div class="card-body">
                                    <div class="row notice-desc">
                                        <div class="notice-icon">
                                            <img src="https://cdn.dribbble.com/users/2330950/screenshots/6303019/98_4x.jpg"
                                                style="width:100%;">
                                        </div>
                                        <div class="col-md-9">
                                            <h4 class="card-title mb-4">Notice Board</h4>
                                            <div class="noticeboard-desc">
                                                <div>Notice 1: Welcome to the company!</div>
                                                <div>Notice 2: Meeting at 3 PM in the conference room.</div>
                                            </div>
                                        </div>
                                        <div class="col-md-3"> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 rightbg theclock card">
                    <div class="card-body">
                        <div id="myclock"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Personal Details</h4>
                            <div class="info-card">
                                <div class="single-row">
                                    <label>Full Name:</label> <span>{{ $user->name }}</span>
                                </div>
                                <div class="single-row">
                                    <label>Designation:</label> <span>{{ $user->designation }}</span>
                                </div>
                                <div class="single-row">
                                    <label>Department:</label> <span>IT</span>
                                </div>
                                {{-- <div class="single-row">
                                <label>Reporting To:</label> <span>Jane Smith</span>
                            </div> --}}
                                <div class="single-row">
                                    <label>Date of Joining:</label> <span>{{ $user->date_of_joining }}</span>
                                </div>
                                <div class="single-row">
                                    <label>Employee Type:</label> <span>{{ $user->employee_type }}</span>
                                </div>
                                <div class="single-row d-none">
                                    <label>Email:</label> <span><a href="http://mail.trc.com/Mondo/lang/sys/login.aspx"
                                            target="_blank">Click Here</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body pb-0">
                            <h4 class="card-title mb-4">Attendance</h4>
                            <div class="attendance-report">
                                <table class="datatable">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Hours</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1st May</td>
                                            <td>08:00</td>
                                            <td><span class='daytype day-normal'><i class='mdi mdi-check'></i></span></td>
                                        </tr>
                                        <tr>
                                            <td>2nd May</td>
                                            <td>07:30</td>
                                            <td><span class='daytype day-halfday'><i class='mdi mdi-alert'></i></span></td>
                                        </tr>
                                        <tr>
                                            <td>3rd May</td>
                                            <td>04:00</td>
                                            <td><span class='daytype day-absent'><i class='mdi mdi-alert'></i></span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div id="overview-chart" class="apex-charts" dir="ltr"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card team-members-widget">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Team Members</h4>
                            <div class="table-responsive home-team-members">
                                <table class="table align-middle table-nowrap">
                                    <tbody>
                                        <tr>
                                            <td style="width: 50px;"><img src="path/to/profile-pic.jpg"
                                                    class="rounded-circle avatar-xs" alt=""></td>
                                            <td>
                                                <h5 class="font-size-14 m-0"><a href="javascript: void(0);"
                                                        class="text-dark">Alice Johnson</a></h5>
                                                <h6>Software Developer</h6>
                                            </td>
                                            <td>
                                                <div class="user-icons">
                                                    <a href="javascript: void(0);"><i class="fa fa-phone"></i></a>
                                                    <a href="mailto:alice.johnson@example.com"><i
                                                            class="fa fa-envelope"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 50px;"><img src="path/to/profile-pic.jpg"
                                                    class="rounded-circle avatar-xs" alt=""></td>
                                            <td>
                                                <h5 class="font-size-14 m-0"><a href="javascript: void(0);"
                                                        class="text-dark">Bob Brown</a></h5>
                                                <h6>UI/UX Designer</h6>
                                            </td>
                                            <td>
                                                <div class="user-icons">
                                                    <a href="javascript: void(0);"><i class="fa fa-phone"></i></a>
                                                    <a href="mailto:bob.brown@example.com"><i
                                                            class="fa fa-envelope"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-lg-4">
                    <div class="card team-members-widget">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Online Users (5)</h4>
                            <div class="table-responsive home-team-members">
                                <table class="table align-middle table-nowrap">
                                    <tbody>
                                        <tr>
                                            <td style="width: 50px;"><img src="path/to/profile-pic.jpg"
                                                    class="rounded-circle avatar-xs" alt=""></td>
                                            <td>
                                                <h5 class="font-size-14 m-0"><a href="javascript: void(0);"
                                                        class="text-dark">Alice Johnson</a></h5>
                                                <h6>Software Developer</h6>
                                            </td>
                                            <td>
                                                <div class="user-icons">
                                                    <a href="javascript: void(0);"><i class="fa fa-phone"></i></a>
                                                    <a href="mailto:alice.johnson@example.com"><i
                                                            class="fa fa-envelope"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 50px;"><img src="path/to/profile-pic.jpg"
                                                    class="rounded-circle avatar-xs" alt=""></td>
                                            <td>
                                                <h5 class="font-size-14 m-0"><a href="javascript: void(0);"
                                                        class="text-dark">Bob Brown</a></h5>
                                                <h6>UI/UX Designer</h6>
                                            </td>
                                            <td>
                                                <div class="user-icons">
                                                    <a href="javascript: void(0);"><i class="fa fa-phone"></i></a>
                                                    <a href="mailto:bob.brown@example.com"><i
                                                            class="fa fa-envelope"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Employees Calendar</h4>
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div>
        <!-- end container -->

        <!-- Scripts -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/slider/slick.min.js"></script>
        <script src="assets/libs/moment/moment.js"></script>
        <script src="assets/libs/fullcalendar/fullcalendar.min.js"></script>
        <script src="assets/js/app.js"></script>
        <script language="javascript" type="text/javascript"
            src="https://www.jqueryscript.net/demo/Customizable-Analog-Alarm-Clock-with-jQuery-Canvas-thooClock/js/jquery.thooClock.js">
        </script>

    </body>

    </html>
@endsection
