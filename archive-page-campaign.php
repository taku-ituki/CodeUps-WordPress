<?php
/*
Template Name: page-campaign
*/
?>

<?php get_header(); ?>

<?php if (is_page('campaign')) : ?>
<!-- キャンペーンページのコンテンツを表示 -->
<!-- メインビュー -->
<section class="sub-fv sub-fv-layout">
    <picture class="sub-fv__img">
        <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common//page-campaign-sp.jpg"
            media="(max-width: 767px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/page-campaign-img-pc.jpg" alt="fish" />
    </picture>
    <h1 class="sub-fv__title"><span>c</span>ampaign</h1>
</section>
<!-- パンくずリスト -->
<div class="breadcrumbs breadcrumbs-blog-layout">
    <div class="breadcrumbs__inner inner">
        <span class="breadcrumbs__top"><a href="index.html">TOP</a></span>
        >
        <span class="breadcrumbs__page-title">キャンペーン</span>
    </div>
</div>
<!-- Campaign -->
<section class="page-campaign page-campaign-layout">
    <div class="page-campaign__inner inner">
        <!-- カテゴリー -->
        <div class="page-campaign__category category">
            <ul class="category__list">
                <li class="category__menu category__menu--current"><a href="#all">ALL</a></li>
                <li class="category__menu"><a href="license">ライセンス講習</a></li>
                <li class="category__menu"><a href="#fun">ファンダイビング</a></li>
                <li class="category__menu"><a href="#experience">体験ダイビング</a></li>
            </ul>
        </div>
        <div class="page-campaign__cards campaign-cards">
            <div class="page-campaign__card campaign-card">
                <div class="campaign-card__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/campaign-card1.jpg"
                        alt="campaign-card-fish" />
                </div>
                <div class="campaign-card__text-wrapper campaign-card__text-wrapper--page">
                    <div class="campaign-card__color-title">ライセンス講習</div>
                    <h2 class="campaign-card__title campaign-card__title--page">ライセンス取得</h2>
                </div>
                <div class="campaign-card__price-wrapper campaign-card__price-wrapper--page">
                    <div class="campaign-card__text campaign-card__text--page">全部コミコミ(お一人様)</div>
                    <div class="campaign-card__price-block">
                        <div class="campaign-card__price-before">¥56,000</div>
                        <div class="campaign-card__price-after campaign-card__price-after--page">¥46,000</div>
                    </div>
                </div>
                <div class="campaign-card__add-text-wrapper">
                    <p class="campaign-card__add-text">
                        ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                        ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                    </p>
                    <div class="campaign-card__add-date">2023/6/1-9/30</div>
                    <div class="campaign-card__add-form">ご予約・お問い合わせはコチラ</div>
                </div>
                <!-- common　ボタン -->
                <div class="page-campaign__btn-wrap">
                    <a class="common-btn" href="information.html">
                        <span>view more</span>
                    </a>
                </div>
            </div>
            <div class="page-campaign__card campaign-card">
                <div class="campaign-card__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/campaign-card-boat.jpg"
                        alt="campaign-card-boat" />
                </div>
                <div class="campaign-card__text-wrapper campaign-card__text-wrapper--page">
                    <div class="campaign-card__color-title">体験ダイビング</div>
                    <h2 class="campaign-card__title campaign-card__title--page">貸切体験ダイビング</h2>
                </div>
                <div class="campaign-card__price-wrapper campaign-card__price-wrapper--page">
                    <div class="campaign-card__text campaign-card__text--page">全部コミコミ(お一人様)</div>
                    <div class="campaign-card__price-block">
                        <div class="campaign-card__price-before">¥24,000</div>
                        <div class="campaign-card__price-after campaign-card__price-after--page">¥18,000</div>
                    </div>
                </div>
                <div class="campaign-card__add-text-wrapper">
                    <p class="campaign-card__add-text">
                        ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                        ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                    </p>
                    <div class="campaign-card__add-date">2023/6/1-9/30</div>
                    <div class="campaign-card__add-form">ご予約・お問い合わせはコチラ</div>
                </div>
                <!-- common　ボタン -->
                <div class="page-campaign__btn-wrap">
                    <a class="common-btn" href="information.html">
                        <span>view more</span>
                    </a>
                </div>
            </div>
            <div class="page-campaign__card campaign-card">
                <div class="campaign-card__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/campaign-card-jellyfish.jpg"
                        alt="campaign-card-jellyfish" />
                </div>
                <div class="campaign-card__text-wrapper campaign-card__text-wrapper--page">
                    <div class="campaign-card__color-title">体験ダイビング</div>
                    <h2 class="campaign-card__title campaign-card__title--page">ナイトダイビング</h2>
                </div>
                <div class="campaign-card__price-wrapper campaign-card__price-wrapper--page">
                    <div class="campaign-card__text campaign-card__text--page">全部コミコミ(お一人様)</div>
                    <div class="campaign-card__price-block">
                        <div class="campaign-card__price-before">¥10,000</div>
                        <div class="campaign-card__price-after campaign-card__price-after--page">¥8,000</div>
                    </div>
                </div>
                <div class="campaign-card__add-text-wrapper">
                    <p class="campaign-card__add-text">
                        ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                        ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                    </p>
                    <div class="campaign-card__add-date">2023/6/1-9/30</div>
                    <div class="campaign-card__add-form">ご予約・お問い合わせはコチラ</div>
                </div>
                <!-- common　ボタン -->
                <div class="page-campaign__btn-wrap">
                    <a class="common-btn" href="information.html">
                        <span>view more</span>
                    </a>
                </div>
            </div>
            <div class="page-campaign__card campaign-card">
                <div class="campaign-card__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/campaign-card-diving.jpg"
                        alt="campaign-card-diving" />
                </div>
                <div class="campaign-card__text-wrapper campaign-card__text-wrapper--page">
                    <div class="campaign-card__color-title">ファンダイビング</div>
                    <h2 class="campaign-card__title campaign-card__title--page">貸切ファンダイビング</h2>
                </div>
                <div class="campaign-card__price-wrapper campaign-card__price-wrapper--page">
                    <div class="campaign-card__text campaign-card__text--page">全部コミコミ(お一人様)</div>
                    <div class="campaign-card__price-block">
                        <div class="campaign-card__price-before">¥20,000</div>
                        <div class="campaign-card__price-after campaign-card__price-after--page">¥16,000</div>
                    </div>
                </div>
                <div class="campaign-card__add-text-wrapper">
                    <p class="campaign-card__add-text">
                        ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                        ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                    </p>
                    <div class="campaign-card__add-date">2023/6/1-9/30</div>
                    <div class="campaign-card__add-form">ご予約・お問い合わせはコチラ</div>
                </div>
                <!-- common　ボタン -->
                <div class="page-campaign__btn-wrap">
                    <a class="common-btn" href="information.html">
                        <span>view more</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="wp-pagenavi page-campaign__pagenavi">
            <?php wp_pagenavi(); ?>
        </div>
    </div>
