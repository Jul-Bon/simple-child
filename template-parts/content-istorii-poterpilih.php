<?php
/**Template part for displaying istorii page content in page-istorii-poterpilih.php

 *
 **/
?>

<div class="story_item clearfix">
    <div class="story_img"><?php the_post_thumbnail(array(700, 500)); ?></div>
    <div class="story_description">
        <h2 class="list_title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                <?php the_title(); ?>
            </a></h2>
        <div><?php the_excerpt(); ?></div>
    </div>
</div>