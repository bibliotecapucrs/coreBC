<?php
/**
 * @package CoreBC
 * @subpackage corebc
 */
//chama o cabeçalho
	get_header();

//chama o sidebar    
	get_sidebar();


if ( is_main_query() ) {

    if ( is_404() ) {

		get_template_part( 'template-parts/core_pages/core', '404' );
    }
    // Front page
    if ( is_front_page() ) {
       	//chama o conteúdo básico
		get_template_part( 'template-parts/core_pages/core', 'geral' );
    }
    // Archive
    if ( is_archive() ) {
		get_template_part( 'template-parts/core_pages/core', 'blog' );
    }
    // Comments popup
    if ( is_comments_popup() ) {
        ;
    }
    // Search
    if ( is_search() ) {
		get_template_part( 'template-parts/core_pages/core', 'blog' );
    }

    // Search
   if ( is_home() ) {
		get_template_part( 'template-parts/core_pages/core', 'blog' );
    }

}








//chama o rodapé    
	get_footer(); 
?>
