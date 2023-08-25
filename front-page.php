<?php get_header(); ?>

<?php
$home = esc_url( home_url( '/' ) );
$campaign = esc_url( home_url( '/campaign/' ) );
$about = esc_url( home_url( '/about/' ) );
$information = esc_url( home_url( '/information/' ) );
$blog = esc_url( home_url( '/blog/' ) );
$voice = esc_url( home_url( '/voice/' ) );
$price = esc_url( home_url( '/price/' ) );
$faq = esc_url( home_url( '/faq/' ) );
$contact = esc_url( home_url( '/contact/' ) );
$policy = esc_url( home_url( '/privacy-policy/' ) );
$terms = esc_url( home_url( '/terms-of-service/' ) );
$sitemap = esc_url( home_url( '/sitemap/' ) );
?>

<div class="mv">
  <div class="mv__inner">
    <div class="mv__slider swiper js-mv-slider">
      <div class="mv__slider-wrapper swiper-wrapper">
        <div class="mv__slider-image swiper-slide">
          <picture>
            <source media="(min-width: 768px)"
              srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/mv.jpg" />
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv-sp.jpg"
              alt="綺麗なエメラルドグリーンの海底を歩くウミガメの様子" />
          </picture>
        </div>
        <div class="mv__slider-image swiper-slide">
          <picture>
            <source media="(min-width: 768px)"
              srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/mv-01.jpg" />
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv-sp-01.jpg"
              alt="ウミガメと一緒に泳ぐダイバーたちの様子" />
          </picture>
        </div>
        <div class="mv__slider-image swiper-slide">
          <picture>
            <source media="(min-width: 768px)"
              srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/mv-02.jpg" />
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv-sp-02.jpg"
              alt="広い海で航海する船の様子" />
          </picture>
        </div>
        <div class="mv__slider-image swiper-slide">
          <picture>
            <source media="(min-width: 768px)"
              srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/mv-03.jpg" />
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv-sp-03.jpg"
              alt="エメラルドグリーンの海と白い砂浜が映っている様子" />
          </picture>
        </div>
      </div>
    </div>
    <div class="mv__title">
      <h2 class="mv__title-main">diving</h2>
      <p class="mv__title-sub">into&nbsp;the&nbsp;ocean</p>
    </div>
  </div>
</div>

