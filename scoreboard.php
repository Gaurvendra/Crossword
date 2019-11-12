<?php
require_once('db.php');
$que = mysql_query("SELECT * FROM `users` ORDER BY score DESC LIMIT 10");

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>ihack-2018 | UPES-CSI</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900" rel="stylesheet">
    <!-- CSS Files -->
    <link href="assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet"/>
    <link href="assets/plugins/bootstrap/css/bootstrap-grid.css" rel="stylesheet"/>
    <link href="assets/plugins/bootstrap/css/bootstrap-reboot.css" rel="stylesheet"/>
    <link href="assets/css/colors.css" rel="stylesheet" id="themecolor"/>
    <link href="assets/css/style.css" rel="stylesheet"/>
    <!-- BEGIN PAGE LEVEL STYLE -->
    <link rel="stylesheet" href="assets/plugins/amcharts/export.css" type="text/css" media="all"/>
    <link href="assets/plugins/jquery-jvectormap/jquery-jvectormap.css" rel="stylesheet"/>
    <link href="assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.css" rel="stylesheet"/>
    <link href="assets/plugins/toastr/toastr.min.css" rel="stylesheet"/>

    <!-- END PAGE LEVEL STYLE -->
    <style id="clock-animations"></style>


</head>
<body>
        <div class="col-12 col-sm-6 col-md-8" >
            <div class="pvr-wrapper">
                <div class="pvr-box">
                    <h5 class="pvr-header">
                        Scoreboard 
                    </h5>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Score</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                                while ($row = mysql_fetch_array($que)) {
                                    ?>
                                  <tr>
                                    <td>&nbsp;<?php echo $row['name']; ?></td>
                                    <td>&nbsp;<?php echo $row['email']; ?></td>
                                    <td>&nbsp;<?php echo $row['score'] ; ?></td>
                                  </tr>
                                <?php
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


</body>
<!--End Body-->
<!--   Core JS Files   -->
<script src="assets/plugins/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.js" type="text/javascript"></script>
<script src="assets/plugins/pace/pace.min.js"></script>
<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
<script src="assets/plugins/waitMe/waitMe.min.js"></script>
<script src="assets/js/pvr_lite_app.js" id="appjs"></script>

<script src="assets/js/button.js" type="text/javascript"></script>



<!-- PVR Lite DEMO, don't include it in your project! -->
<script src="assets/js/pvr_lite_demo.js" type="text/javascript"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-66289183-8"></script>
<!-- BEGIN PAGE LEVEL JS -->
<script src="assets/plugins/sparkline/jquery.sparkline.js" type="text/javascript"></script>
<script src="assets/plugins/chartjs/Chart.min.js"></script>
<script src="assets/plugins/countup/countUp.min.js"></script>
<script src="assets/plugins/amcharts/amcharts.js"></script>
<script src="assets/plugins/amcharts/serial.js"></script>
<script src="assets/plugins/amcharts/export.min.js"></script>
<script src="assets/plugins/amcharts/none.js"></script>
<script src="assets/plugins/jquery-jvectormap/jquery-jvectormap.min.js"></script>
<script src="assets/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="assets/plugins/real-shadow/realShadow.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="assets/plugins/typeit/typeit.js"></script>
<script src="assets/js/pvr_lite_dashboard_v1.js"></script>
<script src="https://smartlock.google.com/client"></script>
<script type="text/javascript">
  window.onGoogleYoloLoad = (googleyolo) => {
    // The 'googleyolo' object is ready for use.
  };
</script>
<!-- END PAGE LEVEL JS -->
<script src="assets/plugins/toastr/toastr.min.js"></script>
<script src="assets/plugins/bootstrap-notify/bootstrap-notify.js" type="text/javascript"></script>
<script src="assets/js/pvr_lite_toastr.js"></script>

</html>
