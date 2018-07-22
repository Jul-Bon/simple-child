<?php
/**
 * Template Name: Contacts
 *
 */

get_header(); ?>


    <header class="page-header">
        <h1 class="page-title"><?php the_title(); ?></h1>
    </header><!-- .page-header -->
    <div class="contuct_page">
        <!-- Add the content on the page -->
        <?php while (have_posts()) : the_post();
            $more = 1;
            the_content();
        endwhile; ?>

        <ul class="list-contacts">
            <li>
                <a href="mailto:<?php the_field('email'); ?>">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <?php the_field('email'); ?>
                </a>
            </li>
            <li>
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <?php the_field('address'); ?>
            </li>
            <li>
                <i class="fa fa-phone" aria-hidden="true"></i>
                <?php the_field('telefone'); ?>
            </li>
            <li class="mobile">
                <?php the_field('mobile'); ?>
            </li>
        </ul>

        <h3>Зворотній зв'язок:</h3>
        <p class="field">* поля обов'язкові для заповнення</p>
        <div class="contuct-form">
            <?php echo do_shortcode('[contact-form-7 id="397" title="Contuct us"]'); ?>
        </div>
    </div>


    </main><!-- #main -->
    </div><!-- #primary -->

<?php
/**
 * simplecatch_below_primary hook
 */
do_action('simplecatch_below_primary');
?>

<?php get_footer();