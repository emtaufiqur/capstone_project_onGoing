<?php include 'header.php'; ?>

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Dashboard
      <!-- <small>PUM, PJUM, P2D</small> -->
    </h1>
    <!-- <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol> -->
  </section>


  <section class="content">

    <div class="row">

      <div class="col-lg-3 col-xs-6">
        <div class="small-box " style="background: linear-gradient(to left, #11998e, #38ef7d);">
          <div class="inner">
            <?php 
            $tanggal = date('Y-m-d');
            $pemasukan = mysqli_query($koneksi,"SELECT sum(transaksi_nominal) as total_pemasukan FROM transaksi_pjum WHERE transaksi_tanggal='$tanggal'");
            $p = mysqli_fetch_assoc($pemasukan);
            ?>
            <h4 style="font-weight: bolder"><?php echo "Rp. ".number_format($p['total_pemasukan'])." ,-" ?></h4>
            <p><b>PUM</b> Hari Ini</p>
          </div>

          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <div class="small-box" style="background: linear-gradient(to left, #11998e, #38ef7d);" >
          <div class="inner">
            <?php 
            $bulan = date('m');
            $pemasukan = mysqli_query($koneksi,"SELECT sum(transaksi_nominal) as total_pemasukan FROM transaksi_pjum WHERE month(transaksi_tanggal)='$bulan'");
            $p = mysqli_fetch_assoc($pemasukan);
            ?>
            <h4 style="font-weight: bolder"><?php echo "Rp. ".number_format($p['total_pemasukan'])." ,-" ?></h4>
            <p><b>PUM</b> Bulan Ini</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <div class="small-box" style="background: linear-gradient(to left, #11998e, #38ef7d);">
          <div class="inner">
            <?php 
            $tahun = date('Y');
            $pemasukan = mysqli_query($koneksi,"SELECT sum(transaksi_nominal) as total_pemasukan FROM transaksi_pjum WHERE year(transaksi_tanggal)='$tahun'");
            $p = mysqli_fetch_assoc($pemasukan);
            ?>
            <h4 style="font-weight: bolder"><?php echo "Rp. ".number_format($p['total_pemasukan'])." ,-" ?></h4>
            <p><b>PUM</b> Tahun Ini</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <div class="small-box" style="background: linear-gradient(to left, #11998e, #38ef7d);">
          <div class="inner">
            <?php 
            $pemasukan = mysqli_query($koneksi,"SELECT sum(transaksi_nominal) as total_pemasukan FROM transaksi_pjum ");
            $p = mysqli_fetch_assoc($pemasukan);
            ?>
            <h4 style="font-weight: bolder"><?php echo "Rp. ".number_format($p['total_pemasukan'])." ,-" ?></h4>
            <p>Seluruh <b>PUM</b></p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
        </div>
      </div>

      

      <div class="col-lg-3 col-xs-6">
        <div class="small-box" style=" background: linear-gradient(to right, #fdc830, #f37335); ">
          <div class="inner">
            <?php 
            $tanggal = date('Y-m-d');
            $pengeluaran = mysqli_query($koneksi,"SELECT sum(nominal_pjum) as total_pengeluaran FROM transaksi_pjum WHERE transaksi_tanggal='$tanggal'");
            $p = mysqli_fetch_assoc($pengeluaran);
            ?>
            
            <h4 style="font-weight: bolder"><?php echo "Rp. ".number_format($p['total_pengeluaran'])." ,-" ?></h4>
            <p><b>PJUM</b> Hari Ini</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <div class="small-box" style=" background: linear-gradient(to right, #fdc830, #f37335);">
          <div class="inner">
            <?php 
            $bulan = date('m');
            $pengeluaran = mysqli_query($koneksi,"SELECT sum(transaksi_nominal) as total_pengeluaran FROM transaksi_pjum WHERE month(transaksi_tanggal)='$bulan'");
            $p = mysqli_fetch_assoc($pengeluaran);
            ?>
            
            <h4 style="font-weight: bolder"><?php echo "Rp. ".number_format($p['total_pengeluaran'])." ,-" ?></h4>
            <p><b>PJUM</b> Bulan Ini</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <div class="small-box" style=" background: linear-gradient(to right, #fdc830, #f37335);">
          <div class="inner">
            <?php 
            $tahun = date('Y');
            $pengeluaran = mysqli_query($koneksi,"SELECT sum(nominal_pjum) as total_pengeluaran FROM transaksi_pjum WHERE year(transaksi_tanggal)='$tahun'");
            $p = mysqli_fetch_assoc($pengeluaran);
            ?>
            
            <h4 style="font-weight: bolder"><?php echo "Rp. ".number_format($p['total_pengeluaran'])." ,-" ?></h4>
            <p><b>PJUM</b> Tahun Ini</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <div class="small-box" style=" background: linear-gradient(to right, #fdc830, #f37335);">
          <div class="inner">
            <?php 
            $pengeluaran = mysqli_query($koneksi,"SELECT sum(nominal_pjum) as total_pengeluaran FROM transaksi_pjum");
            $p = mysqli_fetch_assoc($pengeluaran);
            ?>
            <h4 style="font-weight: bolder"><?php echo "Rp. ".number_format($p['total_pengeluaran'])." ,-" ?></h4>
            <p>Seluruh <b>PJUM</b></p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
        </div>
      </div>

    </div>


    <!-- /.row -->
    <!-- Main row -->
    <div class="row">

      <!-- Left col -->
      <section class="col-lg-8">

        <div class="nav-tabs-custom">

          <ul class="nav nav-tabs pull-right">
            <!-- <li><a href="#tab2" data-toggle="tab">Pemasukan</a></li> -->
            <li class="active"><a href="#tab1" data-toggle="tab">PUM, PJUM & P2D</a></li>
            <li class="pull-left header">SIP3 => PUM, PJUM & P2D</li>
          </ul>

          <div class="tab-content" style="padding: 20px">

            <div class="chart tab-pane active" id="tab1">

              
              <!-- <h4 class="text-center">Grafik Data PUM vs PJUM Per <b>Bulan</b></h4>
              <canvas id="grafik1" style="position: relative; height: 200px;"></canvas> -->

              <br/>
              <br/>
              <br/>

              <!-- <h4 class="text-center">Grafik Data PUM & PJUM Per <b>Tahun</b></h4>
              <canvas id="grafik2" style="position: relative; height: 200px;"></canvas> -->

            </div>
            <div class="chart tab-pane" id="tab2" style="position: relative; height: 300px;">
              
            </div>
          </div>

        </div>

      </section>
      <!-- /.Left col -->


      <section class="col-lg-4">


        <!-- Calendar -->
        <div class="box box-solid">
          <div class="box-header">
            <i class="fa fa-calendar"></i>
            <h3 class="box-title">Kalender</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body no-padding">
            <!--The calendar -->
            <div id="calendar" style="width: 100%"></div>
          </div>
          <!-- /.box-body -->
        </div>
        

      </section>
      <!-- right col -->
    </div>
    <!-- /.row (main row) -->










  </section>

</div>

















<?php include 'footer.php'; ?>