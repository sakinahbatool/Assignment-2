<?php 

function themify_child(){
    wp_enqueue_style('themify_styles', get_template_directory_uri(). '/style.css' );
}

add_action('wp_enqueue_scripts', 'themify_child');

?>