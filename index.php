<!DOCTYPE html>
<html lang="ja">

<head>
  <meta name="robots" content="noindex,nofollow" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="robots" content="noindex" />
  <!-- meta情報 -->
  <title>CodeUps</title>
  <meta name="description"
    content="ダイビングで楽しむ綺麗な海と魚たちの世界。ライセンス取得のための理想的なスタート地点です。豊かな海の生態系で驚きの一瞬を体験し、青い海に包まれる感動を味わいましょう。ダイビングライセンスの取得条件もわかりやすく解説。プロのガイドと安全な環境で、素晴らしいダイビングの世界へ足を踏み入れませんか？海洋の美と奥深い海底の景色を探索する素晴らしい冒険が待っています。" />
  <meta name="keywords" content="CodeUps,ダイビング,キレイな海,魚たち,ライセンス取得,プロフェッショナルなインストラクター" />
  <!-- ogp -->
  <meta property="og:title" content="CodeUps" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://example.com/diving" />
  <meta property="og:image" content="https://example.com/ogp-image.jpg" />
  <meta property="og:site_name" content="CodeUps" />
  <meta property="og:description"
    content="ダイビングで楽しむ綺麗な海と魚たちの世界。ライセンス取得のための理想的なスタート地点です。豊かな海の生態系で驚きの一瞬を体験し、青い海に包まれる感動を味わいましょう。ダイビングライセンスの取得条件もわかりやすく解説。プロのガイドと安全な環境で、素晴らしいダイビングの世界へ足を踏み入れませんか？海洋の美と奥深い海底の景色を探索する素晴らしい冒険が待っています。" />
  <!-- ファビコン -->
  <link rel="icon" href="./assets/images/common/favicon.svg" />
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Gotu&family=Lato:wght@400;700&family=Noto+Sans+JP:wght@400;500;700&display=swap"
    rel="stylesheet" />
  <!-- css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/dist/assets/css/style.css" />
  <!-- JavaScript -->
  <script defer src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script defer src="<?php echo get_theme_file_uri(); ?>/dist/assets/js/jquery.inview.min.js"></script>
  <script defer src="<?php echo get_theme_file_uri(); ?>/dist/assets/js/script.js"></script>
</head>

