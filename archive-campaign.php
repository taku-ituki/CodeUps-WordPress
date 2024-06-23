<?php get_header(); ?>
<section class="page-campaign page-campaign-layout">
    <div class="page-campaign__inner inner">
        <!-- カテゴリー -->
        <div class="page-campaign__category category">
            <ul class="category__list">
                <li class="category__menu category__menu--current"><a href="#">ALL</a></li>
                <li class="category__menu"><a href="#">ライセンス講習</a></li>
                <li class="category__menu"><a href="#">ファンダイビング</a></li>
                <li class="category__menu"><a href="#">体験ダイビング</a></li>
            </ul>
        </div>
        <div class="page-campaign__cards campaign-cards">
            <?php 
                $args = [
                    "post_type" => "campaign",
                    "posts_per_page" => 4, // 1ページあたりのカードの数を4に設定
                    "paged" => (get_query_var('paged')) ? get_query_var('paged') : 1 // ページネーションの設定
                ];
                $the_query = new WP_Query($args);
            ?>
            <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="page-campaign__card campaign-card">
                <div class="campaign-card__img">
                    <?php 
                        $image = get_field('campaign_card_thumbnail'); 
                        if( !empty($image) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php else: ?>
                    <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>"
                        alt="<?php the_title_attribute(); ?>のアイキャッチ画像" />
                    <?php endif; ?>
                </div>
                <div class="campaign-card__text-wrapper campaign-card__text-wrapper--page">
                    <div class="campaign-card__color-title">
                        <?php
                            $term = get_field('category_green'); // タクソノミーフィールドの値を取得
                            if ($term) {
                                // タームの詳細を取得
                                $term_obj = get_term($term);
                                if (!is_wp_error($term_obj) && $term_obj) {
                                    echo esc_html($term_obj->name); // ターム名を表示
                                } else {
                                    echo 'No term found';
                                }
                            } else {
                                echo 'No category selected';
                            }
                            ?>
                    </div>
                    <h2 class="campaign-card__title campaign-card__title--page">
                        <?php the_field('campaign_price_title'); ?></h2>
                </div>
                <div class="campaign-card__price-wrapper campaign-card__price-wrapper--page">
                    <div class="campaign-card__text campaign-card__text--page">
                        <?php the_field('campaign_price_column'); ?></div>
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
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else : ?>
            <p>キャンペーンが見つかりませんでした。</p>
            <?php endif; ?>
        </div>
        <!-- ページナビ -->
        <div class="page-campaign__pagenavi wp-pagenavi">
            <?php
                // Pagination code here (if using a pagination plugin like WP-PageNavi)
                if (function_exists('wp_pagenavi')) {
                    wp_pagenavi(['query' => $the_query]);
                }
            ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>