<section class="campaign top-campaign">
  <div class="campaign__inner inner">
    <div class="campaign__title section-title">
      <p class="section-title__main">campaign</p>
      <h2 class="section-title__sub">キャンペーン</h2>
    </div>
    <div class="campaign__slider campaign-cards swiper js-campaign-swiper">
      <?php
  $args = [
  'post_type' => 'campaign',
  'posts_per_page' => 10
  ];
  $the_query = new WP_Query($args);
  ?>
      <?php if ($the_query->have_posts()) : ?>
      <ul class="campaign-cards__items swiper-wrapper">
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <li class="campaign-cards__item campaign-card swiper-slide">
          <?php if (has_post_thumbnail()) { ?>
          <div class="campaign-card__image">
            <?php the_post_thumbnail(); ?>
          </div>
          <?php } else { ?>
          <div class="campaign-card__image">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/assets/images/common/noimage.jpg"
              alt="画像無し">
          </div>
          <?php } ?>
          <div class="campaign-card__body">
            <div class="campaign-card__category">
              <?php
                $terms = get_the_terms($post->ID, 'campaign_category');
                foreach ($terms as $term) {
                echo $term->name;
                }
                ?>
            </div>
            <h3 class="campaign-card__title"><?php the_title(); ?></h3>
          </div>
          <div class="campaign-card__textBlock">
            <p class="campaign-card__text">全部コミコミ(お一人様)</p>
            <div class="campaign-card__price">
              <p class="campaign-card__price-regular">&yen;<?php echo $old_price ?></p>
              <p class="campaign-card__price-sale">&yen;<?php echo $new_price ?></p>
            </div>
          </div>
        </li>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>

        <!-- <li class="campaign-cards__item campaign-card swiper-slide">
          <div class="campaign-card__image">
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/campaign-2.jpg"
              alt="海岸からダイビングスポットまで運ぶ船の乗り場" />
          </div>
          <div class="campaign-card__body">
            <div class="campaign-card__category">体験ダイビング</div>
            <h3 class="campaign-card__title">貸切体験ダイビング</h3>
          </div>
          <div class="campaign-card__textBlock">
            <p class="campaign-card__text">全部コミコミ(お一人様)</p>
            <div class="campaign-card__price">
              <p class="campaign-card__price-regular">&yen;24&#44;000</p>
              <p class="campaign-card__price-sale">&yen;18&#44;000</p>
            </div>
          </div>
        </li>
        <li class="campaign-cards__item campaign-card swiper-slide">
          <div class="campaign-card__image">
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/campaign-3.jpg"
              alt="複数のダイバーが海から顔を出している様子" />
          </div>
          <div class="campaign-card__body">
            <div class="campaign-card__category">体験ダイビング</div>
            <h3 class="campaign-card__title">ナイトダイビング</h3>
          </div>
          <div class="campaign-card__textBlock">
            <p class="campaign-card__text">全部コミコミ(お一人様)</p>
            <div class="campaign-card__price">
              <p class="campaign-card__price-regular">&yen;10&#44;000</p>
              <p class="campaign-card__price-sale">&yen;8&#44;000</p>
            </div>
          </div>
        </li>
        <li class="campaign-cards__item campaign-card swiper-slide">
          <div class="campaign-card__image-box">
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/campaign-4.jpg"
              alt="海の中を色とりどりの魚が泳ぐ様子" />
          </div>
          <div class="campaign-card__body">
            <div class="campaign-card__category">ファンダイビング</div>
            <h3 class="campaign-card__title">貸切ファンダイビング</h3>
          </div>
          <div class="campaign-card__textBlock">
            <p class="campaign-card__text">全部コミコミ(お一人様)</p>
            <div class="campaign-card__price">
              <p class="campaign-card__price-regular">&yen;20&#44;000</p>
              <p class="campaign-card__price-sale">&yen;16&#44;000</p>
            </div>
          </div>
        </li>
        <li class="campaign-cards__item campaign-card swiper-slide">
          <div class="campaign-card__image">
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/campaign-1.jpg"
              alt="海の中を色とりどりの魚が泳いでいる様子" />
          </div>
          <div class="campaign-card__body">
            <div class="campaign-card__category">ライセンス講習</div>
            <h3 class="campaign-card__title">ライセンス取得</h3>
          </div>
          <div class="campaign-card__textBlock">
            <p class="campaign-card__text">全部コミコミ(お一人様)</p>
            <div class="campaign-card__price">
              <p class="campaign-card__price-regular">&yen;56&#44;000</p>
              <p class="campaign-card__price-sale">&yen;46&#44;000</p>
            </div>
          </div>
        </li>
        <li class="campaign-cards__item campaign-card swiper-slide">
          <div class="campaign-card__image">
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/campaign-2.jpg"
              alt="海岸からダイビングスポットまで運ぶ船の乗り場" />
          </div>
          <div class="campaign-card__body">
            <div class="campaign-card__category">体験ダイビング</div>
            <h3 class="campaign-card__title">貸切体験ダイビング</h3>
          </div>
          <div class="campaign-card__textBlock">
            <p class="campaign-card__text">全部コミコミ(お一人様)</p>
            <div class="campaign-card__price">
              <p class="campaign-card__price-regular">&yen;24&#44;000</p>
              <p class="campaign-card__price-sale">&yen;18&#44;000</p>
            </div>
          </div>
        </li>
        <li class="campaign-cards__item campaign-card swiper-slide">
          <div class="campaign-card__image">
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/campaign-3.jpg"
              alt="複数のダイバーが海から顔を出している様子" />
          </div>
          <div class="campaign-card__body">
            <div class="campaign-card__category">体験ダイビング</div>
            <h3 class="campaign-card__title">ナイトダイビング</h3>
          </div>
          <div class="campaign-card__textBlock">
            <p class="campaign-card__text">全部コミコミ(お一人様)</p>
            <div class="campaign-card__price">
              <p class="campaign-card__price-regular">&yen;10&#44;000</p>
              <p class="campaign-card__price-sale">&yen;8&#44;000</p>
            </div>
          </div>
        </li>
        <li class="campaign-cards__item campaign-card swiper-slide">
          <div class="campaign-card__image-box">
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/campaign-4.jpg"
              alt="海の中を色とりどりの魚が泳ぐ様子" />
          </div>
          <div class="campaign-card__body">
            <p class="campaign-card__category">ファンダイビング</p>
            <h3 class="campaign-card__title">貸切ファンダイビング</h3>
          </div>
          <div class="campaign-card__textBlock">
            <p class="campaign-card__text">全部コミコミ(お一人様)</p>
            <div class="campaign-card__price">
              <div class="campaign-card__price-regular">&yen;20&#44;000</div>
              <div class="campaign-card__price-sale">&yen;16&#44;000</div>
            </div>
          </div>
        </li> -->
      </ul>
    </div>
    <div class="swiper-button-prev campaign-button-prev js-campaign-button-prev u-desktop"></div>
    <div class="swiper-button-next campaign-button-next js-campaign-button-next u-desktop"></div>
    <div class="campaign__button">
      <a href="<?php echo $campaign; ?>" class="button"><span>view&nbsp;more</span></a>
    </div>
  </div>
