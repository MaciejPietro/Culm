<?php
add_filter( 'timber/context', 'add_to_context' );

function add_to_context( $context ) {
    $context['menu'] = wp_nav_menu(array(
        'echo' => false,
        'menu'           => 'Menu Primary',
        'theme_location' => 'primary',
        'depth'          => 2,
        'container'      => false,
        'link_before'       => '<span>',
        'link_after'        => '</span>',
     ));

    $context['foo'] ='bar';
    return $context;
}
