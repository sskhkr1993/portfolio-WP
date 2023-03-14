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
      <?php the_content(); ?>
  <?php
    endwhile;
  endif;
  wp_reset_postdata();
  ?>
</main>

<!--footer-->
<?php get_footer(); ?>