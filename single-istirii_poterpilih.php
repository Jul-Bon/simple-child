<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Catch Themes
 * @subpackage Simple_Catch_Pro
 * @since Simple Catch 1.0
 */


get_header(); ?>

    <div class="container single_history clearfix">
        <?php while (have_posts()) : the_post(); ?>

            <article>
                <div class="history_img"><?php the_post_thumbnail(array(600, 400)); ?></div>
                <h1><?php the_title(); ?></h1>
                <div class="single_content_part"><?php the_content(); ?></div>
                <div class="single_nav clearfix">
                    <?php
                    the_post_navigation(array(
                        'next_text' =>
                            '<span class="nav_text">Наступна</span><span class="meta-nav " aria-hidden="true"><i class="fa fa-angle-right fa-2x" aria-hidden="true"></i></span>',
                        'prev_text' =>
                            '<span class="meta-nav" aria-hidden="true"><i class="fa fa-angle-left fa-2x" aria-hidden="true"></i></span><span class="nav_text">Попередня</span> '

                    )); ?>
                </div>
            </article>

        <?php endwhile; // End of the loop.
        ?>

    </div>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
