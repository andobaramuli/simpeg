<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIMPEG</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="images/logo2.png">

  <link rel="stylesheet" href="assets/css/normalize.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/themify-icons.css">
  <link rel="stylesheet" href="assets/css/flag-icon.min.css">
  <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
  <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
  <link rel="stylesheet" href="assets/scss/style.css">

  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

  <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body class="bg-dark">

  <div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
      <div class="login-content">
        <div class="login-logo">
          <a href="pages/dashboard.php">
            <img class="align-content" src="images/simpeg.svg" alt="">
          </a>
        </div>
        <div class="login-form">
          <form id="simpegLoginForm" name="simpegLoginForm" action="process/AuthProcess.php" method="POST">
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

  <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>

</body>
</html>
