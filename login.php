<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Faculty Evaluation System for Divine Grace School</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
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
    <link rel="stylesheet" href="assets/css/about-us.css">
    <link rel="stylesheet" href="assets/css/add-user-modal.css">
    <link rel="stylesheet" href="assets/css/admin-page-contentmanager-ratemodal.css">
    <link rel="stylesheet" href="assets/css/admin-page-contentmanager.css">
    <link rel="stylesheet" href="assets/css/admin-page-evalsum.css">
    <link rel="stylesheet" href="assets/css/admin-page.css">
    <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="assets/css/check-animation.css">
    <link rel="stylesheet" href="assets/css/contact-us.css">
    <link rel="stylesheet" href="assets/css/eval-sched.css">
    <link rel="stylesheet" href="assets/css/evaluation-page.css">
    <link rel="stylesheet" href="assets/css/faculty-load.css">
    <link rel="stylesheet" href="assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/mq-admin.css">
    <link rel="stylesheet" href="assets/css/mq-evalpage.css">
    <link rel="stylesheet" href="assets/css/mq-index.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/pagination.css">
    <link rel="stylesheet" href="assets/css/prev-eval-page.css">
    <link rel="stylesheet" href="assets/css/register.css">
    <link rel="stylesheet" href="assets/css/report-page.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu1.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/toggle-button.css">
    <link rel="stylesheet" href="assets/css/Toggle-Switch.css">
    <link rel="stylesheet" href="assets/css/Toggle-Switch1.css">
    <link rel="stylesheet" href="assets/css/user-priv.css">
<link rel="stylesheet" href="assets/css/print.css">
<link rel="icon" href="assets/img/icon.ico">
</head>

<body>
    <div class="wrapper"><a class="btn btn-outline-primary backbtn" role="button" href="./index.php"><i class="material-icons">arrow_back</i></a>
        <form action="assets/php/login.php" method="post" id="loginform" class="log-reg-container">
            <div class="illustration"><img src="assets/img/DGS-logo.jpg.png" width="200px"></div>
            <h5 style="text-align:center;margin:20px;">Faculty Evaluation System</h5><span class="badge badge-danger error-badge"></span>
            <div class="form-group"><input class="form-control log-reg-input" type="text" name="username" placeholder="Username or Email" id="username"></div>
            <div class="form-group"><input class="form-control log-reg-input" type="password" name="password" placeholder="Password" id="password"></div>
            <div class="form-group button"><button type="submit" class="btn btn-primary btn-block form-button">Log In</button></div>
        </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/admin-page.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/closebtn.js"></script>
    <script src="assets/js/enrollment-daytime-dropdown.js"></script>
    <script src="assets/js/faculty-loading.js"></script>
    <script src="assets/js/home.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
    <script src="http://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/floatthead/2.1.2/jquery.floatThead.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.js"></script>
    <script src="assets/js/image-preview.js"></script>
    <script src="assets/js/index.js"></script>
    <script src="assets/js/load.js"></script>
    <script src="assets/js/prev-eval-page.js"></script>
    <script src="assets/js/reports.js"></script>
    <script src="assets/js/scroll.js"></script>
    <script src="assets/js/selectedtabonrefresh.js"></script>
    <script src="assets/js/showpass.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
    <script src="assets/js/user-priv.js"></script>
</body>

</html>