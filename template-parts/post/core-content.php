<?php
/**
 * @package CoreBC
 * @subpackage corebc
 */

?>


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Painel
        <small>Painel de controle</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> <?php echo the_title(); ?></a></li>
        <li class="active">Painel</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row"> <!-- Main row -->
        
        <section class="col-lg-8 connectedSortable"><!-- Left col -->

     <!-- row -->
      <div class="row">
        <div class="col-md-12">
          <!-- The time line -->
          <ul class="timeline">

		    <?php if ( have_posts() ) : ?>

		      <?php if ( is_home() && ! is_front_page() ) : ?>
		        <header>
		          <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
		        </header>
		      <?php endif; ?>

      <?php
      // Start the loop.
      while ( have_posts() ) : the_post();

        /*
         * Include the Post-Format-specific template for the content.
         * If you want to override this in a child theme, then include a file
         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
         */
        get_template_part( 'template-parts/content', get_post_format() );

      // End the loop.
      endwhile;

      // Previous/next page navigation.
      the_posts_pagination( array(
        'prev_text'          => __( 'Previous page', 'corebc' ),
        'next_text'          => __( 'Next page', 'corebc' ),
        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'corebc' ) . ' </span>',
      ) );

    // If no content, include the "No posts found" template.
    else :
      get_template_part( 'template-parts/content', 'none' );

    endif;
    ?>


          </ul>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

        </section><!-- /.Left col -->
        
        
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-4 connectedSortable">

          <!-- Calendar -->
          <div class="box box-solid box-primary">
            <div class="box-header">
              <i class="fas fa-calendar-alt"></i>

              <h3 class="box-title">Calendário BC</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <!-- button with a dropdown -->
                <div class="btn-group">
                  <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bars"></i></button>
                  <ul class="dropdown-menu pull-right" role="menu">
                    <li><a href="#">Adicionar evento</a></li>
                    <li><a href="#">Editar evento</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Ver calendário completo</a></li>
                  </ul>
                </div>
                <button type="button" class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-primary btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
              <!-- /. tools -->
            </div>

            
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <!--The calendar -->
              <div id="calendar" style="width: 100%"></div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-black">
                <a href="#" class="small-box-footer">Ver agenda completa <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- /.box agenda -->


          <!-- Chat box -->
          <div class="box box-primary">
           
            <div class="box-header">
              <i class="fas fa-calendar-check"></i>
              <h3 class="box-title">Hoje na Biblioteca</h3>
            </div>

            <div class="box-body chat" id="chat-box">
              <!-- chat item -->
              <div class="item">
                <p class="message">
                  <a href="#" class="name">
                    <small class="text-muted float-right"><i class="fa fa-clock-o"></i> 08:00</small>
                    Exposição de Obras Raras - Biblioteca Central
                  </a>
                  <li>Quando: de 01 a 17 de agosto de 2018</li>
                  <li>Onde: Espaço Cultural da Biblioteca Central</li>
                  <li>Quem: Loiva Duarta (STI), ramal 3587</li>
                  <li>Material: 04 expositores horizontais retangulares com chave e tampo de vidro; 01 Expositor vertical para fotos e gravuras.</li>
                </p>

              </div>
              <!-- /.item -->
              <!-- chat item -->
              <div class="item">
                <p class="message">
                  <a href="#" class="name">
                    <small class="text-muted float-right"><i class="fa fa-clock-o"></i> 10:00</small>
                      Reunião Coordenação e Serviço de Aquisição
                  </a>
                      <li>Quando: das 10h às 11h</li>
                      <li>Quem: Débora Kraemer, Clarissa Selbach, Tiago Specht e Ísis Sant'Anna</li>
                      <li>Onde: 5º pavimento - Sala de Reuniões</li>
                </p>
              </div>
              <!-- /.item -->
              <!-- chat item -->
              <div class="item">
                <p class="message">
                  <a href="#" class="name">
                    <small class="text-muted float-right"><i class="fa fa-clock-o"></i> 10:00</small>
                    Visita guiada - Curso de História PUCRS 
                  </a>
                    <li>Quando: das 10h às 10h45min</li>
                    <li>Quem: Alessandra e Juliana</li>
                    <li>Onde: BC</li>
                    <li>Participantes: 25 alunos do curso de História - Licenciatura</li>
                    <li>Solicitante: Ederson Silva da Silva / Profa. Eliana Ávila Silveira</li>
                </p>
              </div>
              <!-- /.item -->
            </div>

          </div>
          <!-- /.box (chat box) -->



        </section>
        <!-- right col -->
        
      </div><!-- /.row (main row) -->
      

    </section><!-- /.content -->