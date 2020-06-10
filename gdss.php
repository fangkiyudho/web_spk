<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Sistem Pendukung Keputusan</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>
 
<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <h2 style="font-family: 'Courier New', Courier, monospace;">S P K</h2>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>SAW</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="wp.php">
                                <i class="fas fa-tachometer-alt"></i>WP</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="ahp.php">
                                <i class="fas fa-tachometer-alt"></i>AHP</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="moora.php">
                                <i class="fas fa-tachometer-alt"></i>Moora</a>
                        </li>
                         <li class="has-sub">
                            <a class="js-arrow" href="electre.php">
                                <i class="fas fa-tachometer-alt"></i>Electre</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="topsis.php">
                                <i class="fas fa-tachometer-alt"></i>Topsis</a>
                        </li>
                        <li class="active has-sub">
                            <a class="js-arrow" href="gdss.php">
                                <i class="fas fa-tachometer-alt"></i>GDSS</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Penyelesaian dengan moora</h2><br><br>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr style="text-align: center;">
                                                <th>Juri 1</th>
                                                <th>Nilai Yi</th>
                                                <th>Ranking</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr style="text-align: center;">
                                                <th>A1</th>
                                                <th><?php echo $a1j1 = 0.228?></th>
                                                <th>2</th>
                                            </tr>
                                            <tr style="text-align: center;">
                                                <th>A2</th>
                                                <th><?php echo $a2j1 = 0.212?></th>
                                                <th>4</th>
                                            </tr>
                                            <tr style="text-align: center;">
                                                <th>A3</th>
                                                <th><?php echo $a3j1 = 0.216?></th>
                                                <th>3</th>
                                            </tr>
                                            <tr style="text-align: center;">
                                                <th>A4</th>
                                                <th><?php echo $a4j1 = 0.184?></th>
                                                <th>5</th>
                                            </tr>
                                            <tr style="text-align: center;">
                                                <th>A5</th>
                                                <th><?php echo $a5j1 = 0.249?></th>
                                                <th>1</th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr style="text-align: center;">
                                                <th>Juri 2</th>
                                                <th>Nilai Yi</th>
                                                <th>Ranking</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr style="text-align: center;">
                                                <th>A1</th>
                                                <th><?php echo $a1j2 = 0.220?></th>
                                                <th>3</th>
                                            </tr>
                                            <tr style="text-align: center;">
                                                <th>A2</th>
                                                <th><?php echo $a2j2 = 0.252?></th>
                                                <th>1</th>
                                            </tr>
                                            <tr style="text-align: center;">
                                                <th>A3</th>
                                                <th><?php echo $a3j2 = 0.195?></th>
                                                <th>5</th>
                                            </tr>
                                            <tr style="text-align: center;">
                                                <th>A4</th>
                                                <th><?php echo $a4j2 = 0.221?></th>
                                                <th>2</th>
                                            </tr>
                                            <tr style="text-align: center;">
                                                <th>A5</th>
                                                <th><?php echo $a5j2 = 0.206?></th>
                                                <th>4</th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr style="text-align: center;">
                                                <th>Juri 3</th>
                                                <th>Nilai Yi</th>
                                                <th>Ranking</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr style="text-align: center;">
                                                <th>A1</th>
                                                <th><?php echo $a1j3 = 0.230?></th>
                                                <th>2</th>
                                            </tr>
                                            <tr style="text-align: center;">
                                                <th>A2</th>
                                                <th><?php echo $a2j3 = 0.245?></th>
                                                <th>1</th>
                                            </tr>
                                            <tr style="text-align: center;">
                                                <th>A3</th>
                                                <th><?php echo $a3j3 = 0.209?></th>
                                                <th>3</th>
                                            </tr>
                                            <tr style="text-align: center;">
                                                <th>A4</th>
                                                <th><?php echo $a4j3 = 0.198?></th>
                                                <th>5</th>
                                            </tr>
                                            <tr style="text-align: center;">
                                                <th>A5</th>
                                                <th><?php echo $a5j3 = 0.205?></th>
                                                <th>4</th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

