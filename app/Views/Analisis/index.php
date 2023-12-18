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

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

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
            <li class="nav-item active">
                <a class="nav-link" href="analisis">
                    <i class="fas fa-fw fa-lightbulb"></i>
                    <span>Analisis What-if</span></a>
            </li>


            <!-- Nav Item - Drilldown -->
            <li class="nav-item">
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
                        <h1 class="h3 mt-4 mb-0 text-gray-800">Analisis What-If Panen Kedelai di Kota Mataram
                        </h1>

                    </div>

                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-success">Data Panen Kedelai</h6>
                                </div>
                                <div class="card-body">
                                    <div class="dropdown">
                                        <div class="form-group">
                                            <label for="year" class="font-weight-bold">Tahun Panen</label>
                                            <select class="form-control" id="year">
                                                <option value="" selected disabled>Pilih Tahun</option>
                                                <?php foreach ($data as $year) : ?>
                                                    <option><?= $year['year']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th scope="row col-3">Luas Lahan</th>
                                                <td class="col-1">:</td>
                                                <td class="col-8" id="land-area">... Ha</td>
                                            </tr>
                                            <tr>
                                                <th scope="row col-3">Produktivitas</th>
                                                <td class="col-1">:</td>
                                                <td class="col-8" id="productivity">... Kw/Ha</td>
                                            </tr>
                                            <tr>
                                                <th scope="row col-3">Produksi</th>
                                                <td class="col-1">:</td>
                                                <td class="col-8" id="production">... Kw</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-success">Data Analisis What-If</h6>
                                </div>
                                <div class="card-body">
                                    <div class="dropdown">
                                        <div class="form-group">
                                            <label for="variable" class="font-weight-bold">Variabel</label>
                                            <select class="form-control" id="variable">
                                                <option value="" selected disabled>Pilih Variabel</option>
                                                <option value="1">Luas Lahan (Ha)</option>
                                                <option value="2">Produktivitas (Kw/Ha)</option>
                                                <option value="3">Produksi (Kw)</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="value" class="font-weight-bold">Nilai</label>
                                            <input type="number" class="form-control" id="value" placeholder="Masukkan Nilai">
                                        </div>

                                        <button type="button" class="btn btn-success btn-lg btn-block" id="analyze">Analisis What-If</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card shadow mb-4 d-none" id="result">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-success">Hasil Analisis What-If</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="card shadow mb-4">
                                                <div class="card-header py-3">
                                                    <h6 class="m-0 font-weight-bold text-success" id="title-1">Title 1</h6>
                                                </div>
                                                <div class="card-body">
                                                <table class="table">
                                        <tbody>
                                            <tr>
                                                <th scope="row col-3">Luas Lahan</th>
                                                <td class="col-1">:</td>
                                                <td class="col-8" id="land-area-result-1">... Ha</td>
                                            </tr>
                                            <tr>
                                                <th scope="row col-3">Produktivitas</th>
                                                <td class="col-1">:</td>
                                                <td class="col-8" id="productivity-result-1">... Kw/Ha</td>
                                            </tr>
                                            <tr>
                                                <th scope="row col-3">Produksi</th>
                                                <td class="col-1">:</td>
                                                <td class="col-8" id="production-result-1">... Kw</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="card shadow mb-4">
                                                <div class="card-header py-3">
                                                    <h6 class="m-0 font-weight-bold text-success" id="title-2">Title 2</h6>
                                                </div>
                                                <div class="card-body">
                                                <table class="table">
                                        <tbody>
                                            <tr>
                                                <th scope="row col-3">Luas Lahan</th>
                                                <td class="col-1">:</td>
                                                <td class="col-8" id="land-area-result-2">... Ha</td>
                                            </tr>
                                            <tr>
                                                <th scope="row col-3">Produktivitas</th>
                                                <td class="col-1">:</td>
                                                <td class="col-8" id="productivity-result-2">... Kw/Ha</td>
                                            </tr>
                                            <tr>
                                                <th scope="row col-3">Produksi</th>
                                                <td class="col-1">:</td>
                                                <td class="col-8" id="production-result-2">... Kw</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>

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

<script>
    $(document).ready(function() {
        $('#year').change(function(e) {
            e.preventDefault();
            getDataByYear($('#year').val());
        });

        $('#analyze').click(function(e) {
            e.preventDefault();
            let variable = $('#variable').val()
            let year = $('#year').val()
            let variableValue = $('#value').val().replace(/[,]/g, '-').replace(/[.]/g, '');

            calculateAnalysis(variable, variableValue, year);
        });
    });

    function getDataByYear(year) {
        $.ajax({
            url: "<?= base_url('analisis/data'); ?>/" + year,
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                $('#land-area').html(data.land_area + ' Ha');
                $('#productivity').html(data.productivity + ' kw/Ha');
                $('#production').html(data.production + ' Kw');
            }
        });
    }

    function calculateAnalysis(variable, variableValue, year) {
        hideResult();

        $.ajax({
            type: "GET",
            url: "<?= base_url('analisis/hasil'); ?>/" + variable + "/" + variableValue + "/" + year,
            dataType: "JSON",
            success: function(response) {
                $('#result').removeClass('d-none');
                $('#title-1').html(response[0].title);
                $('#title-2').html(response[1].title);

                $('#production-result-1').html(response[0].production + ' Kw');
                $('#land-area-result-1').html(response[0].land_area + ' Ha');
                $('#productivity-result-1').html(response[0].productivity + ' Kw/Ha');

                $('#production-result-2').html(response[1].production + ' Kw');
                $('#land-area-result-2').html(response[1].land_area + ' Ha');
                $('#productivity-result-2').html(response[1].productivity + ' Kw/Ha');

                showResult();

            }
        });
    }

    function hideResult() {
        $('#result').addClass('d-none');
    }

    function showResult() {
        $('#result').removeClass('d-none');
    }
</script>

</html>