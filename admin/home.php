<?php
include('../assets/php/connection.php');
foreach (glob("../assets/php/Maintenance/CMS_Viewing/*.php") as $filename) 
{
    include $filename;
}
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Faculty Evaluation System for Divine Grace School</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="../assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abel">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bree+Serif">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Comfortaa">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Libre+Franklin">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Maven+Pro">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Orbitron">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Patua+One">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed">
    <link rel="stylesheet" href="../assets/css/about-us.css">
    <link rel="stylesheet" href="../assets/css/add-user-modal.css">
    <link rel="stylesheet" href="../assets/css/admin-page-contentmanager-ratemodal.css">
    <link rel="stylesheet" href="../assets/css/admin-page-contentmanager.css">
    <link rel="stylesheet" href="../assets/css/admin-page-evalsum.css">
    <link rel="stylesheet" href="../assets/css/admin-page.css">
    <link rel="stylesheet" href="../assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="../assets/css/check-animation.css">
    <link rel="stylesheet" href="../assets/css/contact-us.css">
    <link rel="stylesheet" href="../assets/css/eval-sched.css">
    <link rel="stylesheet" href="../assets/css/evaluation-page.css">
    <link rel="stylesheet" href="../assets/css/faculty-load.css">
    <link rel="stylesheet" href="../assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="../assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="../assets/css/global.css">
    <link rel="stylesheet" href="../assets/css/home.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.css">
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="stylesheet" href="../assets/css/mq-admin.css">
    <link rel="stylesheet" href="../assets/css/mq-evalpage.css">
    <link rel="stylesheet" href="../assets/css/mq-index.css">
    <link rel="stylesheet" href="../assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="../assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="../assets/css/pagination.css">
    <link rel="stylesheet" href="../assets/css/prev-eval-page.css">
    <link rel="stylesheet" href="../assets/css/register.css">
    <link rel="stylesheet" href="../assets/css/report-page.css">
    <link rel="stylesheet" href="../assets/css/Sidebar-Menu.css">
    <link rel="stylesheet" href="../assets/css/Sidebar-Menu1.css">
    <link rel="stylesheet" href="../assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="../assets/css/toggle-button.css">
    <link rel="stylesheet" href="../assets/css/Toggle-Switch.css">
    <link rel="stylesheet" href="../assets/css/Toggle-Switch1.css">
    <link rel="stylesheet" href="../assets/css/user-priv.css">
    <link rel="icon" href="../assets/img/icon.ico">
</head>

