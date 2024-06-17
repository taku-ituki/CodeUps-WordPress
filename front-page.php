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
    <section class="campaign campaign-layout">
        <!-- セクションタイトル -->
        <div class="campaign__inner inner">
            <div class="campaign__title section-title">
                <h2 class="section-title__en">Campaign</h2>
                <p class="section-title__ja">キャンペーン</p>
            </div>
            <div class="campaign__swiper swiper js-campaign-swiper">
                <div class="campaign__swiper-wrapper swiper-wrapper">
                    <?php
                // WP_Queryを使用してカスタム投稿タイプ 'campaign-swiper' の投稿を取得
                $args = array(
                    'post_type' => 'campaign-swiper', // CPT UIで作成したカスタム投稿タイプのスラッグ
                    'posts_per_page' => -1 // 取得する投稿数（-1で全ての投稿を取得）
                );
                $query = new WP_Query($args);
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                        // SCFを使用してカスタムフィールドグループ 'swiper-group' を取得
                        $scf_group = SCF::get('swiper-group', get_the_ID());
                        foreach ($scf_group as $item):
                            $imgurl = wp_get_attachment_image_src($item['slide_img'], 'large');
                ?>
                    <div class="campaign__card campaign-card swiper-slide">
                        <div class="campaign-card__img">
                            <img src="<?php echo esc_url($imgurl[0]); ?>" alt="">
                        </div>
                        <div class="campaign-card__text-wrapper">
                            <div class="campaign-card__color-title"><?php echo esc_html($item['slide_color_title']); ?>
                            </div>
                            <div class="campaign-card__title"><?php echo esc_html($item['slide_title']); ?></div>
                        </div>
                        <div class="campaign-card__price-wrapper">
                            <div class="campaign-card__text"><?php echo esc_html($item['slide_text']); ?></div>
                            <div class="campaign-card__price-block">
                                <div class="campaign-card__price-before">
                                    <?php echo esc_html($item['slide_price_before']); ?></div>
                                <div class="campaign-card__price-after">
                                    <?php echo esc_html($item['slide_price_after']); ?></div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; endwhile; wp_reset_postdata(); endif; ?>
                </div>
            </div>
            <!-- ナビゲーションボタンの div 要素（省略可能） -->
            <div class="campaign__swiper-button-prev swiper-button-prev"></div>
            <div class="campaign__swiper-button-next swiper-button-next"></div>
            <!-- common ボタン -->
            <div class="campaign__btn-wrap">
                <a class="common-btn" href="campaign.html">
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