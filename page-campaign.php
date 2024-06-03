<?php get_header(); ?>
<!-- メインビュー -->
<section class="sub-fv sub-fv-layout">
    <picture class="sub-fv__img">
        <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/page-campaign-sp.jpg"
            media="(max-width: 767px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/page-campaign-img-pc.jpg" alt="シーサー" />
    </picture>
    <h1 class="sub-fv__title"><span>c</span>ampaign</h1>
</section>
<!-- パンくずリスト -->
<div class="breadcrumbs breadcrumbs-blog-layout">
    <div class="breadcrumbs__inner inner">
        <?php get_template_part('parts/breadcrumbs') ?>
    </div>
</div>
<!-- Campaign -->
<section class="page-campaign page-campaign-layout">
    <div class="page-campaign__inner inner">
        <!-- カテゴリー -->
        <div class="page-campaign__category category">
            <ul class="category__list">
                <li class="category__menu category__menu--current"><a href="#">ALL</a></li>
                <li class="category__menu"><a>ライセンス講習</a></li>
                <li class="category__menu"><a>ファンダイビング</a></li>
                <li class="category__menu"><a>体験ダイビング</a></li>
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
                    <h2 class="campaign-card__title campaign-card__title-page">貸切体験ダイビング</h2>
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
        <!-- ページナビ -->
        <div class="page-campaign__pagenavi wp-pagenavi">
            <?php wp_pagenavi(); ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>