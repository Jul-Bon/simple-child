<?php
/**This is the template that displays content on front-news

*
**/
?>

<div class="content-front-list">
    <div class="post-img">
        <?php the_post_thumbnail(array(900, 600)); ?>
    </div>
    <h4>
        <a href="<?php the_permalink(); ?>" class="title-home-post">
            <?php the_title(); ?>
        </a>
    </h4>
    <p class="excerpt"><?php the_excerpt(); ?></p>
</div>