<?php
/**
 * Template Name: Zadati pitannya
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

        <?php while (have_posts()):the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php
                $format = get_post_format();
                ?>
                <div class="kontent-ask">
                    <?php the_content(); ?>
                </div>

            </article><!-- #post-## -->

        <?php endwhile; ?>
        <div class="wrap-form">
            <div class="form-questions">
                <p class="field">* поля обов'язкові для заповнення</p>
                <?php echo do_shortcode('[contact-form-7 id="401" title="Questions"]'); ?>
            </div>
        </div>
        <div class="answers">
            <h3>Відповіді</h3>

            <div class="wrap-answers clearfix">
                <ul class="cat-list">
                    <li class="tab-link current" data-tab="tab-1">
                        <?php echo get_cat_name(8); ?> <span>(<?php echo get_category(8)->category_count; ?>)</span>
                    </li>
                    <li class="tab-link" data-tab="tab-2">
                        <?php echo get_cat_name(9); ?> <span>(<?php echo get_category(9)->category_count; ?>)</span>
                    </li>
                    <li class="tab-link" data-tab="tab-3">
                        <?php echo get_cat_name(10); ?> <span>(<?php echo get_category(10)->category_count; ?>)</span>
                    </li>
                </ul>
                <div class="answers-content">
                    <div class="tabs-content current" id="tab-1">
                        <?php
                        //The query
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array(
                            'post_type' => 'social_worker',
                            'order' => 'ASC',
                            'posts_per_page' => 6,
                            'paged' => $paged,
                        );
                        $social = new WP_Query($args); ?>
                        <?php
                        query_posts($args);
                        while (have_posts()) :
                            the_post(); ?>
                            <?php get_template_part('template-parts/content', 'social_worker'); ?>
                        <?php endwhile; ?>
                        <!-- End of the loop -->
                        <?php if ($wp_query->max_num_pages > 1) : ?>
                            <script>
                              var social_worker_ajax_url = '<?php echo site_url() ?>/wp-admin/admin-ajax.php'
                              var social_worker_true_posts = '<?php echo serialize($wp_query->query_vars); ?>'
                              var social_worker_current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
                              var social_worker_max_pages = '<?php echo $wp_query->max_num_pages; ?>'
                            </script>
                            <div id="true_loadmore" class="load-my-posts">Читати далі</div>
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>
                    </div>
                    <div class="tabs-content" id="tab-2">
                        <?php
                        //The query
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array(
                            'post_type' => 'psychologist',
                            'order' => 'ASC',
                            'posts_per_page' => 6,
                            'paged' => $paged,
                        );
                        $social = new WP_Query($args); ?>

                        <?php
                        query_posts($args);
                        while (have_posts()) :
                            the_post(); ?>
                            <?php get_template_part('template-parts/content', 'psih'); ?>
                        <?php endwhile; ?>
                        <!-- End of the loop -->
                        <?php if ($wp_query->max_num_pages > 1) : ?>
                            <script>
                              var psychologist_ajaxurls = '<?php echo site_url() ?>/wp-admin/admin-ajax.php'
                              var psychologist_true_posts = '<?php echo serialize($wp_query->query_vars); ?>'
                              var psychologist_current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
                              var psychologist_max_pages = '<?php echo $wp_query->max_num_pages; ?>'
                            </script>
                            <div id="true_button" class="load-my-posts">Читати далі</div>
                        <?php endif; ?>

                        <?php wp_reset_query(); ?>
                    </div>
                    <div class="tabs-content" id="tab-3">
                        <?php
                        //The query
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array(
                            'post_type' => 'jurist',
                            'order' => 'ASC',
                            'posts_per_page' => 6,
                            'paged' => $paged,
                        );
                        $social = new WP_Query($args); ?>
                        <?php
                        query_posts($args);
                        while (have_posts()) :
                            the_post(); ?>
                            <?php get_template_part('template-parts/content', 'jurist'); ?>
                        <?php endwhile; ?>
                        <!-- End of the loop -->
                        <?php if ($wp_query->max_num_pages > 1) : ?>
                            <script>
                              var jurist_ajaxurls = '<?php echo site_url() ?>/wp-admin/admin-ajax.php'
                              var jurist_true_posts = '<?php echo serialize($wp_query->query_vars); ?>'
                              var jurist_current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
                              var jurist_max_pages = '<?php echo $wp_query->max_num_pages; ?>'
                            </script>
                            <div id="jurist_load" class="load-my-posts">Читати далі</div>
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>
                    </div>
                </div>

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