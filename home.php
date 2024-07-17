<?php get_header(); ?>
<!-- メインビュー -->
<section class="sub-fv sub-fv-layout">
    <picture class="sub-fv__img">
        <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common//blog-mv-sp.jpg"
            media="(max-width: 767px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/blog-mv-pc.jpg" alt="fishes" />
    </picture>
    <h1 class="sub-fv__title"><span>b</span>log</h1>
</section>
<!-- パンくずリスト -->
<div class="breadcrumbs breadcrumbs-blog-layout">
    <div class="breadcrumbs__inner inner">
        <span class="breadcrumbs__top"><a href="<?php echo esc_url(home_url("/")) ?>">TOP</a></span>
        >
        <span class="breadcrumbs__page-title">ブログ一覧</span>
    </div>
</div>

<!-- Blog -->
<section class="blog-container page-blog-layout">
    <div class="blog-container_inner inner">
        <!-- 左右セクションを合体して一つのブロック化 -->
        <div class="blog-container__container blog-container">
            <!-- メインコンテンツ -->
            <div class="blog-container__main">
                <div class="blog-container__cards blog-cards  blog-cards--blog-page">
                    <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <div class="blog-container__card blog-card">
                        <a href="<?php the_permalink(); ?>">
                            <div class="blog-card__img">
                                <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('thumbnail'); ?>
                                <?php else : ?>
                                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/default-thumbnail.jpg"
                                    alt="default-thumbnail" />
                                <?php endif; ?>
                            </div>
                            <div class="blog-card__title-block">
                                <time class="blog-card__date"
                                    datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                                <p class="blog-card__title"><?php the_title(); ?></p>
                            </div>
                            <p class="blog-card__text">
                                <?php the_excerpt(); ?>
                            </p>
                        </a>
                    </div>
                    <?php endwhile; endif; ?>
                </div>
                <!-- ページナビ -->
                <div class="blog-container__pagenavi wp-pagenavi">
                    <?php wp_pagenavi(); ?>
                </div>
            </div>
            <!-- サイドバー -->
            <?php get_sidebar(); ?>
        </div>
</section>
<?php get_footer(); ?>