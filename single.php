<?php get_header(); ?>
<!-- メインビュー -->
<section class="sub-fv sub-fv-layout">
    <picture class="sub-fv__img">
        <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/blog-mv-sp.jpg"
            media="(max-width: 767px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/blog-mv-pc.jpg" alt="fishes" />
    </picture>
    <h1 class="sub-fv__title"><span>b</span>log</h1>
</section>
<!-- パンくずリスト -->
<div class="breadcrumbs breadcrumbs-blog-layout">
    <div class="breadcrumbs__inner inner">
        <?php get_template_part('parts/breadcrumbs'); ?>
    </div>
</div>
<!-- Blog詳細 -->
<section class="blog-detail blog-detail-layout">
    <div class="blog-container__inner inner">
        <!-- 左右セクションを合体して一つのブロック化 -->
        <div class="blog-container__container blog-container">
            <!-- メインコンテンツ -->
            <div class="blog-container__main-container blog-container__main-container--detail">
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                <!-- 管理画面で編集 -->
                <time datetime="<?php the_time('Y.m.d'); ?>"><?php the_time('Y.m.d'); ?></time>
                <h1><?php the_title(); ?></h1>
                <!-- 投稿のサムネイル画像を表示 -->
                <div class="blog-container__cards blog-container__cards--detail">
                    <div class="blog-container__card blog-container__card--detail">
                        <div class="blog-container_img">
                            <img src=" <?php echo the_post_thumbnail_url('full'); ?>"
                                alt="<?php the_title(); ?>のアイキャッチ画像" />
                        </div>
                        <!-- 投稿の内容を表示 -->
                        <div>
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
                <?php endwhile; endif; ?>
                <!-- ページナビ -->
                <div class="blog-container__pagenavi blog-container__pagenavi--detail">
                    <?php if (get_previous_post()):?>
                    <?php previous_post_link('%link', '<'); ?>
                    <?php endif; ?>
                    <?php if (get_next_post()):?>
                    <?php next_post_link('%link', '>'); ?>
                    <?php endif; ?>
                </div>
            </div>
            <!-- サイドバー -->
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>
<?php get_footer(); 