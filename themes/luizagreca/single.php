<?php get_header(); ?>

<?php

if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

<div class="container">

  <div class="post-image">
    
  </div>

  <h1><?= $post->post_title ?></h1>

</div>

<?php endwhile; else: ?>
  <p><?php _e('Sorry, this page does not exist.'); ?></p>
<?php endif; ?>


<?php get_footer(); ?>
