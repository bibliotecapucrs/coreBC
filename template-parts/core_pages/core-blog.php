<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> <a href="<?php the_permalink(); ?>"><?php bloginfo( 'name' ); ?></a><small>Painel de controle</small></h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> <?php echo the_title(); ?></a></li>
      <li class="active">Painel</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row"> <!-- Main row -->
      <section class="col-lg-8 connectedSortable"><!-- Left col -->

      <?php while(have_posts()): the_post(); ?>
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="timeline-header">
            <a href="<?php the_permalink(); ?>"><?php the_title()?></a> 
          </h3>
          <small>
            <i class="fa fa-clock-o"></i> <?php the_time('j \d\e F \d\e Y'); ?> <?php the_time('H:i'); ?>
          </small>
        </div>
        <div class="box-body">
          <?php the_content() ?>
        </div>
        <div class="timeline-footer">
          <?php the_category( ', ' ); ?>
        </div>
      </div>

      <?php endwhile; ?>


       
      </section><!-- /.Left col -->

        <!-- right col (We are only adding the ID to make the widgets sortable)-->
      <section class="col-lg-4 connectedSortable">
        <?php dynamic_sidebar( 'main-right-sidebar' ); ?>
      </section>
      <!-- right col -->

    </div><!-- /.row (main row) -->

  </section><!-- /.content -->

</div><!-- /.content-wrapper -->