<?php get_header(); ?>

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
<main>
  <div class="breadcrumbs">
    <div class="breadcrumbs_inner inner">
      <span><a href="index.html">TOP</a></span>
      <span>&gt;</span>
      <span>私たちについて</span>
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
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
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
          <div class="about-gallery__image-item js-modal">
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/gallery1.jpg"
              alt="珊瑚に群がる赤い魚たちが映っている様子" />
          </div>
          <div class="about-gallery__image-item js-modal">
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/gallery2.jpg"
              alt="エメラルドグリーンの海辺" />
          </div>
          <div class="about-gallery__image-item js-modal">
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/gallery3.jpg"
              alt="白と黒の縞模様で尾鰭が黄色い魚が２匹泳いでいる様子" />
          </div>
          <div class="about-gallery__image-item js-modal">
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/gallery4.jpg"
              alt="黄色い魚が泳いでいる様子" />
          </div>
          <div class="about-gallery__image-item js-modal">
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/gallery5.jpg"
              alt="たくさんの魚たちが泳いでいる様子" />
          </div>
          <div class="about-gallery__image-item js-modal">
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/gallery6.jpg"
              alt="珊瑚に群がる魚たちの様子" />
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>