</section>

<section class="about top-about">
  <div class="about__inner inner">
    <div class="about__title section-title">
      <p class="section-title__main">about&nbsp;us</p>
      <h2 class="section-title__sub">私たちについて</h2>
    </div>
    <div class="about__image-box">
      <div class="about__image-small">
        <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/about-small.jpg"
          alt="屋根の上にシーサーが乗っている様子" />
      </div>
      <div class="about__image-large">
        <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/about-large.jpg"
          alt="２匹の魚が会話をしているかのように向き合って泳いでいる様子" />
      </div>
    </div>
    <div class="about__content-box">
      <h3 class="about__heading">Dive&nbsp;into<br />the&nbsp;Ocean</h3>
      <div class="about__text-box">
        <p class="about__text">
          ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
        </p>
        <div class="about__button">
          <a href="<?php echo $about; ?>" class="button"><span>view&nbsp;more</span></a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="information top-information">
  <div class="information__inner inner">
    <div class="information__title section-title">
      <p class="section-title__main">information</p>
      <h2 class="section-title__sub">ダイビング情報</h2>
    </div>
    <div class="information__box information-box">
      <div class="information-box__content">
        <div class="information-box__item-wrapper">
          <figure class="information-box__item-image js-colorbox">
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/information.jpg"
              alt="珊瑚に群がる魚たちの様子" />
          </figure>
        </div>
        <div class="information-box__item-text">
          <h3 class="information-box__title">ライセンス講習</h3>
          <p class="information-box__text">
            当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br />
            正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
          </p>
          <div class="information-box__button">
            <a href="<?php echo $information; ?>" class="button"><span>view&nbsp;more</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="blog top-blog">
  <div class="blog__bg-image u-desktop">
    <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/blog-bg.jpg"
      alt="海の水面をアップして映し出した様子" />
  </div>
  <div class="blog__inner inner">
    <div class="blog__title section-title">
      <p class="section-title__main section-title__main--white">blog</p>
      <h2 class="section-title__sub section-title__sub--white">ブログ</h2>
    </div>
    <ul class="blog__items blog-cards">
      <li class="blog-cards__item blog-card">
        <a href="single.html">
          <div class="blog-card__container">
            <div class="blog-card__image">
              <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/blog-01.jpg"
                alt="白い珊瑚が映っている様子" />
            </div>
            <div class="blog-card__body">
              <div class="blog-card__meta">
                <time class="blog-card__date" datetime="2023-11-17">2023.11.17</time>
              </div>
              <div class="blog-card__text-block">
                <h3 class="blog-card__title">ライセンス取得</h3>
                <p class="blog-card__text">
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
              </div>
            </div>
          </div>
        </a>
      </li>
      <li class="blog-cards__item blog-card">
        <a href="home.html">
          <div class="blog-card__container">
            <div class="blog-card__image">
              <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/blog-02.jpg"
                alt="ウミガメが泳いでいる様子" />
            </div>
            <div class="blog-card__body">
              <div class="blog-card__meta">
                <time class="blog-card__date" datetime="2023-11-17">2023.11.17</time>
              </div>
              <div class="blog-card__text-block">
                <h3 class="blog-card__title">ウミガメと泳ぐ</h3>
                <p class="blog-card__text">
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
              </div>
            </div>
          </div>
        </a>
      </li>
      <li class="blog-cards__item blog-card">
        <a href="home.html">
          <div class="blog-card__container">
            <div class="blog-card__image">
              <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/blog-03.jpg"
                alt="珊瑚の中にカクレクマノミが隠れている様子" />
            </div>
            <div class="blog-card__body">
              <div class="blog-card__meta">
                <time class="blog-card__date" datetime="2023-11-17">2023.11.17</time>
              </div>
              <div class="blog-card__text-block">
                <h3 class="blog-card__title">カクレクマノミ</h3>
                <p class="blog-card__text">
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
              </div>
            </div>
          </div>
        </a>
      </li>
    </ul>
    <div class="blog__button">
      <a href="<?php echo $blog; ?>" class="button"><span>view&nbsp;more</span></a>
    </div>
  </div>
</section>

