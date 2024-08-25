<?php get_header(); ?>
<main>
    <!-- メインビュー -->
    <section class="sub-fv sub-fv-layout">
        <picture class="sub-fv__img">
            <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/contact-sp.jpg"
                media="(max-width: 767px)" />
            <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/contact-pc.jpg" alt="ocean" />
        </picture>
        <h1 class="sub-fv__title"><span>c</span>ontact</h1>
    </section>
    <!-- パンくずリスト -->
    <div class="breadcrumbs breadcrumbs-blog-layout">
        <div class="breadcrumbs__inner inner">
            <?php get_template_part('parts/breadcrumbs') ?>
        </div>
    </div>
    <!-- フォームセクション -->
    <div class="page-contact page-contact-layout">
        <div class="page-contact__inner inner">
            <?php echo do_shortcode('[contact-form-7 id="a674ded" title="お問い合わせ"]'); ?>
        </div>
    </div>
    <?php get_footer('contact'); ?>