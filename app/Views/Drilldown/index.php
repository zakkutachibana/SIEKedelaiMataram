<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SIE Kedelai Kota Mataram - Kelompok V</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url() ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url() ?>/css/sb-admin-2.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Include Highcharts library -->

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script src="https://code.highcharts.com/modules/drilldown.js"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-seedling"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Kelompok V</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Tabel Data Kecamatan -->
            <li class="nav-item">
                <a class="nav-link" href="/">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data Kecamatan</span></a>
            </li>

            <!-- Nav Item - Analisis What-if -->
            <li class="nav-item">
                <a class="nav-link" href="analisis">
                    <i class="fas fa-fw fa-lightbulb"></i>
                    <span>Analisis What-if</span></a>
            </li>


            <!-- Nav Item - Drilldown -->
            <li class="nav-item active">
                <a class="nav-link" href="drilldown">
                    <i class="fas fa-fw fa-chart-bar"></i>
                    <span>Drilldown</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mt-4 mb-0 text-gray-800">Drilldown Panen Kedelai di Kota Mataram
                        </h1>
                    </div>

                    <!-- Bar Chart -->
                    <div class="card shadow mb-4">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" id="land-area-tab" data-toggle="tab" href="#land-area">Luas Lahan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="productivity-tab" data-toggle="tab" href="#productivity">Produktivitas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="production-tab" data-toggle="tab" href="#production">Produksi</a>
                            </li>
                        </ul>
                        <!-- Tabs Content -->
                        <div class="tab-content mt-3">
                            <div class="tab-pane fade show active" id="land-area">
                                <!-- Load land-area.js initially -->
                                <script>
                                    document.getElementById('land-area-tab').addEventListener('click', function() {
                                        loadScript('land-area.js');
                                    });
                                </script>
                            </div>
                            <div class="tab-pane fade" id="productivity">
                                <!-- Load productivity.js when this tab is clicked -->
                                <script>
                                    document.getElementById('productivity-tab').addEventListener('click', function() {
                                        loadScript('productivity.js');
                                    });
                                </script>
                            </div>
                            <div class="tab-pane fade" id="production">
                                <!-- Load production.js when this tab is clicked -->
                                <script>
                                    document.getElementById('production-tab').addEventListener('click', function() {
                                        loadScript('production.js');
                                    });
                                </script>
                            </div>
                        </div>

                        <div id="container" style="border-radius: 10px; width: auto; padding: 20px;"></div>
                        <!-- Drilldown view -->
                        <script>
                            loadScript('land-area.js');

                            // Function to load JavaScript conditionally
                            function loadScript(scriptName) {
                                var script = document.createElement('script');
                                script.type = 'text/javascript';
                                script.src = '<?= base_url('js/') ?>' + scriptName;
                                document.head.appendChild(script);
                            }
                        </script>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>&copy; Kelompok 5 SIE - 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->


    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url() ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url() ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url() ?>/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url() ?>/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url() ?>/js/demo/chart-area-demo.js"></script>
    <script src="<?= base_url() ?>/js/demo/chart-pie-demo.js"></script>

</body>

</html>