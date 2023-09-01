<?php get_header(); ?>
<main>
  <div class="sub-mv">
    <div class="sub-mv__inner">
      <div class="sub-mv__image">
        <picture>
          <source media="(min-width: 768px)"
            srcset="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/blog-sub-pc.jpg" />
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/blog-sub-sp.jpg"
            alt="魚の群れが泳いでいる様子" />
        </picture>
      </div>
      <div class="sub-mv__heading">
        <h1 class="sub-mv__title">blog</h1>
      </div>
    </div>
  </div>
  <div class="breadcrumbs">
    <div class="breadcrumbs__inner inner">
      <?php
            if ( function_exists( 'bcn_display' ) ) {
              bcn_display();
            }
            ?>
    </div>
  </div>
  <section class="post-blog sub-blog">
    <div class="post-blog__inner inner">
      <div>
        <h2 class="post-blog__date"><?php echo get_the_date('Y年n月'); ?></h2>
      </div>
      <div class="post-blog__contents">
        <div class="post-blog__main">
          <ul class="post-blog__items blog-cards blog-cards--2column">
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <li class="blog-cards__item blog-card">
              <a href="<?php the_permalink(); ?>">
                <div class="blog-card__container">
                  <div class="blog-card__image blog-card__image--large">
                    <?php if (has_post_thumbnail()) { ?>
                    <?php the_post_thumbnail('medium'); ?>
                    <?php } else { ?>
                    <img src="<?php echo esc_url(get_theme_file_uri('')); ?>/dist/assets/images/common/no-image.jpg"
                      alt="画像なし">
                    <?php } ?>
                  </div>
                  <div class="blog-card__body">
                    <div class="blog-card__meta">
                      <time class="blog-card__date"
                        datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                    </div>
                    <div class="blog-card__text-block">
                      <h3 class="blog-card__title"><?php echo wp_trim_words(get_the_title(), 14, '…'); ?></h3>
                      <p class="blog-card__text"><?php the_excerpt(); ?></p>
                    </div>
                  </div>
                </div>
              </a>
            </li>
            <?php endwhile; ?>
            <?php else: ?>
            <p>記事が見つかりませんでした</p>
            <?php endif; ?>
          </ul>
          <div class="pagenavi">
            <div class="pagenavi__inner inner">
              <?php wp_pagenavi(); ?>
            </div>
          </div>
        </div>
        <?php get_sidebar(); ?>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>