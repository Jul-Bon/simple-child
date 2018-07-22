<?php
/**Template part for displaying komanda page content in page-komanda.php

*
**/
?>

<div class="team_member">
    <div><?php the_post_thumbnail(array(700, 700)); ?></div>
    <h4><?php the_title(); ?></h4>
    <span class="position_held"><?php the_field('position'); ?></span>
</div>