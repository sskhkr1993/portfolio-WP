<?php
/*
Template Name: page-contact
Template Post Type: page
*/
?>
<?php get_header(); ?>

<main class="l-main l-main--page">

  <!--contact-->
  <div class="block block--contact">
    <h2 class="block__heading block__heading--contact">CONTACT</h2>
    <div class="block__content block__content--contact">
      <p>仕事のご依頼やご相談など、お気軽にお問い合わせください。</p>
    </div>
    <?php
    //$argsのプロパティを変えていく
    $args = array(
      'post_type' => 'page',
      'name' => 'contact',
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
  </div>

</main>

<!--footer-->
<?php get_footer(); ?>