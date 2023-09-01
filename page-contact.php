<?php get_header(); ?>
<main>

  <div class="sub-mv">
    <div class="sub-mv__inner">
      <div class="sub-mv__image">
        <picture>
          <source media="(min-width: 768px)"
            srcset="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/contact-sub-pc.jpg" />
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/contact-sub-sp.jpg"
            alt="エメラルドグリーンの海の波の様子" />
        </picture>
      </div>
      <div class="sub-mv__heading">
        <h1 class="sub-mv__title">contact</h1>
      </div>
    </div>
  </div>
  <div class="breadcrumbs">
    <div class="breadcrumbs__inner inner">
      <ol class="breadcrumbs__items">
        <li class="breadcrumbs__item">
          <a href="index.html">TOP</a>
        </li>
        <li class="breadcrumbs__item">
          <span>&gt;</span>
        </li>
        <li class="breadcrumbs__item">
          <a href="page-contact.html">お問い合わせ</a>
        </li>
        <li class="breadcrumbs__item error">
          <span>&gt;</span>
        </li>
        <li class="breadcrumbs__item error">
          <a href="#">お問い合わせエラー</a>
        </li>
      </ol>
    </div>
  </div>

  <div class="page-contact sub-page-contact">
    <div class="page-contact__inner inner">
      <!-- <div class="page-contact__error">
        <p class="page-contact__error-text">&#x203B;必須項目が入力されていません。<br class="u-mobile" />入力してください。</p>
      </div> -->
      <?php echo do_shortcode('[contact-form-7 id="172da36" title="お問い合わせ"]'); ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>