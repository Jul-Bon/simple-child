<?php
/**
 * Template Name: Komanda
 *
 */

get_header(); ?>
    <div class="custom-page">
        <header class="page-header">
            <h1 class="page-title"><?php the_title(); ?></h1>
        </header><!-- .page-header -->

        <div class="clearfix content-part team_list">
            <?php
            //The query
            $args = array(
                'post_type' => 'team',
                'order' => 'ASC',
                'posts_per_page' => 8
            );
            $members = new WP_Query($args); ?>

            <?php if ($members->have_posts()): ?>

                <!-- The loop -->
                <?php while ($members->have_posts()) : $members->the_post(); ?>
                    <?php get_template_part('template-parts/content-komanda', 'komanda'); ?>
                <?php endwhile; ?>
                <!-- End of the loop -->

                <?php wp_reset_query(); ?>
            <?php endif; ?>
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
<?php get_sidebar('about-us'); ?>

<?php get_footer();