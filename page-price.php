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
    <div class="breadcrumbs__inner inner">
      <?php
    if ( function_exists( 'bcn_display' ) ) {
      bcn_display();
    }
  ?>
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
            <?php
            $licenses = SCF::get('licenses');
            foreach ($licenses as $license ) {
              $license_course = esc_html( $license['license-course'] );
              $license_price = esc_html( $license['license-price'] );?>
            <?php if($license_course && $license_price): ?>
            <div class="price-list__item">
              <?php $license_course = str_replace("#BR#", "<br class='u-mobile'>", $license_course); ?>
              <dt class="price-list__course"><?php echo $license_course ?></dt>
              <dd class="price-list__price">&yen;<?php echo $license_price ?></dd>
            </div>
            <?php endif; ?>
            <?php } ?>
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
            <?php
            $experiences = SCF::get('experiences');
            foreach ($experiences as $experience ) {
              $experience_course = esc_html( $experience['experience-course'] );
              $experience_price = esc_html( $experience['experience-price'] );?>
            <?php if($experience_course && $experience_price): ?>
            <div class="price-list__item">
              <?php $experience_course = str_replace("#BR#", "<br class='u-mobile'>", $experience_course); ?>
              <dt class="price-list__course"><?php echo $experience_course ?></dt>
              <dd class="price-list__price">&yen;<?php echo $experience_price ?></dd>
            </div>
            <?php endif; ?>
            <?php } ?>
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
            <?php
            $funs = SCF::get('funs');
            foreach ($funs as $fun ) {
              $fun_course = esc_html( $fun['fun-course'] );
              $fun_price = esc_html( $fun['fun-price'] );?>
            <?php if($fun_course && $fun_price): ?>
            <div class="price-list__item">
              <?php $fun_course = str_replace("#BR#", "<br class='u-mobile'>", $fun_course); ?>
              <dt class="price-list__course"><?php echo $fun_course ?></dt>
              <dd class="price-list__price">&yen;<?php echo $fun_price ?></dd>
            </div>
            <?php endif; ?>
            <?php } ?>
          </dl>
        </div>
        <div class="price-lists__content price-list" id="price-special">
          <div class="price-list__heading">
            <h2 class="price-list__title">スペシャルダイビング</h2>
            <div class="price-list__image">
              <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/whale.png"
                alt="クジラのアイコン" />
            </div>
          </div>
          <dl class="price-list__items">
            <?php
            $specials = SCF::get('specials');
            foreach ($specials as $special ) {
              $special_course = esc_html( $special['special-course'] );
              $special_price = esc_html( $special['special-price'] );?>
            <?php if($special_course && $special_price): ?>
            <div class="price-list__item">
              <?php $special_course = str_replace("#BR#", "<br class='u-mobile'>", $special_course); ?>
              <dt class="price-list__course"><?php echo $special_course ?></dt>
              <dd class="price-list__price">&yen;<?php echo $special_price ?></dd>
            </div>
            <?php endif; ?>
            <?php } ?>
          </dl>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>