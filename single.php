<?php
/**
 * @package CoreBC
 * @subpackage corebc
 */

//chama o cabeçalho
  get_header();

//chama o sidebar    
  get_sidebar();

//chama o conteúdo básico
  get_template_part( 'template-parts/post/core', 'single' );
  //get_template_part( 'template-parts/post/core', 'content' );

//chama o rodapé    
  get_footer(); 
?>
