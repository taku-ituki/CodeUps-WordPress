<?php get_header(); ?>
<!-- メインビュー -->
<section class="sub-fv sub-fv-layout">
    <picture class="sub-fv__img">
        <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/faq-sp.jpg"
            media="(max-width: 767px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/faq-pc.jpg" alt="diving" />
    </picture>
    <h1 class="sub-fv__title sub-fv__title--faq"><span>faq</span></h1>
</section>
<!-- パンくずリスト -->
<div class="breadcrumbs breadcrumbs-blog-layout">
    <div class="breadcrumbs__inner inner">
        <?php get_template_part('parts/breadcrumbs'); ?>
    </div>
</div>
<section class="faq faq-layout">
    <div class="faq__inner inner">
        <ul class="faq__accordion-area js-faq-accordion-area">
            <?php
            // FAQのカスタム投稿タイプを取得するクエリ
            $args = array(
                'post_type' => 'faq_list',  // スペースを削除
                'orderby' => 'menu_order',  // 順番を「menu_order」に従わせる
                'order' => 'ASC',           // 昇順で並べ替える
                'posts_per_page' => -1,     // 全てのFAQを取得
            );
            $faq_query = new WP_Query($args);

            if ($faq_query->have_posts()) :
                while ($faq_query->have_posts()) : $faq_query->the_post();
                    // ACFのフィールドを取得
                    $question = get_field('question');
                    $answer = get_field('answer');
            ?>
            <li class="faq-item faq__item">
                <div class="faq__content-wrap">
                    <h2 class="faq-item__accordion-title js-faq-accordion-title">
                        <p class="faq__accordion-title-text"><?php echo esc_html($question); ?></p>
                    </h2>
                    <div class="faq__accordion-box js-faq-accordion-box">
                        <p class="faq__accordion-box-text">
                            <?php echo wp_kses_post($answer); // HTMLを許容 ?>
                        </p>
                    </div>
                </div>
            </li>
            <?php endwhile; ?>
            <?php else : ?>
            <p>FAQが見つかりませんでした。</p>
            <?php endif; ?>
            <?php
            // ループの終了
            wp_reset_postdata();  // 正しい位置に移動
            ?>
        </ul>
    </div>
</section>

<?php get_footer(); ?>