<div>
                       
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Bobot Borda</h2><br><br>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr style="text-align: center;">
                                                <th>Ranking 1</th>
                                                <th>Ranking 2</th>
                                                <th>Ranking 3</th>
                                                <th>Ranking 4</th>
                                                <th>Ranking 5</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr style="text-align: center;">
                                                <th><?php echo $bb1 = 5?></th>
                                                <th><?php echo $bb2 = 4?></th>
                                                <th><?php echo $bb3 = 3?></th>
                                                <th><?php echo $bb4 = 2?></th>
                                                <th><?php echo $bb5 = 1?></th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
 <div>                       

                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Menghitung Bord</h2><br><br>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr style="text-align: center;">
                                                <th>Ranking</th>
                                                <th>1</th>
                                                <th>2</th>
                                                <th>3</th>
                                                <th>4</th>
                                                <th>5</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr style="text-align: center;">
                                                <th>A1</th>
                                                <th><?php echo $a1rb1 = 0*$bb1?></th>
                                                <th><?php echo $a1rb2 = ($a1j1+$a1j3)*$bb2?></th>
                                                <th><?php echo $a1rb3 = $a1j2*$bb3?></th>
                                                <th><?php echo $a1rb4 = 0*$bb4?></th>
                                                <th><?php echo $a1rb5 = 0*$bb5?></th>
                                            </tr>
                                            <tr style="text-align: center;">
                                                <th>A2</th>
                                                <th><?php echo $a2rb1 = ($a2j2+$a2j3)*$bb1?></th>
                                                <th><?php echo $a2rb2 = 0*$bb2?></th>
                                                <th><?php echo $a2rb3 = 0*$bb3?></th>
                                                <th><?php echo $a2rb4 = $a2j1*$bb4?></th>
                                                <th><?php echo $a2rb5 = 0*$bb5?></th>
                                            </tr>
                                            <tr style="text-align: center;">
                                                <th>A3</th>
                                                <th><?php echo $a3rb1 = 0*$bb1?></th>
                                                <th><?php echo $a3rb2 = 0*$bb2?></th>
                                                <th><?php echo $a3rb3 = ($a3j1+$a3j3)*$bb3?></th>
                                                <th><?php echo $a3rb4 = 0*$bb4?></th>
                                                <th><?php echo $a3rb5 = $a3j2*$bb5?></th>
                                            </tr>
                                            <tr style="text-align: center;">
                                                <th>A4</th>
                                                <th><?php echo $a4rb1 = 0*$bb1?></th>
                                                <th><?php echo $a4rb2 = $a4j2*$bb2?></th>
                                                <th><?php echo $a4rb3 = 0*$bb3?></th>
                                                <th><?php echo $a4rb4 = 0*$bb4?></th>
                                                <th><?php echo $a4rb5 = ($a4j1+$a4j3)*$bb5?></th>
                                            </tr>
                                            <tr style="text-align: center;">
                                                <th>A5</th>
                                                <th><?php echo $a5rb1 = $a5j1*$bb1?></th>
                                                <th><?php echo $a5rb2 = 0*$bb2?></th>
                                                <th><?php echo $a5rb3 = 0*$bb3?></th>
                                                <th><?php echo $a5rb4 = ($a5j2+$a5j3)*$bb4?></th>
                                                <th><?php echo $a5rb5 = 0*$bb5?></th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
 <div>                       
<?php
        $pb1 = $a1rb1+$a2rb1+$a3rb1+$a4rb1+$a5rb1;
        $pb2 = $a1rb2+$a2rb2+$a3rb2+$a4rb2+$a5rb2;
        $pb3 = $a1rb3+$a2rb3+$a3rb3+$a4rb3+$a5rb3;
        $pb4 = $a1rb4+$a2rb4+$a3rb4+$a4rb4+$a5rb4;
        $pb5 = $a1rb5+$a2rb5+$a3rb5+$a4rb5+$a5rb5;
        $tpb = $pb1+$pb2+$pb3+$pb4+$pb5;
        ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr style="text-align: center;">
                                                <th>Poin Borda</th>
                                                <th>Nilai Borda</th>
                                                <th>Ranking</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr style="text-align: center;">
                                                <th><?php echo $pb1?></th>
                                                <th><?php echo number_format($pb1/$tpb,3,",",".")?></th>
                                                <th>2</th>
                                            </tr>
                                            <tr style="text-align: center;">
                                                <th><?php echo $pb2?></th>
                                                <th><?php echo number_format($pb2/$tpb,3,",",".")?></th>
                                                <th>1</th>
                                            </tr>
                                            <tr style="text-align: center;">
                                                <th><?php echo $pb3?></th>
                                                <th><?php echo number_format($pb3/$tpb,3,",",".")?></th>
                                                <th>4</th>
                                            </tr>
                                            <tr style="text-align: center;">
                                                <th><?php echo $pb4?></th>
                                                <th><?php echo number_format($pb4/$tpb,3,",",".")?></th>
                                                <th>5</th>
                                            </tr>
                                            <tr style="text-align: center;">
                                                <th><?php echo $pb5?></th>
                                                <th><?php echo number_format($pb5/$tpb,3,",",".")?></th>
                                                <th>3</th>
                                            </tr>
                                            <tr style="text-align: center;">
                                                <th><?php echo $tpb?></th>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                                 <h3><b>Pilihan yang terpilih adalah Apartemen 2</b>
                            </div>
                        </div>
                    </div>                                                      
            </div>
        </div>
    </div>

             



                    <!-- Jquery JS-->
                    <script src="vendor/jquery-3.2.1.min.js"></script>
                    <!-- Bootstrap JS-->
                    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
                    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
                    <!-- Vendor JS       -->
                    <script src="vendor/slick/slick.min.js">
                    </script>
                    <script src="vendor/wow/wow.min.js"></script>
                    <script src="vendor/animsition/animsition.min.js"></script>
                    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
                    </script>
                    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
                    <script src="vendor/counter-up/jquery.counterup.min.js">
                    </script>
                    <script src="vendor/circle-progress/circle-progress.min.js"></script>
                    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
                    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
                    <script src="vendor/select2/select2.min.js">
                    </script>

                    <!-- Main JS-->
                    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->