<?php get_header(); ?>
<!-- メインビュー -->
<section class="sub-fv sub-fv-layout">
    <picture class="sub-fv__img">
        <!-- モバイル用画像 -->
        <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/voice-mv-sp.jpg"
            media="(max-width: 767px)" />
        <!-- PC用画像 -->
        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/voice-mv-pc.jpg" alt="diving" />
    </picture>
    <h1 class="sub-fv__title"><span>v</span>oice</h1>
</section>

<!-- パンくずリスト -->
<div class="breadcrumbs breadcrumbs-blog-layout">
    <div class="breadcrumbs__inner inner">
        <?php get_template_part('parts/breadcrumbs') ?>
    </div>
</div>

<!-- Voiceセクション -->
<section class="page-voice page-voice-layout">
    <div class="page-voice__inner inner">
        <!-- カテゴリーリスト -->
        <div class="page-voice__category category">
            <ul class="category__list">
                <!-- "ALL" リンク - すべての投稿を表示するためのリンク -->
                <li
                    class="category__menu <?php if (!isset($_GET['voice_list_category'])) echo 'category__menu--current'; ?>">
                    <a href="<?php echo esc_url(get_post_type_archive_link('voice_list')); ?>">ALL</a>
                </li>
                <?php
                // 'voice_list_category' タクソノミーのすべてのタームを取得
                $terms = get_terms(array(
                    'taxonomy' => 'voice_list_category', // CPT UIで作成したタクソノミー
                    'hide_empty' => false,
                ));

                // タームがエラーでなく、空でない場合
                if (!is_wp_error($terms) && !empty($terms)) :
                    foreach ($terms as $term) : ?>
                <!-- 特定のカテゴリーに基づいたリンク -->
                <li
                    class="category__menu <?php if (isset($_GET['voice_list_category']) && $_GET['voice_list_category'] == $term->slug) echo 'category__menu--current'; ?>">
                    <a
                        href="<?php echo esc_url(add_query_arg('voice_list_category', $term->slug, get_post_type_archive_link('voice_list'))); ?>">
                        <?php echo esc_html($term->name); ?>
                    </a>
                </li>
                <?php endforeach;
                endif; ?>
            </ul>
        </div>

        <!-- Voiceカード -->
        <div class="page-voice__cards voice-cards">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    // タクソノミー（'voice_list_category'）に関連付けられたタームを取得
                    $terms = get_the_terms(get_the_ID(), 'voice_list_category');
                    if ($terms && !is_wp_error($terms)) :
                        $term = array_shift($terms); // 最初のタームを取得
            ?>
            <div class="voice-card">
                <div class="voice-card__top">
                    <div class="voice-card__headline">
                        <div class="voice-card__sub">
                            <div class="voice-card__age"><?php the_field('voice_card__age'); ?></div>
                            <div class="voice-card__sub-title"><?php echo esc_html($term->name); ?></div>
                            <!-- ターム名を表示 -->
                        </div>
                        <h2 class="voice-card__main-title voice-card__main-title--page">
                            <?php the_field('voice_title'); ?>
                        </h2>
                    </div>
                    <div class="voice-card__img js-color">
                        <?php
                        $image = get_field('voice_card_thumbnail');
                        if (!empty($image)) : ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php else : ?>
                        <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>"
                            alt="<?php the_title_attribute(); ?>のアイキャッチ画像" />
                        <?php endif; ?>
                    </div>
                </div>
                <p class="voice-card__bottom">
                    <?php the_field('voice_card_text'); ?>
                </p>
            </div>
            <?php
                    endif; // タームが存在する場合のチェック終了
                endwhile;
            else :
            ?>
            <p>お客様の声が見つかりませんでした。</p>
            <?php endif; ?>
        </div>

        <!-- ページネーション -->
        <div class="wp-pagenavi page-voice__pagenavi">
            <?php wp_pagenavi(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>