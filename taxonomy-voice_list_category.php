<!-- taxonomy-voice_list_category.php -->
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
        <span class="breadcrumbs__top"><a href="<?php echo esc_url(home_url("/about")) ?>">top</a></span>
        &gt;
        <span class="breadcrumbs__page-title">お客様の声</span>
    </div>
</div>
<section class="page-voice page-voice-layout">
    <div class="page-voice__inner inner">
        <!-- カテゴリーリスト -->
        <div class="page-voice__category category">
            <ul class="category__list">
                <li class="category__menu <?php if (!is_tax()) echo 'category__menu--current'; ?>">
                    <a href="<?php echo get_post_type_voice_list_link('voice_list'); ?>">ALL</a>
                </li>
                <?php
                $terms = get_terms(array(
                    'taxonomy' => 'voice_list_category',
                    'hide_empty' => false,
                ));
                if (!is_wp_error($terms) && !empty($terms)) :
                    foreach ($terms as $term) : ?>
                <li
                    class="category__menu <?php if (is_tax('voice_list_category', $term->slug)) echo 'category__menu--current'; ?>">
                    <a href="<?php echo esc_url(get_term_link($term)); ?>">
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
                    $terms = get_field('voice_card_category'); // ACFのタクソノミー選択フィールドを取得
                    // ALLの場合やタームが一致する場合
                    if (!$terms || in_array(get_queried_object()->term_id, wp_list_pluck($terms, 'term_id'))) :
            ?>
            <div class="voice-card">
                <div class="voice-card__top">
                    <div class="voice-card__headline">
                        <div class="voice-card__sub">
                            <div class="voice-card__age"><?php the_field('voice_card__age'); ?></div>
                            <div class="voice-card__sub-title"><?php echo esc_html($term->name); ?></div>
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
                    endif;
                endwhile;
            else :
            ?>
            <p>お客様の声が見つかりませんでした。</p>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- ページネーション -->
<div class="wp-pagenavi page-voice__pagenavi">
    <?php wp_pagenavi(); ?>
</div>
</div>
</section>
<?php get_footer(); ?>