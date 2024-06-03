<?php get_header(); ?>
<!-- メインビュー -->
<section class="sub-fv sub-fv-layout">
    <picture class="sub-fv__img">
        <source srcset="<?php echo get_theme_file_uri(); ?>/dist/dist/assets/images/common//price-sp.jpg"
            media="(max-width: 767px)" />
       <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/price-pc.jpg" alt="diving" />
    </picture>
    <h1 class="sub-fv__title"><span>p</span>rice</h1>
</section>
<!-- パンくずリスト -->
<div class="breadcrumbs breadcrumbs-blog-layout">
    <div class="breadcrumbs__inner inner">
        <?php get_template_part('parts/breadcrumbs') ?>
    </div>
</div>
<section class="page-price page-price-layout">
    <div class="page-price__inner inner">
        <ul class="page-price__list-wrap">
            <!-- ライセンス講習 -->
            <li class="page-price__list">
                <h2 class="page-price__title">ライセンス講習</h2>
                <div class="page-price__items">
                    <dl class="page-price__item">
                        <dt class="page-price__plan">オープンウォーター<br />ダイバーコース</dt>
                        <dd class="page-price__price">¥50,000</dd>
                    </dl>
                    <dl class="page-price__item">
                        <dt class="page-price__plan">アドバンスド<br />オープンウォーターコース</dt>
                        <dd class="page-price__price">¥60,000</dd>
                    </dl>
                    <dl class="page-price__item">
                        <dt class="page-price__plan">レスキュー＋EFRコース</dt>
                        <dd class="page-price__price">¥70,000</dd>
                    </dl>
                </div>
            </li>
            <!-- 体験ダイビング -->
            <li class="page-price__list">
                <h2 class="page-price__title">体験ダイビング</h2>
                <div class="page-price__items">
                    <dl class="page-price__item">
                        <dt class="page-price__plan">ビーチ体験ダイビング<br />(半日)</dt>
                        <dd class="page-price__price">¥7,000</dd>
                    </dl>
                    <dl class="page-price__item">
                        <dt class="page-price__plan">ビーチ体験ダイビング <br />(1日)</dt>
                        <dd class="page-price__price">¥14,000</dd>
                    </dl>
                    <dl class="page-price__item">
                        <dt class="page-price__plan">ボート体験ダイビング <br />(半日)</dt>
                        <dd class="page-price__price">¥10,000</dd>
                    </dl>
                    <dl class="page-price__item">
                        <dt class="page-price__plan">
                            ボート体験ダイビング<br />
                            (1日)
                        </dt>
                        <dd class="page-price__price">¥18,000</dd>
                    </dl>
                </div>
            </li>
            <!-- ファンダイビング -->
            <li class="page-price__list">
                <h2 class="page-price__title page-price__title--fun">ファンダイビング</h2>
                <div class="page-price__items">
                    <dl class="page-price__item">
                        <dt class="page-price__plan">ビーチダイビング<br />(2ダイブ)</dt>
                        <dd class="page-price__price">¥14,000</dd>
                    </dl>
                    <dl class="page-price__item">
                        <dt class="page-price__plan">ボートダイビング<br />(2ダイブ)</dt>
                        <dd class="page-price__price">¥18,000</dd>
                    </dl>
                    <dl class="page-price__item">
                        <dt class="page-price__plan">スペシャルダイビング<br />(2ダイブ)</dt>
                        <dd class="page-price__price">¥24,000</dd>
                    </dl>
                    <dl class="page-price__item">
                        <dt class="page-price__plan">ナイトダイビング<br />(1ダイブ)</dt>
                        <dd class="page-price__price">¥10,000</dd>
                    </dl>
                </div>
            </li>
            <!-- スペシャルダイビング -->
            <li class="page-price__list">
                <h2 class="page-price__title page-price__title--sp">スペシャルダイビング</h2>
                <div class="page-price__items">
                    <dl class="page-price__item">
                        <dt class="page-price__plan">貸切ダイビング<br />(2ダイブ)</dt>
                        <dd class="page-price__price">¥24,000</dd>
                    </dl>
                    <dl class="page-price__item">
                        <dt class="page-price__plan">1日ダイビング<br />(3ダイブ)</dt>
                        <dd class="page-price__price">¥32,000</dd>
                    </dl>
                    <dl class="page-price__item">
                        <dt class="page-price__plan">ナイトダイビング<br />(2ダイブ)</dt>
                        <dd class="page-price__price">¥14,000</dd>
                    </dl>
                </div>
            </li>
        </ul>
    </div>
</section><?php get_footer(); ?>