<section class="voice top-voice">
  <div class="voice__inner inner">
    <div class="voice__title section-title">
      <p class="section-title__main">voice</p>
      <h2 class="section-title__sub">お客様の声</h2>
    </div>
    <div class="voice__cards voice-cards">
      <div class="voice-cards__container voice-card">
        <div class="voice-card__wrap">
          <div class="voice-card__box">
            <div class="voice-card__meta">
              <p class="voice-card__age">20代(女性)</p>
              <p class="voice-card__category">ライセンス講習</p>
            </div>
            <h3 class="voice-card__title">ここにタイトルが入ります。ここにタイトル</h3>
          </div>
          <div class="voice-card__image js-colorbox">
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/voice-01.jpg"
              alt="女性が麦わら帽子を被っている様子" />
          </div>
        </div>
        <p class="voice-card__text">
          ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
          ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
          ここにテキストが入ります。ここにテキストが入ります。
        </p>
      </div>
      <div class="voice-cards__container voice-card">
        <div class="voice-card__wrap">
          <div class="voice-card__box">
            <div class="voice-card__meta">
              <p class="voice-card__age">20代(男性)</p>
              <p class="voice-card__category">ファンダイビング</p>
            </div>
            <h3 class="voice-card__title">ここにタイトルが入ります。ここにタイトル</h3>
          </div>
          <div class="voice-card__image js-colorbox">
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/voice-02.jpg"
              alt="男性がグッドと親指を立てた合図を出している様子" />
          </div>
        </div>
        <p class="voice-card__text">
          ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
          ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
          ここにテキストが入ります。ここにテキストが入ります。
        </p>
      </div>
    </div>
    <div class="voice__button">
      <a href="<?php echo $voice; ?>" class="button"><span>view&nbsp;more</span></a>
    </div>
  </div>
</section>

<section class="price top-price">
  <div class="price__inner inner">
    <div class="price__title section-title">
      <p class="section-title__main">price</p>
      <h2 class="section-title__sub">料金一覧</h2>
    </div>
    <div class="price__content">
      <div class="price__image-box js-colorbox">
        <picture>
          <source media="(min-width: 768px)"
            srcset="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/price-01.jpg" />
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/price-02.jpg"
            alt="ウミガメが泳いでいる様子" />
        </picture>
      </div>
      <div class="price__table">
        <ul class="price__menu-lists menu-lists">
          <li class="menu-lists__item menu-list">
            <h3 class="menu-list__title">ライセンス講習</h3>
            <dl class="menu-list__item">
              <dt class="menu-list__course">オープンウォーターダイバーコース</dt>
              <dd class="menu-list__price">&yen;50&#44;000</dd>
              <dt class="menu-list__course">アドバンスドオープンウォーターコース</dt>
              <dd class="menu-list__price">&yen;60&#44;000</dd>
              <dt class="menu-list__course">レスキュー&plus;EFRコース</dt>
              <dd class="menu-list__price">&yen;70&#44;000</dd>
            </dl>
          </li>
          <li class="menu-lists__item menu-list">
            <h3 class="menu-list__title">体験ダイビング</h3>
            <dl class="menu-list__item">
              <dt class="menu-list__course">ビーチ体験ダイビング(半日)</dt>
              <dd class="menu-list__price">&yen;7&#44;000</dd>
              <dt class="menu-list__course">ビーチ体験ダイビング(1日)</dt>
              <dd class="menu-list__price">&yen;14&#44;000</dd>
              <dt class="menu-list__course">ボート体験ダイビング(半日)</dt>
              <dd class="menu-list__price">&yen;10&#44;000</dd>
              <dt class="menu-list__course">ボート体験ダイビング(1日)(半日)</dt>
              <dd class="menu-list__price">&yen;18&#44;000</dd>
            </dl>
          </li>
          <li class="menu-lists__item menu-list">
            <h3 class="menu-list__title">ファンダイビング</h3>
            <dl class="menu-list__item">
              <dt class="menu-list__course">ビーチダイビング(2ダイブ)</dt>
              <dd class="menu-list__price">&yen;14&#44;000</dd>
              <dt class="menu-list__course">ボートダイビング(2ダイブ)</dt>
              <dd class="menu-list__price">&yen;18&#44;000</dd>
              <dt class="menu-list__course">スペシャルダイビング(2ダイブ)</dt>
              <dd class="menu-list__price">&yen;14&#44;000</dd>
              <dt class="menu-list__course">ナイトダイビング(1ダイブ)(2ダイブ)</dt>
              <dd class="menu-list__price">&yen;10&#44;000</dd>
            </dl>
          </li>
          <li class="menu-lists__item menu-list">
            <h3 class="menu-list__title">スペシャルダイビング</h3>
            <dl class="menu-list__item">
              <dt class="menu-list__course">貸切ダイビング(2ダイブ)</dt>
              <dd class="menu-list__price">&yen;24&#44;000</dd>
              <dt class="menu-list__course">1日ダイビング(3ダイブ)</dt>
              <dd class="menu-list__price">&yen;32&#44;000</dd>
            </dl>
          </li>
        </ul>
      </div>
    </div>
    <div class="price__button">
      <a href="<?php echo $price; ?>" class="button"><span>view&nbsp;more</span></a>
    </div>
  </div>
</section>
<?php get_footer(); ?>