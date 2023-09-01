<?php get_header(); ?>

<?php
$home = esc_url( home_url( '/' ) );
$campaign = esc_url(home_url('/campaign'));
$license = esc_url(home_url('/campaign_category/license/'));
$experience = esc_url(home_url('/campaign_category/experience/'));
$diving = esc_url(home_url('/campaign_category/diving/'));
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
<!-- loading -->
<div class="loading js-loading">
  <div class="loading__title">
    <p class="loading__title-main is-close">diving</p>
    <p class="loading__title-sub is-close">into&nbsp;the&nbsp;ocean</p>
  </div>
  <div class="loading__image">
    <img class="loading__image-left loading__image-left--fadeUp"
      src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/loading-left.jpg"
      alt="綺麗なエメラルドグリーンの海底を歩くウミガメの様子" />
    <img class="loading__image-right loading__image-right--fadeUp delay"
      src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/loading-right.jpg"
      alt="綺麗なエメラルドグリーンの海底を歩くウミガメ" />
  </div>
</div>

<div class="mv">
  <div class="mv__inner">
    <div class="mv__slider swiper js-mv-slider">
      <div class="mv__slider-wrapper swiper-wrapper">
        <?php
        for ($i = 1; $i <= 4; $i++) {
            $main_pc_image = get_field('main-pc_' . $i);
            $main_sp_image = get_field('main-sp_' . $i);

            if ($main_pc_image && $main_sp_image) {
                ?>
        <div class="mv__slider-image swiper-slide">
          <picture>
            <source media="(min-width: 768px)" srcset="<?php echo esc_url($main_pc_image); ?>" />
            <img src="<?php echo esc_url($main_sp_image); ?>" alt="綺麗なエメラルドグリーンの海底を歩くウミガメの様子<?php echo $i; ?>" />
          </picture>
        </div>
        <?php
            }
        }
        ?>
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
  $the_query = new WP_Query($args); ?>
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
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/assets/images/common/no-image.jpg"
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
              <p class="campaign-card__price-regular">&yen;<?php the_field('price'); ?></p>
              <p class="campaign-card__price-sale">&yen;<?php the_field('price_sale'); ?></p>
            </div>
          </div>
        </li>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </ul>
    </div>
    <div class="campaign-button-prev swiper-button-prev js-campaign-button-prev u-desktop"></div>
    <div class="campaign-button-next swiper-button-next js-campaign-button-next u-desktop"></div>
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
          「Dive&nbsp;into&nbsp;the&nbsp;Ocean」は、海の美と冒険を楽しむためのプラットフォームです。海の魅力や生態系の驚異をダイビング愛好者や初心者に提供し、最新のダイビング情報と知識を通じて海洋の魅力を広めています。<br />私たちの使命は、ダイビングの素晴らしさを伝え、人々が海に感動し、冒険を始める一歩を踏み出すお手伝いです。
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
    <?php
    $args = array(
      'post_type'  => 'post',
      'posts_per_page' => 3
    );
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) : ?>
    <ul class="blog__items blog-cards">
      <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
      <li class="blog-cards__item blog-card">
        <a href="<?php the_permalink(); ?>">
          <div class="blog-card__container">
            <div class="blog-card__image">
              <?php if (has_post_thumbnail()) { ?>
              <?php the_post_thumbnail('medium'); ?>
              <?php } else { ?><img
                src="<?php echo esc_url(get_theme_file_uri('')); ?>/dist/assets/images/common/no-image.jpg" alt="画像無し">
              <?php } ?>
            </div>
            <div class="blog-card__body">
              <div class="blog-card__meta">
                <time class="blog-card__date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
              </div>
              <div class="blog-card__text-block">
                <h3 class="blog-card__title"><?php echo wp_trim_words( get_the_title(), 15, '…' ); ?></h3>
                <p class="blog-card__text">
                  <?php the_excerpt(); ?></p>
              </div>
            </div>
          </div>
        </a>
        <?php endwhile; ?>
      </li>
      <?php
        // -------- WP_query終了-----------
        wp_reset_postdata();
    endif; ?>
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
    <?php
    $args = array(
      'post_type'  => 'voice',
      'posts_per_page' => 2
    );
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) : ?>
    <div class="voice__cards voice-cards">
      <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
      <div class="voice-cards__container voice-card">
        <div class="voice-card__wrap">
          <div class="voice-card__box">
            <div class="voice-card__meta">
              <?php
              $age =  get_field('voice-age');
              $gender = get_field('voice-gender');
              ?>
              <p class="voice-card__age"><?php if($age): ?><?php echo $age ?>代<?php endif; ?>(<?php echo $gender ?>)
              </p>
              <?php
                $taxonomy_terms = get_the_terms($post->ID, 'voice_category');
                if ($taxonomy_terms) {
                  echo '<p class="voice-card__category">' . $taxonomy_terms[0]->name . '</p>';
                }
                ?>
            </div>
            <h3 class="voice-card__title"><?php echo wp_trim_words( get_the_title(), 22, '…' ); ?></h3>
          </div>
          <div class="voice-card__image js-colorbox">
            <?php if (has_post_thumbnail()) { ?>
            <?php the_post_thumbnail('medium'); ?>
            <?php } else { ?>
            <img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/no-image.jpg" alt="画像無し">
            <?php } ?>
          </div>
        </div>
        <p class="voice-card__text"><?php the_field('voice_text'); ?></p>
      </div>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
      <?php else : ?>
      <p>記事が見つかりませんでした</p>
      <?php endif; ?>
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
        <div class="price__menu menu-list">
          <h3 class="menu-list__title">ライセンス講習</h3>
          <dl class="menu-list__items">
            <?php
                $licenses = SCF::get('licenses', 41);
                foreach ($licenses as $license ) {
                  $license_course = esc_html( $license['license-course'] );
                  $license_price = esc_html( $license['license-price'] );?>
            <?php if($license_course && $license_price): ?>
            <div class="menu-list__item">
              <?php $license_course = str_replace("#BR#", "<br class='u-mobile'>", $license_course); ?>
              <dt class="menu-list__course"><?php echo $license_course ?></dt>
              <dd class="menu-list__price">&yen;<?php echo $license_price ?></dd>
            </div>
            <?php endif; ?>
            <?php } ?>
          </dl>
        </div>
        <div class="price__menu menu-list">
          <h3 class="menu-list__title">体験ダイビング</h3>
          <dl class="menu-list__items">
            <?php
                $experiences = SCF::get('experiences', 41);
                foreach ($experiences as $experience ) {
                  $experience_course = esc_html( $experience['experience-course'] );
                  $experience_price = esc_html( $experience['experience-price'] );?>
            <?php if($experience_course && $experience_price): ?>
            <div class="menu-list__item">
              <?php $experience_course = str_replace("#BR#", "<br class='u-mobile'>", $experience_course); ?>
              <dt class="menu-list__course"><?php echo $experience_course ?></dt>
              <dd class="menu-list__price">&yen;<?php echo $experience_price ?></dd>
            </div>
            <?php endif; ?>
            <?php } ?>
          </dl>
        </div>
        <div class="price__menu menu-list">
          <h3 class="menu-list__title">ファンダイビング</h3>
          <dl class="menu-list__items">
            <?php
            $funs = SCF::get('funs', 41);
            foreach ($funs as $fun ) {
              $fun_course = esc_html( $fun['fun-course'] );
              $fun_price = esc_html( $fun['fun-price'] );?>
            <?php if($fun_course && $fun_price): ?>
            <div class="menu-list__item">
              <?php $fun_course = str_replace("#BR#", "<br class='u-mobile'>", $fun_course); ?>
              <dt class="menu-list__course"><?php echo $fun_course ?></dt>
              <dd class="menu-list__price">&yen;<?php echo $fun_price ?></dd>
            </div>
            <?php endif; ?>
            <?php } ?>
          </dl>
        </div>
        <div class="price__menu menu-list">
          <h3 class="menu-list__title">スペシャルダイビング</h3>
          <dl class="menu-list__items">
            <?php
            $specials = SCF::get('specials', 41);
            foreach ($specials as $special ) {
              $special_course = esc_html( $special['special-course'] );
              $special_price = esc_html( $special['special-price'] );?>
            <?php if($special_course && $special_price): ?>
            <div class="menu-list__item">
              <?php $special_course = str_replace("#BR#", "<br class='u-mobile'>", $special_course); ?>
              <dt class="menu-list__course"><?php echo $special_course ?></dt>
              <dd class="menu-list__price">&yen;<?php echo $special_price ?></dd>
            </div>
            <?php endif; ?>
            <?php } ?>
          </dl>
        </div>
        </ul>
      </div>
    </div>
    <div class="price__button">
      <a href="<?php echo $price; ?>" class="button"><span>view&nbsp;more</span></a>
    </div>
  </div>
</section>
<?php get_footer(); ?>