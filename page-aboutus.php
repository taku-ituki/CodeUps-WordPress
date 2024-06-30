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

<!-- Galley -->
<section class="gallery gallery-layout">
    <div class="gallery__inner inner">
        <!-- セクションタイトル -->
        <div class="gallery__title section-title">
            <h2 class="section-title__en">gallery</h2>
            <p class="section-title__ja">フォト</p>
        </div>

        <!-- ギャラリー画像リスト -->
        <ul class="gallery__img-list">
            <?php
            // SCFからリピーターフィールドを取得
            $gallery_images = SCF::get('gallery-images', get_the_ID());
            if (!empty($gallery_images)) :
                $modal_index = 1; // モーダルのインデックスを初期化
                foreach ($gallery_images as $fields) :
                    $img_url = wp_get_attachment_url($fields['gallery-image']); // 画像URLを取得
                    $alt_text = esc_attr($fields['gallery-image-alt']); // altテキストを取得
            ?>
            <li class="gallery__item js-modal-open" data-target="modal<?php echo $modal_index; ?>">
                <img src="<?php echo $img_url; ?>" alt="<?php echo $alt_text; ?>" />
            </li>
            <?php
                    $modal_index++; // モーダルのインデックスをインクリメント
                endforeach;
            endif;
            ?>
        </ul>

        <!-- モーダルを開くと表示される画像 -->
        <?php
        $modal_images = SCF::get('modal-images', get_the_ID());
        if (!empty($modal_images)) :
            $modal_index = 1; // モーダルのインデックスを初期化
            foreach ($modal_images as $fields) :
                $img_url = wp_get_attachment_url($fields['modal-image']); // 画像URLを取得
                $alt_text = esc_attr($fields['modal-image-alt']); // altテキストを取得
        ?>
        <div id="modal<?php echo $modal_index; ?>" class="gallery__modal js-modal">
            <div class="gallery__modal-bg js-modal-close"></div>
            <div
                class="gallery__modal-content<?php echo $modal_index % 2 == 1 ? ' gallery__modal-content--long' : ''; ?>">
                <img src="<?php echo $img_url; ?>" alt="<?php echo $alt_text; ?>" />
            </div>
        </div>
        <?php
                $modal_index++; // モーダルのインデックスをインクリメント
            endforeach;
        endif;
        ?>
    </div>
</section>

<?php get_footer(); ?>