<?php
/**
 * Template Name: Zaxist Prav Ditej
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
        <div class="wrap-content">
            <?php while (have_posts()):the_post(); ?>

                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php
                    $format = get_post_format();
                    ?>
                    <div class="zaxist-prav-kontent">
                        <?php the_post_thumbnail('slider'); ?>
                        <?php the_content(); ?>
                    </div>
                </div><!-- #post-## -->

            <?php endwhile; ?>

            <div class="zaxist-ditej-list">
                <?php
                //The query
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'post_type' => 'protect_children',
                    'order' => 'ASC',
                    'posts_per_page' => 3,
                    'paged' => $paged,
                );
                $partners = new WP_Query($args); ?>

                    <!-- The loop -->
                <?php
                query_posts($args);
                while (have_posts()) :
                    the_post(); ?>
                        <?php get_template_part('template-parts/content', 'zaxist-prav-ditej'); ?>
                    <?php endwhile; ?>
                    <!-- End of the loop -->

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

    </div>
    </div><!-- #primary -->

<?php
/**
 * simplecatch_below_primary hook
 */
do_action('simplecatch_below_primary');
?>

<?php get_sidebar('questions'); ?>


<?php get_footer(); ?>