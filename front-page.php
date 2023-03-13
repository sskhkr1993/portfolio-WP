<?php get_header(); ?>

<main class="l-main">

  <!--WORKS-->
  <article class="block block--works">
    <h2 class="block__heading block__heading--works">WORKS</h2>
    <!--card-container-->
    <ul class="card-container">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <li class="card-container__item">
            <div class="card">
              <div class="card__header">
                <a class="card__link" href="<?php echo esc_url(get_permalink()); ?>">
                  <figure class="card__figure"><?php the_post_thumbnail(); ?></figure>
                </a>
              </div>
              <div class="card__body">
                <h3 class="card__title"><?php the_title(); ?></h3>
                <h4 class="card__subtitle"><?php the_category(); ?></h4>
                <p class="card__content"><?php the_tags('', '/', ''); ?></p>
              </div>
            </div>
          </li>
        <?php endwhile;
      else : ?>
        <p>記事はありません。</p>
      <?php endif; ?>
    </ul>

  </article>

  <!--about-->
  <article class="block block--about">
    <h2 class="block__heading block__heading--about"> <?php echo esc_html(get_the_title(5)); ?></h2>
    <?php $args = array('page_id' => 5);
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) : ?>
      <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <?php the_content(); ?>
        </div>
      <?php endwhile; ?>
    <?php else : endif; ?>
    <?php wp_reset_postdata(); ?>
  </article>

  <!--contact-->
  <div class="block block--contact">
    <h2 class="block__heading block__heading--contact"><?php echo esc_html(get_the_title(9)); ?></h2>
    <?php
    $args = array('page_id' => 9);
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) : ?>
      <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <?php the_content(); ?>
        </div>
      <?php endwhile; ?>
    <?php else : endif; ?>
    <?php wp_reset_postdata(); ?>
  </div>

</main>
<!--footer-->
<?php get_footer(); ?>