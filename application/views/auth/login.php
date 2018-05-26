<!doctype html>
<html class="no-js" lang="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIMPEG</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="<?=base_url()?>assets/img/logo2.png">

  <link rel="stylesheet" href="<?=base_url()?>assets/css/normalize.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/themify-icons.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/flag-icon.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/cs-skin-elastic.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/scss/style.css">

  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body class="bg-dark">
  <div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
      <div class="login-content">
        <div class="login-logo">
          <a href="#">
            <img class="align-content" src="<?=base_url()?>assets/img/simpeg.svg" alt="">
          </a>
        </div>
        <div class="login-form">
          <form id="simpegLoginForm" name="simpegLoginForm" action="<?=site_url()?>auth/login" method="POST">
            <div class="form-group">
              <label>Nama Pengguna</label>
              <input id="username" name="username" type="text" class="form-control" placeholder="nama pengguna">
            </div>
            <div class="form-group">
              <label>Kata Kunci</label>
              <input id="password" name="password" type="password" class="form-control" placeholder="kata kunci">
            </div>
            <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Masuk</button>

          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="<?=base_url()?>assets/js/vendor/jquery-2.1.4.min.js"></script>
  <script src="<?=base_url()?>assets/js/popper.min.js"></script>
  <script src="<?=base_url()?>assets/js/plugins.js"></script>
  <script src="<?=base_url()?>assets/js/main.js"></script>

</body>
</html>
