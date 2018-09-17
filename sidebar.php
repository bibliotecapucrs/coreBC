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

</aside>