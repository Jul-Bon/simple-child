<?php
/**
 * Template Name: Pogertvyvatu
 *
 */

get_header(); ?>
    <div class="donate_page">
        <div class="custom-page">
            <header class="page-header">
                <h1 class="page-title"><?php the_title(); ?></h1>
            </header><!-- .page-header -->

            <!-- Add the content on the page -->
            <div class="requisites">
                <?php while (have_posts()) : the_post();
                    $more = 1;
                    the_content();
                endwhile; ?>
            </div>
        </div>
    </div>

    </main><!-- #main -->
    </div><!-- #primary -->

<?php
/**
 * simplecatch_below_primary hook
 */
do_action('simplecatch_below_primary');
?>

<?php get_footer();