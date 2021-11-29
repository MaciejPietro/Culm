<?php

add_action( 'wp_enqueue_scripts', 'enqueue_files' );

function enqueue_files() {

    $cssFilePath = glob( get_template_directory() . '/build/css/*.css' );
    $cssFileURI = get_template_directory_uri() . '/build/css/' . basename($cssFilePath[0]);
    wp_enqueue_style( 'site_main_css', $cssFileURI );

    $jsFilePath = glob( get_template_directory() . '/build/js/*.js');
    $jsFileURI = get_template_directory_uri() . '/build/js/' . basename($jsFilePath[0]);
    wp_enqueue_script( 'site_main_js', $jsFileURI , null , null , true );
}