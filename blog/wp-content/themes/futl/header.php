<!DOCTYPE html>

<html <?php language_attributes() ?>>
    <head>
        <title><?php bloginfo('name'); ?> <?php wp_title('-'); ?></title>

        <meta http-equiv="content-type"
              content="<?php bloginfo('html_type'); ?>"
              charset="<?php bloginfo('charset') ?>" />

        <?php wp_head(); ?>

        <link rel="icon" type="img/ico" href="<?php echo get_template_directory_uri(); ?>/static/images/favicon.ico" />

        <link href='https://fonts.googleapis.com/css?family=Bitter:400,400italic,700' rel='stylesheet' type='text/css' />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen, projection" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/static/style/font-awesome.min.css" type="text/css" media="screen, projection" />

        <script src="<?php echo get_template_directory_uri(); ?>/static/scripts/jquery-3.1.1.min.js" type="application/javascript" ></script>
    </head>
    <body>
        <section id="header">
            <section id="contact">
                <span>Contact:</span>

                <a href="mailto:mbelzer5@gmail.com" class="email" target="_blank" >
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                </a>
                <a href="https://www.linkedin.com/in/mikebelzer" class="linkedin" target="_blank" >
                    <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                </a>
                <a href="https://www.imdb.com/name/nm0069802/" class="imdb" target="_blank" >
                    <i class="fa fa-imdb" aria-hidden="true"></i>
                </a>
            </section>
            <h1>
                <a href="<?php echo get_option('home'); ?>" id="site-logo">
                    <?php echo get_bloginfo('name'); ?>
                </a>
            </h1>
        </section>
        <section id="navigation">
            <?php $home_class = wp_title('', false) == '' ? 'current_page_item' : ''; ?>
            <li class="page_item page-item-1 <?php echo $home_class; ?>"><a href="/">Home</a></li>
            <?php wp_list_pages('sort_column=menu_order&title_li='); ?>
        </section>
