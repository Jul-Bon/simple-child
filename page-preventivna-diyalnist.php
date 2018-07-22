<?php
/**
 * Template Name: Prevent Activity
 *
 */


get_header();
?>
    <div class="custom-page">
        <?php if (have_posts()) : ?>
            <?php if (!is_home() || !is_front_page()) { ?>
                <header class="page-header">
                    <h1 class="page-title"><?php the_title(); ?></h1>
                </header><!-- .page-header -->
                <?php
            } ?>
            <div class="wrap-content">
            <?php while (have_posts()):the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php
                    $format = get_post_format();
                    ?>
                        <div class="help-contact">
                        <?php the_content(); ?>
                    </div>

                </article><!-- #post-## -->

            <?php endwhile; ?>

            <?php simplecatch_content_nav('nav-below'); ?>
            </div>
        <?php endif; ?>
    </div>

    </div><!-- #primary -->

<?php
/**
 * simplecatch_below_primary hook
 */
do_action('simplecatch_below_primary');
?>
<?php get_sidebar('activity'); ?>

<?php get_footer(); ?>