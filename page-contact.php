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
      <form action="confirm.php" method="post" class="page-contact__form form">
        <div class="page-contact__error">
          <p class="page-contact__error-text">&#x203B;必須項目が入力されていません。<br class="u-mobile" />入力してください。</p>
        </div>

        <ul class="form__items error">
          <li class="form__item">
            <dl class="form__content">
              <dt class="form__label"><label for="name">お名前</label><span>必須</span></dt>
              <dd class="form__input">
                <input type="text" name="name" id="name" class="form__input-text" placeholder="沖縄&emsp;太郎" required />
              </dd>
            </dl>
          </li>
          <li class="form__item">
            <dl class="form__content">
              <dt class="form__label"><label for="email">メールアドレス</label><span>必須</span></dt>
              <dd class="form__input">
                <input type="text" name="email" id="email" class="form__input-text" placeholder="aaa000@ggmail.com"
                  required />
              </dd>
            </dl>
          </li>
          <li class="form__item">
            <dl class="form__content">
              <dt class="form__label"><label for="tel">電話番号</label><span>必須</span></dt>
              <dd class="form__input">
                <input type="tel" name="tel" id="tel" class="form__input-text" placeholder="000&#45;0000&#45;0000"
                  required />
              </dd>
            </dl>
          </li>
          <li class="form__item">
            <dl class="form__content">
              <dt class="form__label">お問い合わせ項目<span>必須</span></dt>
              <dd class="form__input form__input--checkbox">
                <label><input type="checkbox" class="form__input-text" /><span>ダイビング講習について</span></label>
                <label><input type="checkbox" class="form__input-text" /><span>ファンデイビングについて</span></label>
                <label><input type="checkbox" class="form__input-text" /><span>体験ダイビングについて</span></label>
                <label><input type="checkbox" class="form__input-text" /><span>スペシャルダイビングについて</span></label>
              </dd>
            </dl>
          </li>
          <li class="form__item form__item--select">
            <dl class="form__content">
              <dt class="form__label">キャンペーン</dt>
              <dd class="form__input">
                <select name="select" class="form__input-text form__input-text--select">
                  <option value="" selected>キャンペーン内容を選択</option>
                  <option value="セレクト1">ライセンス講習</option>
                  <option value="セレクト2">ファンダイビング</option>
                  <option value="セレクト3">体験ダイビング</option>
                </select>
              </dd>
            </dl>
          </li>
          <li class="form__item">
            <dl class="form__content">
              <dt class="form__label"><label for="textarea">お問い合わせ内容</label><span>必須</span></dt>
              <dd class="form__input">
                <textarea class="form__input-text form__input-text--textarea" name="textarea" id="textarea"
                  required></textarea>
              </dd>
            </dl>
          </li>
        </ul>
        <div class="form__privacy">
          <div class="form__privacy-inner">
            <label><input type="checkbox" class="form__privacy-text" /><span>個人情報の取り扱いについて同意のうえ送信します。</span></label>
          </div>
        </div>
        <div class="form__button">
          <a href="#" class="button js-error-button"><span>send</span></a>
        </div>
      </form>
    </div>
  </div>
</main>
<?php get_footer(); ?>