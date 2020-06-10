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
    $bc1 = 30;
    $bc2 = 20;
    $bc3 = 20;
    $bc4 = 20;
    $bc5 = 10;
    // Kriteria A1
    $c1a1 = 2;
    $c2a1 = 7000000;
    $c3a1 = 2012;
    $c4a1 = 7;
    $c5a1 = 3;
    // Kriteria A2
    $c1a2 = 4;
    $c2a2 = 10000000;
    $c3a2 = 2015;
    $c4a2 = 2;
    $c5a2 = 3;
    // Kriteria A3
    $c1a3 = 3;
    $c2a3 = 8500000;
    $c3a3 = 2010;
    $c4a3 = 4;
    $c5a3 = 4;
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
                        <li class="active has-sub">
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
                                    <h2 class="title-1">Tabel Nilai Alternatif</h2><br><br>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Bobot %</th>
                                                <th>Nama Kriteria</th>
                                                <th>A1</th>
                                                <th>A2</th>
                                                <th>A3</th>
                                                <th>Jenis Atribut</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr style="text-align: center;">
                                                <td><?php echo $bc1?></td>
                                                <td>C1</td>
                                                <td><?php echo $c1a1?></td>
                                                <td><?php echo $c1a2?></td>
                                                <td><?php echo $c1a3?></td>
                                                <td>Benefit</td>
                                            </tr>
                                            <tr style="text-align: center;">
                                                <td><?php echo $bc2?></td>
                                                <td>C2</td>
                                                <td>Rp <?php echo $c2a1?></td>
                                                <td>Rp <?php echo $c2a2?></td>
                                                <td>Rp <?php echo $c2a3?></td>
                                                <td>Cost</td>
                                            </tr>
                                            <tr style="text-align: center;">
                                                <td><?php echo $bc3?></td>
                                                <td>C3</td>
                                                <td><?php echo $c3a1?></td>
                                                <td><?php echo $c3a2?></td>
                                                <td><?php echo $c3a3?></td>
                                                <td>Benefit</td>
                                            </tr>
                                            <tr style="text-align: center;">
                                                <td><?php echo $bc4?></td>
                                                <td>C4</td>
                                                <td><?php echo $c4a1?></td>
                                                <td><?php echo $c4a2?></td>
                                                <td><?php echo $c4a3?></td>
                                                <td>Cost</td>
                                            </tr>
                                            <tr style="text-align: center;">
                                                <td><?php echo $bc5?></td>
                                                <td>C5</td>
                                                <td><?php echo $c5a1?></td>
                                                <td><?php echo $c5a2?></td>
                                                <td><?php echo $c5a3?></td>
                                                <td>Benefit</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="au-card au-card-top-countries m-b-10">
                                    <div class="au-card-inner">
                                        <div class="table-responsive">
                                            <table class="table table-top-countries">
                                                <tbody>
                                                    <tr>
                                                        <td style="font-size: small; color: black;">KRITERIA</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: small; color: black;">C1 = Fasilitas
                                                            Pendukung</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: small; color: black;">C2 = Harga Bangunan
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: small; color: black;">C3 = Tahun
                                                            Konstruksi Bangunan</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: small; color: black;">C4 = Jarak Tempat
                                                            Kerja</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: small; color: black;">C5 = Sistem keamanan
                                                            Apartemen</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="overview-wrap">
                                <h2 class="title-1">Weighted Product</h2><br><br>
                            </div>
                        </div>
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr style="text-align: center;">
                                                <th></th>
                                                <th>Apartemen 1</th>
                                                <th>Apartemen 2</th>
                                                <th>Apartemen 3</th>
                                                <th>Bobot (%)</th>
                                                <th>Jenis atribut</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr style="text-align: center;">
                                                <td>C1</td>
                                                <td>2</td>
                                                <td>4</td>
                                                <td>3</td>
                                                <td>30</td>
                                                <td>Benefit</td>
                                            </tr>
                                            <tr style="text-align: center;">
                                                <td>C2</td>
                                                <td>7.000.000</td>
                                                <td>10.000.000</td>
                                                <td>8.500.000</td>
                                                <td>20</td>
                                                <td>Cost</td>
                                            </tr>
                                            <tr style="text-align: center;">
                                                <td>C3</td>
                                                <td>2012</td>
                                                <td>2015</td>
                                                <td>2010</td>
                                                <td>20</td>
                                                <td>Benefit</td>
                                            </tr>
                                            <tr style="text-align: center;">
                                                <td>C4</td>
                                                <td>7</td>
                                                <td>2</td>
                                                <td>4</td>
                                                <td>20</td>
                                                <td>Cost</td>
                                            </tr>
                                            <tr style="text-align: center;">
                                                <td>C5</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>4</td>
                                                <td>10</td>
                                                <td>Benefit</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="overview-wrap">
                                <h2 class="title-1">Normalisasi</h2><br><br>
                            </div>
                        </div>
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr style="text-align: center;">
                                                <th></th>
                                                <th>Bobot</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr style="text-align: center;">
                                                <td>C1</td>
                                                <td>0.3</td>
                                            </tr>
                                            <tr style="text-align: center;">
                                                <td>C2</td>
                                                <td>0.2</td>
                                            </tr>
                                            <tr style="text-align: center;">
                                                <td>C3</td>
                                                <td>0.2</td>
                                            </tr>
                                            <tr style="text-align: center;">
                                                <td>C4</td>
                                                <td>0.2</td>
                                            </tr>
                                            <tr style="text-align: center;">
                                                <td>C5</td>
                                                <td>0.1</td>
                                            </tr>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>

                            <!-- END MAIN CONTENT-->
                            <!-- END PAGE CONTAINER-->
                        </div>
                        <div class="col-md-12">
                            <div class="overview-wrap">
                                <h2 class="title-1">Menghitung Nilai alternatif</h2><br><br>
                            </div>
                        </div>
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr style="text-align: center;">
                                                <th>S1</th>
                                                <th>S2</th>
                                                <th>S3</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr style="text-align: center;">
                                                <td>217.16</td>
                                                <td>223.56</td>
                                                <td>234.57</td>
                                            </tr>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>

                            <!-- END MAIN CONTENT-->
                            <!-- END PAGE CONTAINER-->
                        </div>
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr style="text-align: center;">
                                                <th>V1</th>
                                                <th>V2</th>
                                                <th>V3</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr style="text-align: center;">
                                                <td>0.32</td>
                                                <td>0.33</td>
                                                <td>0.35</td>
                                            </tr>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>

                            <!-- END MAIN CONTENT-->
                            <!-- END PAGE CONTAINER-->
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