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
 <?php
        // Bobot Kriteria
        $bc1 = 30;
        $bc2 = 25;
        $bc3 = 20;
        $bc4 = 25;
        // Kriteria A1
        $a1c1 = 3;
        $a2c1 = 4;
        $a3c1 = 5;
        // Kriteria A2
        $a1c2 = 5;
        $a2c2 = 3;
        $a3c2 = 4;
        // Kriteria A3
        $a1c3 = 3;
        $a2c3 = 2;
        $a3c3 = 5;
        // Kriteria A1
        $a1c4 = 1;
        $a2c4 = 3;
        $a3c4 = 1;
        ?>

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
                        <li class="active has-sub">
                            <a class="js-arrow" href="topsis.php">
                                <i class="fas fa-tachometer-alt"></i>Topsis</a>
                        </li>
                        <li class="has-sub">
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
                                    <h2 class="title-1">Skor Ternormalisasi</h2><br><br>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr style="text-align: center;">
                                                <th></th>
                                                <th>A1</th>
                                                <th>A2</th>
                                                <th>A3</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr style="text-align: center;">
                                                <th>C1</th>
                                                <th><?php echo $a1c1?></th>
                                                <th><?php echo $a2c1?></th>
                                                <th><?php echo $a3c1?></th>
                                            </tr>
                                            <tr style="text-align: center;">
                                                <th>C2</th>
                                                <th><?php echo $a1c2?></th>
                                                <th><?php echo $a2c2?></th>
                                                <th><?php echo $a3c2?></th>
                                            </tr>
                                            <tr style="text-align: center;">
                                                <th>C3</th>
                                                <th><?php echo $a1c3?></th>
                                                <th><?php echo $a2c3?></th>
                                                <th><?php echo $a3c3?></th>
                                            </tr>
                                            <tr style="text-align: center;">
                                                <th>C4</th>
                                                <th><?php echo $a1c4?></th>
                                                <th><?php echo $a2c4?></th>
                                                <th><?php echo $a3c4?></th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
<?php
    // Mengitung skor ternormalisasi
    // C1
    $r11 = $a1c1/sqrt(pow($a1c1,2)+pow($a2c1,2)+pow($a3c1,2));
    $r21 = $a2c1/sqrt(pow($a1c1,2)+pow($a2c1,2)+pow($a3c1,2));
    $r31 = $a3c1/sqrt(pow($a1c1,2)+pow($a2c1,2)+pow($a3c1,2));
    // C2
    $r12 = $a1c2/sqrt(pow($a1c2,2)+pow($a2c2,2)+pow($a3c2,2));
    $r22 = $a2c2/sqrt(pow($a1c2,2)+pow($a2c2,2)+pow($a3c2,2));
    $r32 = $a3c2/sqrt(pow($a1c2,2)+pow($a2c2,2)+pow($a3c2,2));
    // C3
    $r13 = $a1c3/sqrt(pow($a1c3,2)+pow($a2c3,2)+pow($a3c3,2));
    $r23 = $a2c3/sqrt(pow($a1c3,2)+pow($a2c3,2)+pow($a3c3,2));
    $r33 = $a3c3/sqrt(pow($a1c3,2)+pow($a2c3,2)+pow($a3c3,2));
    // C4
    $r14 = $a1c4/sqrt(pow($a1c4,2)+pow($a2c4,2)+pow($a3c4,2));
    $r24 = $a2c4/sqrt(pow($a1c4,2)+pow($a2c4,2)+pow($a3c4,2));
    $r34 = $a3c4/sqrt(pow($a1c4,2)+pow($a2c4,2)+pow($a3c4,2));
    ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr style="text-align: center;">
                                                <th></th>
                                                <th>A1</th>
                                                <th>A2</th>
                                                <th>A3</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr style="text-align: center;">
                                                <th>C1</th>
                                                <th><?php echo $r11?></th>
                                                <th><?php echo $r21?></th>
                                                <th><?php echo $r31?></th>
                                            </tr>
                                            <tr style="text-align: center;">
                                                <th>C2</th>
                                                <th><?php echo $r12?></th>
                                                <th><?php echo $r22?></th>
                                                <th><?php echo $r32?></th>
                                            </tr>
                                            <tr style="text-align: center;">
                                                <th>C3</th>
                                                <th><?php echo $r13?></th>
                                                <th><?php echo $r23?></th>
                                                <th><?php echo $r33?></th>
                                            </tr>
                                            <tr style="text-align: center;">
                                                <th>C4</th>
                                                <th><?php echo $r14?></th>
                                                <th><?php echo $r24?></th>
                                                <th><?php echo $r34?></th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
