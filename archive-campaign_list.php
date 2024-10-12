<?php get_header(); ?>
<!-- メインビュー -->
<section class="sub-fv sub-fv-layout">
    <picture class="sub-fv__img">
        <source srcset="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/page-campaign-sp.jpg"
            media="(max-width: 767px)" />
        <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/page-campaign-img-pc.jpg"
            alt="fish" />
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
        <div class="page-campaign__category category">
            <ul class="category__list">
                <!-- "ALL" リンク - すべての投稿を表示するためのリンク -->
                <li
                    class="category__menu <?php if (!isset($_GET['campaign_list_category'])) echo 'category__menu--current'; ?>">
                    <a href="<?php echo esc_url(get_post_type_archive_link('campaign_list')); ?>">ALL</a>
                </li>
                <?php
        // 'campaign_list_category' タクソノミーのすべてのタームを取得
        $terms = get_terms(array(
            'taxonomy' => 'campaign_list_category',
            'hide_empty' => false,
        ));

        // タームがエラーでなく、空でない場合
        if (!is_wp_error($terms) && !empty($terms)) :
            foreach ($terms as $term) : ?>
                <!-- 特定のカテゴリーに基づいたリンク -->
                <li
                    class="category__menu <?php if (isset($_GET['campaign_list_category']) && $_GET['campaign_list_category'] == $term->slug) echo 'category__menu--current'; ?>">
                    <!-- ここにリンクを貼り付けます -->
                    <a
                        href="<?php echo esc_url(add_query_arg('campaign_list_category', $term->slug, get_post_type_archive_link('campaign_list'))); ?>">
                        <?php echo esc_html($term->name); ?>
                    </a>
                </li>
                <?php endforeach;
        endif; ?>
            </ul>
        </div>


        <!-- キャンペーンカードを表示する部分 -->
        <div class="page-campaign__cards campaign-cards">
            <?php
            // クエリパラメータまたはパーマリンクのクエリを取得
            $campaign_category = isset($_GET['campaign_list_category']) ? sanitize_text_field($_GET['campaign_list_category']) : get_query_var('campaign_list_category');

            // WP_Query の引数を設定
            $args = array(
                'post_type' => 'campaign_list',  // 投稿タイプを 'campaign_list' に設定
                'posts_per_page' => -1, // すべての投稿を表示
            );

            // 特定のカテゴリーが指定されている場合、そのカテゴリーにフィルタリング
            if ($campaign_category) {
                $args['tax_query'] = array(
                    array(
                        'taxonomy' => 'campaign_list_category', // フィルタリングするタクソノミー
                        'field'    => 'slug', // スラッグで指定
                        'terms'    => $campaign_category, // クエリパラメータのカテゴリー
                    ),
                );
            }

            // WP_Query の実行
            $query = new WP_Query($args);

            // 投稿が存在する場合、表示
            if ($query->have_posts()) : 
                while ($query->have_posts()) : $query->the_post();
                    // Advanced Custom Fields (ACF) のタクソノミーフィールドを取得
                    $term = get_field('category_green');
                    
                    // 投稿の表示条件
                    if (!$term || !$campaign_category || $campaign_category == $term->slug) :
            ?>
            <div class="page-campaign__card campaign-card">
                <div class="campaign-card__img">
                    <?php
                    // ACF フィールドから画像を取得
                    $image = get_field('campaign_card_thumbnail');
                    if (!empty($image)) : ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php else : ?>
                    <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>"
                        alt="<?php the_title_attribute(); ?>のアイキャッチ画像" />
                    <?php endif; ?>
                </div>
                <div class="campaign-card__text-wrapper campaign-card__text-wrapper--page">
                    <div class="campaign-card__color-title">
                        <?php echo esc_html($term ? $term->name : 'No category'); ?>
                    </div>
                    <h2 class="campaign-card__title campaign-card__title--page">
                        <?php the_field('campaign_price_title'); ?>
                    </h2>
                </div>
                <div class="campaign-card__price-wrapper campaign-card__price-wrapper--page">
                    <div class="campaign-card__text campaign-card__text--page">
                        <?php the_field('campaign_price_column'); ?>
                    </div>
                    <div class="campaign-card__price-block">
                        <div class="campaign-card__price-before">¥<?php the_field('price_before'); ?></div>
                        <div class="campaign-card__price-after campaign-card__price-after--page">
                            ¥<?php the_field('price_after'); ?></div>
                    </div>
                </div>
                <div class="campaign-card__add-text-wrapper">
                    <p class="campaign-card__add-text"><?php the_field('additional_text'); ?></p>
                    <div class="campaign-card__add-date"><?php the_field('date_range'); ?></div>
                    <div class="campaign-card__add-form"><?php the_field('form_text'); ?></div>
                </div>
                <div class="page-campaign__btn-wrap">
                    <a class="common-btn" href="<?php the_permalink(); ?>">
                        <span>contact us</span>
                    </a>
                </div>
            </div>
            <?php
                    endif;
                endwhile;
                wp_reset_postdata(); // クエリのリセット
            else : 
            ?>
            <p>🐠。。公開準備中。。🐠</p>
            <?php endif; ?>
        </div>
        <!-- ページナビ -->
        <div class="page-campaign__pagenavi wp-pagenavi">
            <?php
            // ページナビゲーションを表示
            if (function_exists('wp_pagenavi')) {
                wp_pagenavi();
            }
            ?>
        </div>
    </div>
</section>


<?php get_footer(); ?>