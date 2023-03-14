<?php
/*
Template Name: about
Template Post Type: page
*/
?>
<?php get_header(); ?>
<main class="l-main l-main--page">

  <!--about-->
  <article class="block block--about">
    <h2 class="block__heading block__heading--about"><?php echo esc_html(get_the_title(5)); ?></h2>
    <?php
    $args = array('page_id' => 5);
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) : ?>
      <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <?php the_content(); ?>
    <?php
      endwhile;
    endif;
    wp_reset_postdata();
    ?>
  </article>
</main>

<?php get_footer(); ?>