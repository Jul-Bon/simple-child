<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package Catch Themes
 * @subpackage Simple_Catch_Pro
 * @since Simple Catch 1.0
 */


/**
 * simplecatch_above_secondary hook
 */
do_action('simplecatch_above_secondary');

$simplecatch_layout = simplecatch_get_theme_layout();

if ('left-sidebar' == $simplecatch_layout || 'right-sidebar' == $simplecatch_layout) {

    //Getting Ready to load data from Theme Options Panel
    global $post, $wp_query;

    // Front page displays in Reading Settings
    $page_on_front = get_option('page_on_front');
    $page_for_posts = get_option('page_for_posts');

    // Get Page ID outside Loop
    $page_id = $wp_query->get_queried_object_id();

    if ($post) {
        if (is_attachment()) {
            $parent = $post->post_parent;
            $sidebaroptions = get_post_meta($parent, 'simplecatch-sidebar-options', true);
        } else {
            $sidebaroptions = get_post_meta($post->ID, 'simplecatch-sidebar-options', true);
        }
    } else {
        $sidebaroptions = '';
    }

    echo '<aside id="secondary" class="widget-area" role="complementary">';

    /**
     * simplecatch_before_widget_start hook
     */
    do_action('simplecatch_before_widget_start');

    if (is_active_sidebar('about-us')) {
        dynamic_sidebar('about-us');
    } else { ?>
        <nav>
            <?php wp_nav_menu(array(
                'theme_location' => 'menu-about-us',
                'items_wrap' => '<ul id="%1$s" class="menu_our_sidebar %2$s">%3$s</ul>',
                'menu_class' => 'menu_our_sidebar',
            )); ?>
        </nav>
    <?php }

    /**
     * simplecatch_after_widget_ends hook
     */
    do_action('simplecatch_after_widget_ends');

    echo '</aside><!-- #secondary -->';
}

/**
 * simplecatch_below_secondary hook
 */
do_action('simplecatch_below_secondary');