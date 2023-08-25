<?php get_header(); ?>

<div class="sub-mv">
  <div class="sub-mv__inner">
    <div class="sub-mv__image">
      <picture>
        <source media="(min-width: 768px)"
          srcset="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/price-sub-pc.jpg" />
        <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/price-sub-sp.jpg"
          alt="海上にダイバーが1人浮き上がってきている様子" />
      </picture>
    </div>
    <div class="sub-mv__heading">
      <h1 class="sub-mv__title">price</h1>
    </div>
  </div>
</div>
<main>
  <div class="breadcrumbs">
    <div class="breadcrumbs">
      <div class="breadcrumbs_inner inner">
        <span><a href="index.html">TOP</a></span>
        <span>&gt;</span>
        <span>料金一覧</span>
      </div>
    </div>
    <section class="page-price sub-price">
      <div class="page-price__inner inner">
        <div class="page-price__contents price-lists">
          <div class="price-lists__content price-list" id="license">
            <div class="price-list__heading">
              <h2 class="price-list__title">ライセンス講習</h2>
              <div class="price-list__image">
                <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/whale.png" alt="クジラ" />
              </div>
            </div>
            <dl class="price-list__items">
              <div class="price-list__item">
                <dt class="price-list__course">オープンウォーター<br class="u-mobile" />ダイバーコース</dt>
                <dd class="price-list__price">&yen;50&#44;000</dd>
              </div>
              <div class="price-list__item">
                <dt class="price-list__course">アドバンスド<br class="u-mobile" />オープンウォーターコース</dt>
                <dd class="price-list__price">&yen;60&#44;000</dd>
              </div>
              <div class="price-list__item">
                <dt class="price-list__course price-list__course--padding">レスキュー&nbsp;&plus;&nbsp;EFRコース</dt>
                <dd class="price-list__price">&yen;70&#44;000</dd>
              </div>
            </dl>
          </div>
          <div class="price-lists__content price-list" id="experience">
            <div class="price-list__heading">
              <h2 class="price-list__title">体験ダイビング</h2>
              <div class="price-list__image">
                <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/whale.png" alt="クジラ" />
              </div>
            </div>
            <dl class="price-list__items">
              <div class="price-list__item">
                <dt class="price-list__course">ビーチ体験ダイビング<br class="u-mobile" />(半日)</dt>
                <dd class="price-list__price">&yen;7&#44;000</dd>
              </div>
              <div class="price-list__item">
                <dt class="price-list__course">ビーチ体験ダイビング<br class="u-mobile" />(1日)</dt>
                <dd class="price-list__price">&yen;14&#44;000</dd>
              </div>
              <div class="price-list__item">
                <dt class="price-list__course">ボート体験ダイビング<br class="u-mobile" />(半日)</dt>
                <dd class="price-list__price">&yen;10&#44;000</dd>
              </div>
              <div class="price-list__item">
                <dt class="price-list__course">ボート体験ダイビング<br class="u-mobile" />(1日)</dt>
                <dd class="price-list__price">&yen;18&#44;000</dd>
              </div>
            </dl>
          </div>
          <div class="price-lists__content price-list" id="diving">
            <div class="price-list__heading">
              <h2 class="price-list__title">ファンダイビング</h2>
              <div class="price-list__image">
                <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/whale.png" alt="クジラ" />
              </div>
            </div>
            <dl class="price-list__items">
              <div class="price-list__item">
                <dt class="price-list__course">ビーチダイビング<br class="u-mobile" />(2ダイブ)</dt>
                <dd class="price-list__price">&yen;14&#44;000</dd>
              </div>
              <div class="price-list__item">
                <dt class="price-list__course">ボートダイビング<br class="u-mobile" />(2ダイブ)</dt>
                <dd class="price-list__price">&yen;18&#44;000</dd>
              </div>
              <div class="price-list__item">
                <dt class="price-list__course">スペシャルダイビング<br class="u-mobile" />(2ダイブ)</dt>
                <dd class="price-list__price">&yen;24&#44;000</dd>
              </div>
              <div class="price-list__item">
                <dt class="price-list__course">ナイトダイビング<br class="u-mobile" />(1ダイブ)</dt>
                <dd class="price-list__price">&yen;10&#44;000</dd>
              </div>
            </dl>
          </div>
          <div class="price-lists__content price-list">
            <div class="price-list__heading">
              <h2 class="price-list__title">スペシャルダイビング</h2>
              <div class="price-list__image">
                <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/whale.png"
                  alt="クジラのアイコン" />
              </div>
            </div>
            <dl class="price-list__items">
              <div class="price-list__item">
                <dt class="price-list__course">貸切ダイビング<br class="u-mobile" />(2ダイブ)</dt>
                <dd class="price-list__price">&yen;24&#44;000</dd>
              </div>
              <div class="price-list__item">
                <dt class="price-list__course">1日ダイビング<br class="u-mobile" />(3ダイブ)</dt>
                <dd class="price-list__price">&yen;32&#44;000</dd>
              </div>
              <div class="price-list__item">
                <dt class="price-list__course">ナイトダイビング<br class="u-mobile" />(2ダイブ)</dt>
                <dd class="price-list__price">&yen;14&#44;000</dd>
              </div>
            </dl>
          </div>
        </div>
      </div>
    </section>
</main>
<?php get_footer(); ?>