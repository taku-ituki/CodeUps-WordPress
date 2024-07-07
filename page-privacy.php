<?php get_header(); ?>
<!-- メインビュー -->
<section class="sub-fv sub-fv-layout">
    <picture class="sub-fv__img">
        <source srcset="<?php echo get_theme_file_uri(); ?>/dist/dist/assets/images/common//sp-sitemap.jpg"
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
    <section class="page-page-common page-page-common-layout">
        <div class="page-page-common__inner inner">
            <h2 class="page-page-common__title">プライバシーポリシー</h2>
            <dl class="page-page-common__items">
                <div class="page-page-common__item">
                    <dt class="page-page-common__term"> <?php echo nl2br(esc_html(get_field('privacy_top'))); ?></dt>
                    <dd class="page-page-common__description-margin">
                        <ol class="page-page-common__description-numbers">
                            <li class="page-page-common__description-number">
                                <?php echo nl2br(esc_html(get_field('privacy_intro'))); ?>
                            </li>
                            <li class="page-page-common__description-number">
                                <?php echo nl2br(esc_html(get_field('privacy_collection'))); ?>
                            </li>
                        </ol>
                    </dd>
                </div>
                <div class="page-page-common__item">
                    <dt class="page-page-common__term">
                        <?php echo esc_html(get_field('privacy_usage')); ?>
                    </dt>
                    <dd class="page-page-common__description">
                    <dt class="page-page-common__term"> <?php echo esc_html(get_field('privacy_contract')); ?></dt>
                    <ol class="page-page-common__description-numbers">
                        <div class="page-page-common__description-number">
                            <?php echo nl2br(esc_html(get_field('privacy_sharing'))); ?>
                        </div>
                    </ol>
                    </dd>
                </div>
                <div class="page-page-common__item">
                    <dt class="page-page-common__term">
                        <?php echo esc_html(get_field('privacy_security')); ?>
                    </dt>
                    <dd class="page-page-common__description">
                        <ul class="page-page-common__description-numbers">
                            <li class="page-page-common__description-number">
                                <?php echo nl2br(esc_html(get_field('privacy_consent'))); ?>
                            </li>
                            <li class="page-page-common__description-number">
                                <?php echo nl2br(esc_html(get_field('privacy_cookies'))); ?>
                            </li>
                            <li class="page-page-common__description-number">
                                <?php echo nl2br(esc_html(get_field('privacy_contact'))); ?>
                            </li>
                            <li class="page-page-common__description-number">
                                <?php echo nl2br(esc_html(get_field('privacy_changes'))); ?>
                            </li>
                        </ul>
                    </dd>
                </div>
            </dl>
            <div class="page-page-common__description-end">
                <?php echo nl2br(esc_html(get_field('privacy_conclusion'))); ?>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>