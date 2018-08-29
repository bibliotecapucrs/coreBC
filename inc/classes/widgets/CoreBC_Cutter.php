<?php

/**
* Plugin Name: LibCore Cutter
* Plugin URI: http://biblioteca.pucr.br/github
* Description: Widget para consulta a tabela Cutter.
* Version: 1.0 or whatever version of the plugin (pretty self explanatory)
* Author: Roger C. Guilherme
* Author URI: http://rabis.ca
* License: GPL12
*/


//namespace LibCore1\Widgets;

class CoreBC_Cutter extends wp_widget {

	/**
	 * Sets up the widgets name etc
	 */
	public function __construct() {
		$widget_ops = array( 
			'classname' => 'cutter_sanborn',
			'description' => 'Consulta a tabela Cutter-Sanborn.',
		);
		parent::__construct( 'cutter_sanborn', 'Core Cutter-Sanborn', $widget_ops );
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		// outputs the content of the widget
		include"CoreBC_Cutter/index.php";

	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	public function form( $instance ) {
		echo "<p>Exibe o formulário de consulta para a Tabela Cutter-Sanborn</p>";
		// outputs the options form on admin
	}

	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 *
	 * @return array
	 */
	public function update( $new_instance, $old_instance ) {
		// processes widget options to be saved
	}
}

add_action( 'widgets_init', function(){
	register_widget( 'CoreBC_Cutter' );
});


?>