<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
  <link rel="Shortcut Icon" href="http://biblioteca.pucrs.br/wp-content/themes/bce-responsive-mobile/favicon.png" />


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

<?php
  wp_head();
  global $current_user;
  get_currentuserinfo();
?>

<script>
function resetCookie () {
    jq.cookie( 'bp-activity-oldestpage', 1, {
      path: '/'
    } );
}
</script>

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
        <?php

        if ( bp_has_notifications( bp_ajax_querystring( 'notifications' ) ) ) :
          //bp_nouveau_pagination( 'top' ); 
        ?>
             <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="nav-link dropdown-toggle" title="Notificações" data-toggle="dropdown">
              <i class="far fa-bell"></i>
              <span class="label badge badge-warning"><?php echo bp_notifications_get_unread_notification_count( bp_loggedin_user_id() ); ?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Você tem <?php echo bp_notifications_get_unread_notification_count( bp_loggedin_user_id() ); ?> notificações</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">

                <?php

                 while ( bp_the_notifications() ) :
                  bp_the_notification();
              ?>
                  <li class="bc-notify"><!-- start message -->
                   

                      <h4 class="bc-notify">
                        <?php bp_the_notification_description(); ?>
                        <small><i class="fa fa-clock-o"></i> <?php bp_the_notification_time_since(); ?></small>
                        <span class="bc-action-notify"><?php bp_the_notification_action_links(); ?></span>

                      </h4>                  
                  </li>
                  <!-- end message -->
                <?php endwhile; ?>

                <?php wp_nonce_field( 'notifications_bulk_nonce', 'notifications_bulk_nonce' ); ?>


                <?php //bp_nouveau_pagination( 'bottom' ); ?>
              

                </ul>         
              </li>
              <li class="footer"><a href="/membros/me/notifications/">Ver todas as mensagens</a></li>
            </ul>
          </li>
          <?php else : ?>

         <li class="messages-menu">
            <a href="/membros/me/notifications/" class="nav-link" title="Notificações">
              <i class="far fa-bell"></i>
            </a>
        </li>
  <?php //bp_nouveau_user_feedback( 'member-notifications-none' ); ?>

<?php endif; ?>


          <!-- Notifications: style can be found in dropdown.less -->
          <li class="nav-item  dropdown notifications-menu">
            <a href="#" class="nav-link dropdown-toggle" title="Atalhos" data-toggle="dropdown">
              <i class="fas fa-rocket"></i>
              <span class="label badge badge-warning">1</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Atalhos</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="http://access.rdatoolkit.org/" target="_blank">
                      <i class="fas fa-database text-aqua"></i> RDA Toolkit
                    </a>
                  </li>
                  <li>
                    <a href="http://abcd.pucrs.br/" target="_blank">
                      <i class="fas fa-database text-aqua"></i> ABCD
                    </a>
                  </li>
                  <li>
                    <a href="http://www.pucrs.br/biblioteca/interativo/" target="_blank">
                      <i class="fas fa-newspaper text-aqua"></i> Interativo
                    </a>
                  </li>
                  <li>
                    <a href="http://10.16.118.49/nucom/comunicados/" target="_blank">
                      <i class="fa fa-users text-yellow"></i> Comunicados para toda equipe
                    </a>
                  </li>
                  <li>
                    <a href="http://core.pucrs.br/grupos/bibliotecarios/activity/">
                      <i class="fas fa-book-reader text-aqua"></i> Comunicados para bibliotecários
                    </a>
                  </li>
                  <li>
                    <a href="http://core.pucrs.br/membros/me/activity/groups/">
                      <i class="fas fa-comments text-aqua"></i> Atividades dos grupos
                    </a>
                  </li>
                  <li>
                    <a href="http://core.pucrs.br/events/">
                      <i class="fas fa-calendar-alt text-aqua"></i> Agenda completa
                    </a>
                  </li>
                </ul>
              </li>
              <!--<li class="footer"><a href="#">View all</a></li>-->
            </ul>
          </li>


          <li class="dropdown user user-menu">
            <a href="#" class="nav-link  dropdown-toggle" data-toggle="dropdown">
              <?php 
              echo bp_core_fetch_avatar( array('item_id' => bp_loggedin_user_id(),'width' => 50,'height' => 50,'class' => 'user-image', )); 
              ?>
              <span class="hidden-xs"><?php bp_core_get_userid();?><?php  echo  $current_user->user_firstname. ' ' . $current_user->user_lastname; ?></span>
    
            </a>
            <ul class="dropdown-menu">
          <!-- User image -->
              <li class="user-header">
                  <?php echo bp_core_fetch_avatar( array('item_id' => bp_loggedin_user_id(),'width' => 150,'height' => 150,'class' => 'rounded-circle', )); ?>
                <p>
                  <?php  echo  $current_user->user_firstname. ' ' . $current_user->user_lastname; ?>
                  <!--<small>Member since Nov. 2012</small>-->
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-sm text-center">
                    <a href="/membros/me/groups/my-groups/" title="Meus grupos" class="btn btn-light">Grupos</a>
                  </div>
                  <div class="col-sm text-center">
                    <a href="/membros/me/eventos/" title="Meus eventos"  class="btn btn-light">Eventos</a>
                  </div>
                  <div class="col-sm text-center">
                    <a href="/membros/me/notifications/" title="Minhas notificações"  class="btn btn-light">Notificações</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="float-left">
                  <a href="/membros/me">Perfil</a>
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
