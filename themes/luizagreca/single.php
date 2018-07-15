<?php get_header(); ?>
<link href="<?php echo get_bloginfo('template_url'); ?>/css/single.css" rel="stylesheet">



<?php

if ( have_posts() ) : while ( have_posts() ) : the_post();


$image_full = wp_get_attachment_image_src( get_post_thumbnail_id(), 'single-post-thumbnail' )[0];
?>

<div class="background">
  <div class="gradient-white-top">
  </div>

  <div class="gradient-white-bottom">
  </div>
</div>



<div class="container">

  <hr />

  <div class="post-image" style="background-image: url(<?= $image_full ?>);">
  </div>

  <h1><?= $post->post_title ?></h1>
  <div class="post-date">
    <?php the_time('j \d\e F \d\e Y'); ?>
  </div>

  <div class="post-contents">
    <?php the_content(); ?>
  </div>

</div>

<?php endwhile; else: ?>
  <p><?php _e('Sorry, this page does not exist.'); ?></p>
<?php endif; ?>


<?php get_footer(); ?>
