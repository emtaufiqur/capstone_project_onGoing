<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIP3</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="assets/plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body style="background: linear-gradient(90deg, #fec163 0%, #de4313 100%);">
  <div class="container">
    <div class="login-box">

      <center>

        <h3><b>Sistem Informasi PUM, PJUM & P2D</b></h3>
        <br />
        <?php
        if (isset($_GET['alert'])) {
          if ($_GET['alert'] == "gagal") {
            echo "<div class='alert alert-danger'>LOGIN GAGAL! USERNAME DAN PASSWORD SALAH!</div>";
          } else if ($_GET['alert'] == "logout") {
            echo "<div class='alert alert-success'>ANDA TELAH BERHASIL LOGOUT</div>";
          } else if ($_GET['alert'] == "belum_login") {
            echo "<div class='alert alert-warning'>ANDA HARUS LOGIN UNTUK MENGAKSES DASHBOARD</div>";
          }
        }
        ?>
      </center>

      <div class="login-box-body">

      <div class="text-center"> <img src="/keuangan/gambar/sistem//logoRbw.png" style="max-width:50%;">
        <h5><Strong>PT Regista Bunga Wijaya Cabang Surabaya</Strong></h5>
          <br>
          </span></p>
          <span style="color: green;">
            <center>
              <h5>Masukkan User & Password Anda</h5>
            </center>
          </span></p>

          <form action="periksa_login.php" method="POST">
            <div class="form-group has-feedback">
              <input type="text" class="form-control" placeholder="Username" name="username" required="required" autocomplete="off">
              <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="password" class="form-control" placeholder="Password" name="password" required="required" autocomplete="off">
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <input type="submit" name="submit" class="btn btn-primary btn-user btn-block" value="Login">
            </div>
          </form>

        </div>
      </div>
    </div>

    <span style="color: white;">
      <center>
        <h5>Developed by VITech Group</h5>
      </center>
    </span></p>

    <script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>

</html>