<!DOCTYPE html>

<html <?php language_attributes() ?>>
    <head>
        <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

        <meta http-equiv="content-type"
              content="<?php bloginfo('html_type'); ?>"
              charset="<?php bloginfo('charset') ?>" />

        <link rel="icon" type="img/ico" href="<?php echo get_template_directory_uri(); ?>/static/images/favicon.ico" />

        <link href='https://fonts.googleapis.com/css?family=Bitter:400,400italic,700' rel='stylesheet' type='text/css' />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen, projection" />

        <?php wp_head(); ?>
    </head>
    <body>
        <section id="header">
            <h1>
                <a href="<?php echo get_option('home'); ?>" id="site-logo">
                    <?php echo get_bloginfo('name'); ?>
                </a>
            </h1>
        </section>
        <section id="navigation">
            <?php wp_list_pages('sort_column=menu_order&title_li='); ?>
        </section>
