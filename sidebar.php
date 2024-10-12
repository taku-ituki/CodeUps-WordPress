 <!-- サイドメニュー -->
 <div class="blog-container__side blog-container">
     <div class="blog-container__inner inner">
         <div class="blog-container__article">
             <h2 class="blog-container__title blog-container__title--article">人気記事</h2>
             <div class="blog-container__article-cards">
                 <?php
        $popular_args = array(
            'post_type'       => 'post',              // 投稿タイプを指定
            'meta_key'        => 'post_views_count',  // 閲覧数を指定
            'orderby'         => 'meta_value_num',    // ソートの基準を閲覧数に
            'order'           => 'DESC',              // 降順（閲覧数が多い順）でソート
            'post_status'     => 'publish',           // 投稿ステータスは公開済み
            'posts_per_page'  => 3,                   // 投稿表示件数は3件
        );
        $popular_query = new WP_Query($popular_args);
        if ($popular_query->have_posts()) :
            while ($popular_query->have_posts()) : $popular_query->the_post(); ?>
                 <div class="blog-container__article-card">
                     <a href="<?php the_permalink(); ?>">
                         <div class="blog-container__article-img">
                             <?php if (has_post_thumbnail()) : ?>
                             <img src="<?php echo esc_url(get_the_post_thumbnail_url($post, 'post-thumbnail')); ?>"
                                 alt="<?php the_title_attribute(); ?>">
                             <?php else : ?>
                             <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/default-thumbnail.jpg"
                                 alt="default-thumbnail">
                             <?php endif; ?>
                         </div>
                         <div class="blog-container__article-texts">
                             <time class="blog-container__article-date"
                                 datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m/d'); ?></time>
                             <h3 class="blog-container__article-title"><?php the_title(); ?></h3>
                         </div>
                     </a>
                 </div>
                 <?php endwhile; 
            wp_reset_postdata(); 
        else : ?>
                 <p class="popular__nodata">現在、人気記事はありません</p>
                 <?php endif; ?>
             </div>
         </div>


         <!-- 口コミ -->
         <div class="blog-container__reviews">
             <h2 class="blog-container__title blog-container__title--reviews">口コミ</h2>
             <?php
    $reviews_args = array(
        'post_type'      => 'voice_list',  // 口コミのカスタム投稿タイプのスラッグ
        'post_status'    => 'publish',     // 公開済みの投稿
        'posts_per_page' => 1,             // 表示する投稿数
        'orderby'        => 'date',        // 日付順
        'order'          => 'DESC',        // 降順
    );
    $reviews_query = new WP_Query($reviews_args);
    if ($reviews_query->have_posts()) :
        while ($reviews_query->have_posts()) : $reviews_query->the_post();
            $term = get_field('voice_card_category'); // ACFのタクソノミー選択フィールドを取得
    ?>
             <div class="blog-container__reviews-card voice-card">
                 <div class="blog-container__reviews-img voice-card__img voice-card__img--reviews">
                     <?php
            $image = get_field('voice_card_thumbnail');
            if (!empty($image)) : ?>
                     <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                     <?php else : ?>
                     <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>"
                         alt="<?php the_title_attribute(); ?>のアイキャッチ画像" />
                     <?php endif; ?>
                 </div>
                 <div class="voice-card__text">
                     <div class="voice-card__age voice-card__age--reviews"><?php the_field('voice_card__age'); ?></div>
                     <h3 class="voice-card__main-title voice-card__main-title--reviews">
                         <?php the_field('voice_title'); ?>
                     </h3>
                 </div>
             </div>
             <?php
        endwhile;
    else :
    ?>
             <p>お客様の声が見つかりませんでした。</p>
             <?php
    endif;
    wp_reset_postdata();
    ?>
             <!-- common　ボタン -->
             <div class="blog-container__btn-wrap blog-container__btn-wrap--reviews">
                 <a class="blog-container__btn common-btn"
                     href="<?php echo get_post_type_archive_link('voice_list'); ?>">
                     <span>view more</span>
                 </a>
             </div>
         </div>

         <!-- キャンペーン -->
         <div class="blog-container__campaign">
             <h2 class="blog-container__title">キャンペーン</h2>
             <div class="blog-container__campaign-cards campaign-cards">
                 <?php
        $campaign_args = array(
            'post_type'      => 'campaign_list', // キャンペーンのカスタム投稿タイプのスラッグ
            'post_status'    => 'publish',       // 公開済みの投稿
            'posts_per_page' => 2,               // 表示する投稿数
            'orderby'        => 'date',          // 日付順
            'order'          => 'DESC',          // 降順
        );
        $campaign_query = new WP_Query($campaign_args);
        if ($campaign_query->have_posts()) :
            while ($campaign_query->have_posts()) : $campaign_query->the_post();
                $term = get_field('category_green'); // ACFのタクソノミー選択フィールドを取得
        ?>
                 <div class="blog-container__campaign-card campaign-card">
                     <div class="campaign-card__img campaign-card__img--blog-container">
                         <?php
                $image = get_field('campaign_card_thumbnail');
                if (!empty($image)) : ?>
                         <img src="<?php echo esc_url($image['url']); ?>"
                             alt="<?php echo esc_attr($image['alt']); ?>" />
                         <?php else : ?>
                         <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>"
                             alt="<?php the_title_attribute(); ?>のアイキャッチ画像" />
                         <?php endif; ?>
                     </div>
                     <div class="campaign-card__text-wrapper campaign-card__text-wrapper--blog">
                         <h2 class="campaign-card__title"><?php the_field('campaign_price_title'); ?></h2>
                     </div>
                     <div class="campaign-card__price-wrapper">
                         <div class="campaign-card__text">全部コミコミ(お一人様)</div>
                         <div class="campaign-card__price-block">
                             <div class="campaign-card__price-before">¥<?php the_field('price_before'); ?></div>
                             <div class="campaign-card__price-after">¥<?php the_field('price_after'); ?></div>
                         </div>
                     </div>
                 </div>
                 <?php
            endwhile;
        else :
        ?>
                 <p>🐠。。公開準備中。。🐠</p>
                 <?php
        endif;
        wp_reset_postdata();
        ?>
             </div>
         </div>
         <!-- common　ボタン -->
         <div class="blog-container__btn-wrap blog-container__btn-wrap--campaign">
             <a class="blog-container__btn common-btn" href="<?php echo esc_url(home_url("/campaign_list")) ?>">
                 <span>view more</span>
             </a>
         </div>
         <!--アーカイブ -->
         <div class="blog-container__archive">
             <h2 class="blog-container__title blog-container__title--archive">アーカイブ</h2>
             <!-- accordion -->
             <div class="blog-container__accordion">
                 <div class="blog-container__accordion-container">
                     <?php
                // 年と月を取得してグループ化
                $years = [];
                $archives = wp_get_archives(array(
                    'type'            => 'monthly',
                    'limit'           => '',
                    'format'          => 'custom',
                    'before'          => '<div class="archive-months__item archive-month"><a href="#">',
                    'after'           => '</a></div>',
                    'show_post_count' => false,
                    'echo'            => 0,
                ));
                
                // 年ごとにアーカイブをグループ化
                preg_match_all('/<div class="archive-months__item archive-month"><a href="#">(.*?)<\/a><\/div>/', $archives, $matches);
                foreach ($matches[1] as $archive) :
                    preg_match('/(\d{4})年(\d{1,2})月/', $archive, $date);
                    $years[$date[1]][] = $date[2];
                endforeach;
            ?>
                     <?php foreach ($years as $year => $months): ?>
                     <div class="blog-container__accordion-item js-accordion-item">
                         <h3 class="blog-container__accordion-title js-accordion-title"><?php echo esc_html($year); ?>
                         </h3>
                         <div class="blog-container__accordion-content js-blog-container__accordion-content">
                             <div class="blog-container__accordion-container-month">
                                 <?php foreach ($months as $month): ?>
                                 <?php
                                $month_padded = str_pad($month, 2, '0', STR_PAD_LEFT);
                                $url = get_month_link($year, $month_padded);
                            ?>
                                 <div class="blog-container__accordion-item-month">
                                     <h3 class="blog-container__accordion-title-month js-accordion-title-month">
                                         <a href="<?php echo esc_url($url); ?>"><?php echo esc_html($month); ?>月</a>
                                     </h3>
                                     <div class="blog-container__accordion-content-month">
                                         <p class="blog-container__accordion-text">コンテンツが入ります。</p>
                                     </div>
                                 </div>
                                 <?php endforeach; ?>
                             </div>
                         </div>
                     </div>
                     <?php endforeach; ?>
                 </div>
                 <!-- /.accordion-container -->
             </div>
             <!-- .accordion -->
         </div>

     </div>
     <!-- 左右セクション閉じタグ↓ -->
 </div>