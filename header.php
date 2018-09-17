<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php bloginfo( 'name' ); ?></title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!--Bootstrap v4.1.3-->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/all.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/v4-shims.css"> 

  <!--Tema CORE BC-->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/core_bc.css">
  
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap3-wysihtml5.min.css">

    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/skins/skin-blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

<?php
  global $current_user;
  get_currentuserinfo();
?>

</head>


<body class="hold-transition skin-blue fixed sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
    
    <!-- Logo -->
    <a href="<?php echo get_home_url(); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>C</b>ORE</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>CORE</b> BC</span>
    </a>
   

 <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-expand-lg navbar-static-top ">
      
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <i class="fa fa-bars"></i>
        <span class="sr-only">Alternar navegação</span>
      </a>

      <div class="navbar-custom-menu collapse navbar-collapse ">

        <ul class="nav navbar-nav ml-auto p-2 bd-highlight">
         
          <!-- Messages: style can be found in dropdown.less-->
          <li class="nav-item dropdown messages-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
              <i class="fas fa-bullhorn"></i>
              <span class="label badge badge-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Você tem 4 mensagens</li>
             
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  
                  <li><!-- start message -->
                    <a href="#">
                      <div class="float-left">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/admin.jpg" class="rounded-circle" alt="User Image">
                      </div>
                      <h4>
                        Fulano da Silva
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Fechamento da biblioteca</p>
                    </a>
                  </li>


                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="float-left">
                        <img src="assets/img/avatar7.png" class="rounded-circle" alt="User Image">
                      </div>
                      <h4>
                        Roger C Guilherme
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>

                  <li>
                    <a href="#">
                      <div class="float-left">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/user4-128x128.jpg" class="rounded-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>

                  <li>
                    <a href="#">
                      <div class="float-left">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/user3-128x128.jpg" class="rounded-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>

                  <li>
                    <a href="#">
                      <div class="float-left">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/user4-128x128.jpg" class="rounded-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>

                </ul>
              </li>
              <li class="footer"><a href="#">Ver todas</a></li>
            </ul>
          </li>


          <!-- Notifications: style can be found in dropdown.less -->
          <li class="nav-item  dropdown notifications-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label badge badge-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Você tem 1 novo comunicado</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>


          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="nav-link  dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/admin.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php  echo  $current_user->user_firstname. ' ' . $current_user->user_lastname; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/admin.jpg" class="rounded-circle" alt="User Image">
                <p>
                  <?php  echo  $current_user->user_firstname. ' ' . $current_user->user_lastname; ?> - <?php echo  $current_user->user_firstname;?>
                  <small>Member since Nov. 2012</small>
                </p>
              </li>

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="float-left">
                  <a href="#" class="btn btn-default btn-flat">Perfil</a>
                </div>
                <div class="float-right">
                  <a href="<?php echo wp_logout_url( home_url() ); ?>" class="btn btn-default btn-flat">Sair</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>

  </header>
  <!-- Left side column. contains the logo and sidebar -->