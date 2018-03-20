<?php
function surprise_theme_menus()
{

    register_nav_menus(array(

        'main_menu' => 'Main Menu'

    ));
}

add_action('init','surprise_theme_menus');

function theme_fallback(){

    echo '<ul class="nav navbar-nav">';

    if('page' != get_option('show_on_front')){

        echo '<li><a href="'.site_url().'/">HOME</a></li>';

    }

    wp_list_pages('title_li=');

    echo '</ul>';



}