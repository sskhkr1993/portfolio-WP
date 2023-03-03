<?php get_header(); ?>

<main class="l-main l-main--page">
  <!--page-->
  <article class="block block--page">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h2 class="block__heading block__heading--page"><?php the_title(); ?></h2>
        <!--card-->
        <article class="card card--page" <?php post_class(); ?>>
          <?php the_content(); ?>
        </article>

        <?php the_post_navigation(array(
          'prev_text' => '<i class="fas fa-angle-left"></i><span class=pagination-list__text>前へ：%title</span>',
          'next_text' => '<span class=pagination-list__text>%title：次へ</span><i class="fas fa-angle-right"></i>',
        )); ?>
        <?php wp_link_pages(); ?>
      <?php endwhile;
    else : ?>
      <p>記事はありません。</p>
    <?php endif; ?>
  </article>

</main>

<!--footer-->
<?php get_footer(); ?>