<?php get_header(); ?>
<!-- メインビュー -->
<section class="sub-fv sub-fv-layout">
    <picture class="sub-fv__img">
        <source srcset="<?php echo get_theme_file_uri(); ?>/dist/dist/assets/images/common//sp-sitemap.jpg"
            media="(max-width: 767px)" />
       <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/pc-sitemap.jpg" alt="ocean" />
    </picture>
    <h1 class="sub-fv__title-wrapper sub-fv__title-wrapper--sitemap">
        <span class="sub-fv__title">site<span>map</span></span>
    </h1>
</section>
<!-- パンくずリスト -->
<div class="breadcrumbs breadcrumbs-blog-layout">
    <div class="breadcrumbs__inner inner">
        <?php get_template_part('parts/breadcrumbs') ?>
    </div>
    </main>
    <!-- sitemap -->
    <div class="sitemap sitemap-layout">
        <div class="sitemap__inner inner">
            <nav class="sitemap__list-wrapper common-nav">
                <div class="common-nav__flex">
                    <!-- 左側 -->
                    <ul class="common-nav__flex-list common-nav__flex-list--footer">
                        <!-- キャンペーン -->
                        <li class="common-nav__item common-nav__item--head">
                            <a href="campaign.html">キャンペーン</a>
                        </li>
                        <li class="common-nav__item">
                            <a href="#">ライセンス取得</a>
                        </li>
                        <li class="common-nav__item">
                            <a href="#">貸切体験ダイビング</a>
                        </li>
                        <li class="common-nav__item">
                            <a href="#">ナイトダイビング</a>
                        </li>
                        <!-- 私たちについて -->
                        <li class="common-nav__items common-nav__items--us">
                            <div class="common-nav__item common-nav__item--head">
                                <a href="<?php echo esc_url(home_url("/about")) ?>">私たちについて</a>
                            </div>
                        </li>
                    </ul>
                    <ul class="common-nav__flex-list common-nav__flex-list--footer">
                        <!-- ダイビング情報 -->
                        <li class="common-nav__item common-nav__item--head">
                          <a href="<?php echo esc_url(home_url("/information")) ?>">ダイビング情報</a>
                        </li>
                        <li class="common-nav__item">
                            <a href="#">ライセンス講習</a>
                        </li>
                        <li class="common-nav__item">
                            <a href="#">体験ダイビング</a>
                        </li>
                        <li class="common-nav__item">
                            <a href="#">ファンダイビング</a>
                        </li>
                        <!--ブログ -->
                        <li class="common-nav__items common-nav__items--blog">
                            <div class="common-nav__item common-nav__item--head">
                                <a href="<?php echo esc_url(home_url("/blog")) ?>">ブログ</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- 右側 -->
                <div class="common-nav__flex common-nav__flex--right">
                    <ul class="common-nav__flex-list common-nav__flex-list--footer">
                        <!-- お客様の声 -->
                        <li class="common-nav__item common-nav__item--head">
                           <a href="<?php echo esc_url(home_url("/voice")) ?>">お客様の声</a>
                        </li>
                        <!-- 料金一覧 -->
                        <li class="common-nav__item common-nav__item--head">
                            <a href="<?php echo esc_url(home_url("/price")) ?>">料金一覧</a>
                        </li>
                        <li class="common-nav__item">
                            <a href="#">ライセンス講習</a>
                        </li>
                        <li class="common-nav__item">
                            <a href="#">体験ダイビング</a>
                        </li>
                        <li class="common-nav__item">
                            <a href="#">ファンダイビング</a>
                        </li>
                    </ul>
                    <ul class="common-nav__flex-list common-nav__flex-list--footer">
                        <!-- よくある質問 -->
                        <li class="common-nav__item common-nav__item--head">
                            <a href="<?php echo esc_url(home_url("/faq")) ?>">よくある質問</a>
                        </li>
                        <!-- プライバシーポリシー -->
                        <li class="common-nav__item common-nav__item--head">
                            <a href="<?php echo esc_url(home_url("/privacy")) ?>">プライバシー<br />ポリシー</a>
                        </li>
                        <!-- 利用規約 -->
                        <li class="common-nav__item common-nav__item--head">
                            <a href="terms.html">利用規約</a>
                        </li>
                        <!-- お問い合わせ -->
                        <li class="common-nav__item common-nav__item--head">
                            <a href="<?php echo esc_url(home_url("/contact")) ?>">お問い合わせ</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <small class="sitemap__copy-right">Copyright &copy; 2021 - 2023 CodeUps LLC. All Rights Reserved.</small>
    </div><?php get_footer(); ?>