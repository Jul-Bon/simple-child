<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Catch Themes
 * @subpackage Simple_Catch_Pro
 * @since Simple Catch 1.0
 */
get_header(); ?>
    <section class="error-404 not-found">
        <header class="entry-header">
            <h1 class="entry-title"><?php _e('Error 404 - Сторінку не знайдено.', 'simple-catch'); ?></h1>
        </header><!-- .page-header -->
        <div class="page-content entry-content clearfix">
            <p><?php _e('Нам шкода! Ця сторінка недоступна.', 'simple-catch'); ?></p>
            <h4><?php _e('Це може бути тому, що:', 'simple-catch'); ?></h4>
            <p><?php _e('Ви ввели неправильну веб-адресу, або сторінка, яку ви шукали, може бути переміщена, оновлена чи видалена.', 'simple-catch'); ?></p>
            <h4><?php _e('Будь ласка, спробуйте наступні варіанти:', 'simple-catch'); ?></h4>
            <p><?php _e('Перевірте чи правильно введений URL-адреси, потім натисніть кнопку оновлення у своєму веб-переглядачі або Використовуйте вікно пошуку нижче.', 'simple-catch'); ?></p>
            <?php
            // get search form
            get_search_form();
            ?>
        </div>
    </section>

    </div><!-- #main -->

    </div><!-- #primary -->

<?php
/**
 * simplecatch_below_primary hook
 */
do_action('simplecatch_below_primary');
?>

<?php get_footer(); ?>