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

<body class="page">
    <div class="loading"></div>


    <div class="pg-header">
        <?php include('header.php'); ?>
    </div>
    <section class="admin-section"><a href="admin-page.html" id="link-home-to-admin" class="admin-link parent">Admin<i class="fa fa-user icons"></i></a>
        <div class="admin-tab">
            <ul class="nav nav-tabs nav-fill" id="home">
                <li class="nav-item"><a class="nav-link active parent" role="tab" data-toggle="tab" href="#tab-1">Evaluate<i class="fa fa-star icons"></i></a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" role="tabpanel" id="tab-1">
                    <div class="front-eval">
                        <ul class="nav nav-tabs nav-justified front-eval">
                            <li class="nav-item front-eval"><a class="nav-link active front-eval" role="tab" data-toggle="tab" href="#tab-4">Guidance Evaluation</a></li>
                            <li class="nav-item front-eval"><a class="nav-link front-eval" role="tab" data-toggle="tab" href="#tab-5">Peer Evaluation</a></li>
                            <li class="nav-item front-eval"><a class="nav-link front-eval" role="tab" data-toggle="tab" href="#tab-6">Student Evaluation</a></li>
                            <li class="nav-item front-eval"><a class="nav-link front-eval" role="tab" data-toggle="tab" href="#tab-7">Self Evaluation</a></li>
                        </ul>
                        <div class="tab-content front-eval">
                            <div class="tab-pane active front-eval" role="tabpanel" id="tab-4">
                                <p class="lead text-center" style="margin-top:20px;font-size:1.5rem;">Select a faculty member to evaluate</p>
                                <section class="user-circles-container">
                                    <div class="container user-bar"><a href="evaluation-page.php"><img class="rounded-circle image" src="assets/img/1-1.jpg" width="90px" height="90px"></a>
                                        <div class="details-div">
                                            <h6>Jeffrey Gonzales</h6>
                                            <h6 class="small-heading">Senior High Department</h6>
                                        </div>
                                    </div>
                                    <div class="container user-bar"><a href="evaluation-page.php"><img class="rounded-circle image" src="assets/img/2-1.jpg" width="90px" height="90px"></a>
                                        <div class="details-div">
                                            <h6>Patricia Del Roque</h6>
                                            <h6 class="small-heading">ABM Department</h6>
                                        </div>
                                    </div>
                                    <div class="container user-bar"><a href="evaluation-page.php"><img class="rounded-circle image" src="assets/img/3.jpg" width="90px" height="90px"></a>
                                        <div class="details-div">
                                            <h6>Leo Matinag</h6>
                                            <h6 class="small-heading">Elementary Department</h6>
                                        </div>
                                    </div>
                                    <div class="container user-bar"><a href="evaluation-page.php"><img class="rounded-circle image" src="assets/img/33.jpg" width="90px" height="90px"></a>
                                        <div class="details-div">
                                            <h6>Rosalyn Nieves</h6>
                                            <h6 class="small-heading">Elementary Department</h6>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="tab-pane front-eval" role="tabpanel" id="tab-5"></div>
                            <div class="tab-pane front-eval" role="tabpanel" id="tab-6">
                                <p class="lead text-center" style="margin-top:20px;font-size:1.5rem;">Select a faculty member to evaluate</p>
                                <section class="user-circles-container">
                                    <div class="container user-bar"><a href="evaluation-page.html"><img class="rounded-circle image" src="../assets/img/1-1.jpg" width="90px" height="90px"></a>
                                        <div class="details-div">
                                            <h6>Jeffrey Gonzales</h6>
                                            <h6 class="small-heading">Senior High Department</h6>
                                        </div>
                                    </div>
                                    <div class="container user-bar"><a href="evaluation-page.html"><img class="rounded-circle image" src="../assets/img/2-1.jpg" width="90px" height="90px"></a>
                                        <div class="details-div">
                                            <h6>Patricia Del Roque</h6>
                                            <h6 class="small-heading">ABM Department</h6>
                                        </div>
                                    </div>
                                    <div class="container user-bar"><a href="evaluation-page.html"><img class="rounded-circle image" src="../assets/img/3.jpg" width="90px" height="90px"></a>
                                        <div class="details-div">
                                            <h6>Leo Matinag</h6>
                                            <h6 class="small-heading">Elementary Department</h6>
                                        </div>
                                    </div>
                                    <div class="container user-bar"><a href="evaluation-page.html"><img class="rounded-circle image" src="../assets/img/33.jpg" width="90px" height="90px"></a>
                                        <div class="details-div">
                                            <h6>Rosalyn Nieves</h6>
                                            <h6 class="small-heading">Elementary Department</h6>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="tab-pane front-eval" role="tabpanel" id="tab-7"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade eval-summary-modal" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">&lt;faculty name&gt;'s &lt;eval type&gt; Summary</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <section class="graph-section"><script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],
          ['2004',  1000,      400],
          ['2005',  1170,      460],
          ['2006',  660,       1120],
          ['2007',  1030,      540]
        ]);

        var options = {
          title: 'Faculty Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>



<div id="curve_chart" style="width: 100%; height:300px;"></div>


</section>
                    <h4>Comments</h4>
                    <ul class="list-group eval-comments">
                        <li class="list-group-item"><span>magaling magturo kaso dugyot</span></li>
                        <li class="list-group-item"><span>pinapalipat yung mga babae sa harapan</span></li>
                        <li class="list-group-item"><span>bobo minsan</span></li>
                        <li class="list-group-item"><span>magaling yan magturo</span></li>
                        <li class="list-group-item"><span>hi sir! i love you po!</span></li>
                        <li class="list-group-item"><span>PUTANGINA MO WAG KA PAPAKITA SAKEN</span></li>
                        <li class="list-group-item"><span>Hi ser Ipasa Mo Ko Ser</span></li>
                        <li class="list-group-item"><span>sir kelan matatapos probinsyano?</span></li>
                        <li class="list-group-item"><span>good job kuya</span></li>
                        <li class="list-group-item"><span>ang creepy mo kuya tingen ka nang tingen</span></li>
                        <li class="list-group-item"><span>Bati na tayo ser :(</span></li>
                        <li class="list-group-item"><span>ser shot tau</span></li>
                        <li class="list-group-item"><span>AkO NGA PALA yung sinayang mo</span></li>
                    </ul>
                </div>
            </div>
        </div>
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