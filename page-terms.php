<?php get_header(); ?>
<!-- メインビュー -->
<section class="sub-fv sub-fv-layout">
    <picture class="sub-fv__img">
        <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/sp-sitemap.jpg"
            media="(max-width: 767px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/pc-sitemap.jpg" alt="ocean" />
    </picture>
    <h1 class="sub-fv__title-wrapper">
        <div class="sub-fv__title sub-fv__title--page-common">terms<span>of</span><span>s</span>ervice</div>
    </h1>
</section>
<!-- パンくずリスト -->
<div class="breadcrumbs breadcrumbs-blog-layout">
    <div class="breadcrumbs__inner inner">
        <?php get_template_part('parts/breadcrumbs') ?>
    </div>
</div>

<section class="page-terms page-terms-layout">
    <div class="page-terms__inner inner">
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <!-- ページのタイトル -->
        <h2 class="page-terms__title"><?php the_title(); ?></h2>
        <!-- ブロックエディタからの本文内容 -->
        <dl class="page-terms__items">
            <?php the_content(); ?>
            <!-- ブロックエディタの内容をここに反映 -->
        </dl>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>
<?php get_footer(); ?>