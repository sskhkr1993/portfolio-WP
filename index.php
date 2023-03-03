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
    <h2 class="block__heading block__heading--about">ABOUT</h2>
    <div class="about">
      <div class="about__header">
        <div class="about__avater"></div>
        <p class="about__content">名前：くらき
          <br>出身：岩手県
          <br>好きなもの：カメラ、音楽鑑賞、漫画・小説・アニメ、綺麗なもの、甘いもの
        </p>
      </div>
      <p class="about__content about__content--second">ヒィヒィ言いながらも働いたり、流行り病の影響をうけたりしているうちに、働き方についてよく考えるようになる。小さいころから興味があったデザインやWeb制作などの在宅での仕事について知り、オンラインスクールに通い始め、今に至る。</p>
    </div>
    <ul class="list-skills">
      <li class="list-skills__item">
        <i class="fab fa-html5"></i>
        <i class="fab fa-css3-alt"></i>
        <i class="fab fa-sass"></i>
        <i class="fab fa-wordpress"></i>
        <i class="fab fa-php"></i>
        <i class="fab fa-js-square"></i>
        <i class="fab fa-github-square"></i>
      </li>
      <p class="list-skills__text">SassやFLOCSSを使用したコーディング、レスポンシブ化やWordPress化が行えます。
        <br>複雑なコードのJavaScriptは書くことができませんが、jQueryなどのライブラリの使用は問題なく可能です。
      </p>
      <p class="list-skills__text">エディタは、VisualStudioCodeを使用しています。</p>
    </ul>
  </article>

  <!--contact-->
  <div class="block block--contact">
    <h2 class="block__heading block__heading--contact">CONTACT</h2>
    <form class="contact__form" action="" method="post" name="contact">
      
      <div class="form__name">
        <label class="form__label" for="name">お名前</label>
        <input class="form__input" id="name" type="text" placeholder="山田太郎">
      </div>
      <div class="form__mail">
        <label class="form__label" for="mail">メールアドレス</label>
        <input class="form__input" id="mail" type="email" placeholder="×××××＠○○○○○"></input>
      </div>
      <div class="form__content">
        <label class="form__label" for="content">お問い合わせ内容</label>
        <textarea class="form__textarea" name="" id="content" cols="30" rows="5"></textarea>
      </div>
      <div class="button form__submit">
        <input class="submit__body" type="submit" value="送信">
      </div>
    </form>
  </div>

</main>
<!--footer-->
<?php get_footer(); ?>