<body>
  <!-- loading -->
  <div class="loading js-loading">
    <div class="loading__title">
      <p class="loading__title-main is-close">diving</p>
      <p class="loading__title-sub is-close">into&nbsp;the&nbsp;ocean</p>
    </div>
    <div class="loading__image">
      <img class="loading__image-left loading__image-left--fadeUp"
        src="<?php echo get_theme_file_uri(); ?>/dist/assets//images/common/loading-left.jpg"
        alt="綺麗なエメラルドグリーンの海底を歩くウミガメの様子" />
      <img class="loading__image-right loading__image-right--fadeUp delay"
        src="<?php echo get_theme_file_uri(); ?>/dist/assets//images/common/loading-right.jpg"
        alt="綺麗なエメラルドグリーンの海底を歩くウミガメ" />
    </div>
  </div>
  <header class="header header-layout js-header">
    <div class="header__inner">
      <h1 class="header__logo">
        <a href="index.html">
          <img src="<?php echo get_theme_file_uri(); ?>/dist/assets//images/common/CodeUps.svg" alt="CodeUps" />
        </a>
      </h1>
      <button class="header__drawer hamburger js-hamburger u-mobile">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <nav class="header__pc-nav pc-nav u-desktop">
        <ul class="pc-nav__items">
          <li class="pc-nav__item">
            <a href="archive-campaign.html">
              <div class="pc-nav__item-wrapper">
                <div class="pc-nav__item-en">campaign</div>
                <div class="pc-nav__item-ja">キャンペーン</div>
              </div>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="page-about.html">
              <div class="pc-nav__item-wrapper">
                <p class="pc-nav__item-en">about&nbsp;us</p>
                <p class="pc-nav__item-ja">私たちについて</p>
              </div>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="page-information.html">
              <div class="pc-nav__item-wrapper">
                <div class="pc-nav__item-en">information</div>
                <div class="pc-nav__item-ja">ダイビング情報</div>
              </div>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="home.html">
              <div class="pc-nav__item-wrapper">
                <div class="pc-nav__item-en">blog</div>
                <div class="pc-nav__item-ja">ブログ</div>
              </div>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="archive-voice.html">
              <div class="pc-nav__item-wrapper">
                <div class="pc-nav__item-en">voice</div>
                <div class="pc-nav__item-ja">お客様の声</div>
              </div>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="page-price.html">
              <div class="pc-nav__item-wrapper">
                <div class="pc-nav__item-en">price</div>
                <div class="pc-nav__item-ja">料金一覧</div>
              </div>
            </a>
          </li>
          <li class="pc-nav__item pc-nav__item--uppercase">
            <a href="page-faq.html">
              <div class="pc-nav__item-wrapper">
                <div class="pc-nav__item-en">faq</div>
                <div class="pc-nav__item-ja">よくある質問</div>
              </div>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="page-contact.html">
              <div class="pc-nav__item-wrapper">
                <div class="pc-nav__item-en">contact</div>
                <div class="pc-nav__item-ja">お問い合わせ</div>
              </div>
            </a>
          </li>
        </ul>
      </nav>
      <nav class="header__sp-nav sp-nav js-sp-nav">
        <div class="sp-nav__inner">
          <div class="sp-nav__left">
            <ul class="sp-nav__left-items">
              <li class="sp-nav__left-item">
                <a href="archive-campaign.html">キャンペーン</a>
              </li>
              <li class="sp-nav__left-item">
                <a href="archive-campaign.html">ライセンス取得</a>
              </li>
              <li class="sp-nav__left-item">
                <a href="archive-campaign.html">ファンダイビング</a>
              </li>
              <li class="sp-nav__left-item">
                <a href="archive-campaign.html">体験ダイビング</a>
              </li>
            </ul>
            <ul class="sp-nav__left-items">
              <li class="sp-nav__left-item">
                <a href="page-about.html">私たちについて</a>
              </li>
            </ul>
            <ul class="sp-nav__left-items">
              <li class="sp-nav__left-item">
                <a href="page-information.html">ダイビング情報</a>
              </li>
              <li class="sp-nav__left-item">
                <a href="page-price.html#license">ライセンス講習</a>
              </li>
              <li class="sp-nav__left-item">
                <a href="page-price.html#experience">体験ダイビング</a>
              </li>
              <li class="sp-nav__left-item">
                <a href="page-price.html#diving">ファンダイビング</a>
              </li>
            </ul>
            <ul class="sp-nav__left-items">
              <li class="sp-nav__left-item">
                <a href="home.html">ブログ</a>
              </li>
            </ul>
          </div>
          <div class="sp-nav__right">
            <ul class="sp-nav__right-items">
              <li class="sp-nav__right-item">
                <a href="archive-voice.html">お客様の声</a>
              </li>
            </ul>
            <ul class="sp-nav__right-items">
              <li class="sp-nav__right-item">
                <a href="page-price.html">料金一覧</a>
              </li>
              <li class="sp-nav__right-item">
                <a href="page-price.html#license">ライセンス講習</a>
              </li>
              <li class="sp-nav__right-item">
                <a href="page-price.html#experience">体験ダイビング</a>
              </li>
              <li class="sp-nav__right-item">
                <a href="page-price.html#diving">ファンダイビング</a>
              </li>
            </ul>
            <ul class="sp-nav__right-items">
              <li class="sp-nav__right-item">
                <a href="page-faq.html">よくある質問</a>
              </li>
            </ul>
            <ul class="sp-nav__right-items">
              <li class="sp-nav__right-item">
                <a href="page-site-map.html">サイトマップ</a>
              </li>
            </ul>
            <ul class="sp-nav__right-items">
              <li class="sp-nav__right-item">
                <a href="page-privacy-policy.html">プライバシー<br />ポリシー</a>
              </li>
            </ul>
            <ul class="sp-nav__right-items">
              <li class="sp-nav__right-item">
                <a href="page-terms-of-service.html">利用規約</a>
              </li>
            </ul>
            <ul class="sp-nav__right-items">
              <li class="sp-nav__right-item">
                <a href="page-contact.html">お問い合わせ</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <main>
    <div class="mv">
      <div class="mv__inner">
        <div class="mv__slider swiper js-mv-slider">
          <div class="mv__slider-wrapper swiper-wrapper">
            <div class="mv__slider-image swiper-slide">
              <picture>
                <source media="(min-width: 768px)"
                  srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/mv.jpg" />
                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/mv-sp.jpg"
                  alt="綺麗なエメラルドグリーンの海底を歩くウミガメの様子" />
              </picture>
            </div>
            <div class="mv__slider-image swiper-slide">
              <picture>
                <source media="(min-width: 768px)"
                  srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/mv-01.jpg" />
                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/mv-sp-01.jpg"
                  alt="ウミガメと一緒に泳ぐダイバーたちの様子" />
              </picture>
            </div>
            <div class="mv__slider-image swiper-slide">
              <picture>
                <source media="(min-width: 768px)"
                  srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/mv-02.jpg" />
                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/mv-sp-02.jpg"
                  alt="広い海で航海する船の様子" />
              </picture>
            </div>
            <div class="mv__slider-image swiper-slide">
              <picture>
                <source media="(min-width: 768px)"
                  srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/mv-03.jpg" />
                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/mv-sp-03.jpg"
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
          <ul class="campaign-cards__items swiper-wrapper">
            <li class="campaign-cards__item campaign-card swiper-slide">
              <div class="campaign-card__image">
                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/campaign-1.jpg"
                  alt="海の中を色とりどりの魚が泳ぐ様子" />
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
                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/campaign-2.jpg"
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
                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/campaign-3.jpg"
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
                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/campaign-4.jpg"
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
                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/campaign-1.jpg"
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
                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/campaign-2.jpg"
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
                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/campaign-3.jpg"
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
                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/campaign-4.jpg"
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
            </li>
          </ul>
        </div>
        <div class="swiper-button-prev campaign-button-prev js-campaign-button-prev u-desktop"></div>
        <div class="swiper-button-next campaign-button-next js-campaign-button-next u-desktop"></div>
        <div class="campaign__button">
          <a href="archive-campaign.html" class="button"><span>view&nbsp;more</span></a>
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
            <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/about-small.jpg"
              alt="屋根の上にシーサーが乗っている様子" />
          </div>
          <div class="about__image-large">
            <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/about-large.jpg"
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
              <a href="page-about.html" class="button"><span>view&nbsp;more</span></a>
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
                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/information.jpg"
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
                <a href="page-information.html" class="button"><span>view&nbsp;more</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="blog top-blog">
      <div class="blog__bg-image u-desktop">
        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/blog-bg.jpg" alt="海の水面をアップして映し出した様子" />
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
                  <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/blog-01.jpg"
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
                  <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/blog-02.jpg"
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
                  <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/blog-03.jpg"
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
          <a href="home.html" class="button"><span>view&nbsp;more</span></a>
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
                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/voice-01.jpg"
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
                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/voice-02.jpg"
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
          <a href="archive-voice.html" class="button"><span>view&nbsp;more</span></a>
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
              <source media="(min-width: 768px)" srcset="./assets/images/common/price-01.jpg" />
              <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/price-02.jpg"
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
          <a href="page-price.html" class="button"><span>view&nbsp;more</span></a>
        </div>
      </div>
    </section>

    <section class="contact top-contact">
      <div class="contact__inner inner">
        <div class="contact__container">
          <div class="contact__left">
            <div class="contact__logo">
              <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/CodeUps-contact.svg"
                alt="CodeUps" />
            </div>
            <div class="contact__box">
              <div class="contact__address address">
                <ul class="address__items">
                  <li class="address__item">
                    <p>沖縄県那覇市1&#045;1</p>
                  </li>
                  <li class="address__item">
                    <p>TEL&#058;<span>0120&#045;000&#045;0000</span></p>
                  </li>
                  <li class="address__item">
                    <p>営業時間&#058;<span>8&#058;30&#045;19&#058;00</span></p>
                  </li>
                  <li class="address__item">
                    <p>定休日&#058;毎週火曜日</p>
                  </li>
                </ul>
              </div>
              <div class="contact__map">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d12386.198256017175!2d127.68047366531893!3d26.214435455412154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sja!2sjp!4v1688397147977!5m2!1sja!2sjp"
                  width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
          <div class="contact__right">
            <div class="contact__title section-title">
              <p class="section-title__main section-title__main--large">contact</p>
              <h2 class="section-title__sub">お問い合わせ</h2>
            </div>
            <p class="contact__text">ご予約・お問い合わせはコチラ</p>
            <div class="contact__button">
              <a href="page-contact.html" class="button"><span>contact&nbsp;us</span></a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer class="footer top-footer">
    <div class="footer__inner inner">
      <div class="footer__title">
        <div class="footer__logo">
          <a href="index.html">
            <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/CodeUps-footer.svg" alt="CodeUps" />
          </a>
        </div>
        <ul class="footer__snsLinks">
          <li class="footer__snsLink">
            <a href="#">
              <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/facebook-icon.svg"
                alt="フェイスブック" />
            </a>
          </li>
          <li class="footer__snsLink">
            <a href="#">
              <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/Instagram-icon.svg"
                alt="インスタグラム" />
            </a>
          </li>
        </ul>
      </div>
      <nav class="footer__nav footer-nav">
        <div class="footer-nav__left">
          <ul class="footer-nav__left-items">
            <li class="footer-nav__left-item">
              <a href="archive-campaign.html">キャンペーン</a>
            </li>
            <li class="footer-nav__left-item">
              <a href="archive-campaign.html">ライセンス講習</a>
            </li>
            <li class="footer-nav__left-item">
              <a href="archive-campaign.html">ファンダイビング</a>
            </li>
            <li class="footer-nav__left-item">
              <a href="archive-campaign.html">体験ダイビング</a>
            </li>
          </ul>
          <ul class="footer-nav__left-items">
            <li class="footer-nav__left-item">
              <a href="page-about.html">私たちについて</a>
            </li>
          </ul>
          <ul class="footer-nav__left-items">
            <li class="footer-nav__left-item">
              <a href="page-information.html#info">ダイビング情報</a>
            </li>
            <li class="footer-nav__left-item">
              <a href="page-information.html#info1">ライセンス講習</a>
            </li>
            <li class="footer-nav__left-item">
              <a href="page-information.html#info2">ファンダイビング</a>
            </li>
            <li class="footer-nav__left-item">
              <a href="page-information.html#info3">体験ダイビング</a>
            </li>
          </ul>
          <ul class="footer-nav__left-items">
            <li class="footer-nav__left-item">
              <a href="home.html">ブログ</a>
            </li>
          </ul>
        </div>
        <div class="footer-nav__right">
          <ul class="footer-nav__right-items">
            <li class="footer-nav__right-item">
              <a href="archive-voice.html">お客様の声</a>
            </li>
          </ul>
          <ul class="footer-nav__right-items">
            <li class="footer-nav__right-item">
              <a href="page-price.html">料金一覧</a>
            </li>
            <li class="footer-nav__right-item">
              <a href="page-price.html#license">ライセンス講習</a>
            </li>
            <li class="footer-nav__right-item">
              <a href="page-price.html#diving">ファンダイビング</a>
            </li>
            <li class="footer-nav__right-item">
              <a href="page-price.html#experience">体験ダイビング</a>
            </li>
          </ul>
          <ul class="footer-nav__right-items">
            <li class="footer-nav__right-item">
              <a href="page-faq.html">よくある質問</a>
            </li>
          </ul>
          <ul class="footer-nav__right-items">
            <li class="footer-nav__right-item">
              <a href="page-site-map.html">サイトマップ</a>
            </li>
          </ul>
          <ul class="footer-nav__right-items">
            <li class="footer-nav__right-item">
              <a href="page-privacy-policy.html">プライバシー<br class="u-mobile" />ポリシー</a>
            </li>
          </ul>
          <ul class="footer-nav__right-items">
            <li class="footer-nav__right-item">
              <a href="page-terms-of-service.html">利用規約</a>
            </li>
          </ul>
          <ul class="footer-nav__right-items">
            <li class="footer-nav__right-item">
              <a href="page-contact.html">お問い合わせ</a>
            </li>
          </ul>
        </div>
      </nav>
      <div class="footer__copyright">
        <small>Copyright&nbsp;&copy;&nbsp;2021&nbsp;-&nbsp;2023&nbsp;CodeUps&nbsp;LLC.&nbsp;All&nbsp;Rights&nbsp;Reserved.</small>
      </div>
    </div>
  </footer>
  <div class="page-top-button js-page-top">
    <a href="#">
      <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/arrow-right.svg" alt="上向き矢印" />
    </a>
  </div>
</body>

</html>