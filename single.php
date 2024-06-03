<?php get_header(); ?>
<!-- メインビュー -->
<section class="sub-fv sub-fv-layout">
    <picture class="sub-fv__img">
        <source srcset="<?php echo get_theme_file_uri(); ?>/dist/dist/assets/images/common//blog-mv-sp.jpg"
            media="(max-width: 767px)" />
       <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/blog-mv-pc.jpg" alt="fishes" />
    </picture>
    <h1 class="sub-fv__title"><span>b</span>log</h1>
</section>
<!-- パンくずリスト -->
<div class="breadcrumbs breadcrumbs-blog-layout">
    <div class="breadcrumbs__inner inner">
        <?php get_template_part('parts/breadcrumbs') ?>
    </div>
</div>
<!-- Blog詳細 -->
<section class="blog-detail blog-detail-layout">
    <div class="blog-detail__inner inner">
        <!-- メインコンテンツ -->
        <div class="blog-detail__main-container">
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <!-- 管理画面で編集 -->
            <time datetime="<?php the_time('Y.m.d');?>"><?php the_time('Y.m.d');?></time>
            <h2><?php the_title();?></h2>
            <div class="blog-detail__cards">
                <div class="blog-detail__card">
                    <div class="blog-detail__img">
                        <img src="<?php echo the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像" />
                    </div>
                    <p>
                        <?php the_content();?>
                    </p>
                </div>
                <?php endwhile; endif; ?>
            </div>
            <ul>
                <li><a href="<?php echo esc_url(home_url("/blog1")) ?>">リスト1</a></li>
                <li><a href="<?php echo esc_url(home_url("/blog2")) ?>">リスト2</a></li>
                <li><a href="<?php echo esc_url(home_url("/blog3")) ?>">リスト3</a></li>
            </ul>
            <p>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
            </p>
            <!-- ページナビ -->
            <div class="blog-detail__pagenavi">
                <a class="blog-detail__pagenavi-prev" rel="prev" href="#"></a>
                <a class="blog-detail__pagenavi-next" rel="next" href="#"></a>
            </div>
            <!-- /管理画面で編集 -->
        </div>
        <!-- サイドメニュー -->
        <div class="blog-container_side-wrap blog-container">
            <div class="blog-container-inner inner">
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
                            <a href="">
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
                        <a class="blog-container__btn common-btn" href="#">
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
                    <a class="blog-container__btn common-btn" href="#">
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
                                            <h3 class="blog-container__accordion-title-month js-accordion-title-month">3月
                                            </h3>
                                            <div class="blog-container__accordion-content-month">
                                                <p class="blog-container__accordion-text">コンテンツが入ります。</p>
                                            </div>
                                        </div>
                                        <div class="blog-container__accordion-item-month">
                                            <h3 class="blog-container__accordion-title-month js-accordion-title-month">2月
                                            </h3>
                                            <div class="blog-container__accordion-content-month">
                                                <p class="blog-container__accordion-text">
                                                    コンテンツが入ります。コンテンツが入ります。コンテンツが入ります。コンテンツが入ります。</p>
                                            </div>
                                        </div>
                                        <div class="blog-container__accordion-item-moth">
                                            <h3 class="blog-container__accordion-title-month js-accordion-title-month">1月
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
                                            <h3 class="blog-container__accordion-title-month js-accordion-title-month">3月
                                            </h3>
                                            <div class="blog-container__accordion-content-month">
                                                <p class="blog-container__accordion-text">コンテンツが入ります。</p>
                                            </div>
                                        </div>
                                        <div class="blog-container__accordion-item-month">
                                            <h3 class="blog-container__accordion-title-month js-accordion-title-month">2月
                                            </h3>
                                            <div class="blog-container__accordion-content-month">
                                                <p class="blog-container__accordion-text">
                                                    コンテンツが入ります。コンテンツが入ります。コンテンツが入ります。コンテンツが入ります。</p>
                                            </div>
                                        </div>
                                        <div class="blog-container__accordion-item-moth">
                                            <h3 class="blog-container__accordion-title-month js-accordion-title-month">1月
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
<?php get_footer(); ?>