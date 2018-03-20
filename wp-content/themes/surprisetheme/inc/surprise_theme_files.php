<?php
function surprise_function()
{
    wp_register_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', [], '4.0.0', 'all');
    wp_register_style('googlefont', 'https://fonts.googleapis.com/css?family=Roboto');
    wp_register_style('styles', get_template_directory_uri().'/style.css',[],'1.0.0','all');

    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', [], '3.2.1', true);
    wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', ['jquery'], '1.12.9', true);
    wp_register_script('bootstrapjs', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', ['jquery'], '4.0.0', true);
    wp_register_script('fontawesome', 'https://use.fontawesome.com/releases/v5.0.8/js/all.js', [], '5.0.8', true);
    wp_register_script('custom', get_template_directory_uri().'/js/custom.js',[],'1.0.0',true);

    wp_enqueue_style('bootstrap');
    wp_enqueue_style('googlefont');
    wp_enqueue_style('styles');

    wp_enqueue_script('jquery');
    wp_enqueue_script('popper');
    wp_enqueue_script('bootstrapjs');
    wp_enqueue_script('fontawesome');
    wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts', 'surprise_function');