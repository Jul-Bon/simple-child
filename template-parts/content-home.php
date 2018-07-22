<?php
/**
 * This is the template that displays content for index and archive page
 *
 * @package Catch Themes
 * @subpackage Simple_Catch_Pro
 * @since Simple Catch 1.0
 */
?>
<div class="main-home-content">
    <div class="clearfix welcome-block">
        <div class="welcome-block-name">
            <h2><?php echo get_theme_mod('name_organization'); ?></h2>
            <span><?php echo get_theme_mod('who_we_are'); ?></span>
        </div>
        <div class="welcome-block-description">
            <p><?php echo get_theme_mod('block-description'); ?></p>
        </div>
    </div>
    <h3 class="title-blog-section"><?php echo get_theme_mod('title_blog_section'); ?></h3>
    <div class="clearfix">
        <div class="post-list">
            <?php
            //The query
            $args = array(
                'post_type' => 'news',
                'order' => 'date',
                'posts_per_page' => 3
            );
            $news = new WP_Query($args); ?>

            <?php if ($news->have_posts()): ?>

                <!-- The loop -->
                <?php while ($news->have_posts()) : $news->the_post(); ?>
                    <?php get_template_part('template-parts/content', 'front-news'); ?>
                <?php endwhile; ?>
                <!-- End of the loop -->

                <?php wp_reset_query(); ?>
            <?php endif; ?>
        </div>
    </div>
</div>