<?php
/**
 * Template Name: Core Desktop
 *
 * @package CoreBC
 * @subpackage corebc
 */

//chama o cabeçalho
	get_header();

//chama o sidebar    
	get_sidebar();

//chama o conteúdo básico
	get_template_part( 'template-parts/core_pages/core', 'desk' );
	
//chama o rodapé    
	get_footer(); 
?>