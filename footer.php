<?php
/**
 * The template for displaying the footer.
 *
 * @package Catch Themes
 * @subpackage Simple_Catch_Pro
 * @since Simple Catch 1.0
 */
?>
</div> <!-- .wrapper -->
</div> <!-- .site-content -->
<?php
/**
 * catchthemes_after_main hook
 */
do_action('simplecatch_after_main');
?>

<footer id="colophon" class="site-footer clearfix" role="contentinfo">

    <div class="contacts clearfix ">
        <div class="wrapper clearfix">

            <?php the_widget(
                'simplecatch_social_widget', // Base ID
                __('CT: Social Icons', 'simple-catch'), // Name
                array('description' => __('Displays Social Icons added from Customizer / Theme Options Panel', 'simple-catch'))
            ); ?>

            <div class="subscribe">
                <span class="label"><?php echo get_theme_mod('form_label'); ?></span>
                <div class="form">
                    <?php echo do_shortcode('[contact-form-7 id="51" title="Footer form ( subscribe)"]'); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-navigation wrapper">
        <div class="footer-menu clearfix">
            <?php
            wp_nav_menu( array(
                    'menu' => 'Footer menu',
                    'container' => false,
                    'menu_class' => 'foot-menu clearfix',
            )); ?>

        </div>
    </div>

    <div  class="copyright wrapper">
        <span><?php echo get_theme_mod('footer_copy'); ?></span>
    </div>

</footer><!-- #colophon -->

<?php
/**
 * simplecatch_after hook
 *
 * @hooked simplecatch_scrollup - 15
 */
do_action('simplecatch_after');
?>
</div><!-- #page -->
<?php wp_footer(); ?>

<script id="dsq-count-scr" src="//stopnasylstvo.disqus.com/count.js" async></script>

</body>
</html>