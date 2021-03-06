<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Catch Themes
 * @subpackage Simple_Catch_Pro
 * @since Simple Catch 1.0
 */

get_header();

if (have_posts()): ?>

    <header class="page-header">
        <h1 class="page-title"><?php printf(__('Результат пошуку для: <span>%s</span>', 'simple-catch'), get_search_query()); ?></h1>
    </header>

    <?php while (have_posts()) : the_post(); ?>

        <section <?php post_class(); ?>>
            <article class="full-width">
                <header class="entry-header">
                    <h1 class="entry-title"><a href="<?php the_permalink(); ?>"
                                               title="<?php echo esc_attr(get_the_title()); ?>"><?php the_title(); ?></a>
                    </h1>
                </header>
                <div class="entry-content clearfix">
                    <?php the_excerpt(); ?>
                </div> <!-- .entry-content -->
            </article>
            <div class="clear"></div>
        </section><!-- .post -->
        <hr/>

    <?php endwhile;
    // Checking WP Page Numbers plugin exist
    if (function_exists('wp_pagenavi')) :
        wp_pagenavi();

    // Checking WP-PageNaviplugin exist
    elseif (function_exists('wp_page_numbers')) :
        wp_page_numbers();

    else: ?>
        <ul class="default-wp-page clearfix" id="links">
            <li class="previous"><?php next_posts_link(__('Попередня', 'simple-catch')); ?></li>
            <li class="next"><?php previous_posts_link(__('Наступна', 'simple-catch')); ?></li>
        </ul>

    <?php endif;

else : ?>
    <section class="search-not-found">
        <article class="post">
            <header class="entry-header">
                <h1 class="entry-title"><?php printf(__('Ваш запит <span> "%s" </span> не знайдено жодних даних', 'simple-catch'), get_search_query()); ?></h1>
            </header>
            <div class="entry-content clearfix">
                <p><?php _e('Кілька пропозицій:', 'simple-catch'); ?></p>
                <ul>
                    <li><?php _e('Переконайтеся, що все написано правильно', 'simple-catch'); ?></li>
                    <li><?php _e('Спробуйте різні ключові слова', 'simple-catch'); ?></li>
                    <li><?php _e('Спробуйте більш загальні ключові слова', 'simple-catch'); ?></li>
                </ul>
                <?php get_search_form(); ?>
            </div> <!-- .entry-content -->
        </article>
        <div class="clear"></div>
    </section><!-- .post -->

<?php endif; ?>
    </div><!-- #main -->
    </div><!-- #primary -->

<?php
/**
 * simplecatch_below_primary hook
 */
do_action('simplecatch_below_primary');
?>

<?php get_sidebar(); ?>


<?php get_footer(); ?>