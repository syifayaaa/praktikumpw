<?php
include_once 'atas.php';
include_once 'sidebar.php';
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Calculator BMI</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Calculator BMI</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <div class="card-header">
        <h3 class="card-title">Calculator BMI</h3>
    </div>
    <div class="card-body">
        <?php include_once 'data_bmi.php'; ?>  
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
  include_once 'bawah.php';
  ?>