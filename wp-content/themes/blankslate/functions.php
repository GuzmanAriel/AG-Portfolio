<?php

$GLOBALS['bodyClass'] = $bodyClass;

add_action('wp_enqueue_scripts', 'blankslate_load_scripts');


add_theme_support( 'post-thumbnails' );
add_image_size( 'large', 1200, 600, true );
add_image_size( 'sidebar-thumb', 120, 120, true ); // Hard Crop Mode
add_image_size( 'alt-thumb', 400, 300, true ); // Hard Crop Mode
add_image_size( 'featured', 1200, 800, false ); // Hard Crop Mode

function blankslate_load_scripts()
{
    wp_enqueue_script('jquery');
}


function dereg_jquery() {
   wp_deregister_script('jquery');
}
add_action("wp_enqueue_scripts", "dereg_jquery", 11);






// Google Analytics
function insert_head() {
?>


<!-- build:css /assets/css/style.min.css -->
<link rel='stylesheet' id='main-css' href='styles/main.css' type='text/css' media='all' />
<!-- /build -->


<?php
}
add_action( 'wp_head', 'insert_head' );
