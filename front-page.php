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
                $args = [
                    "post_type" => "campaign_list",
                    "posts_per_page" => -1, // 全てのキャンペーン投稿を取得
                ];
                $the_query = new WP_Query($args);
                ?>
                    <?php if ($the_query->have_posts()) : ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="campaign__card campaign-card swiper-slide">
                        <div class="campaign-card__img">
                            <?php 
                        $image = get_field('campaign_card_thumbnail'); 
                        if( !empty($image) ): ?>
                            <img src="<?php echo esc_url($image['url']); ?>"
                                alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php else: ?>
                            <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>"
                                alt="<?php the_title_attribute(); ?>のアイキャッチ画像" />
                            <?php endif; ?>
                        </div>
                        <div class="campaign-card__text-wrapper">
                            <div class="campaign-card__color-title">
                                <?php
                            $term = get_field('category_green'); // タクソノミーフィールドの値を取得
                            if ($term) {
                                // タームの詳細を取得
                                $term_obj = get_term($term);
                                if (!is_wp_error($term_obj) && $term_obj) {
                                    echo esc_html($term_obj->name); // ターム名を表示
                                } else {
                                    echo 'No term found';
                                }
                            } else {
                                echo 'No category selected';
                            }
                            ?>
                            </div>
                            <div class="campaign-card__title"><?php the_field('campaign_price_title'); ?></div>
                        </div>
                        <div class="campaign-card__price-wrapper">
                            <div class="campaign-card__text"><?php the_field('campaign_price_column'); ?></div>
                            <div class="campaign-card__price-block">
                                <div class="campaign-card__price-before">¥<?php the_field('price_before'); ?></div>
                                <div class="campaign-card__price-after">¥<?php the_field('price_after'); ?></div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                    <p>キャンペーンが見つかりませんでした。</p>
                    <?php endif; ?>
                </div>
            </div>
            <!-- ナビゲーションボタンの div 要素（省略可能） -->
            <div class="campaign__swiper-button-prev swiper-button-prev"></div>
            <div class="campaign__swiper-button-next swiper-button-next"></div>
            <!-- common ボタン -->

            <div class="campaign__btn-wrap">
                <a class="common-btn" href="<?php echo esc_url(home_url("/campaign_list")) ?>">
                    <span>view more</span>
                </a>
            </div>
        </div>
    </section>
    <!-- About us -->
    <section class="about about-layout">
        <div class="about__inner inner">
            <!-- セクションタイトル -->
            <div class="about__title section-title">
                <h2 class="section-title__en">about us</h2>
                <p class="section-title__ja">私たちについて</p>
            </div>
            <div class="about__body">
                <div class="about__img-block">
                    <div class="about__img-left"><img
                            src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/shisa.jpg"
                            alt="top-about-left" />
                    </div>
                    <div class="about__img-right"><img
                            src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/about-fish.jpg"
                            alt="top-about-right" /></div>
                </div>
                <div class="about__text-block">
                    <p class="about__text-en">Dive into<br />the Ocean</p>
                    <div class="about__text-ja">
                        <p class="about__text">
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                        </p>
                        <!-- common　ボタン -->
                        <div class="about__btn-wrap">
                            <a class="common-btn" href="<?php echo esc_url(home_url("/aboutus")) ?>">
                                <span>view more</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- information -->
    <section class="information information-layout">
        <div class="information__inner inner">
            <!-- セクションタイトル -->
            <div class="information__title section-title">
                <h2 class="section-title__en">information</h2>
                <p class="section-title__ja">ダイビング情報</p>
            </div>
            <div class="information__item-block">
                <div class="information__img js-color">
                    <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/top-information-img.jpg"
                        alt="top-information-ocean" />
                </div>
                <div class="information__text-block">
                    <div class="information__text-title">ライセンス講習</div>
                    <p class="information__text">
                        当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br />
                        正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
                    </p>
                    <!-- common　ボタン -->
                    <div class="page-campaign__btn-wrap">
                        <a class="common-btn" href="<?php echo esc_url(home_url("/information?tab=1")) ?>">
                            <span>view more</span>
                        </a>
                    </div>
                </div>
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
                <a class="common-btn" href="<?php echo esc_url(home_url("/voice_list")) ?>">
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
                            srcset="<?php echo get_theme_file_uri(); ?>/dist/dist/assets/images/common/top-price-sp.jpg"
                            media="(max-width: 767px)" />
                        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/top-price-pc.jpg"
                            alt="top-price-coral" />
                    </picture>
                </figure>
                <ul class="price__lists">
                    <?php
                // カスタム投稿タイプ 'price-list' のクエリ
                $args = array(
                    'post_type' => 'price-list', // ここをカスタム投稿タイプのスラッグに変更してください
                    'posts_per_page' => -1,
                );
                $custom_query = new WP_Query($args);

                if ($custom_query->have_posts()) :
                    while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
                    <li class="price__list">
                        <h3 class="price__list-title"><?php the_title(); ?></h3>
                        <dl class="price__list-item">
                            <?php if ($plan_1 = get_field('price_plan_1')) : ?>
                            <dt class="price__list-menu"><?php echo $plan_1; ?></dt>
                            <dd class="price__list-price"><?php the_field('price_price_1'); ?></dd>
                            <?php endif; ?>

                            <?php if ($plan_2 = get_field('price_plan_2')) : ?>
                            <dt class="price__list-menu"><?php echo $plan_2; ?></dt>
                            <dd class="price__list-price"><?php the_field('price_price_2'); ?></dd>
                            <?php endif; ?>

                            <?php if ($plan_3 = get_field('price_plan_3')) : ?>
                            <dt class="price__list-menu"><?php echo $plan_3; ?></dt>
                            <dd class="price__list-price"><?php the_field('price_price_3'); ?></dd>
                            <?php endif; ?>

                            <?php if ($plan_4 = get_field('price_plan_4')) : ?>
                            <dt class="price__list-menu"><?php echo $plan_4; ?></dt>
                            <dd class="price__list-price"><?php the_field('price_price_4'); ?></dd>
                            <?php endif; ?>
                        </dl>
                    </li>
                    <?php endwhile;
                    wp_reset_postdata();
                else : ?>
                    <p>投稿が見つかりませんでした。</p>
                    <?php endif; ?>
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