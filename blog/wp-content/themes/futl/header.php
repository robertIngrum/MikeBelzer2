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
            <?php
                # Styling the title of the blog
                $blog_name = get_bloginfo('name');
                $blog_name_split = explode('.', $blog_name);
                $blog_name =
                    "<span class='title-part-1'>{$blog_name_split[0]}</span><span class='title-part-2'>.{$blog_name_split[1]}</span>";
            ?>

            <h1>
                <a href="<?php echo get_option('home'); ?>">
                    <?php echo $blog_name; ?>
                </a>
            </h1>

            <section id="navigation">
                <?php wp_list_pages('sort_column=menu_order&title_li='); ?>
            </section>
        </section>
    </body>
</html>