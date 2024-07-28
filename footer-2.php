</main>
<!-- footer -->
<footer class="footer footer-layout-2">
    <div class="footer__inner inner">
        <div class="footer__logo-wrapper">
            <div class="footer__logo">
                <a href="<?php echo esc_url(home_url("/")) ?>">
                    <img src="<?php echo esc_url( get_theme_file_uri("/dist")); ?>/assets/images/common/CodeUps.svg"
                        alt="CodeUps" />
                </a>
            </div>
            <div class="footer__sns">
                <div class="footer__facebook">
                    <a href="#">
                        <img src="<?php echo esc_url( get_theme_file_uri("/dist")); ?>/assets/images/common/FacebookLogo.svg"
                            alt="Facebook" />
                    </a>
                </div>
                <div class="footer__instagram">
                    <a href="#">
                        <img src="<?php echo esc_url( get_theme_file_uri("/dist")); ?>/assets/images/common/InstagramLogo.svg"
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
                            <a href="<?php echo esc_url(home_url("/about")) ?>">私たちについて</a>
                        </div>
                    </li>
                </ul>
                <ul class="common-nav__flex-list common-nav__flex-list--footer">
                    <!-- ダイビング情報 -->
                    <li class="common-nav__item common-nav__item--head">
                        <a href="<?php echo esc_url(home_url("/information?tab=1")) ?>">ダイビング情報</a>
                    </li>
                    <li class="common-nav__item">
                        <a href="<?php echo esc_url(home_url("/information?tab=1")) ?>">ライセンス講習</a>
                    </li>
                    <li class="common-nav__item">
                        <a href="<?php echo esc_url(home_url("/information?tab=3")) ?>">体験ダイビング</a>
                    </li>
                    <li class="common-nav__item">
                        <a href="<?php echo esc_url(home_url("/information?tab=2")) ?>">ファンダイビング</a>
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
                        <a href="<?php echo esc_url(home_url("/voice_list")) ?>">お客様の声</a>
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
                        <a href="<?php echo esc_url(home_url("/terms")) ?>">利用規約</a>
                    </li>
                    <!-- Site MAP -->
                    <li class="common-nav__item common-nav__item--head">
                        <a href="<?php echo esc_url(home_url("/sitemap")) ?>">サイトマップ</a>
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
<?php wp_footer(); ?>
<!-- トップページボタン -->
<div class="page-top-btn page-top-btn-layout js-page-top-btn">
    <img src="<?php echo esc_url( get_theme_file_uri("/dist")); ?>/assets/images/common/top-btn.png" alt="top-btn" />
</div>
</body>

</html>