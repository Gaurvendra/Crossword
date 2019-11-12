<?php
session_start();
require_once('db.php');

if(!isset($_SESSION["email"])){
header("Location:index.html");
exit();
}
$email=($_SESSION["email"]);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>UPES-CSI</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <meta name="keywords" content="">
    <meta name="description" content="">
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900" rel="stylesheet">
    <!-- CSS Files -->
    <link href="assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/plugins/bootstrap/css/bootstrap-grid.css" rel="stylesheet" />
    <link href="assets/plugins/bootstrap/css/bootstrap-reboot.css" rel="stylesheet" />
    <link href="assets/css/colors.css" rel="stylesheet" id="themecolor" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- BEGIN PAGE LEVEL STYLE -->
    <link rel="stylesheet" href="assets/plugins/amcharts/export.css" type="text/css" media="all" />
    <link href="assets/plugins/jquery-jvectormap/jquery-jvectormap.css" rel="stylesheet" />
    <link href="assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.css" rel="stylesheet" />
    <link href="assets/plugins/toastr/toastr.min.css" rel="stylesheet" />

    <!-- END PAGE LEVEL STYLE -->
    <style id="clock-animations"></style>


</head>

<body>

    <!--Begin Sidebar-->
    <div class="sidebar" data-color="purple">
        <div class="sidebar-wrapper">
            <!--Begins Logo start-->
            <div class="logo">
                <a href="javascript:void(0)" class="simple-text logo-mini">
                    UPES
                </a>
                <a href="javascript:void(0)" class="simple-text logo-normal">
                    CSI
                </a>
            </div>
            <!--End Logo start-->

            <!--Begins User Section-->
            <div class="user">
                <div class="photo">
                    <i class="material-icons">perm_identity</i>
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#pvr_user_nav" class="collapsed">
                        <span> <?php
                            echo $_SESSION['name'];
                            ?>
                            <b class="caret"></b>
                        </span>
                    </a>
                    <div class="collapse m-t-10" id="pvr_user_nav">
                        <ul class="nav">

                            <li>
                                <a class="profile-dropdown" href="logout.php">
                                    <span class="sidebar-mini"><i class="icon-logout"></i></span>
                                    <span class="sidebar-normal">Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--End User Section-->

            <ul class="nav">

                <li class="nav-item">
                    <a class="nav-link sub_link" href="scoreboard.php">
                        <i class="material-icons">pie_chart</i>
                        <p>Leaderboard</p>
                    </a>
                </li>


            </ul>
        </div>
    </div>
    <!--End Sidebar-->
    <!--Begin Main Panel-->
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <div class="navbar-wrapper">

                    <a class="navbar-brand" id="page_header_title" href="javascript:void(0)">
                        <i class="material-icons">home</i>
                        <?php
                            echo $_SESSION['name'];
                            ?>
                    </a>

                </div>


            </div>
        </nav>
        <!-- End Navbar -->
