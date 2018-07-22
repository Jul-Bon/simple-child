<?php
/**
 * Simple Child functions and definitions

 */

function my_theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );


//Register style sheet.
// Add template unique style sheet.
function add_simplecatch_scripts() {
    //Sass styles
    wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/css/main.css');
}
add_action('wp_enqueue_scripts', 'add_simplecatch_scripts');


// Add jQuery and JS.
//Flexslider.
function jquery_init()
{
    if (!is_admin()) {
        wp_enqueue_script('jquery');
    }
}

add_action('wp_enqueue_scripts', 'jquery_init');

function add_my_scripts()
{
    //Theme JS
    wp_enqueue_script('main_js', get_stylesheet_directory_uri() . '/js/main.js');

    //Ajax
    wp_enqueue_script( 'ajax_events', get_stylesheet_directory_uri().( '/js/ajax_events.js' ), array( 'jquery'
    ));
}

add_action('wp_enqueue_scripts', 'add_my_scripts');




if (!function_exists('simple_child_setup')) :

    function simple_child_setup()
    {
        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'menu-foot-2' => esc_html__('Footer', 'simple_child'),
            'menu-social-3' => esc_html__('Social', 'simple_child'),
            'menu-about-us' => esc_html__('About us', 'simple_child'),
            'menu-questions' => esc_html__('Questions and answers', 'simple_child'),
            'menu-activity' => esc_html__(' Activity', 'simple_child'),
        ));

        add_theme_support('custom-logo', array(
            'height' => 40,
            'width' => 80,
            'flex-width' => true,
            'flex-height' => true,
        ));
    }
endif;
add_action('after_setup_theme', 'simple_child_setup');


require trailingslashit( get_stylesheet_directory () ) . 'functions/panel/customizer/customizer.php';



if ( function_exists('register_sidebar') ) {

    register_sidebar(array(
        'name' => 'about us',
        'id' => 'about-us',
        'description' => 'Для сторінки Про нас',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));

    register_sidebar(array(
        'name' => 'questions and answers',
        'id' => 'questions',
        'description' => 'Для сторінки Запитання та відповіді',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));

    register_sidebar(array(
        'name' => 'activity',
        'id' => 'activity',
        'description' => 'Для сторінки Діяльність',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));

}
/// add class active to current menu-item in sidebar
add_filter('nav_menu_css_class', 'add_active_class', 10, 2 );

function add_active_class($classes, $item) {

    if(
 in_array( 'current-menu-item', $classes ) ||
        in_array( 'current-menu-ancestor', $classes ) ||
        in_array( 'current-menu-parent', $classes ) ||
        in_array( 'current_page_parent', $classes ) ||
        in_array( 'current_page_ancestor', $classes )
    ) {

        $classes[] = "active";
    }

    return $classes;
}



// Ajax load more events
function true_load_posts(){

    $args = unserialize( stripslashes( $_POST['query'] ) );
    $args['paged'] = $_POST['page'] + 1;
    $args['post_status'] = 'publish';

    query_posts( $args );

    if( have_posts() ) :

        while( have_posts() ): the_post();

            get_template_part('template-parts/content', 'social_worker');

        endwhile;

    endif;
    die();
}

add_action('wp_ajax_loadmore', 'true_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');

function true_load_post(){

    $args = unserialize( stripslashes( $_POST['query'] ) );
    $args['paged'] = $_POST['page'] + 1;
    $args['post_status'] = 'publish';

    query_posts( $args );

    if( have_posts() ) :

        while( have_posts() ): the_post();

            get_template_part('template-parts/content', 'psih');

        endwhile;

    endif;
    die();
}
add_action('wp_ajax_loads', 'true_load_post');
add_action('wp_ajax_nopriv_loads', 'true_load_post');


function jurist_load(){

    $args = unserialize( stripslashes( $_POST['query'] ) );
    $args['paged'] = $_POST['page'] + 1;
    $args['post_status'] = 'publish';

    query_posts( $args );

    if( have_posts() ) :

        while( have_posts() ): the_post();

            get_template_part('template-parts/content', 'jurist');

        endwhile;

    endif;
    die();
}
add_action('wp_ajax_loading', 'jurist_load');
add_action('wp_ajax_nopriv_loading', 'jurist_load');






