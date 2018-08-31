<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> <?php echo the_title(); ?><small>Painel de controle</small></h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> <?php echo the_title(); ?></a></li>
      <li class="active">Painel</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">  <!-- Pequenas caixinhas (Estatística em tempo real) -->  
          <?php dynamic_sidebar( 'lib-top-sidebar' ); ?>
    </div><!-- /.row -->


    <div class="row"> <!-- Main row -->
      <section class="col-lg-8 connectedSortable"><!-- Left col -->
       <?php dynamic_sidebar( 'lib-left-sidebar' ); ?>
      </section><!-- /.Left col -->

        <!-- right col (We are only adding the ID to make the widgets sortable)-->
      <section class="col-lg-4 connectedSortable">
        <?php dynamic_sidebar( 'lib-right-sidebar' ); ?>
      </section>
      <!-- right col -->

    </div><!-- /.row (main row) -->

  </section><!-- /.content -->

</div><!-- /.content-wrapper -->