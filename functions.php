<?php


//Funções gerais

foreach (glob(get_template_directory() . '/inc/functions/*.php') as $core_func)
{
    include $core_func;
}


foreach (glob(get_template_directory() . '/inc/classes/widgets/*.php') as $filename)
{
    include $filename;
}

foreach (glob(get_template_directory() . '/inc/classes/role/*.php') as $core_role)
{
    include $core_role;
}

require get_template_directory() . '/inc/classes/Autoload.php';


// Setup auto load for load the class files without manually include file by file.
$Autoload = new \CoreBC\Autoload();
$Autoload->register();
$Autoload->addNamespace('CoreBC', get_template_directory() . '/inc/classes');
unset($Autoload);




// Call to actions/filters of the theme to enable features, register sidebars, enqueue scripts and styles.
//$CoreBC = new \CoreBC\CoreBC();
//$CoreBC->addActionsFilters();
//unset($CoreBC);

// Call to actions/filters of theme hook to hook into WordPress and make changes to the theme.
//$LC1Hooks = new \CoreBC\Hooks\LC1Hooks();
//$LC1Hooks->addActionsFilters();
//unset($LC1Hooks);

// Call to actions/filters of theme hook to hook into WordPress widgets.
//$WidgetHooks = new \CoreBC\Hooks\WidgetHooks();
//$WidgetHooks->addActionsFilters();
//unset($WidgetHooks);

// Display theme help page for admin.
//$ThemeHelp = new \CoreBC\Controller\ThemeHelp();
//$ThemeHelp->addActionsFilters();
//unset($ThemeHelp);



?>