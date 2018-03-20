<?php
/**
 * Created by PhpStorm.
 * User: golam
 * Date: 3/17/18
 * Time: 6:46 PM
 */

function my_function()
{
    wp_register_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css',[],'4.0.0','all');
    wp_register_style( 'main', get_template_directory_uri() . '/style.css',[],'1.0','all' );

    wp_enqueue_style('bootstrap');
    wp_enqueue_style('main');


    wp_enqueue_script('fontawesome','https://use.fontawesome.com/releases/v5.0.8/js/all.js',[],'5.0.8',false);
    wp_enqueue_script('jquery','https://code.jquery.com/jquery-3.2.1.slim.min.js',[],'3.2.1',true);
    wp_enqueue_script('popper','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js',['jquery'],'1.12.9',true);
    wp_enqueue_script('bootstrap','https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js',['jquery'],'1.12.9',true);
    wp_enqueue_script('custom','/js/custom.js',[],'1.0',true);
}
add_action('wp_enqueue_scripts','my_function');


?>