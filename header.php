<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <!-- header -->
    <header class="header header-layout js-header">
        <div class="header__inner">
            <?php if ( is_front_page() ) : ?>
            <!-- トップページでは h1 タグを使用 -->
            <h1 class="header__logo">
                <a href="<?php echo esc_url(home_url("/")) ?>">
                    <img src="<?php echo esc_url( get_theme_file_uri('/dist/assets/images/common/CodeUps.svg') ); ?>"
                        alt="CodeUps" />
                </a>
            </h1>
            <?php else : ?>
            <!-- トップページ以外では div タグを使用 -->
            <div class="header__logo">
                <a href="<?php echo esc_url(home_url("/")) ?>">
                    <img src="<?php echo esc_url( get_theme_file_uri('/dist/assets/images/common/CodeUps.svg') ); ?>"
                        alt="CodeUps" />
                </a>
            </div>
            <?php endif; ?>
            <!-- PCナビゲーション -->
            <nav class="header__nav">
                <ul class="header__nav-items">
                    <li class="header__nav-item">
                        <a href="<?php echo esc_url(home_url("/campaign_list")) ?>">
                            <div class="header__nav-text">campaign<span>キャンペーン</span></div>
                        </a>
                    </li>
                    <li class="header__nav-item">
                        <a href="<?php echo esc_url(home_url("/aboutus")) ?>">
                            <div class="header__nav-text">about us<span>私たちについて</span></div>
                        </a>
                    </li>
                    <li class="header__nav-item">
                        <a href="<?php echo esc_url(home_url("/information")) ?>">
                            <div class="header__nav-text">information<span>ダイビング情報</span></div>
                        </a>
                    </li>
                    <li class="header__nav-item">
                        <a href="<?php echo esc_url(home_url("/blog")) ?>">
                            <div class="header__nav-text">blog<span>ブログ</span></div>
                        </a>
                    </li>
                    <li class="header__nav-item">
                        <a href="<?php echo esc_url(home_url("/voice_list")) ?>">
                            <div class="header__nav-text">voice<span>お客様の声</span></div>
                        </a>
                    </li>
                    <li class="header__nav-item">
                        <a href="<?php echo esc_url(home_url("/price")) ?>">
                            <div class="header__nav-text">price<span>料金一覧</span></div>
                        </a>
                    </li>
                    <li class="header__nav-item">
                        <a href="<?php echo esc_url(home_url("/faq")) ?>">
                            <div class="header__nav-text">FAQ<span>よくある質問</span></div>
                        </a>
                    </li>
                    <li class="header__nav-item">
                        <a href="<?php echo esc_url(home_url("/contact")) ?>">
                            <div class="header__nav-text">contact<span>お問い合わせ</span></div>
                        </a>
                    </li>
                </ul>
                <!-- ハンバーガーボタン -->
                <button class="header__hamburger js-hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </nav>
            <!-- SPナビゲーション -->
            <div class="header__drawer js-drawer">
                <nav class="header__drawer-wrapper common-nav">
                    <div class="common-nav__flex">
                        <!-- 左側 -->
                        <ul class="common-nav__flex-list">
                            <!-- キャンペーン -->
                            <li class="common-nav__item common-nav__item--head">
                                <a href="<?php echo esc_url(home_url("/campaign_list")) ?>">キャンペーン</a>
                            </li>
                            <li class="common-nav__item">
                                <a
                                    href="<?php echo esc_url(add_query_arg('campaign_list_category', 'license', home_url('/campaign_list/'))) ?>">ライセンス講習</a>
                            </li>
                            <li class="common-nav__item">
                                <a
                                    href="<?php echo esc_url(add_query_arg('campaign_list_category', 'fun-diving', home_url('/campaign_list/'))) ?>">貸切体験ダイビング</a>
                            </li>
                            <li class="common-nav__item">
                                <a
                                    href="<?php echo esc_url(add_query_arg('campaign_list_category', 'experience', home_url('/campaign_list/'))) ?>">ナイトダイビング</a>
                            </li>
                            <!-- 私たちについて -->
                            <li class="common-nav__item common-nav__item--head">
                                <a href="<?php echo esc_url(home_url("/about")) ?>">私たちについて</a>
                            </li>
                        </ul>

                        <ul class="common-nav__flex-list">
                            <!-- ダイビング情報 -->
                            <li class="common-nav__item common-nav__item--head">
                                <a href="<?php echo esc_url(home_url("/information")) ?>">ダイビング情報</a>
                            </li>
                            <li class="common-nav__item">
                                <a href="<?php echo esc_url(home_url("/information?tab=license-link")) ?>">ライセンス講習</a>
                            </li>
                            <li class="common-nav__item">
                                <a
                                    href="<?php echo esc_url(home_url("/information?tab=experience-link")) ?>">体験ダイビング</a>
                            </li>
                            <li class="common-nav__item">
                                <a href="<?php echo esc_url(home_url("/information?tab=fun-link")) ?>">ファンダイビング</a>
                            </li>
                        </ul>
                    </div>
                    <!-- 右側 -->
                    <div class="common-nav__flex">
                        <ul class="common-nav__flex-list">
                            <!-- お客様の声 -->
                            <li class="common-nav__item common-nav__item--head">
                                <a href="<?php echo esc_url(home_url("/voice_list")) ?>">お客様の声</a>
                            </li>
                            <!-- 料金一覧 -->
                            <li class="common-nav__item common-nav__item--head">
                                <a href="<?php echo esc_url(home_url("/price")) ?>">料金一覧</a>
                            </li>
                            <li class="common-nav__item">
                                <a
                                    href="<?php echo esc_url(home_url("/price#price-license-diving-link")) ?>">ライセンス講習</a>
                            </li>
                            <li class="common-nav__item">
                                <a
                                    href="<?php echo esc_url(home_url("/price#price-experience-diving-link")) ?>">体験ダイビング</a>
                            </li>
                            <li class="common-nav__item">
                                <a href="<?php echo esc_url(home_url("/price#price-fun-diving-link")) ?>">ファンダイビング</a>
                            </li>
                        </ul>
                        <ul class="common-nav__flex-list">
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
            <!-- ドロワー　下要素スクロール禁止 -->
            <div class="header__overlay  js-header-overlay"></div>
        </div>
    </header>
</body>

</html>