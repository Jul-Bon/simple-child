<?php
/**This is the template that displays content single blog page
 *
 **/
?>

<article>
    <div class="single_img"><?php the_post_thumbnail(array( 800, 600 )); ?></div>
    <h1><?php the_title(); ?></h1>
    <div class="single_content_part"><?php the_content(); ?></div>
    <div class="single_nav clearfix">
        <?php
        the_post_navigation(array(
            'next_text' =>
                '<span class="nav_text">Наступна</span><span class="meta-nav " aria-hidden="true"><i class="fa fa-angle-right fa-2x" aria-hidden="true"></i></span>',
            'prev_text' =>
                '<span class="meta-nav" aria-hidden="true"><i class="fa fa-angle-left fa-2x" aria-hidden="true"></i></span><span class="nav_text">Попередня</span> '

        )); ?>
    </div>

    <div class="social_links">
        <?php echo do_shortcode("[ishare_buttons]"); ?>
    </div>
</article>