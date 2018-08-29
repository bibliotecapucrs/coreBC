<?php
/**
 * Widgets modification on WordPress original widgets.
 * 
 * @package corebc
 */


function registra_cutter() {
	register_widget( 'Cutter' );
}

function addActionsFilters()
{
    // Modify calendar to support Bootstrap 4 style.
    //add_filter('get_calendar', array($this, 'modifyCalendarWidget'), 10, 1);
    add_action( 'widgets_init', 'registra_cutter' );
}// addActionsFilters


