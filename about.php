
<?php get_header(); ?>

<main class="l-main l-main--page">

  <!--about-->
  <article class="block block--about">
    <h2 class="block__heading block__heading--about"><?php the_title(); ?></h2>
    <?php
    //$argsのプロパティを変えていく
    $args = array(
      'post_type' => 'page',
      'name' => 'about',
    );
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) :
      while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <?php the_content(); ?>
    <?php

      /* ループ内の記述 */

      endwhile;
    endif;
    wp_reset_postdata();
    ?>
  </article>
</main>

<?php get_footer(); ?>