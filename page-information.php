<?php get_header(); ?>
<!-- メインビュー -->
<section class="sub-fv sub-fv-layout">
    <picture class="sub-fv__img">
        <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common//mv-information-sp.jpg"
            media="(max-width: 767px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/mv-information-pc.jpg" alt="diving" />
    </picture>
    <h1 class="sub-fv__title"><span>i</span>nformation</h1>
</section>
<!-- パンくずリスト -->
<div class="breadcrumbs breadcrumbs-blog-layout">
    <div class="breadcrumbs__inner inner">
        <?php get_template_part('parts/breadcrumbs') ?>
    </div>
</div>
<!-- information -->
<section class="info-content info-content-layout">
    <div class="info-content__inner inner">
        <ul class="info-content__tab-area">
            <!-- 各タブに data-id 属性を正しく追加 -->
            <li class="info-content__tab js-info-content-tab" data-id="license-link">ライセンス<br />講習</li>
            <li class="info-content__tab js-info-content-tab info-content__tab--fun" data-id="fun-link">ファン<br />ダイビング
            </li>
            <li class="info-content__tab js-info-content-tab" data-id="experience-link">体験<br />ダイビング</li>
        </ul>
        <div class="info-content__cards">
            <!-- ライセンス講習 -->
            <div class="info-content__card js-info-content-card" id="license-link">
                <div class="info-content__card-text-block">
                    <h2 class="info-content__card-title">
                        <?php the_field('license_title'); // ライセンス講習のタイトルを表示 ?>
                    </h2>
                    <div class="info-content__card-text">
                        <?php the_field('license_text'); // ライセンス講習のテキストを表示 ?>
                    </div>
                </div>
                <div class="info-content__card-img">
                    <img src="<?php the_field('license_img'); ?>" alt="ライセンス講習の画像" />
                </div>
            </div>

            <!-- ファンダイビング -->
            <div class="info-content__card js-info-content-card" id="fun-link">
                <div class="info-content__card-text-block">
                    <h2 class="info-content__card-title">
                        <?php the_field('fun_title'); // ファンダイビングのタイトルを表示 ?>
                    </h2>
                    <div class="info-content__card-text">
                        <?php the_field('fun_text'); // ファンダイビングのテキストを表示 ?>
                    </div>
                </div>
                <div class="info-content__card-img">
                    <img src="<?php the_field('fun_img'); ?>" alt="ファンダイビングの画像" />
                </div>
            </div>

            <!-- 体験ダイビング -->
            <div class="info-content__card js-info-content-card" id="experience-link">
                <div class="info-content__card-text-block">
                    <h2 class="info-content__card-title">
                        <?php the_field('experience_title'); // 体験ダイビングのタイトルを表示 ?>
                    </h2>
                    <div class="info-content__card-text">
                        <?php the_field('experience_text'); // 体験ダイビングのテキストを表示 ?>
                    </div>
                </div>
                <div class="info-content__card-img">
                    <img src="<?php the_field('experience_img'); ?>" alt="体験ダイビングの画像" />
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>