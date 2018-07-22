<?php
/**
 * Template Name: Partners
 *
 * This is the template that displays all pages by default.
 *
 * @package Catch Themes
 * @subpackage Simple_Catch_Pro
 * @since Simple Catch 1.0
 */



get_header(); ?>


    <div class="custom-page">
        <header class="page-header">
            <h1 class="page-title"><?php the_title(); ?></h1>
        </header>

        <div class="clearfix partneri">
            <?php
            //The query
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'partners',
                'order' => 'ASC',
                'posts_per_page' => 6,
                'paged' => $paged,
            );
            $partners = new WP_Query($args); ?>
                <?php
                query_posts($args);
                while (have_posts()) :
                    the_post(); ?>
                    <?php get_template_part('template-parts/content', 'partners'); ?>
                <?php endwhile; ?>


                <!--navigation-->
                <div class="page-navi clearfix">
                    <?php the_posts_pagination(
                        $args = array(
                            'show_all'     => false,
                            'end_size'     => 1,
                            'mid_size'     => 1,
                            'prev_next'    => true,
                            'prev_text'    => '«',
                            'next_text'    => '»',
                            'add_args'     => false,
                            'add_fragment' => '',
                            'before_page_number' => '',
                            'after_page_number' => '',
                        )); ?>
                </div>
                <?php wp_reset_query(); ?>
        </div>
    </div>



    </div><!-- #primary -->

<?php
/**
 * simplecatch_below_primary hook
 */
do_action( 'simplecatch_below_primary' );
?>

<?php get_sidebar('about-us'); ?>


<?php get_footer(); ?>