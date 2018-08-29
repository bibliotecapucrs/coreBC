<?php
/**
 * Template Name: Core Librarian
 *
 * @package CoreBC
 * @subpackage corebc
 */

//chama o cabeçalho
	get_header();

//chama o sidebar    
	get_sidebar();

//chama o conteúdo básico
	get_template_part( 'template-parts/core_pages/core', 'librarian' );
	
//chama o rodapé    
	get_footer(); 

?>
