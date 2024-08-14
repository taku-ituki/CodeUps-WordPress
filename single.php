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
                <div>
                    <div>
                        <div>
                            <img src="<?php echo the_post_thumbnail_url('full'); ?>"
                                alt="<?php the_title(); ?>のアイキャッチ画像" />
                        </div>
                        <!-- 投稿の内容を表示 -->
                        <div>
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>

                <!-- ページナビ -->
                <div class="blog-container__pagenavi blog-container__pagenavi--detail wp-pagenavi">
                    <a class="page previouspostslink" rel="prev" href="#"></a>
                    <a class="page nextpostslink" rel="next" href="#"></a>
                </div>
                <?php endwhile; endif; ?>
            </div> <!-- サイドバー -->
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
<!-- 閲覧数をカウント（人気記事） -->
<?php if (!is_user_logged_in() && !is_bot()) { setPostViews(get_the_ID()); } ?>