<body class="page">
    <div id="loading" class="loading"></div>
    <div class="header"><?php include('admin-header.php'); ?></div>
    <section class="admin-section">
        <h4 class="admin-heading">Administrator</h4><select class="sy-select"><option value="1819">S.Y 2018-2019</option><option value="1920">S.Y 2019-2020</option><option value="2021">S.Y 2020-2021</option></select>
        <div class="admin-tab">
            <ul class="nav nav-tabs nav-fill">
                <li class="nav-item"><a class="nav-link active parent" role="tab" data-toggle="tab" href="#tab-1"><i class="fa fa-wrench icons"></i>Maintenance<br></a></li>
                <li class="nav-item"><a class="nav-link parent" role="tab" data-toggle="tab" href="#tab-26">Transaction<i class="fa fa-exchange icons"></i></a></li>
                <li class="nav-item"><a class="nav-link parent" role="tab" data-toggle="tab" href="#tab-2"><i class="fa fa-file-text-o icons"></i>Reports</a></li>
                <li class="nav-item"><a class="nav-link parent" role="tab" data-toggle="tab" href="#tab-3">Utilities<i class="fa fa-gears icons"></i></a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" role="tabpanel" id="tab-1">
                    <div>
                        <ul class="nav nav-tabs maintenance-child">
                            <li class="nav-item"><a class="nav-link child" role="tab" data-toggle="tab" href="#tab-4" id="sy-link">School Year</a></li>
                            <li class="nav-item"><a class="nav-link child" role="tab" data-toggle="tab" href="#tab-5" id="dpt-link"> Department</a></li>
                            <li class="nav-item"><a class="nav-link child" role="tab" data-toggle="tab" href="#tab-18" id="grd-link">Grade</a></li>
                            <li class="nav-item"><a class="nav-link child" role="tab" data-toggle="tab" href="#tab-19" id="sct-link">Section</a></li>
                            <li class="nav-item"><a class="nav-link child" role="tab" data-toggle="tab" href="#tab-20" id="sbj-link">Subject</a></li>
                            <li class="nav-item"><a class="nav-link child" role="tab" data-toggle="tab" href="#tab-21" id="rm-link">Room</a></li>
                            <li class="nav-item"><a class="nav-link child" role="tab" data-toggle="tab" href="#tab-22" id="fac-link">Faculty</a></li>
                            <li class="nav-item"><a class="nav-link child" role="tab" data-toggle="tab" href="#tab-23" id="std-link">Student</a></li>
                            <li class="nav-item"><a class="nav-link child" role="tab" data-toggle="tab" href="#tab-37" id="gud-link">Guidance</a></li>
                            <li class="nav-item"><a class="nav-link child" role="tab" data-toggle="tab" href="#tab-38" id="adm-link">Administrator</a></li>
                            <li class="nav-item"><a class="nav-link child" role="tab" data-toggle="tab" href="#tab-24" id="facload-link">Faculty Loading</a></li>
                            <li class="nav-item"><a class="nav-link child" role="tab" data-toggle="tab" href="#tab-6" id="usrlvl-link">User Level</a></li>
                            <li class="nav-item"><a class="nav-link child" role="tab" data-toggle="tab" href="#tab-25" id="eval-link">Evaluation</a></li>
                        </ul>
                        <div class="tab-content content">
                            <div class="tab-pane sy-tab" role="tabpanel" id="tab-4"></div>
                            <div class="tab-pane dpt-tab" role="tabpanel" id="tab-5"></div>
                            <div class="tab-pane grd-tab" role="tabpanel" id="tab-18"></div>
                            <div class="tab-pane sct-tab" role="tabpanel" id="tab-19"></div>
                            <div class="tab-pane sbj-tab" role="tabpanel" id="tab-20"></div>
                            <div class="tab-pane rm-tab" role="tabpanel" id="tab-21"></div>
                            <div class="tab-pane fac-tab" role="tabpanel" id="tab-22"></div>
                            <div class="tab-pane std-tab" role="tabpanel" id="tab-23"></div>
                            <div class="tab-pane gud-tab" role="tabpanel" id="tab-37"></div>
                            <div class="tab-pane adm-tab" role="tabpanel" id="tab-38"></div>
                            <div class="tab-pane facload-tab" role="tabpanel" id="tab-24"></div>
                            <div class="tab-pane eval-tab" role="tabpanel" id="tab-25">
                                <div class="target"></div><!--USERLEVEL-->

                            </div>
                            <div class="tab-pane usrlvl-tab" role="tabpanel" id="tab-6"></div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" role="tabpanel" id="tab-26"></div>
                <div class="tab-pane" role="tabpanel" id="tab-2"></div>
                <div class="tab-pane" role="tabpanel" id="tab-3"></div>
                <div class="tab-pane" role="tabpanel" id="tab-36">
                    <p>Tab content.</p>
                </div>
            </div>
        </div>
    </section>

    




    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/admin-page.js"></script>
    <script src="../assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="../assets/js/closebtn.js"></script>
    <script src="../assets/js/enrollment-daytime-dropdown.js"></script>
    <script src="../assets/js/faculty-loading.js"></script>
    <script src="../assets/js/home.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
    <script src="http://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/floatthead/2.1.2/jquery.floatThead.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.js"></script>
    <script src="../assets/js/image-preview.js"></script>
    <script src="../assets/js/index.js"></script>
    <script src="../assets/js/load.js"></script>
    <script src="../assets/js/prev-eval-page.js"></script>
    <script src="../assets/js/reports.js"></script>
    <script src="../assets/js/scroll.js"></script>
    <script src="../assets/js/selectedtabonrefresh.js"></script>
    <script src="../assets/js/showpass.js"></script>
    <script src="../assets/js/Simple-Slider.js"></script>
    <script src="../assets/js/user-priv.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="../assets/js/load-modules.js"></script>
    <script src="../assets/js/view-usertype-userlevel.js"></script>
    <script src="../assets/js/Maintenance/maintenance.js"></script>

</body>

</html>