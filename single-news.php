<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Catch Themes
 * @subpackage Simple_Catch_Pro
 * @since Simple Catch 1.0
 */


get_header(); ?>

    <header class="page-header">
        <span class="page-title">Новини</span>
    </header><!-- .page-header -->

    <div class="container single_page">

        <?php while (have_posts()) : the_post(); ?>
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
            </article>

            <div class="social_links">
                <?php echo do_shortcode("[ishare_buttons]"); ?>
            </div>

            <div class="comments">
                <!--Disqus comments -->
                <div id="disqus_thread"></div>
                <script>

                  /**
                   *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                   *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                  /*
                  var disqus_config = function () {
                  this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                  this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                  };
                  */
                  (function () { // DON'T EDIT BELOW THIS LINE
                    var d = document, s = d.createElement('script')
                    s.src = 'https://stopnasylstvo.disqus.com/embed.js'
                    s.setAttribute('data-timestamp', +new Date());
                    (d.head || d.body).appendChild(s)
                  })()
                </script>
                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments
                        powered by Disqus.</a></noscript>
            </div>


        <?php endwhile; // End of the loop.
        ?>
    </div>


    </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
