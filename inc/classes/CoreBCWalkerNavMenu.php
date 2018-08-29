<?php
/**
 * Walker nav menu that extended WordPress walker nav menu class.
 * 
 * @package corebc
 */

namespace CoreBC;

if (!class_exists('\\CoreBC\\CoreBCWalkerNavMenu')) {
    class CoreBCWalkerNavMenu extends \Walker_Nav_Menu
    { 
        /**
         * @link https://gist.github.com/duanecilliers/1817371 fonte original
         */
        public function display_element($element, &$children_elements, $max_depth, $depth = 0, $args, &$output)
        {
            if (!$element)
                return;
            $id_field = $this->db_fields['id'];
              // inspect $item
         

            //exibir este elemento
            if (is_array($args[0]))
                $args[0]['has_children'] = !empty($children_elements[$element->$id_field]);
            else if (is_object($args[0]))
                $args[0]->has_children = !empty($children_elements[$element->$id_field]);
            $cb_args = array_merge(array(&$output, $element, $depth), $args);
            call_user_func_array(array(&$this, 'start_el'), $cb_args);

            $id = $element->$id_field;

            // descende apenas quando a profundidade está correta e há filhotes para este elemento
            if (($max_depth == 0 || $max_depth > $depth + 1) && isset($children_elements[$id])) {

                foreach ($children_elements[$id] as $child) {

                    if (!isset($newlevel)) {
                        $newlevel = true;
                        //iniciar o delimitador filho
                        $cb_args = array_merge(array(&$output, $depth), $args);
                        call_user_func_array(array(&$this, 'start_lvl'), $cb_args);
                    }
                    $this->display_element($child, $children_elements, $max_depth, $depth + 1, $args, $output);
                }
                unset($children_elements[$id]);
            }

            if (isset($newlevel) && $newlevel) {
                //termina o delimitador filho
                $cb_args = array_merge(array(&$output, $depth), $args);
                call_user_func_array(array(&$this, 'end_lvl'), $cb_args);
            }

            //termina este elemento
            $cb_args = array_merge(array(&$output, $element, $depth), $args);
            call_user_func_array(array(&$this, 'end_el'), $cb_args);
        }// exibe o elemento

        public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) 
        {
            if ((is_object($item) && $item->title == null) || (!is_object($item))) {
                return ;
            }

            
           $indent = ($depth) ? str_repeat("\t", $depth) : '';

            $li_attributes = '';
            $class_names = $value = '';
            $classes = empty($item->classes) ? array() : (array) $item->classes;
            //Add class and attribute to LI element that contains a submenu UL.
            $classes[] = 'menu-item-' . $item->ID;
            if ($depth <= 0) {
                // menu item at the parent level.
                $classes[] = 'nav-item';
                if (is_object($args) && $args->has_children) {
                    $classes[] = 'treeview';
                }
            } else {
                // menu item at the child level. (dropdown level.)
                $classes[] = '';
            }
            //If we are on the current page, add the active class to that menu item.
            $classes[] = ($item->current) ? 'active' : '';

            //Make sure you still add all of the WordPress classes.
            $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
            if (strpos($class_names, 'current-menu-parent') !== false && strpos($class_names, 'active') === false) {
                $class_names .= ' active';
            }
            $class_names = ' class="' . esc_attr($class_names) . '"';

            $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
            $id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

            if ($depth <= 0) {
                $output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';
            } else {
                $output .= $indent;
            }

            if (isset($item->classes) && is_array($item->classes) && in_array('dropdown-divider', $item->classes)) {
                // it is Bootstrap dropdown divider, use this instead of link.
                $item_output = (is_object($args)) ? $args->before : '';
                $item_output .= '<div class="' . join(' ', $item->classes) . '"></div>'.PHP_EOL;
                $item_output .= (is_object($args) ? $args->after : '');
            } else {
                //Add attributes to link element.
                $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
                $attributes .=!empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
                $attributes .=!empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
                $attributes .=!empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

                $a_class_names = '';
                if (isset($item->classes) && is_array($item->classes)) {
                    $a_class_names = join(' ', $item->classes);
                }
                if ($depth <= 0) {
                    //$attributes .= (is_object($args) && $args->has_children) ? ' class="dropdown-toggle nav-link ' . $a_class_names . '" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="nav-link ' . $a_class_names . '"';
                } else {
                   //$attributes .= ' class="'.($item->current ? ' active' : '').'"';
                }

                $item_output = (is_object($args)) ? $args->before : '';
                $item_output .= '<a' . $attributes . '> <i class="'. $item->icon . '"></i><span> ';
                $item_output .= (is_object($args) ? $args->link_before : '') . apply_filters('the_title', $item->title, $item->ID) . (is_object($args) ? $args->link_after : '');
                $item_output .= (is_object($args) && $args->has_children) ? '</span> <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span> ' : '';
                $item_output .= '</a>';
                $item_output .= (is_object($args) ? $args->after : '</li>');
            }

            $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
        }// start_el


        /**
         * Ends the element output, if needed.
         *
         * @see Walker::end_el()
         *
         * @since 3.0.0
         *
         * @param string $output Passed by reference. Used to append additional content.
         * @param object $item   Page data object. Not used.
         * @param int    $depth  Depth of page. Not Used.
         * @param array  $args   An array of arguments. @see wp_nav_menu()
         */
        public function end_el(&$output, $item, $depth = 0, $args = array()) 
        {
            if (!empty($output)) {
                if ($depth <= 0) {
                    $output .= "</li>\n";
                } else {
                    $output .= "\n";
                }
            }
        }// end_el

        /**
         * Starts the list before the elements are added.
         *
         * @see Walker::start_lvl()
         *
         * @since 3.0.0
         *
         * @param string $output Passed by reference. Used to append additional content.
         * @param int    $depth  Depth of menu item. Used for padding.
         * @param array  $args   An array of arguments. @see wp_nav_menu()
         */
        public function start_lvl(&$output, $depth = 0, $args = array()) 
        {
            //'menu-item-classes' => ( isset( $_item_object_data['menu-item-classes'] ) ? $_item_object_data['menu-item-classes'] : '' ),
            $indent = str_repeat("\t", $depth);
            $output .= "\n$indent<ul class=\"treeview-menu\"><li>\n";
        }// start_lvl


        /**
         * Ends the list of after the elements are added.
         *
         * @see Walker::end_lvl()
         *
         * @since 3.0.0
         *
         * @param string $output Passed by reference. Used to append additional content.
         * @param int    $depth  Depth of menu item. Used for padding.
         * @param array  $args   An array of arguments. @see wp_nav_menu()
         */
        public function end_lvl( &$output, $depth = 0, $args = array() ) {
            $indent = str_repeat("\t", $depth);
            $output .= "$indent</li></ul>\n";
        }// end_lvl
    }
}