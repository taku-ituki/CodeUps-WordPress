<?php get_header(); ?>
<!-- メインビュー -->
<section class="sub-fv sub-fv-layout">
    <picture class="sub-fv__img">
        <source srcset="<?php echo get_theme_file_uri(); ?>/dist/dist/assets/images/common//price-sp.jpg"
            media="(max-width: 767px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/price-pc.jpg" alt="diving" />
    </picture>
    <h1 class="sub-fv__title"><span>p</span>rice</h1>
</section>
<!-- パンくずリスト -->
<div class="breadcrumbs breadcrumbs-blog-layout">
    <div class="breadcrumbs__inner inner">
        <?php get_template_part('parts/breadcrumbs') ?>
    </div>
</div>
<section class="page-price page-price-layout">
    <div class="page-price__inner inner">
        <ul class="page-price__list-wrap">
            <?php
            // カスタム投稿タイプ 'price-list' のクエリ
            $args = array(
                'post_type' => 'price-list', // ここをカスタム投稿タイプのスラッグに変更してください
                'posts_per_page' => -1,
            );
            $custom_query = new WP_Query($args);

            if ($custom_query->have_posts()) :
                while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
            <li class="page-price__list">
                <h2 class="page-price__title"><?php the_title(); ?></h2>
                <div class="page-price__items">
                    <?php if ($plan_1 = get_field('price_plan_1')) : ?>
                    <dl class="page-price__item">
                        <dt class="page-price__plan"><?php echo $plan_1; ?></dt>
                        <dd class="page-price__price"><?php the_field('price_price_1'); ?></dd>
                    </dl>
                    <?php endif; ?>

                    <?php if ($plan_2 = get_field('price_plan_2')) : ?>
                    <dl class="page-price__item">
                        <dt class="page-price__plan"><?php echo $plan_2; ?></dt>
                        <dd class="page-price__price"><?php the_field('price_price_2'); ?></dd>
                    </dl>
                    <?php endif; ?>

                    <?php if ($plan_3 = get_field('price_plan_3')) : ?>
                    <dl class="page-price__item">
                        <dt class="page-price__plan"><?php echo $plan_3; ?></dt>
                        <dd class="page-price__price"><?php the_field('price_price_3'); ?></dd>
                    </dl>
                    <?php endif; ?>

                    <?php if ($plan_4 = get_field('price_plan_4')) : ?>
                    <dl class="page-price__item">
                        <dt class="page-price__plan"><?php echo $plan_4; ?></dt>
                        <dd class="page-price__price"><?php the_field('price_price_4'); ?></dd>
                    </dl>
                    <?php endif; ?>
                </div>
            </li>
            <?php endwhile;
                wp_reset_postdata();
            else : ?>
            <p>投稿が見つかりませんでした。</p>
            <?php endif; ?>
        </ul>
    </div>
</section>

<?php get_footer(); ?>