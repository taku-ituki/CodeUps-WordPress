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
<section class="page-page-common page-page-common-layout">
    <div class="page-page-common__inner inner">
        <h2 class="page-page-common__title">利用規約</h2>
        <dl class="page-page-common__items">
            <div class="page-page-common__item">
                <dt class="page-page-common__term">以下は、Webサイトで使用する一般的な利用規約の例です。</dt>
                <dd class="page-page-common__description page-page-common__description-page-page-common">
                    <ol class="page-page-common__description-numbers">
                        <li class="page-page-common__description-number ">
                            <?php echo nl2br(esc_html(get_field('terms_top'))); ?>
                        </li>
                        <li class="page-page-common__description-number ">
                            <?php echo nl2br(esc_html(get_field('terms_intro'))); ?></li>
                        <li class="page-page-common__description-number ">
                            <?php echo nl2br(esc_html(get_field('terms_prohibited'))); ?></li>
                    </ol>
                </dd>
                <dd class="page-page-common__description">
                    <p class="page-page-common__description-text">
                        <?php echo nl2br(esc_html(get_field('terms_prohibited_text'))); ?>
                    </p>
                </dd>
            </div>
            <div class="page-page-common__item">
                <div class="page-page-common__description">
                    <ul class="page-page-common__description-numbers">
                        <li class="page-page-common__description-number ">
                            <?php echo nl2br(esc_html(get_field('terms_intellectual_property'))); ?>
                        </li>
                        <li class="page-page-common__description-number ">
                            <?php echo nl2br(esc_html(get_field('terms_use_disclaimer'))); ?>
                        </li>
                        <li class="page-page-common__description-number ">
                            <?php echo nl2br(esc_html(get_field('terms_privacy'))); ?>
                        </li>
                        <li class="page-page-common__description-number ">
                            <?php echo nl2br(esc_html(get_field('terms_other'))); ?>
                        </li>
                        <li class="page-page-common__description-number ">
                            <?php echo nl2br(esc_html(get_field('terms_change'))); ?>
                        </li>
                    </ul>
                </div>
            </div>
        </dl>

        <div class="page-page-common__description-end">
            以上が、当社の利用規約の概要です。お客様のサービス利用にあたっては、本規約をお読みいただき、同意いただける場合のみサービスをご利用ください。</div>
    </div>
</section>
<?php get_footer(); ?>