<?php get_header(); ?>

<div class="sub-mv">
  <div class="sub-mv__inner">
    <div class="sub-mv__image">
      <picture>
        <source media="(min-width: 768px)"
          srcset="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/blog-sub-pc.jpg" />
        <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/blog-sub-sp.jpg"
          alt="たくさんの魚たちが泳いでいる様子" />
      </picture>
    </div>
    <div class="sub-mv__heading">
      <h1 class="sub-mv__title">blog</h1>
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
          <a href="home.html">ブログ一覧</a>
        </li>
        <li class="breadcrumbs__item">
          <span>&gt;</span>
        </li>
        <li class="breadcrumbs__item"><a href="#">ブログ詳細</a></li>
      </ol>
    </div>
  </div>

  <section class="post-blog sub-blog">
    <div class="post-blog__inner inner">
      <div class="post-blog__contents">
        <div class="post-blog__main-content blog-detail">
          <div class="blog-detail__mata">
            <time class="blog-detail__date" datetime="2023-11-17">2023.11.17</time>
            <h2 class="blog-detail__title">ライセンス取得</h2>
          </div>
          <div class="blog-detail__image">
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/blog-01.jpg"
              alt="白い珊瑚が映っている様子" />
          </div>
          <div class="blog-detail__text">
            <p>
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
            </p>
          </div>
          <div class="blog-detail__image">
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/blog-01.jpg"
              alt="白い珊瑚が映っている様子" />
          </div>
          <div class="blog-detail__text">
            <p>
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
            </p>
            <nav>
              <ul>
                <li>リスト1</li>
                <li>リスト2</li>
                <li>リスト3</li>
              </ul>
            </nav>
          </div>
          <div class="blog-detail__text">
            <p>
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
            </p>
          </div>

          <div class="blog-detail__pagenavi pagenavi">
            <div class="wp-pagenavi">
              <a class="previouspostslink" rel="prev" href="">&nbsp;&nbsp;&nbsp;&nbsp;</a>
              <a class="nextpostslink" rel="next" href="">&nbsp;&nbsp;&nbsp;&nbsp;</a>
            </div>
          </div>
        </div>
        <aside class="post-blog__side blog-side">
          <div class="blog-side__content">
            <div class="blog-side__title side-title">
              <h2 class="side-title__main">人気記事</h2>
            </div>
            <ul class="blog-side__cards blog-side-cards">
              <li class="blog-side-cards__item blog-side-card">
                <a href="#">
                  <div class="blog-side-card__container">
                    <div class="blog-side-card__image">
                      <img src="./assets/images/common/blog-04.jpg" alt="白い珊瑚が映っている様子" />
                    </div>
                    <div class="blog-side-card__body">
                      <time class="blog-side-card__date" datetime="2023-11-17">2023.11.17</time>
                      <h3 class="blog-side-card__title">ライセンス取得</h3>
                    </div>
                  </div>
                </a>
              </li>
              <li class="blog-side-cards__item blog-side-card">
                <a href="#">
                  <div class="blog-side-card__container">
                    <div class="blog-side-card__image">
                      <img src="./assets/images/common/blog-02.jpg" alt="白い珊瑚が映っている様子" />
                    </div>
                    <div class="blog-side-card__body">
                      <time class="blog-side-card__date" datetime="2023-11-17">2023.11.17</time>
                      <h3 class="blog-side-card__title">ウミガメと泳ぐ</h3>
                    </div>
                  </div>
                </a>
              </li>
              <li class="blog-side-cards__item blog-side-card">
                <a href="#">
                  <div class="blog-side-card__container">
                    <div class="blog-side-card__image">
                      <img src="./assets/images/common/blog-03.jpg" alt="白い珊瑚が映っている様子" />
                    </div>
                    <div class="blog-side-card__body">
                      <time class="blog-side-card__date" datetime="2023-11-17">2023.11.17</time>
                      <h3 class="blog-side-card__title">カクレクマノミ</h3>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="blog-side__content">
            <div class="blog-side__title side-title">
              <h2 class="side-title__main">口コミ</h2>
            </div>
            <div class="blog-side__voice-items voice-lists">
              <div class="voice-lists__item voice-list">
                <a href="#">
                  <div class="voice-list__image">
                    <img src="./assets/images/common/voice-side.jpg" alt="カップルが腕を組んで柔かに座っている様子" />
                  </div>
                  <div class="voice-list__body">
                    <div class="voice-list__info">
                      <p class="voice-list__age">30代(カップル)</p>
                    </div>
                    <h3 class="voice-list__title">ここにタイトルが入ります。ここにタイトル</h3>
                  </div>
                </a>
              </div>
              <div class="voice-list__button">
                <a href="archive-campaign.html" class="button"><span>view&nbsp;more</span></a>
              </div>
            </div>
          </div>
          <div class="blog-side__content blog-side__content--side">
            <div class="blog-side__title side-title">
              <h2 class="side-title__main">キャンペーン</h2>
            </div>
            <div class="blog-side__campaign campaign-cards">
              <div class="campaign-cards__items campaign-cards__items--column">
                <a class="campaign-cards__item campaign-card">
                  <div class="campaign-card__image campaign-card__image--side">
                    <img src="./assets/images/common/campaign-1.jpg" alt="海の中を色とりどりの魚が泳いでいる様子" />
                  </div>
                  <div class="campaign-card__body campaign-card__body--center">
                    <h3 class="campaign-card__title">ライセンス取得</h3>
                  </div>
                  <div class="campaign-card__textBlock campaign-card__textBlock--side">
                    <p class="campaign-card__text campaign-card__text--side">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__price campaign-card__price--side">
                      <p class="campaign-card__price-regular campaign-card__price-regular--side">&yen;56&#44;000</p>
                      <p class="campaign-card__price-sale campaign-card__price-sale--small">&yen;46&#44;000</p>
                    </div>
                  </div>
                </a>
                <a class="campaign-cards__item campaign-card">
                  <div class="campaign-card__image campaign-card__image--side">
                    <img src="./assets/images/common/campaign-2.jpg" alt="海岸からダイビングスポットまで運ぶ船の乗り場" />
                  </div>
                  <div class="campaign-card__body campaign-card__body--center">
                    <h3 class="campaign-card__title">貸切体験ダイビング</h3>
                  </div>
                  <div class="campaign-card__textBlock campaign-card__textBlock--side">
                    <p class="campaign-card__text campaign-card__text--side">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__price campaign-card__price--side">
                      <p class="campaign-card__price-regular campaign-card__price-regular--side">&yen;24&#44;000</p>
                      <p class="campaign-card__price-sale campaign-card__price-sale--small">&yen;18&#44;000</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="campaign__button campaign__button--sub">
              <a href="archive-campaign.html" class="button"><span>view&nbsp;more</span> </a>
            </div>
          </div>
          <div class="blog-side__content blog-side__content--archive">
            <div class="blog-side__title side-title">
              <h2 class="side-title__main">アーカイブ</h2>
            </div>
            <div class="blog-side__archive side-archive">
              <ul class="side-archive__lists">
                <li class="side-archive__list">
                  <p class="side-archive__year js-side-archive__year">
                    <span>2023</span>
                  </p>
                  <ul class="side-archive__items">
                    <li class="side-archive__item">
                      <a href="#">
                        <p class="side-archive__month">
                          <span>3月</span>
                        </p>
                      </a>
                    </li>
                    <li class="side-archive__item">
                      <a href="">
                        <p class="side-archive__month">
                          <span>2月</span>
                        </p>
                      </a>
                    </li>
                    <li class="side-archive__item">
                      <a href="">
                        <p class="side-archive__month">
                          <span>1月</span>
                        </p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="side-archive__list">
                  <p class="side-archive__year js-side-archive__year">
                    <span>2022</span>
                  </p>
                  <ul class="side-archive__items">
                    <li class="side-archive__item">
                      <a href="#">
                        <p class="side-archive__month">
                          <span>12月</span>
                        </p>
                      </a>
                    </li>
                    <li class="side-archive__item">
                      <a href="">
                        <p class="side-archive__month">
                          <span>11月</span>
                        </p>
                      </a>
                    </li>
                    <li class="side-archive__item">
                      <a href="">
                        <p class="side-archive__month">
                          <span>10月</span>
                        </p>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>