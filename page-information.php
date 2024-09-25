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
            <li class="info-content__tab js-info-content-tab active">ライセンス<br />講習</li>
            <li class="info-content__tab js-info-content-tab info-content__tab--fun">ファン<br />ダイビング</li>
            <li class="info-content__tab js-info-content-tab info-content__tab--experience">体験<br />ダイビング</li>
        </ul>
        <?php
// カスタム投稿タイプ "custom_post_type" のクエリを設定
$args = array(
    'post_type' => 'information_tab',
    'posts_per_page' => -1, // 全ての投稿を取得
);

$custom_query = new WP_Query($args);

if ($custom_query->have_posts()) :
    while ($custom_query->have_posts()) : $custom_query->the_post(); ?>

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
                    <img src="<?php the_field('license_img'); ?>" alt="diving-img" />
                </div>
            </div>

            <!-- ファンダイビング -->
            <div class="info-content__card js-info-content-card info-content__card--fun">
                <div class="info-content__card-text-block">
                    <h2 class="info-content__card-title">
                        <?php the_field('fun_title'); // ファンダイビングのタイトルを表示 ?>
                    </h2>
                    <div class="info-content__card-text">
                        <?php the_field('fun_text'); // ファンダイビングのテキストを表示 ?>
                    </div>
                </div>
                <div class="info-content__card-img">
                    <img src="<?php the_field('fun_img'); ?>" alt="diving-img" />
                </div>
            </div>

            <!-- 体験ダイビング -->
            <div class="info-content__card js-info-content-card info-content__card--experience">
                <div class="info-content__card-text-block">
                    <h2 class="info-content__card-title">
                        <?php the_field('experience_title'); // 体験ダイビングのタイトルを表示 ?>
                    </h2>
                    <div class="info-content__card-text">
                        <?php the_field('experience_text'); // 体験ダイビングのテキストを表示 ?>
                    </div>
                </div>
                <div class="info-content__card-img">
                    <img src="<?php the_field('experience_img'); ?>" alt="diving-img" />
                </div>
            </div>
        </div>
        <?php endwhile;
    wp_reset_postdata(); // クエリをリセットする
else :
    echo '投稿が見つかりませんでした';
endif;
?>

    </div>
</section>
<?php get_footer(); ?>