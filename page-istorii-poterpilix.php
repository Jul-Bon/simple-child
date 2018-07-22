<?php
/**
 * Template Name: Istoriї poterpilix
 *
 */

get_header(); ?>
    <div class="custom-page">
        <header class="page-header">
            <h1 class="page-title"><?php the_title(); ?></h1>
        </header><!-- .page-header -->

        <!-- Add the content on the page -->
        <div class="story_page_description">
            <?php while (have_posts()) : the_post();
                $more = 1;
                the_content();
            endwhile; ?>
        </div>

        <!-- Add a cycle that displays the history of the victims -->
        <div class="content-part history_list">
            <?php
            //The query
            $page_number = (get_query_var('paged')) ? get_query_var('paged') : 1;

            $args = [
                'post_type' => 'istirii_poterpilih',
                'paged' => $paged,
                'order' => 'ASC',
                'posts_per_page' => 3
            ];

            query_posts($args);

            while (have_posts()) : the_post(); ?>
                <?php get_template_part('template-parts/content-istorii-poterpilih', 'istorii-poterpilih'); ?>
            <?php endwhile; ?>
            <!-- End of the loop -->

            <div class="page-navi clearfix">
                <?php the_posts_pagination(
                    $args = array(
                        'show_all' => false,
                        'end_size' => 1,
                        'mid_size' => 1,
                        'prev_next' => true,
                        'prev_text' => '«',
                        'next_text' => '»',
                        'add_args' => false,
                        'add_fragment' => '',
                        'before_page_number' => '',
                        'after_page_number' => '',
                    )); ?>
            </div>

            <?php wp_reset_query(); ?>
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
<?php get_sidebar('questions'); ?>

<?php get_footer();