<?php get_header(); ?>
<main>
    <!-- メインビュー -->
    <section class="fv fv-layout js-fv">
        <div class="fv__inner">
            <div class="fv__swiper swiper js-fv-swiper">
                <div class="swiper-wrapper">
                    <picture class="swiper-slide">
                        <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common//fv-turtle-sp.jpg"
                            media="(max-width: 767px)" />
                        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/fv-turtle-pc.jpg"
                            alt="turtle" />
                    </picture>
                    <div class="swiper-slide">
                        <picture class="swiper-slide">
                            <source
                                srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common//fv-diving-sp.jpg"
                                media="(max-width: 767px)" />
                            <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/fv-diving-pc.jpg"
                                alt="turtle" />
                        </picture>
                    </div>
                    <div class="swiper-slide">
                        <picture class="swiper-slide">
                            <source
                                srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common//fv-boat-sp.jpg"
                                media="(max-width: 767px)" />
                            <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/fv-boat-pc.jpg"
                                alt="boat" />
                        </picture>
                    </div>
                    <div class="swiper-slide">
                        <picture class="swiper-slide">
                            <source
                                srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common//fv-beach-sp.jpg"
                                media="(max-width: 767px)" />
                            <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/fv-beach-pc.jpg"
                                alt="beach" />
                        </picture>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="fv__title">
            <span class="fv__title-main">DIVING</span>
            <span class="fv__title-sub">into the ocean</span>
        </h2>
    </section>
    <!-- Campaign -->
    <section class="page-campaign page-campaign-layout">
        <div class="page-campaign__inner inner">
            <!-- カテゴリー -->
            <div class="page-campaign__category category">
                <ul class="category__list">
                    <li class="category__menu category__menu--current"><a href="#">ALL</a></li>
                    <li class="category__menu"><a href="#">ライセンス講習</a></li>
                    <li class="category__menu"><a href="#">ファンダイビング</a></li>
                    <li class="category__menu"><a href="#">体験ダイビング</a></li>
                </ul>
            </div>
            <div class="page-campaign__cards campaign-cards js-campaign-swiper swiper-container">
                <div class="swiper-wrapper">
                    <?php
                $slideItems = SCF::get('swiper-group');
                if (!$slideItems) {
                    echo '<div>フィールドグループ "swiper-group" が見つかりません</div>';
                } else {
                    foreach ($slideItems as $item) {
                        // デバッグ情報を出力
                        echo '<pre>';
                        print_r($item);
                        echo '</pre>';
                        $imgurl = wp_get_attachment_image_src($item['slider_img'], 'large');
                        if ($imgurl) {
                            ?>
                    <div class="swiper-slide">
                        <div class="campaign-card__img">
                            <img src="<?php echo esc_url($imgurl[0]); ?>" alt="">
                        </div>
                    </div>
                    <?php
                        } else {
                            echo '<div>画像が見つかりません</div>';
                        }
                    }
                }
                ?>
                </div>
                <!-- ページネーション -->
                <div class="swiper-pagination"></div>
                <!-- ナビゲーションボタン -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <!-- スクロールバー -->
                <div class="swiper-scrollbar"></div>
            </div>
            <!-- common ボタン -->
            <div class="page-campaign__btn-wrap">
                <a class="common-btn" href="information.html">
                    <span>view more</span>
                </a>
            </div>
        </div>
    </section>

    <!-- ブログ -->
    <section class="blog blog-layout">
        <div class="blog__inner inner">
            <div class="blog__title section-title">
                <h2 class="section-title__en section-title__en--blog">blog</h2>
                <p class="section-title__ja section-title__ja--blog">ブログ</p>
            </div>
            <div class="blog__cards blog-cards">
                <div class="blog-cards__card blog-card">
                    <a href="blog-detail.html">
                        <div class="blog-card__img">
                            <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/blog-card-coral.jpg"
                                alt="blog-card-coral" />
                        </div>
                        <div class="blog-card__title-block">
                            <time class="blog-card__date" datetime="2023-11-17">2023.11/17</time>
                            <div class="blog-card__title">ライセンス講習</div>
                        </div>
                        <p class="blog-card__text">
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                        </p>
                    </a>
                </div>
                <div class="blog-cards__card blog-card">
                    <a href="blog-detail.html">
                        <div class="blog-card__img">
                            <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/blog-card-turtle.jpg"
                                alt="blog-card-coral" />
                        </div>
                        <div class="blog-card__title-block">
                            <time class="blog-card__date" datetime="2023-11-17">2023.11/17</time>
                            <div class="blog-card__title">ウミガメと泳ぐ</div>
                        </div>
                        <p class="blog-card__text">
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                        </p>
                    </a>
                </div>
                <div class="blog-cards__card blog-card">
                    <a href="blog-detail.html">
                        <div class="blog-card__img">
                            <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/blog-card-clownfish.jpg"
                                alt="blog-card-coral" />
                        </div>
                        <div class="blog-card__title-block">
                            <time class="blog-card__date" datetime="2023-11-17">2023.11/17</time>
                            <div class="blog-card__title">カクレクマノミ</div>
                        </div>
                        <p class="blog-card__text">
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                        </p>
                    </a>
                </div>
            </div>
            <!-- common　ボタン -->
            <div class="blog__btn-wrap">
                <a class="common-btn" href="<?php echo esc_url(home_url("/blog")) ?>">
                    <span>view more</span>
                </a>
            </div>
        </div>
    </section>
    <!-- Voice -->
    <section class="voice voice-layout">
        <div class="voice__inner inner">
            <!-- セクションタイトル -->
            <div class="voice__title section-title">
                <h2 class="section-title__en">voice</h2>
                <p class="section-title__ja">お客様の声</p>
            </div>
            <div class="voice__cards voice-cards">
                <div class="voice-cards__card voice-card">
                    <a href="#">
                        <div class="voice-card__top">
                            <div class="voice-card__headline">
                                <div class="voice-card__sub">
                                    <div class="voice-card__age">20代(女性)</div>
                                    <div class="voice-card__sub-title">ライセンス講習</div>
                                </div>
                                <div class="voice-card__main-title">ここにタイトルが入ります。ここにタイトル</div>
                            </div>
                            <div class="voice-card__img js-color">
                                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/top-voice-woman.jpg"
                                    alt="top-voice-women" />
                            </div>
                        </div>
                        <p class="voice-card__bottom">
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                            ここにテキストが入ります。ここにテキストが入ります。
                        </p>
                    </a>
                </div>

                <div class="voice-cards__card voice-card">
                    <a href="#">
                        <div class="voice-card__top">
                            <div class="voice-card__headline">
                                <div class="voice-card__sub">
                                    <div class="voice-card__age">20代(女性)</div>
                                    <div class="voice-card__sub-title">ライセンス講習</div>
                                </div>
                                <div class="voice-card__main-title">ここにタイトルが入ります。ここにタイトル</div>
                            </div>
                            <div class="voice-card__img js-color">
                                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/top-voice-men.jpg"
                                    alt="top-voice-men" />
                            </div>
                        </div>
                        <p class="voice-card__bottom">
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                            ここにテキストが入ります。ここにテキストが入ります。
                        </p>
                    </a>
                </div>
            </div>
            <!-- common　ボタン -->
            <div class="voice__btn-wrap">
                <a class="common-btn" href="voice.html">
                    <span>view more</span>
                </a>
            </div>
        </div>
    </section>
    <!-- price -->
    <section class="price price-layout">
        <div class="price__inner inner">
            <!-- セクションタイトル -->
            <div class="price__title section-title">
                <h2 class="section-title__en">Price</h2>
                <p class="section-title__ja">料金一覧</p>
            </div>
            <div class="price__contents">
                <figure class="price__img-block">
                    <picture class="price__content js-color">
                        <source
                            srcset="<?php echo get_theme_file_uri(); ?>/dist/dist/assets/images/common//top-price-sp.jpg"
                            media="(max-width: 767px)" />
                        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/top-price-pc.jpg"
                            alt="top-price-coral" />
                    </picture>
                </figure>
                <ul class="price__lists">
                    <li class="price__list">
                        <h3 class="price__list-title">ライセンス講習</h3>
                        <dl class="price__list-item">
                            <dt class="price__list-menu">オープンウォーターダイバーコース</dt>
                            <dd class="price__list-price">¥50,000</dd>
                            <dt class="price__list-menu">アドバンスドオープンウォーターコース</dt>
                            <dd class="price__list-price">¥60,000</dd>
                            <dt class="price__list-menu">レスキュー＋EFRコース</dt>
                            <dd class="price__list-price">¥70,000</dd>
                        </dl>
                    </li>
                    <li class="price__list">
                        <h3 class="price__list-title">体験ダイビング</h3>
                        <dl class="price__list-item">
                            <dt class="price__list-menu">ビーチ体験ダイビング(半日)</dt>
                            <dd class="price__list-price">¥7,000</dd>
                            <dt class="price__list-menu">ビーチ体験ダイビング(1日)</dt>
                            <dd class="price__list-price">¥14,000</dd>
                            <dt class="price__list-menu">ボート体験ダイビング(半日)</dt>
                            <dd class="price__list-price">¥10,000</dd>
                            <dt class="price__list-menu">ボート体験ダイビング(1日)</dt>
                            <dd class="price__list-price">¥18,000</dd>
                        </dl>
                    </li>
                    <li class="price__list">
                        <h3 class="price__list-title">ファンダイビング</h3>
                        <dl class="price__list-item">
                            <dt class="price__list-menu">ビーチダイビング(2ダイブ)</dt>
                            <dd class="price__list-price">¥14,000</dd>
                            <dt class="price__list-menu">ボートダイビング(2ダイブ)</dt>
                            <dd class="price__list-price">¥18,000</dd>
                            <dt class="price__list-menu">スペシャルダイビング(2ダイブ)</dt>
                            <dd class="price__list-price">¥24,000</dd>
                            <dt class="price__list-menu">ナイトダイビング(1ダイブ)</dt>
                            <dd class="price__list-price">¥10,000</dd>
                        </dl>
                    </li>
                    <li class="price__list">
                        <h3 class="price__list-title">スペシャルダイビング</h3>
                        <dl class="price__list-item">
                            <dt class="price__list-menu">貸切ダイビング(2ダイブ)</dt>
                            <dd class="price__list-price">¥24,000</dd>
                            <dt class="price__list-menu">1日ダイビング(3ダイブ)</dt>
                            <dd class="price__list-price">¥32,000</dd>
                        </dl>
                    </li>
                </ul>
            </div>
            <!-- common　ボタン -->
            <div class="price__btn-wrap">
                <a class="common-btn" href="<?php echo esc_url(home_url("/price")) ?>">
                    <span>view more</span>
                </a>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>