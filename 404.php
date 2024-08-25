<?php get_header(); ?>
<div class="wrap-404">
    <!-- パンくずリスト -->
    <div class="breadcrumbs breadcrumbs-404">
        <div class="breadcrumbs__inner inner">
            <span class="breadcrumbs__top"><a href="<?php echo home_url(); ?>">TOP</a></span>
            >
            <span class="breadcrumbs__page-title">404</span>
        </div>
    </div>
    <section class="error error-layout">
        <div class="error__inner">
            <h1 class="error__title">404</h1>
            <p class="error__text">申し訳ありません。<br />お探しのページが見つかりません</p>
            <div class="error__btn-wrap">
                <a class="error__btn common-btn common-btn--error" href="<?php echo esc_url(home_url('/')); ?>">
                    page <span>top</span>
                </a>
            </div>
        </div>
    </section>
</div>
<?php get_footer('404'); ?>