<?php
                                           
                                        $sql1 = mysql_query("SELECT * FROM `users` WHERE `email`= '".$email."'") or die("Cannot connect to database!");
                                        $row1 = mysql_fetch_array($sql1);
                                        if($row1['score']==0){ ?>
        <!--Begin Content-->
        <div class="content dashboard_v1">
            <div class="row">
                <div class="col-lg-12 col-xl-9">
                    <div class="row">
                        <div>
                            <div class="pvr-wrapper">
                                <div class="pvr-box">
                                    <h5 class="pvr-header">
                                        CROSSWORD

                                    </h5>
                                    <div class="p-0 am_chart">
                                        <img src="cross.jpg" alt="cross" width="850" height="400">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="row">
                        <div>
                            <div class="pvr-wrapper">
                                <div class="pvr-box">
                                    <h5 class="pvr-header">
                                        Rows

                                    </h5>
                                    <div class="p-0 am_chart">
                                        <ol>
                                            <li>
                                                <form id="qwertyuiop" action="check.php" method="post">1. What was the old name of “Kanyakumari”?<br>Key : MEDICINE is EGFKEKPM

                                                    <?php
                                                $sql = mysql_query("SELECT * FROM `checkans` WHERE `email`= '".$email."'") or die("Cannot connect to database!");
                                                $row = mysql_fetch_array($sql);
                                                if($row['1'] == 0){
                                                ?>
                                                    <input name="ans" id="R1">
                                                    <input type="hidden" id="a1" name="q" value="1">
                                                    <input type="submit" form="qwertyuiop" class="btn btn-purple btn-round" value="Submit">
                                                    <?php } ?>
                                                </form>
                                            </li>

                                            <li>
                                                <form id="2" action="check.php" method="post">2. What is the task of pre-processor?<br>Key : ALPHABET is AOUIAEEU

                                                    <?php
                                                $sql = mysql_query("SELECT * FROM `checkans` WHERE `email`= '".$email."'") or die("Cannot connect to database!");
                                                $row = mysql_fetch_array($sql);
                                                if($row['2'] == 0){
                                                ?>
                                                    <input name="ans" id="R2">
                                                    <input type="hidden" id="a2" name="q" value="2">
                                                    <input type="submit" form="2" class="btn btn-purple btn-round" value="Submit">
                                                     <?php } ?>
                                                </form>

                                            </li>

                                            <li>
                                                <form id="3" action="check.php" method="post">3. Kiwi is the national symbol of which country?<br>Key : CUBE is FODJ

                                                    <?php
                                                $sql = mysql_query("SELECT * FROM `checkans` WHERE `email`= '".$email."'") or die("Cannot connect to database!");
                                                $row = mysql_fetch_array($sql);
                                                if($row['3'] == 0){
                                                ?>
                                                    <input name="ans" id="R3">
                                                    <input type="hidden" id="a3" name="q" value="3">
                                                    <input type="submit" form="3" class="btn btn-purple btn-round" value="Submit">
                                                    <?php } ?>
                                                </form>
                                            </li>
                                        </ol>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="row">
                        <div>
                            <div class="pvr-wrapper">
                                <div class="pvr-box">
                                    <h5 class="pvr-header">
                                        Columns

                                    </h5>
                                    <div class="p-0 am_chart">
                                        <ol start="4">

                                            <li>
                                                <form id="4" action="check.php" method="post">4. Thor’s hammer MJOLNIR is made of metal from the heart of a dying ________?<br>Key: CAT is XZG

                                                    <?php
                                                $sql = mysql_query("SELECT * FROM `checkans` WHERE `email`= '".$email."'") or die("Cannot connect to database!");
                                                $row = mysql_fetch_array($sql);
                                                if($row['4'] == 0){
                                                ?>
                                                    <input name="ans" id="R1">
                                                    <input type="hidden" id="a4" name="q" value="4">
                                                    <input type="submit" form="4" class="btn btn-purple btn-round" value="Submit">
                                                    <?php } ?>
                                                </form>

                                            </li>

                                            <li>
                                                <form id="5" action="check.php" method="post">5. Headquarters of Northern Command of Indian Army is located in?<br>Key : PIT is OIO

                                                    <?php
                                                $sql = mysql_query("SELECT * FROM `checkans` WHERE `email`= '".$email."'") or die("Cannot connect to database!");
                                                $row = mysql_fetch_array($sql);
                                                if($row['5'] == 0){
                                                ?>
                                                    <input name="ans" id="R1">
                                                    <input type="hidden" id="a5" name="q" value="5">
                                                    <input type="submit" form="5" class="btn btn-purple btn-round" value="Submit">
                                                    <?php } ?>
                                                </form>

                                            </li>

                                            <li>
                                                <form id="6" action="check.php" method="post">6. A network designed to allow communication within an organisation is called?<br>Key : HELLO is IIMMU

                                                    <?php
                                                $sql = mysql_query("SELECT * FROM `checkans` WHERE `email`= '".$email."'") or die("Cannot connect to database!");
                                                $row = mysql_fetch_array($sql);
                                                if($row['6'] == 0){
                                                ?>
                                                    <input name="ans" id="R1">
                                                    <input type="hidden" id="a6" name="q" value="6">
                                                    <input type="submit" form="6" class="btn btn-purple btn-round" value="Submit">
                                                    <?php } ?>
                                                </form>

                                            </li>

                                        </ol>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div> <?php
                                                $sql = mysql_query("SELECT * FROM `checkans` WHERE `email`= '".$email."'") or die("Cannot connect to database!");
                                                $row = mysql_fetch_array($sql);
                                           
                                                $sql1 = mysql_query("SELECT * FROM `users` WHERE `email`= '".$email."'") or die("Cannot connect to database!");
                                        $row1 = mysql_fetch_array($sql1);
                                        if($row1['ind']==0){ ?>

                <div class="row">
                    <div>
                        <div class="pvr-wrapper">
                            <div class="pvr-box">
                                <h5 class="pvr-header">
                                    Final Score

                                </h5>
                                <form id="7" action="score.php" method="post">Your Total Score is
                                    <?php echo $row['score'];?>


                                    <input type="hidden" id="a7" name="w" value="<?php echo $row['score'];?>">
                                    <input type="submit" class="btn btn-purple" form="7" value="Submit Final Score" />



                                </form>
                            </div>
                        </div>
                    </div>
                </div> <?php  } ?>
            </div>
        </div>
           <footer class="footer">
            <div class="container">
                <nav>
                    <p class="copyright text-center">
                        © <span id="writeCopyrights"></span>
                        Made by<span class="fa fa-bolt"></span>-heads of<a href="http://www.upescsi.in/" target="_blank"> UPES-CSI</a>
                    </p>
                </nav>
            </div>
        </footer>
         <?php }
        else{ ?>
               <div class="row">
                        <div>
                            <div class="pvr-wrapper">
                                <div class="pvr-box">
                                    <h5 class="pvr-header">
                                       You Have Submitted Your Score. Thank You!!!!

                                    </h5>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
        <?php }
        ?>

    </div>
    <!--EndMain Panel-->

    <!-- begin scroll to top btn -->
    <a href="javascript:void(0)" class="btn btn-icon btn-circle btn-scroll-to-top btn-sm animated invisible text-light" data-color="purple" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
    <!-- end scroll to top btn -->
</body>
<!--End Body-->
<!--   Core JS Files   -->
<script src="assets/plugins/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.js" type="text/javascript"></script>
<script src="assets/plugins/pace/pace.min.js"></script>
<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
<script src="assets/plugins/waitMe/waitMe.min.js"></script>
<script src="assets/js/pvr_lite_app.js" id="appjs"></script>





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


</html>
<!--End Loading-->
