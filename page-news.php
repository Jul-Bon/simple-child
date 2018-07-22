<?php
/**
 * Template Name: News
 *
 */

get_header(); ?>
    <div class="news-page">
        <header class="page-header">
            <h1 class="page-title"><?php the_title(); ?></h1>
        </header><!-- .page-header -->

        <!-- Add a cycle that displays the news -->
        <div class="content-part news_list">
            <?php
            //The query
            $page_number = (get_query_var('paged')) ? get_query_var('paged') : 1;

            $args = [
                'post_type' => 'news',
                'paged' => $paged,
                'order' => 'DESC',
                'posts_per_page' => 4
            ];

            query_posts($args);

            while (have_posts()) : the_post(); ?>
                <?php get_template_part('template-parts/content-news', 'news'); ?>
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

<?php get_footer();