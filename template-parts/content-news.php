<?php
/**Template part for displaying news page content in page-news.php

 *
 **/
?>

<div class="news_item clearfix">
    <div class="new_img"><?php the_post_thumbnail(array(700, 500)); ?></div>
    <div class="new_description">
        <h2 class="list_title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                <?php the_title(); ?>
            </a>
        </h2>
        <div><?php echo mb_substr(strip_tags(get_the_content()), 0, 360); ?><span>...</span></div>
        <a href="<?php the_permalink(); ?>" class="readmore">Читати далі</a>
    </div>
</div>