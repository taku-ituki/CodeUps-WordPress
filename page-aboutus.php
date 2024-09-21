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
                        <?php
    // カスタム投稿タイプ 'aboutus_block' の投稿を取得
    $args = array(
        'post_type' => 'aboutus_block',
        'posts_per_page' => 1
    );
    $custom_query = new WP_Query($args);

    if ($custom_query->have_posts()) : 
        while ($custom_query->have_posts()) : 
            $custom_query->the_post();

            // 'aboutus-text' カスタムフィールドを取得
            $aboutus_text = SCF::get('aboutus-text', get_the_ID());

            // 配列の場合は各要素を処理
            if (is_array($aboutus_text)) {
                foreach ($aboutus_text as $text) {
                    if (!empty($text)) {
                        // テキストを表示
                        echo nl2br(esc_html($text)) . '<br>';
                    }
                }
            } else {
                // 配列でない場合はそのまま表示
                if (!empty($aboutus_text)) {
                    echo nl2br(esc_html($aboutus_text));
                }
            }

        endwhile; 
    endif; 
    wp_reset_postdata();
    ?>
                    </p>

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
        <?php
        // カスタム投稿タイプ 'aboutus_block' の投稿を取得
        $args = array(
            'post_type' => 'aboutus_block',
            'posts_per_page' => -1
        );
        $custom_query = new WP_Query($args);
        if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post();
        ?>
        <ul class="gallery__img-list">
            <!-- 表示される画像 （画像を押すとモーダルが開く）-->
            <?php
            $gallery_images = SCF::get('gallery-images', get_the_ID());
            if (!empty($gallery_images)) :
                $modal_index = 1;
                foreach ($gallery_images as $fields) :
                    $img_url = wp_get_attachment_url($fields['gallery-image']);
                    $alt_text = esc_attr($fields['gallery-image-alt']);
            ?>
            <li class="gallery__item js-modal-open" data-target="modal<?php echo $modal_index; ?>">
                <img src="<?php echo $img_url; ?>" alt="<?php echo $alt_text; ?>" />
            </li>
            <?php
                    $modal_index++;
                endforeach;
            endif;
            ?>
        </ul>
        <!-- モーダルを開くと表示される画像 -->
        <?php
        $modal_index = 1;
        foreach ($gallery_images as $fields) :
            $img_url = wp_get_attachment_url($fields['gallery-image']);
            $alt_text = esc_attr($fields['gallery-image-alt']);
        ?>
        <div id="modal<?php echo $modal_index; ?>" class="galley__modal js-modal">
            <div class="galley__modal-bg js-modal-close"></div>
            <div class="galley__modal-content">
                <img src="<?php echo $img_url; ?>" alt="<?php echo $alt_text; ?>" />
            </div>
        </div>
        <?php
            $modal_index++;
        endforeach;
        ?>
        <?php endwhile; endif; wp_reset_postdata(); ?>
    </div>
</section>
<?php get_footer(); ?>