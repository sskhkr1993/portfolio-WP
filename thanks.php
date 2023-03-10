<?php
/*
Template Name: thanks
Template Post Type: page
*/
?>
<?php get_header(); ?>
<main class="l-main l-main--thanks">

  <!--thanks-->
  <?php
  $args = array('page_id' => 102);
  $the_query = new WP_Query($args);
  if ($the_query->have_posts()) : ?>
    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php the_content(); ?>
      </div>
    <?php endwhile; ?>
  <?php else : endif; ?>

</main>

<!--footer-->
<?php get_footer(); ?>