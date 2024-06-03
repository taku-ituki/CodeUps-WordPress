<?php get_header(); ?>
<main>
    <!-- メインビュー -->
    <section class="sub-fv sub-fv-layout">
        <picture class="sub-fv__img">
            <source srcset="<?php echo get_theme_file_uri(); ?>/dist/dist/assets/images/common/contact-sp.jpg"
                media="(max-width: 767px)" />
            <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/contact-pc.jpg" alt="ocean" />
        </picture>
        <h1 class="sub-fv__title"><span>c</span>ontact</h1>
    </section>
    <!-- パンくずリスト -->
    <div class="breadcrumbs breadcrumbs-blog-layout">
        <div class="breadcrumbs__inner inner">
            <span class="breadcrumbs__top"><a href="index.html">TOP</a></span>
            >
            <span class="breadcrumbs__page-title">お問い合わせ</span>
        </div>
    </div>
    <!-- フォームセクション -->
    <div class="page-contact page-contact-layout">
        <div class="page-contact__inner inner">
            <?php echo do_shortcode('[contact-form-7 id="a674ded" title="お問い合わせ"]'); ?>
        </div>
    </div>
</main>
<!-- footer -->
<footer class="footer footer-layout-contact">
    <div class="footer__inner inner">
        <div class="footer__logo-wrapper">
            <div class="footer__logo">
                <a href="index.html">
                    <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/CodeUps.svg"
                        alt="CodeUps" />
                </a>
            </div>
            <div class="footer__sns">
                <div class="footer__facebook">
                    <a href="#">
                        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/FacebookLogo.svg"
                            alt="Facebook" />
                    </a>
                </div>
                <div class="footer__instagram">
                    <a href="#">
                        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/InstagramLogo.svg"
                            alt="Instagram" />
                    </a>
                </div>
            </div>
        </div>
        <nav class="footer__list-wrapper common-nav">
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
                            <a href="aboutus.html">私たちについて</a>
                        </div>
                    </li>
                </ul>
                <ul class="common-nav__flex-list common-nav__flex-list--footer">
                    <!-- ダイビング情報 -->
                    <li class="common-nav__item common-nav__item--head">
                        <a href="information.html">ダイビング情報</a>
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
                            <a href="blog.html">ブログ</a>
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
                        <a href="price.html">料金一覧</a>
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
                        <a href="faq.html">よくある質問</a>
                    </li>
                    <!-- プライバシーポリシー -->
                    <li class="common-nav__item common-nav__item--head">
                        <a href="privacy.html">プライバシー<br />ポリシー</a>
                    </li>
                    <!-- 利用規約 -->
                    <li class="common-nav__item common-nav__item--head">
                        <a href="terms.html">利用規約</a>
                    </li>
                    <!-- Site MAP -->
                    <li class="common-nav__item common-nav__item--head">
                        <a href="sitemap.html">サイトマップ</a>
                    </li>
                    <!-- お問い合わせ -->
                    <li class="common-nav__item common-nav__item--head">
                        <a href="<?php echo esc_url(home_url("/contact")) ?>">お問い合わせ</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <small class="footer__copy-right">Copyright &copy; 2021 - 2023 CodeUps LLC. All Rights Reserved.</small>
</footer>
<!-- トップページボタン -->
<div class="page-top-btn page-top-btn-layout js-page-top-btn">
    <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/top-btn.png" alt="top-btn" />
</div>
</body>

</html>