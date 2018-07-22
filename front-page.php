<?php
/**
 * Created by PhpStorm.
 * User: Hi-Tech
 * Date: 01.03.2018
 * Time: 13:36
 */


get_header();
get_template_part( 'template-parts/content-home' ); ?>
    </div><!-- #primary -->
    <div class="front-sidebar">
        <?php get_sidebar(); ?>
    </div>

<?php get_footer(); ?>