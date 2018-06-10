<?php

add_theme_support( 'post-thumbnails' );

function get_posts_from_category($category) {

  $args = array(
    'posts_per_page'   => 3,
    'category_name'    => $category,
    'orderby'          => 'date',
    'order'            => 'DESC',
    'post_type'        => 'post',
    'post_status'      => 'publish',
    'suppress_filters' => true
  );
  return get_posts( $args );

}

function display_mosaic_item_with_post($post) {

  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' )[0];
  $permalink = get_post_permalink($post->ID);
  if (has_excerpt($post->ID)) {
    $excerpt = get_the_excerpt($post->ID);
  }

  ?>
  <div class="mosaic-item">
    <a href="<?= $permalink ?>">
      <div class="mosaic-image" style="background-image: url(<?= $image ?>);">
        <!-- <img src="" class="mosaic-image"/> -->
      </div>
      <h2><?= $post->post_title ?></h2>
    </a>
    <?= $excerpt ?>
  </div>
  <?php

}

?>
