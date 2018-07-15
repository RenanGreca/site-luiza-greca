<?php get_header();

?>

<div class="container">

  <hr />

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();

display_list_item_with_post($post);
?>

<?php endwhile; else: ?>
  <p><?php _e('Nenhum post encontrado.'); ?></p>
<?php endif; ?>

</div>
<?php get_footer(); ?>