<div>
<?php
    // Mengitung skor ternormalisasi terbobot
    // C1
    $y11 = $r11*$bc1;
    $y21 = $r21*$bc1;
    $y31 = $r31*$bc1;
    // C2
    $y12 = $r12*$bc2;
    $y22 = $r22*$bc2;
    $y32 = $r32*$bc2;
    // C3
    $y13 = $r13*$bc3;
    $y23 = $r23*$bc3;
    $y33 = $r33*$bc3;
    // C4
    $y14 = $r14*$bc4;
    $y24 = $r24*$bc4;
    $y34 = $r34*$bc4;
    ?>                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Skor Normalisasi Terbobot</h2><br><br>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr style="text-align: center;">
                                                <th></th>
                                                <th>A1</th>
                                                <th>A2</th>
                                                <th>A3</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr style="text-align: center;">
                                                <th>C1</th>
                                                <th><?php echo $y11?></th>
                                                <th><?php echo $y21?></th>
                                                <th><?php echo $y31?></th>
                                            </tr>
                                            <tr style="text-align: center;">
                                                <th>C2</th>
                                                <th><?php echo $y12?></th>
                                                <th><?php echo $y22?></th>
                                                <th><?php echo $y32?></th>
                                            </tr>
                                            <tr style="text-align: center;">
                                                <th>C3</th>
                                                <th><?php echo $y13?></th>
                                                <th><?php echo $y23?></th>
                                                <th><?php echo $y33?></th>
                                            </tr>
                                            <tr style="text-align: center;">
                                                <th>C4</th>
                                                <th><?php echo $y14?></th>
                                                <th><?php echo $y24?></th>
                                                <th><?php echo $y34?></th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
 <div>                       
  <?php
    // Mengitung solusi ideal positif
    // C1
    $ap1 = max($y11,$y21,$y31);
    // C2
    $ap2 = max($y12,$y22,$y32);
    // C3
    $ap3 = max($y13,$y23,$y33);
    // C4
    $ap4 = min($y14,$y24,$y34);
    ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Solusi Ideal Positif</h2><br><br>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr style="text-align: center;">
                                                <th></th>
                                                <th>C1</th>
                                                <th>C2</th>
                                                <th>C3</th>
                                                <th>C4</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr style="text-align: center;">
                                                <th>A+</th>
                                                <th><?php echo $ap1?></th>
                                                <th><?php echo $ap2?></th>
                                                <th><?php echo $ap3?></th>
                                                <th><?php echo $ap4?></th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
 <div>                       
   <?php
    // Mengitung solusi ideal negatif
    // C1
    $an1 = min($y11,$y21,$y31);
    // C2
    $an2 = min($y12,$y22,$y32);
    // C3
    $an3 = min($y13,$y23,$y33);
    // C4
    $an4 = max($y14,$y24,$y34);
    ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Solusi Ideal Negatif</h2><br><br>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr style="text-align: center;">
                                                <th></th>
                                                <th>C1</th>
                                                <th>C2</th>
                                                <th>C3</th>
                                                <th>C4</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr style="text-align: center;">
                                                <th>A-</th>
                                                <th><?php echo $an1?></th>
                                                <th><?php echo $an2?></th>
                                                <th><?php echo $an3?></th>
                                                <th><?php echo $an4?></th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
<div>                       
   <?php
    // Mengitung jarak solusi ideal positif
    // C1
    $dp1 = sqrt(pow(($ap1-$y11),2)+pow(($ap2-$y12),2)+pow(($ap3-$y13),2)+pow(($ap4-$y14),2));
    // C2
    $dp2 = sqrt(pow(($ap1-$y21),2)+pow(($ap2-$y22),2)+pow(($ap3-$y23),2)+pow(($ap4-$y24),2));
    // C3
    $dp3 = sqrt(pow(($ap1-$y31),2)+pow(($ap2-$y32),2)+pow(($ap3-$y33),2)+pow(($ap4-$y34),2));
    ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Jarak Solusi Ideal Positif</h2><br><br>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr style="text-align: center;">
                                                <th></th>
                                                <th>D1+</th>
                                                <th>D2+</th>
                                                <th>D3+</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr style="text-align: center;">
                                                <th>Hasil</th>
                                                <th><?php echo $dp1?></th>
                                                <th><?php echo $dp2?></th>
                                                <th><?php echo $dp3?></th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
<div>                       
   <?php
    // Mengitung jarak solusi ideal negatif
    // C1
    $dn1 = sqrt(pow(($y11-$an1),2)+pow(($y12-$an2),2)+pow(($y13-$an3),2)+pow(($y14-$an4),2));
    // C2
    $dn2 = sqrt(pow(($y21-$an1),2)+pow(($y22-$an2),2)+pow(($y23-$an3),2)+pow(($y24-$an4),2));
    // C3
    $dn3 = sqrt(pow(($y31-$an1),2)+pow(($y32-$an2),2)+pow(($y33-$an3),2)+pow(($y34-$an4),2));
    ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Jarak Solusi Ideal Negatif</h2><br><br>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr style="text-align: center;">
                                                <th></th>
                                                <th>D1-</th>
                                                <th>D2-</th>
                                                <th>D3-</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr style="text-align: center;">
                                                <th>Hasil</th>
                                                <th><?php echo $dn1?></th>
                                                <th><?php echo $dn2?></th>
                                                <th><?php echo $dn3?></th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
<div>
    <?php
    // Mengitung skor akhir setiap alternatif
    // C1
    $v1 = $dn1/($dn1+$dp1);
    // C2
    $v2 = $dn2/($dn2+$dp2);
    // C3
    $v3 = $dn3/($dn3+$dp3);
    ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Skor Akhir Alternatif</h2><br><br>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr style="text-align: center;">
                                                <th></th>
                                                <th>V1</th>
                                                <th>V2</th>
                                                <th>V3</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr style="text-align: center;">
                                                <th>Hasil</th>
                                                <th><?php echo $v1?></th>
                                                <th><?php echo $v2?></th>
                                                <th><?php echo $v3?></th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> 
 <?php
        if ($v1 > $v2 && $v1 > $v3) {
            echo ("<h4><b>Pilihan yang terpilih adalah Alternatif 1 yaitu Sepatu 1</b></h4>");
        }elseif ($v2 > $v3 && $v2 > $v1) {
            echo ("<h4><b>Pilihan yang terpilih adalah Alternatif 2 yaitu Sepatu 2</b></h4>");
        } else {
            echo ("<h4><b>Pilihan yang terpilih adalah Alternatif 3</b></h4>");
        }

        ?>                                                      
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