<?php get_header(); ?>

<main class="l-main l-main--archive">
  <!--WORKS-->
  <article class="block block--works block--works--archive">
    <h2 class="block__heading block__heading--works block__heading--archive"><?php the_archive_title(); ?></h2>

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
</main>

<!--footer-->
<?php get_footer(); ?>