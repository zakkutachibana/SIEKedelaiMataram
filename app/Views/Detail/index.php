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
        <a class="nav-link" href="<?= base_url() ?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Data Kecamatan</span></a>
      </li>

      <!-- Nav Item - Analisis What-if -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url() ?>/analisis">
          <i class="fas fa-fw fa-lightbulb"></i>
          <span>Analisis What-if</span></a>
      </li>


      <!-- Nav Item - Drilldown -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url() ?>/drilldown">
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

            <!-- Tombol "Back" -->
            <h1 class="h3 mt-4 mb-4 text-gray-800"> <?= $title; ?> </h1>
            <a href="javascript:history.go(-1);" class="btn btn-secondary ml-2">Back</a>
          </div>
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">No.</th>
                <th scope="col">Tahun</th>
                <th scope="col">Luas Lahan (Ha)</th>
                <th scope="col">Produktivitas (kw/Ha)</th>
                <th scope="col">Produksi (Ton)</th>
              </tr>
            </thead>
            <tbody>
              <?php $i =1 ?>
              <?php foreach ($all_datas as $all_data): ?>
                <tr>
                  <td scope="col"><?= $i++; ?>.</td>
                  <td><?= $all_data['year']; ?></td>
                  <td scope="col"><?= $all_data['landAreaTotal']; ?></td>
                  <td scope="col"><?= $all_data['productivityTotal']; ?></td>
                  <td scope="col"><?= $all_data['productionTotal']; ?></td>
                <?php endforeach; ?>
                </tr>
            </tbody>
          </table>


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