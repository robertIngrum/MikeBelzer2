<?php get_header(); ?>

<?php get_sidebar(); ?>

<section id="content">
    <?php if (have_posts()) {
        while (have_posts()) {
            the_post(); ?>

            <div class="post">
                <h2 class="title">
                    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                </h2>
                <h5 class="details">
                    <?php the_time('Y F j, g:i a'); ?> |
                    <?php comments_number('No comments', '1 comment', '% comments'); ?> |
                    <?php if (get_the_category() == null) { echo 'No Category'; } else { the_category(', '); } ?>
                </h5>

                <?php the_content(); ?>

                <?php comments_template(); ?>
            </div>

        <?php }
    } else { ?>
        <h2>Well this is embarrassing...</h2>
        <h5>I swear this never happens!</h5>

        <a href="<?php echo get_option('home') ?>">< Back to Home</a>
    <?php } ?>

    <p><?php posts_nav_link(); ?></p>
</section>

<?php get_footer(); ?>
