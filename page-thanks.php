<?php get_header(); ?>

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
        <li class="breadcrumbs__item">
          <a href="page-contact.html">お問い合わせ</a>
        </li>
        <li class="breadcrumbs__item">
          <span>&gt;</span>
        </li>
        <li class="breadcrumbs__item"><a href="#">送信完了</a></li>
      </ol>
    </div>
  </div>

  <div class="contact-thanks sub-contact-thanks">
    <div class="contact-thanks__inner inner">
      <div class="contact-thanks__contents">
        <p class="contact-thanks__text">お問い合わせ内容を送信完了しました。</p>
        <p class="contact-thanks__message">このたびは、お問い合わせ頂き<br class="u-mobile" />誠にありがとうございます。<br />お送り頂きました内容を確認の上、<br
            class="u-mobile" />3営業日以内に折り返しご連絡させて頂きます。<br />また、ご記入頂いたメールアドレスへ、<br
            class="u-mobile" />自動返信の確認メールをお送りしております。</p>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>