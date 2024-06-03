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
                    <dt class="page-page-common__term">以下は、Webサイトで使用するための一般的なプライバシーポリシーの例です。</dt>
                    <dd class="page-page-common__description-margin">
                        <ol class="page-page-common__description-numbers">
                            <li class="page-page-common__description-number">概要
                                当社は、お客様の個人情報を大切に扱い、個人情報保護に努めています。本プライバシーポリシーには、当社がどのように個人情報を収集し、使用するかについて説明しています。</li>
                            <li class="page-page-common__description-number">収集する情報
                                当社は、お客様が当社のサービスを利用する際に、お名前、住所、電話番号、メールアドレスなどの個人情報を収集する場合があります。</li>
                        </ol>
                    </dd>
                </div>
                <div class="page-page-common__item">
                    <dt class="page-page-common__term">また、当社のサイトを閲覧する際に、IPアドレス、ブラウザの種類、言語設定、アクセス日時などの情報も収集する場合があります。
                    </dt>
                    <dd class="page-page-common__description">
                        <ol class="page-page-common__description-numbers">
                            <div class="page-page-common__description-number">情報の使用
                                当社は、お客様から収集した個人情報を、以下の目的で使用することがあります。
                            </div>
                        </ol>
                    </dd>
                </div>
                <div class="page-page-common__item">
                    <dt class="page-page-common__term">・お客様からのお問い合わせやサポートの提供 ・当社のサービスや製品の提供
                        ・当社のサイトの改善や新しいサービスの開発・法律や規制に基づく義務の履行</dt>
                    <dd class="page-page-common__description">
                        <ol class="page-page-common__description-numbers">
                            <div class="page-page-common__description-number">情報の共有
                                当社は、お客様から収集した個人情報を、以下の場合に限り第三者に提供することがあります。</div>
                        </ol>
                    </dd>
                </div>
                <div class="page-page-common__item">
                    <dt class="page-page-common__term">・お客様の同意がある場合 ・法律や規制に基づく場合 ・当社が信頼できると判断した業務委託先に必要な範囲で提供する場合</dt>
                    <dd class="page-page-common__description">
                        <ul class="page-page-common__description-numbers">
                            <li class="page-page-common__description-number">セキュリティ
                                当社は、お客様の個人情報を適切に保護するために、適切な安全対策を講じます。個人情報への不正アクセス、紛失、改ざん、漏洩等を防止するための措置を講じます。</li>
                            <li class="page-page-common__description-number">
                                Cookieの使用
                                当社は、お客様により良いサイトの利用体験を提供するために、Cookieを使用する場合があります。Cookieは、お客様が当社のサイトを訪れた際に、お客様のブラウザに保存される小さなデータファイルです。Cookieには個人情報は含まれません。
                            </li>
                            <li class="page-page-common__description-number">お問い合わせ先
                                当社のプライバシーポリ<br />シーに関するご質問やご意見は、以下の連絡先までお問い合わせください。 [会社名] [住<br />所] [電話番号] [メールアドレス]
                            </li>
                            <li class="page-page-common__description-number">
                                プライバシーポリシーの変更
                                当社は、必要に応じて本プライバシーポリシーを変更することがあります。変更後のプライバシーポリシーは、当社のサイトに掲載された時点から効力を有するものとします。変更があった場合、当社は適切な手段でお知らせします。
                            </li>
                        </ul>
                    </dd>
                </div>
            </dl>

            <div class="page-page-common__description-end">以上が、当社のプライバシーポリシーの概要です。お客様の個人情報保護のために、常に努めてまいります。</div>
        </div>
    </section><?php get_footer(); ?>