<?php get_header(); ?>
<!-- メインビュー -->
<section class="sub-fv sub-fv-layout">
    <picture class="sub-fv__img">
        <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/about-mv-sp.jpg"
            media="(max-width: 767px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/about-img-mv-pc.jpg" alt="シーサー" />
    </picture>
    <h1 class="sub-fv__title"><span>a</span>bout us</h1>
</section>
<!-- パンくずリスト -->
<div class="breadcrumbs breadcrumbs-blog-layout">
    <div class="breadcrumbs__inner inner">
        <?php get_template_part('parts/breadcrumbs') ?>
    </div>
</div>
<!-- About us -->
<section class="about about-layout-page">
    <div class="about__inner inner">
        <div class="about__body">
            <div class="about__img-block">
                <div class="about__img-left">
                    <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/shisa.jpg"
                        alt="top-about-left" />
                </div>
                <div class="about__img-right">
                    <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/about-fish.jpg"
                        alt="top-about-right" />
                </div>
            </div>
            <div class="about__text-block">
                <h2 class="about__text-en">Dive into<br />the Ocean</h2>
                <div class="about__text-ja">
                    <p class="about__text">
                        ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                        ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Gallery -->
<?php
// SCFを使ってフィールドデータを取得
$image_fields = array(
    'gallery_img1',
    'allery_img2',
    'gallery_img3'
    // 追加した画像フィールド名をここに追加
);

$images = array();
foreach ( $image_fields as $field ) {
    $image = SCF::get($field);
    if ($image) {
        $images[] = wp_get_attachment_image_src($image, 'full');
    }
}

if ( $images ) : ?>
<section class="gallery gallery-layout">
    <div class="gallery__inner inner">
        <div class="gallery__title section-title">
            <h2 class="section-title__en">gallery</h2>
            <p class="section-title__ja">フォト</p>
        </div>
        <ul class="gallery__img-list">
            <?php 
            $modal_id = 1; // モーダルのIDを初期化
            foreach ( $images as $image ) : ?>
            <li class="gallery__item js-modal-open" data-target="modal<?php echo $modal_id; ?>">
                <img src="<?php echo esc_url($image[0]); ?>" alt="gallery image" />
            </li>
            <?php $modal_id++; endforeach; ?>
        </ul>
        <?php 
        $modal_id = 1; // モーダルのIDを再度初期化
        foreach ( $images as $image ) : ?>
        <div id="modal<?php echo $modal_id; ?>" class="galley__modal js-modal">
            <div class="galley__modal-bg js-modal-close"></div>
            <div class="galley__modal-content">
                <img src="<?php echo esc_url($image[0]); ?>" alt="gallery image" />
            </div>
        </div>
        <?php $modal_id++; endforeach; ?>
    </div>
</section>
<?php endif; ?>
<?php get_footer(); ?>