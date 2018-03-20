<?php
//include all files function
include 'inc/surprise_file.php';

function surprise_theme_menus()
{
    register_nav_menus([
        'main_menu'=>'Main Menu'
    ]);
}

add_action('init','surprise_theme_menus');


function surprise_fallback_menu()
{
    echo "<ul class=\"navbar-nav ml-auto\">";
    wp_list_pages();
    echo "</ul>";

}

?>