</section>
<?php while (have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; ?>
<?php else : ?>
<!-- キャンペーンページ以外の場合のコンテンツを表示 -->
<?php while (have_posts()) : the_post(); ?>
<!-- メインビュー -->
<section class="sub-fv sub-fv-layout">
    <picture class="sub-fv__img">
        <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common//blog-mv-sp.jpg"
            media="(max-width: 767px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/blog-mv-pc.jpg" alt="fishes" />
    </picture>
    <h1 class="sub-fv__title"><span>b</span>log</h1>
</section>
<!-- パンくずリスト -->
<div class="breadcrumbs breadcrumbs-blog-layout">
    <div class="breadcrumbs__inner inner">
        <span class="breadcrumbs__top"><a href="<?php echo esc_url(home_url("/")) ?>">top</a></span>
        >
        <span class="breadcrumbs__page-title">ブログ一覧</span>
    </div>
</div>

<!-- Blog -->
<section class="blog-container blog-container-layout">
    <div class="blog-container_inner inner">
        <!-- メインコンテンツ -->
        <div class="blog-container_main-container">
            <div class="blog-container_cards blog-cards">
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                <div class="blog-cards__card blog-card">
                    <a href=" <?php the_permalink();?>">
                        <div class="blog-card__img">
                            <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/blog-card-coral.jpg"
                                alt="blog-card-coral" />
                        </div>
                        <div class="blog-card__title-block">
                            <time class="blog-card__date"
                                datetime="<?php the_time('Y.m.d');?>"><?php the_time('Y.m.d');?></time>
                            <p class="blog-card__title"> <?php the_title();?></p>
                        </div>
                        <p class="blog-card__text">
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                        </p>
                    </a>
                </div>
                <?php endwhile; endif; ?>
            </div>
            <!-- ページナビ -->
            <div class="blog-container_pagenavi wp-pagenavi">
                <?php wp_pagenavi(); ?>
            </div>
        </div>
        <!-- サイドメニュー -->
        <div class="blog-container_side-wrap blog-container">
            <div class="blog-container__inner inner">
                <!-- 人気記事 -->
                <div class="blog-container__article">
                    <h2 class="blog-container__title blog-container__title--article">人気記事</h2>
                    <div class="blog-container__article-cards">
                        <div class="blog-container__article-card">
                            <a href="#">
                                <div class="blog-container__article-img">
                                    <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/about-img2-fish.jpg"
                                        alt="yellow-fish" />
                                </div>
                                <div class="blog-container__article-texts">
                                    <time class="blog-container__article-date" datetime="2023-11-17">2023.11/17</time>
                                    <h3 class="blog-container__article-title">ライセンス取得</h3>
                                </div>
                            </a>
                        </div>
                        <div class="blog-container__article-card">
                            <a href="#">
                                <div class="blog-container__article-img">
                                    <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/blog-card-turtle.jpg"
                                        alt="turtle" />
                                </div>
                                <div class="blog-container__article-texts">
                                    <time class="blog-container__article-date" datetime="2023-11-17">2023.11/17</time>
                                    <h3 class="blog-container__article-title">ウミガメと泳ぐ</h3>
                                </div>
                            </a>
                        </div>
                        <div class="blog-container__article-card">
                            <a href="#">
                                <div class="blog-container__article-img">
                                    <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/blog-card-clownfish.jpg"
                                        alt="clown-fish" />
                                </div>
                                <div class="blog-container__article-texts">
                                    <time class="blog-container__article-date" datetime="2023-11-17">2023.11/17</time>
                                    <h3 class="blog-container__article-title">カクレクマノミ</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- 口コミ -->
                <div class="blog-container_reviews">
                    <h2 class="blog-container__title blog-container__title--reviews">口コミ</h2>
                    <div class="blog-container__reviews-card">
                        <div class="blog-container__reviews-img">
                            <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/reviewd-img.jpg"
                                alt="men&women" />
                        </div>
                        <div class="blog-container__reviews-texts">
                            <time class="blog-container__reviews-date" datetime="2023-11-17">30代(カップル)</time>
                            <h3 class="blog-container__reviews-text">ここにタイトルが入ります。ここにタイトル</h3>
                        </div>
                    </div>
                    <!-- common　ボタン -->
                    <div class="blog-container__btn-wrap blog-container__btn-wrap--reviews">
                        <a class="blog-container__btn common-btn" href="<?php echo esc_url(home_url("/blog")) ?>">
                            <span>view more</span>
                        </a>
                    </div>
                </div>
                <!-- キャンペーン -->
                <div class="blog-container__campaign">
                    <h2 class="blog-container__title">キャンペーン</h2>
                    <div class="blog-container__campaign-cards campaign-cards">
                        <div class="blog-container__campaign-card campaign-card">
                            <div class="campaign-card__img campaign-card__img--blog-container">
                                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/campaign-test.jpg"
                                    alt="campaign-card-fish" />
                            </div>
                            <div class="campaign-card__text-wrapper campaign-card__text-wrapper--blog">
                                <h2 class="campaign-card__title">ライセンス取得</h2>
                            </div>
                            <div class="campaign-card__price-wrapper">
                                <div class="campaign-card__text">全部コミコミ(お一人様)</div>
                                <div class="campaign-card__price-block">
                                    <div class="campaign-card__price-before">¥56,000</div>
                                    <div class="campaign-card__price-after">¥46,000</div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-container__campaign-card campaign-card">
                            <div class="campaign-card__img campaign-card__img--blog-container">
                                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/campaign-card-boat.jpg"
                                    alt="campaign-card-boat" />
                            </div>
                            <div class="campaign-card__text-wrapper campaign-card__text-wrapper--blog">
                                <h2 class="campaign-card__title">貸切体験ダイビング</h2>
                            </div>
                            <div class="campaign-card__price-wrapper">
                                <div class="campaign-card__text">全部コミコミ(お一人様)</div>
                                <div class="campaign-card__price-block">
                                    <div class="campaign-card__price-before">¥24,000</div>
                                    <div class="campaign-card__price-after">¥18,000</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- common　ボタン -->
                <div class="blog-container__btn-wrap blog-container__btn-wrap--campaign">
                    <a class="blog-container__btn common-btn" href="campaign.html">
                        <span>view more</span>
                    </a>
                </div>
                <!--アーカイブ -->
                <div class="blog-container__archive">
                    <h2 class="blog-container__title blog-container__title--archive">アーカイブ</h2>
                    <!-- accordion -->
                    <div class="blog-container__accordion">
                        <div class="blog-container__accordion-container">
                            <div class="blog-container__accordion-item js-accordion-item">
                                <h3 class="blog-container__accordion-title js-accordion-title">2023</h3>
                                <div class="blog-container__accordion-content js-blog-container__accordion-content">
                                    <div class="blog-container__accordion-container-month">
                                        <div class="blog-container__accordion-item-month">
                                            <h3 class="blog-container__accordion-title-month js-accordion-title-month">
                                                3月
                                            </h3>
                                            <div class="blog-container__accordion-content-month">
                                                <p class="blog-container__accordion-text">コンテンツが入ります。</p>
                                            </div>
                                        </div>
                                        <div class="blog-container__accordion-item-month">
                                            <h3 class="blog-container__accordion-title-month js-accordion-title-month">
                                                2月
                                            </h3>
                                            <div class="blog-container__accordion-content-month">
                                                <p class="blog-container__accordion-text">
                                                    コンテンツが入ります。コンテンツが入ります。コンテンツが入ります。コンテンツが入ります。</p>
                                            </div>
                                        </div>
                                        <div class="blog-container__accordion-item-moth">
                                            <h3 class="blog-container__accordion-title-month js-accordion-title-month">
                                                1月
                                            </h3>
                                            <div class="blog-container__accordion-content-month">
                                                <p class="blog-container__accordion-text">
                                                    コンテンツが入ります。コンテンツが入ります。コンテンツが入ります。コンテンツが入ります。</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-container__accordion-item-month">
                                <h3 class="blog-container__accordion-title js-accordion-title">2022</h3>
                                <div class="blog-container__accordion-content">
                                    <div class="blog-container__accordion-container-month">
                                        <div class="blog-container__accordion-item-month">
                                            <h3 class="blog-container__accordion-title-month js-accordion-title-month">
                                                3月
                                            </h3>
                                            <div class="blog-container__accordion-content-month">
                                                <p class="blog-container__accordion-text">コンテンツが入ります。</p>
                                            </div>
                                        </div>
                                        <div class="blog-container__accordion-item-month">
                                            <h3 class="blog-container__accordion-title-month js-accordion-title-month">
                                                2月
                                            </h3>
                                            <div class="blog-container__accordion-content-month">
                                                <p class="blog-container__accordion-text">
                                                    コンテンツが入ります。コンテンツが入ります。コンテンツが入ります。コンテンツが入ります。</p>
                                            </div>
                                        </div>
                                        <div class="blog-container__accordion-item-moth">
                                            <h3 class="blog-container__accordion-title-month js-accordion-title-month">
                                                1月
                                            </h3>
                                            <div class="blog-container__accordion-content-month">
                                                <p class="blog-container__accordion-text">
                                                    コンテンツが入ります。コンテンツが入ります。コンテンツが入ります。コンテンツが入ります。</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.accordion-container -->
                    </div>
                    <!-- .accordion -->
                </div>
            </div>
        </div>
    </div>
</section>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>