<?php
/**
 * @package CoreBC
 * @subpackage corebc
 */
?>

  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

<!-- search form -->
<?php get_search_form(); 

wp_nav_menu(
  array(
            'depth' => '3',
            'theme_location' => 'left-menu', 
            'container' => false, 
              'items_wrap'  => '<ul id="%1$s" class="sidebar-menu" data-widget="tree"><li class="header">NAVEGAÇÃO</li>%3$s</ul>',
            'menu_id' => '',
            'menu_class' => 'sidebar-menu',
            'walker' => new \CoreBC\CoreBCWalkerNavMenu()
  )
);

?> 
<!--

        <li>
          <a href="pages/mailbox/mailbox.html">
            <i class="fas fa-bullhorn"></i><span> Mensagens</span>
            <span class="pull-right-container">
              <small class="badge badge-success">4</small>
              <small class="badge badge-warning">10</small>
            </span>
          </a>
        </li>

 


        <li>
          <a href="pages/widgets.html">
            <i class="fas fa-users"></i> <span>Equipe</span>
            <span class="pull-right-container">
              <small class="badge badge-success">novo</small>
            </span>
          </a>
        </li>




        <li>
          <a href="index.html">
            <i class="fas fa-people-carry"></i> <span>Grupos de trabalho</span>
          </a>
        </li>

        <li class="treeview">

          <a href="#">
            <i class="fas fa-table"></i> <span>Relatórios</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>


          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Level One com sub
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>

              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
               
                <li class="treeview">
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>

                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>


                </li>
              </ul>




            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>

        </li>



        <li class="treeview">
          <a href="#">
            <i class="fas fa-chart-pie"></i> <span>Estatísticas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li>



        <li class="header">Avisos</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Importante</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Alerta</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Informações</span></a></li>
 
      </ul>

    </section>

-->
    <!-- /.sidebar -->
  </aside>