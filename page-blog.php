<?php
// Exit if accessed directly
if (!defined('ABSPATH')) exit;

/**
 * Blog Template
 *
 * Template Name: Blog
 *
 * The template for Blog
 *
 * @package Catch Themes
 * @subpackage Simple_Catch_Pro
 * @since Simple Catch 2.1
 */
get_header(); ?>

    <header class="page-header">
        <h1 class="page-title"><?php the_title(); ?></h1>
    </header><!-- .page-header -->

    <div class="container_blog content-part">
        <?php $options = simplecatch_get_options();
        $moretag = $options['more_tag_text'];
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $blog_query = new WP_Query(array('post_type' => 'post', 'paged' => $paged)); ?>


        <?php if ($blog_query->have_posts()) : ?>

            <?php /* Start the Loop */ ?>
            <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php
                    $format = get_post_format();
                    //If category has thumbnail it displays thumbnail and excerpt of content else excerpt only
                    if (has_post_thumbnail() && (false === $format)) : ?>
                        <div class="blog-post-thumbnail">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail(array('700', '500')); ?>
                            </a>
                        </div><!-- .post-thumbnail -->
                    <?php
                    endif; ?>

                    <div class="entry-container">
                        <header class="entry-header">
                            <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>
                        </header> <!-- .entry-header -->

                        <?php $simplecatch_excerpt = get_the_excerpt();
                        if (!empty($simplecatch_excerpt) && (false === $format)) :
                            echo '<div class="entry-summary">';
                            the_excerpt();
                            echo '</div><!-- .entry-summary --> ';
                        else :
                            echo '<div class="entry-content">';
                            the_content($moretag);
                            echo '</div><!-- .entry-content --> ';
                        endif; ?>

                    </div><!-- .entry-container -->

                </article><!-- #post-## -->

            <?php endwhile;


            // Pagination start
            if ($blog_query->max_num_pages > 1) {
                if (function_exists('wp_pagenavi')) {
                    wp_pagenavi();
                } elseif (function_exists('wp_page_numbers')) {
                    wp_page_numbers();
                } else { ?>
                    <ul class="default-wp-page clearfix">
                        <li class="previous"><?php previous_posts_link(__('Попередня сторінка', 'simple-catch')); ?></li>
                        <li class="next"><?php next_posts_link(__('Наступна сторінка', 'simple-catch'), $blog_query->max_num_pages); ?></li>
                    </ul>
                    <?php
                } ?>
                <?php
            };

        else : ?>
            <article id="post-not-found" <?php post_class(); ?>>
                <div class="entry-container post">
                    <header class="entry-header">
                        <h2><?php _e('Not found', 'simple-catch'); ?></h2>
                    </header>
                    <div class="entry-content clearfix">
                        <p><?php _e('Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'simple-catch'); ?></p>
                        <?php get_search_form(); ?>
                    </div> <!-- .entry-content -->
                </div>
                <div class="clear"></div>
            </article><!-- .post -->

        <?php endif;
        wp_reset_postdata();
        ?>
    </div>

    </div><!-- #primary -->

<?php
/**
 * simplecatch_below_primary hook
 */
do_action('simplecatch_below_primary');
?>

<?php get_footer(); ?>