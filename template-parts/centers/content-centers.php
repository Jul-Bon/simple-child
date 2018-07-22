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
        <?php $catquery = new WP_Query('orderby=date'); ?>
        <ul class="post-list">
            <?php while ($catquery->have_posts()): $catquery->the_post(); ?>
                <li>
                    <div class="post-img">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <h4>
                        <a href="<?php the_permalink(); ?>" class="title-home-post">
                            <?php the_title(); ?>
                        </a>
                    </h4>
                    <p class="excerpt"><?php the_excerpt(); ?></p>
                </li>
            <?php endwhile;
            wp_reset_postdata();
            ?>
        </ul>
    </div>
</div>