<?php
/*
Template Name: contact
Template Post Type: page
*/
?>

<?php get_header(); ?>

<main class="l-main l-main--page">

  <!--contact-->
  <div class="block block--contact">
    <h2 class="block__heading block__heading--contact"><?php echo esc_html(get_the_title(9)); ?></h2>
    <?php
    $args = array('page_id' => 9);
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) :
      while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <?php the_content(); ?>
    <?php
      endwhile;
    endif;
    wp_reset_postdata();
    ?>
  </div>

</main>

<!--footer-->
<?php get_footer(); ?>