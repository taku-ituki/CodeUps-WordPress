<?php get_header(); ?>

<main class="campaign-single">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>
        <header class="entry-header">
            <h1 class="entry-title"><?php the_title(); ?></h1>
        </header>
        <div class="entry-content">
            <div class="campaign-image">
                <?php if (has_post_thumbnail()) : ?>
                <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>"
                    alt="<?php the_title_attribute(); ?>のアイキャッチ画像" />
                <?php endif; ?>
            </div>
            <div class="campaign-details">
                <p><?php the_content(); ?></p>

                <div class="campaign-meta">
                    <p>価格: ¥<?php the_field('price_before'); ?> → ¥<?php the_field('price_after'); ?></p>
                    <p>カテゴリ: <?php
                            $terms = get_the_terms(get_the_ID(), 'campaign_category');
                            if ($terms && !is_wp_error($terms)) {
                                $term_names = wp_list_pluck($terms, 'name');
                                echo esc_html(join(', ', $term_names));
                            }
                        ?></p>
                </div>
            </div>
        </div>
    </article>
    <?php endwhile; else : ?>
    <p>キャンペーンが見つかりませんでした。</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>