<?php
/**
 * @package CoreBC
 * @subpackage corebc
 */
	get_header();

//chama o sidebar    
	get_sidebar();
?>

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">

<?php

	get_template_part( 'template-parts/paginas/geral', 'content' );
	//get_template_part( 'template-parts/post/content', 'content' );

?>
    
	</div><!-- /.content-wrapper -->


<?php
	//chama o rodapé    
	get_footer(); 
?>
