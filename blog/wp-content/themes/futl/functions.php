<?php
    add_filter('stylesheet_uri', 'wpi_stylesheet_uri', 10, 2);

    add_theme_support( 'post-thumbnails' );

    /**
     * wpi_stylesheet_uri
     * override default theme stylesheet uri
     * filter stylesheet_uri
     * @see get_stylesheet_uri()
     */
    function wpi_stylesheet_uri($stylesheet_uri, $stylesheet_dir_uri) {
        return get_template_directory_uri().'/static/style/base.css';
    }

    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '<h2>',
            'after_title' => '</h2>'
        ));
    }