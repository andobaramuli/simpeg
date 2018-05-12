<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIMPEG - Dashboard</title>
  <meta name="description" content="Sufee Admin - HTML5 Admin Template">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="apple-touch-icon" href="apple-icon.png">
  <link rel="shortcut icon" href="../images/logo2.png">

  <link rel="stylesheet" href="../assets/css/normalize.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="../assets/css/themify-icons.css">
  <link rel="stylesheet" href="../assets/css/flag-icon.min.css">
  <link rel="stylesheet" href="../assets/css/cs-skin-elastic.css">
  <!-- <link rel="stylesheet" href="../assets/css/bootstrap-select.less"> -->
  <link rel="stylesheet" href="../assets/scss/style.css">
  <link href="../assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

  <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>


  <!-- Left Panel -->

  <aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

      <div class="navbar-header">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand" href="./"><img src="../images/simpeg.svg" alt="Logo"></a>
        <a class="navbar-brand hidden" href="./"><img src="../images/logo2.png" alt="Logo"></a>
      </div>

      <div id="main-menu" class="main-menu collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active">
            <a href="dashboard.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
          </li>
          <h3 class="menu-title">KEPEGAWAIAN</h3><!-- /.menu-title -->
          <li>
            <a href="biodata.php"> <i class="menu-icon ti-briefcase"></i>Biodata Pegawai </a>
          </li>
          <li>
            <a href="cuti.php"> <i class="menu-icon ti-clipboard"></i>Ijin & Cuti </a>
          </li>

          <h3 class="menu-title">NOMINATIF</h3><!-- /.menu-title -->

          <li>
            <a href="satuankerja.php"> <i class="menu-icon ti-files"></i>Unit/Satuan Kerja </a>
          </li>

          <h3 class="menu-title">PENGATURAN</h3><!-- /.menu-title -->
          <li>
            <a href="pengguna.php"> <i class="menu-icon ti-user"></i>Manajemen Pengguna </a>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </nav>
  </aside><!-- /#left-panel -->

  <!-- Left Panel -->

  <!-- Right Panel -->

  <div id="right-panel" class="right-panel">

    <!-- Header-->
    <header id="header" class="header">

      <div class="header-menu">

        <div class="col-sm-7">
          <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
          <div class="header-left">

          </div>
        </div>

        <div class="col-sm-5">
          <div class="user-area dropdown float-right">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img class="user-avatar rounded-circle" src="../images/admin.png" alt="User Avatar">
            </a>

            <div class="user-menu dropdown-menu">
              <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

              <a class="nav-link" href="../index.php"><i class="fa fa-power -off"></i>Logout</a>
            </div>
          </div>


        </div>
      </div>

    </header><!-- /header -->
    <!-- Header-->

    <div class="breadcrumbs">
      <div class="col-sm-4">
        <div class="page-header float-left">
          <div class="page-title">
            <h1>Dashboard</h1>
          </div>
        </div>
      </div>
      <div class="col-sm-8">
        <div class="page-header float-right">
          <div class="page-title">
            <ol class="breadcrumb text-right">
              <li class="active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <div class="content mt-3">

      <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-1">
          <div class="card-body pb-0">
            <div class="dropdown float-right">
              <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                <i class="fa fa-cog"></i>
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <div class="dropdown-menu-content">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
            </div>
            <h4 class="mb-0">
              <span class="count">10468</span>
            </h4>
            <p class="text-light">Members online</p>

            <div class="chart-wrapper px-0" style="height:70px;" height="70">
              <canvas id="widgetChart1"></canvas>
            </div>

          </div>

        </div>
      </div>
      <!--/.col-->

      <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-2">
          <div class="card-body pb-0">
            <div class="dropdown float-right">
              <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                <i class="fa fa-cog"></i>
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <div class="dropdown-menu-content">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
            </div>
            <h4 class="mb-0">
              <span class="count">10468</span>
            </h4>
            <p class="text-light">Members online</p>

            <div class="chart-wrapper px-0" style="height:70px;" height="70">
              <canvas id="widgetChart2"></canvas>
            </div>

          </div>
        </div>
      </div>
      <!--/.col-->

      <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-3">
          <div class="card-body pb-0">
            <div class="dropdown float-right">
              <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                <i class="fa fa-cog"></i>
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <div class="dropdown-menu-content">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
            </div>
            <h4 class="mb-0">
              <span class="count">10468</span>
            </h4>
            <p class="text-light">Members online</p>

          </div>

          <div class="chart-wrapper px-0" style="height:70px;" height="70">
            <canvas id="widgetChart3"></canvas>
          </div>
        </div>
      </div>
      <!--/.col-->

      <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-4">
          <div class="card-body pb-0">
            <div class="dropdown float-right">
              <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                <i class="fa fa-cog"></i>
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <div class="dropdown-menu-content">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
            </div>
            <h4 class="mb-0">
              <span class="count">10468</span>
            </h4>
            <p class="text-light">Members online</p>

            <div class="chart-wrapper px-3" style="height:70px;" height="70">
              <canvas id="widgetChart4"></canvas>
            </div>

          </div>
        </div>
      </div>
      <!--/.col-->

      <div class="col-lg-3 col-md-6">
        <div class="social-box facebook">
          <i class="fa fa-facebook"></i>
          <ul>
            <li>
              <strong><span class="count">40</span> k</strong>
              <span>friends</span>
            </li>
            <li>
              <strong><span class="count">450</span></strong>
              <span>feeds</span>
            </li>
          </ul>
        </div>
        <!--/social-box-->
      </div><!--/.col-->


      <div class="col-lg-3 col-md-6">
        <div class="social-box twitter">
          <i class="fa fa-twitter"></i>
          <ul>
            <li>
              <strong><span class="count">30</span> k</strong>
              <span>friends</span>
            </li>
            <li>
              <strong><span class="count">450</span></strong>
              <span>tweets</span>
            </li>
          </ul>
        </div>
        <!--/social-box-->
      </div><!--/.col-->


      <div class="col-lg-3 col-md-6">
        <div class="social-box linkedin">
          <i class="fa fa-linkedin"></i>
          <ul>
            <li>
              <strong><span class="count">40</span> +</strong>
              <span>contacts</span>
            </li>
            <li>
              <strong><span class="count">250</span></strong>
              <span>feeds</span>
            </li>
          </ul>
        </div>
        <!--/social-box-->
      </div><!--/.col-->


      <div class="col-lg-3 col-md-6">
        <div class="social-box google-plus">
          <i class="fa fa-google-plus"></i>
          <ul>
            <li>
              <strong><span class="count">94</span> k</strong>
              <span>followers</span>
            </li>
            <li>
              <strong><span class="count">92</span></strong>
              <span>circles</span>
            </li>
          </ul>
        </div>
        <!--/social-box-->
      </div><!--/.col-->

    </div> <!-- .content -->
  </div><!-- /#right-panel -->

  <!-- Right Panel -->

  <script src="../assets/js/vendor/jquery-2.1.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
  <script src="../assets/js/plugins.js"></script>
  <script src="../assets/js/main.js"></script>


  <script src="../assets/js/lib/chart-js/Chart.bundle.js"></script>
  <script src="../assets/js/dashboard.js"></script>
  <script src="../assets/js/widgets.js"></script>

</body>
</html>
