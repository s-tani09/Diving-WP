<?php get_header(); ?>

<div class="sub-mv">
  <div class="sub-mv__inner">
    <div class="sub-mv__image">
      <picture>
        <source media="(min-width: 768px)"
          srcset="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/others-pc.jpg" />
        <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/others-sp.jpg"
          alt="珊瑚に群がるたくさんの魚たちの様子" />
      </picture>
    </div>
    <div class="sub-mv__heading">
      <h1 class="sub-mv__title">site&nbsp;MAP</h1>
    </div>
  </div>
</div>
<main>
  <div class="breadcrumbs">
    <div class="breadcrumbs__inner inner">
      <ol class="breadcrumbs__items">
        <li class="breadcrumbs__item">
          <a href="index.html">TOP</a>
        </li>
        <li class="breadcrumbs__item">
          <span>&gt;</span>
        </li>
        <li class="breadcrumbs__item"><a href="#">サイトマップ</a></li>
      </ol>
    </div>
  </div>
  <div class="page-site-map sub-site-map">
    <div class="page-site-map__inner inner">
      <nav class="page-site-map__content site-map">
        <div class="site-map__left">
          <ul class="site-map__left-items">
            <li class="site-map__left-item">
              <a href="archive-campaign.html">キャンペーン</a>
            </li>
            <li class="site-map__left-item">
              <a href="#">ライセンス講習</a>
            </li>
            <li class="site-map__left-item">
              <a href="#">ファンダイビング</a>
            </li>
            <li class="site-map__left-item">
              <a href="#">体験ダイビング</a>
            </li>
          </ul>
          <ul class="site-map__left-items">
            <li class="site-map__left-item">
              <a href="page-about.html">私たちについて</a>
            </li>
          </ul>
          <ul class="site-map__left-items">
            <li class="site-map__left-item">
              <a href="page-information.html">ダイビング情報</a>
            </li>
            <li class="site-map__left-item">
              <a href="#">ライセンス講習</a>
            </li>
            <li class="site-map__left-item">
              <a href="#">ファンダイビング</a>
            </li>
            <li class="site-map__left-item">
              <a href="#">体験ダイビング</a>
            </li>
          </ul>
          <ul class="site-map__left-items">
            <li class="site-map__left-item">
              <a href="home.html">ブログ</a>
            </li>
          </ul>
        </div>
        <div class="site-map__right">
          <ul class="site-map__right-items">
            <li class="site-map__right-item">
              <a href="archive-voice.html">お客様の声</a>
            </li>
          </ul>
          <ul class="site-map__right-items">
            <li class="site-map__right-item">
              <a href="page-price.html">料金一覧</a>
            </li>
            <li class="site-map__right-item">
              <a href="#">ライセンス講習</a>
            </li>
            <li class="site-map__right-item">
              <a href="#">体験ダイビング</a>
            </li>
            <li class="site-map__right-item">
              <a href="#">ファンダイビング</a>
            </li>
          </ul>
          <ul class="site-map__right-items">
            <li class="site-map__right-item">
              <a href="page-faq.html">よくある質問</a>
            </li>
          </ul>
          <ul class="site-map__right-items">
            <li class="site-map__right-item">
              <a href="page-site-map.html">サイトマップ</a>
            </li>
          </ul>
          <ul class="site-map__right-items">
            <li class="site-map__right-item">
              <a href="page-privacy-policy.html">プライバシー<br class="u-mobile" />ポリシー</a>
            </li>
          </ul>
          <ul class="site-map__right-items">
            <li class="site-map__right-item">
              <a href="page-terms-of-service.html">利用規約</a>
            </li>
          </ul>

          <ul class="site-map__right-items">
            <li class="site-map__right-item">
              <a href="page-contact.html">お問い合わせ</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</main>
<?php get_footer(); ?>