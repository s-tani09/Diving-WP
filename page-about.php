<?php get_header(); ?>

<main>
  <div class="sub-mv">
    <div class="sub-mv__inner">
      <div class="sub-mv__image">
        <picture>
          <source media="(min-width: 768px)"
            srcset="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/about-sub-pc.jpg" />
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/about-sub-sp.jpg"
            alt="２匹の魚が会話をしているかのように向き合って泳いでいる様子" />
        </picture>
      </div>
      <div class="sub-mv__heading">
        <h1 class="sub-mv__title">about&nbsp;us</h1>
      </div>
    </div>
  </div>
  <div class="breadcrumbs">
    <div class="breadcrumbs__inner inner">
      <?php if ( function_exists( 'bcn_display' ) ) { bcn_display(); } ?>
    </div>
  </div>

  <section class="page-about sub-page-about">
    <div class="page-about__inner inner">
      <div class="page-about__image-box">
        <div class="page-about__image-small u-desktop">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/about-small.jpg"
            alt="屋根の上にシーサーが乗っている様子" />
        </div>
        <div class="page-about__image-large">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/about-large.jpg"
            alt="２匹の魚が会話をしているかのように向き合って泳いでいる様子" />
        </div>
      </div>

      <div class="page-about__content-box">
        <h2 class="page-about__heading">Dive&nbsp;into<br />the&nbsp;Ocean</h2>
        <div class="page-about__text-box">
          <p class="page-about__text">
            「Dive&nbsp;into&nbsp;the&nbsp;Ocean」は、海の美と冒険を楽しむためのプラットフォームです。海の魅力や生態系の驚異をダイビング愛好者や初心者に提供し、最新のダイビング情報と知識を通じて海洋の魅力を広めています。<br />私たちの使命は、ダイビングの素晴らしさを伝え、人々が海に感動し、冒険を始める一歩を踏み出すお手伝いです。
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="about-gallery sub-about-gallery">
    <div class="about-gallery__inner inner">
      <div class="about-gallery__title section-title">
        <p class="section-title__main">gallery</p>
        <h2 class="section-title__sub">フォト</h2>
      </div>
      <div class="about-gallery__content">
        <div class="about-gallery__modal js-modal-window"></div>
        <div class="about-gallery__image-items">
          <?php
                $gallery_images = SCF::get('gallery-images');
                foreach ($gallery_images as $gallery) {
                    $gallery_piece = wp_get_attachment_url($gallery['gallery_item']);
                    if ($gallery_piece): ?>
          <li class="about-gallery__image-item js-modal"><img src="<?php echo $gallery_piece ?>" alt="ギャラリーイメージ画像">
          </li>
          <?php endif;
                } ?>
        </div>
      </div>
    </div>
  </section>

</main>
<?php get_footer(); ?>