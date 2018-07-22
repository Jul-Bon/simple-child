<?php
/**
 * Template Name: Help Centers
 *
 */

get_header(); ?>

    <div class="custom-page" id="top">
        <header class="page-header">
            <h1 class="page-title"><?php the_title(); ?></h1>
        </header><!-- .page-header -->

        <ul class="tabs clearfix">
            <?php
            //The query
            $i = 1;
            $args = array(
                'post_type' => 'help_centers',
                'orderby' => 'title',
                'order' => 'ASC',
                'posts_per_page' => 25
            );
            $centers = new WP_Query($args); ?>

            <?php if ($centers->have_posts()): ?>

                <!-- The loop -->
                <?php while ($centers->have_posts()) : $centers->the_post(); ?>

                    <li class="tab clearfix">
                        <span class="region"><a href="#top" class="region_link"><?php the_title(); ?></a></span>
                        <div class="tab-content">
                            <?php the_content(); ?>
                            <ul class="list-contacts">
                                <li>
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <?php the_field('telefone'); ?>
                                </li>
                                <li>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <?php the_field('address'); ?>
                                </li>
                                <li>
                                    <i class="fa fa-globe" aria-hidden="true"></i>
                                    <a href="<?php the_field('web_address'); ?>" target="_blank">
                                        <?php the_field('web_address'); ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:<?php the_field('email'); ?>">
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                        <?php the_field('email'); ?>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                <?php endwhile; ?>
                <!-- End of the loop -->

                <?php wp_reset_query(); ?>
            <?php endif; ?>
        </ul>
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