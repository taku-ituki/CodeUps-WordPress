<?php get_header(); ?>
<!-- メインビュー -->
<section class="sub-fv sub-fv-layout">
    <picture class="sub-fv__img">
        <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/sp-sitemap.jpg"
            media="(max-width: 767px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/pc-sitemap.jpg" alt="ocean" />
    </picture>
    <h1 class="sub-fv__title-wrapper">
        <div class="sub-fv__title sub-fv__title-privacy">privacy<span>p</span>olicy</div>
    </h1>
</section>
<!-- パンくずリスト -->
<div class="breadcrumbs breadcrumbs-blog-layout">
    <div class="breadcrumbs__inner inner">
        <?php get_template_part('parts/breadcrumbs') ?>
    </div>

    <section class="page-privacy page-privacy-layout">
        <div class="page-privacy__inner inner">
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <!-- ページのタイトル -->
            <h2 class="page-privacy__title"><?php the_title(); ?></h2>
            <!-- ブロックエディタからの本文内容 -->
            <dl class="page-privacy__items page-privacy__items--privacy">
                <?php the_content(); ?>
                <!-- ブロックエディタの内容をここに反映 -->
            </dl>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
    <?php get_footer(); ?>