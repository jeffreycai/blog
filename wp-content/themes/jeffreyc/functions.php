<?php
add_action( 'wp_enqueue_scripts', 'safely_add_stylesheet' );
    /**
     * Add stylesheet/javascript to the page
     */
    function safely_add_stylesheet() { 
      wp_enqueue_style( 'responsive-sx', get_template_directory_uri() . "/css/responsive-SX.css" );
      wp_enqueue_style( 'responsive-s', get_template_directory_uri() . "/css/responsive-S.css" );
      wp_enqueue_style( 'responsive-m', get_template_directory_uri() . "/css/responsive-M.css" );
      wp_enqueue_style( 'responsive-l', get_template_directory_uri() . "/css/responsive-L.css" );
      wp_enqueue_style( 'responsive-lx', get_template_directory_uri() . "/css/responsive-LX.css" );
      
//      wp_enqueue_script('google-chart-api', 'https://www.google.com/jsapi', $deps = array(), $ver = false, $in_footer = true);
//      wp_enqueue_script('me-chart', get_template_directory_uri() . "/js/me-chart.js", $deps = array(), $ver = false, $in_footer = true);
      
    }

