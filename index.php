<main>
    <!-- メインビュー -->
    <section class="fv fv-layout js-fv">
        <div class="fv__inner">
            <div class="fv__swiper swiper js-fv-swiper">
                <div class="swiper-wrapper">
                    <picture class="swiper-slide">
                        <source srcset="<?php echo get_theme_file_uri(); ?>/dist/dist/assets/images/common//fv-turtle-sp.jpg"
                            media="(max-width: 767px)" />
                       <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/fv-turtle-pc.jpg"
                            alt="turtle" />
                    </picture>
                    <div class="swiper-slide">
                        <picture class="swiper-slide">
                            <source
                                srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common//fv-diving-sp.jpg"
                                media="(max-width: 767px)" />
                           <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/fv-diving-pc.jpg"
                                alt="turtle" />
                        </picture>
                    </div>
                    <div class="swiper-slide">
                        <picture class="swiper-slide">
                            <source
                                srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common//fv-boat-sp.jpg"
                                media="(max-width: 767px)" />
                           <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/fv-boat-pc.jpg"
                                alt="boat" />
                        </picture>
                    </div>
                    <div class="swiper-slide">
                        <picture class="swiper-slide">
                            <source
                                srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common//fv-beach-sp.jpg"
                                media="(max-width: 767px)" />
                           <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/fv-beach-pc.jpg"
                                alt="beach" />
                        </picture>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="fv__title">
            <span class="fv__title-main">DIVING</span>
            <span class="fv__title-sub">into the ocean</span>
        </h2>
    </section>

    <!-- Campaign -->
    <section class="campaign campaign-layout">
        <!-- セクションタイトル -->
        <div class="campaign__inner inner">
            <div class="campaign__title section-title">
                <h2 class="section-title__en">Campaign</h2>
                <p class="section-title__ja">キャンペーン</p>
            </div>
            <div class="campaign__swiper swiper js-campaign-swiper">
                <div class="campaign__swiper-wrapper swiper-wrapper">
                    <div class="campaign__card campaign-card swiper-slide">
                        <div class="campaign-card__img">
                           <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/campaign-card1.jpg"
                                alt="campaign-card-fish" />
                        </div>
                        <div class="campaign-card__text-wrapper">
                            <div class="campaign-card__color-title">ライセンス講習</div>
                            <div class="campaign-card__title">ライセンス取得</div>
                        </div>
                        <div class="campaign-card__price-wrapper">
                            <div class="campaign-card__text">全部コミコミ(お一人様)</div>
                            <div class="campaign-card__price-block">
                                <div class="campaign-card__price-before">¥56,000</div>
                                <div class="campaign-card__price-after">¥46,000</div>
                            </div>
                        </div>
                    </div>
                    <div class="campaign__card campaign-card swiper-slide">
                        <div class="campaign-card__img">
                           <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/campaign-card-boat.jpg"
                                alt="campaign-card-boat" />
                        </div>
                        <div class="campaign-card__text-wrapper">
                            <div class="campaign-card__color-title">体験ダイビング</div>
                            <div class="campaign-card__title">貸切体験ダイビング</div>
                        </div>
                        <div class="campaign-card__price-wrapper">
                            <div class="campaign-card__text">全部コミコミ(お一人様)</div>
                            <div class="campaign-card__price-block">
                                <div class="campaign-card__price-before">¥24,000</div>
                                <div class="campaign-card__price-after">¥18,000</div>
                            </div>
                        </div>
                    </div>
                    <div class="campaign__card campaign-card swiper-slide">
                        <div class="campaign-card__img">
                           <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/campaign-card-jellyfish.jpg"
                                alt="campaign-card-jellyfish" />
                        </div>
                        <div class="campaign-card__text-wrapper">
                            <div class="campaign-card__color-title">体験ダイビング</div>
                            <div class="campaign-card__title">ナイトダイビング</div>
                        </div>
                        <div class="campaign-card__price-wrapper">
                            <div class="campaign-card__text">全部コミコミ(お一人様)</div>
                            <div class="campaign-card__price-block">
                                <div class="campaign-card__price-before">¥10,000</div>
                                <div class="campaign-card__price-after">¥8,000</div>
                            </div>
                        </div>
                    </div>
                    <div class="campaign__card campaign-card swiper-slide">
                        <div class="campaign-card__img">
                           <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/campaign-card-diving.jpg"
                                alt="campaign-card-diving" />
                        </div>
                        <div class="campaign-card__text-wrapper">
                            <div class="campaign-card__color-title">ファンダイビング</div>
                            <div class="campaign-card__title">貸切ファンダイビング</div>
                        </div>
                        <div class="campaign-card__price-wrapper">
                            <div class="campaign-card__text">全部コミコミ(お一人様)</div>
                            <div class="campaign-card__price-block">
                                <div class="campaign-card__price-before">¥20,000</div>
                                <div class="campaign-card__price-after">¥16,000</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ナビゲーションボタンの div 要素（省略可能） -->
            <div class="campaign__swiper-button-prev swiper-button-prev"></div>
            <div class="campaign__swiper-button-next swiper-button-next"></div>
            <!-- common　ボタン -->
            <div class="campaign__btn-wrap">
                <a class="common-btn" href="campaign.html">
                    <span>view more</span>
                </a>
            </div>
        </div>
    </section>
    <!-- About us -->
    <section class="about about-layout">
        <div class="about__inner inner">
            <!-- セクションタイトル -->
            <div class="about__title section-title">
                <h2 class="section-title__en">about us</h2>
                <p class="section-title__ja">私たちについて</p>
            </div>
            <div class="about__body">
                <div class="about__img-block">
                    <div class="about__img-left"><img
                            src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/shisa.jpg"
                            alt="top-about-left" />
                    </div>
                    <div class="about__img-right"><img
                            src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/about-fish.jpg"
                            alt="top-about-right" /></div>
                </div>
                <div class="about__text-block">
                    <p class="about__text-en">Dive into<br />the Ocean</p>
                    <div class="about__text-ja">
                        <p class="about__text">
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                        </p>
                        <!-- common　ボタン -->
                        <div class="about__btn-wrap">
                            <a class="common-btn" href="<?php echo esc_url(home_url("/about")) ?>">
                                <span>view more</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- information -->
    <section class="information information-layout">
        <div class="information__inner inner">
            <!-- セクションタイトル -->
            <div class="information__title section-title">
                <h2 class="section-title__en">information</h2>
                <p class="section-title__ja">ダイビング情報</p>
            </div>
            <div class="information__item-block">
                <div class="information__img js-color">
                   <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/top-information-img.jpg"
                        alt="top-information-ocean" />
                </div>
                <div class="information__text-block">
                    <div class="information__text-title">ライセンス講習</div>
                    <p class="information__text">
                        当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br />
                        正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
                    </p>
                    <!-- common　ボタン -->
                    <div class="page-campaign__btn-wrap">
                        <a class="common-btn" href="information.html">
                            <span>view more</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ブログ -->
    <section class="blog blog-layout">
        <div class="blog__inner inner">
            <div class="blog__title section-title">
                <h2 class="section-title__en section-title__en--blog">blog</h2>
                <p class="section-title__ja section-title__ja--blog">ブログ</p>
            </div>
            <div class="blog__cards blog-cards">
                <div class="blog-cards__card blog-card">
                    <a href="blog-detail.html">
                        <div class="blog-card__img">
                           <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/blog-card-coral.jpg"
                                alt="blog-card-coral" />
                        </div>
                        <div class="blog-card__title-block">
                            <time class="blog-card__date" datetime="2023-11-17">2023.11/17</time>
                            <div class="blog-card__title">ライセンス講習</div>
                        </div>
                        <p class="blog-card__text">
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                        </p>
                    </a>
                </div>
                <div class="blog-cards__card blog-card">
                    <a href="blog-detail.html">
                        <div class="blog-card__img">
                           <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/blog-card-turtle.jpg"
                                alt="blog-card-coral" />
                        </div>
                        <div class="blog-card__title-block">
                            <time class="blog-card__date" datetime="2023-11-17">2023.11/17</time>
                            <div class="blog-card__title">ウミガメと泳ぐ</div>
                        </div>
                        <p class="blog-card__text">
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                        </p>
                    </a>
                </div>
                <div class="blog-cards__card blog-card">
                    <a href="blog-detail.html">
                        <div class="blog-card__img">
                           <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/blog-card-clownfish.jpg"
                                alt="blog-card-coral" />
                        </div>
                        <div class="blog-card__title-block">
                            <time class="blog-card__date" datetime="2023-11-17">2023.11/17</time>
                            <div class="blog-card__title">カクレクマノミ</div>
                        </div>
                        <p class="blog-card__text">
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                        </p>
                    </a>
                </div>
            </div>
            <!-- common　ボタン -->
            <div class="blog__btn-wrap">
                <a class="common-btn" href="<?php echo esc_url(home_url("/blog")) ?>">
                    <span>view more</span>
                </a>
            </div>
        </div>
    </section>
    <!-- Voice -->
    <section class="voice voice-layout">
        <div class="voice__inner inner">
            <!-- セクションタイトル -->
            <div class="voice__title section-title">
                <h2 class="section-title__en">voice</h2>
                <p class="section-title__ja">お客様の声</p>
            </div>
            <div class="voice__cards voice-cards">
                <div class="voice-cards__card voice-card">
                    <a href="#">
                        <div class="voice-card__top">
                            <div class="voice-card__headline">
                                <div class="voice-card__sub">
                                    <div class="voice-card__age">20代(女性)</div>
                                    <div class="voice-card__sub-title">ライセンス講習</div>
                                </div>
                                <div class="voice-card__main-title">ここにタイトルが入ります。ここにタイトル</div>
                            </div>
                            <div class="voice-card__img js-color">
                               <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/top-voice-woman.jpg"
                                    alt="top-voice-women" />
                            </div>
                        </div>
                        <p class="voice-card__bottom">
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                            ここにテキストが入ります。ここにテキストが入ります。
                        </p>
                    </a>
                </div>

                <div class="voice-cards__card voice-card">
                    <a href="#">
                        <div class="voice-card__top">
                            <div class="voice-card__headline">
                                <div class="voice-card__sub">
                                    <div class="voice-card__age">20代(女性)</div>
                                    <div class="voice-card__sub-title">ライセンス講習</div>
                                </div>
                                <div class="voice-card__main-title">ここにタイトルが入ります。ここにタイトル</div>
                            </div>
                            <div class="voice-card__img js-color">
                               <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/top-voice-men.jpg"
                                    alt="top-voice-men" />
                            </div>
                        </div>
                        <p class="voice-card__bottom">
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                            ここにテキストが入ります。ここにテキストが入ります。
                        </p>
                    </a>
                </div>
            </div>
            <!-- common　ボタン -->
            <div class="voice__btn-wrap">
                <a class="common-btn" href="voice.html">
                    <span>view more</span>
                </a>
            </div>
        </div>
    </section>
    <!-- price -->
    <section class="price price-layout">
        <div class="price__inner inner">
            <!-- セクションタイトル -->
            <div class="price__title section-title">
                <h2 class="section-title__en">Price</h2>
                <p class="section-title__ja">料金一覧</p>
            </div>
            <div class="price__contents">
                <figure class="price__img-block">
                    <picture class="price__content js-color">
                        <source srcset="<?php echo get_theme_file_uri(); ?>/dist/dist/assets/images/common//top-price-sp.jpg"
                            media="(max-width: 767px)" />
                       <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/top-price-pc.jpg"
                            alt="top-price-coral" />
                    </picture>
                </figure>
                <ul class="price__lists">
                    <li class="price__list">
                        <h3 class="price__list-title">ライセンス講習</h3>
                        <dl class="price__list-item">
                            <dt class="price__list-menu">オープンウォーターダイバーコース</dt>
                            <dd class="price__list-price">¥50,000</dd>
                            <dt class="price__list-menu">アドバンスドオープンウォーターコース</dt>
                            <dd class="price__list-price">¥60,000</dd>
                            <dt class="price__list-menu">レスキュー＋EFRコース</dt>
                            <dd class="price__list-price">¥70,000</dd>
                        </dl>
                    </li>
                    <li class="price__list">
                        <h3 class="price__list-title">体験ダイビング</h3>
                        <dl class="price__list-item">
                            <dt class="price__list-menu">ビーチ体験ダイビング(半日)</dt>
                            <dd class="price__list-price">¥7,000</dd>
                            <dt class="price__list-menu">ビーチ体験ダイビング(1日)</dt>
                            <dd class="price__list-price">¥14,000</dd>
                            <dt class="price__list-menu">ボート体験ダイビング(半日)</dt>
                            <dd class="price__list-price">¥10,000</dd>
                            <dt class="price__list-menu">ボート体験ダイビング(1日)</dt>
                            <dd class="price__list-price">¥18,000</dd>
                        </dl>
                    </li>
                    <li class="price__list">
                        <h3 class="price__list-title">ファンダイビング</h3>
                        <dl class="price__list-item">
                            <dt class="price__list-menu">ビーチダイビング(2ダイブ)</dt>
                            <dd class="price__list-price">¥14,000</dd>
                            <dt class="price__list-menu">ボートダイビング(2ダイブ)</dt>
                            <dd class="price__list-price">¥18,000</dd>
                            <dt class="price__list-menu">スペシャルダイビング(2ダイブ)</dt>
                            <dd class="price__list-price">¥24,000</dd>
                            <dt class="price__list-menu">ナイトダイビング(1ダイブ)</dt>
                            <dd class="price__list-price">¥10,000</dd>
                        </dl>
                    </li>
                    <li class="price__list">
                        <h3 class="price__list-title">スペシャルダイビング</h3>
                        <dl class="price__list-item">
                            <dt class="price__list-menu">貸切ダイビング(2ダイブ)</dt>
                            <dd class="price__list-price">¥24,000</dd>
                            <dt class="price__list-menu">1日ダイビング(3ダイブ)</dt>
                            <dd class="price__list-price">¥32,000</dd>
                        </dl>
                    </li>
                </ul>
            </div>
            <!-- common　ボタン -->
            <div class="price__btn-wrap">
                <a class="common-btn" href="<?php echo esc_url(home_url("/price")) ?>">
                    <span>view more</span>
                </a>
            </div>
        </div>
    </section>
    <!-- contact -->
    <section class="contact contact-layout">
        <div class="contact__inner">
            <ul class="contact__lists">
                <li class="contact__list-left">
                    <h2 class="contact-logo">
                        <img src="<?php echo esc_url( get_theme_file_uri("/dist")); ?>/assets/images/common/CodeUps-contact.svg"
                            alt="CodeUps" />
                    </h2>
                    <div class="contact__address-block">
                        <ul class="contact__adress-list">
                            <li class="contact__address-item">沖縄県那覇市1-1</li>
                            <li class="contact__address-item contact__address-item--tel">TEL:0120-000-0000</li>
                            <li class="contact__address-item contact__address-item--time">営業時間:8:30-19:00</li>
                            <li class="contact__address-item">定休日:毎週火曜日</li>
                        </ul>
                        <div class="contact__google">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44884.97515968753!2d127.66482799192755!3d26.22515152497987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e5697141a6b58b%3A0x2cd8aff616585e98!2z5rKW57iE55yM6YKj6KaH5biC!5e0!3m2!1sja!2sjp!4v1690351163491!5m2!1sja!2sjp"
                                style="border: 0" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </li>
                <li class="contact__list-right">
                    <div class="section-title">
                        <h2 class="section-title__en section-title__en--contact">contact</h2>
                        <p class="section-title__ja">お問い合わせ</p>
                    </div>
                    <div class="contact__text">ご予約・お問い合わせはコチラ</div>
                    <div class="contact__btn-wrap">
                        <a class="contact__btn common-btn common-btn-layout" href="contact.html">
                            <div class="common-btn__asset">
                                <div class="common-btn__text">contact <span>us</span></div>
                                <div class="common-btn__img-wrapper">
                                    <div class="common-btn__img common-btn__img--before">
                                        <img src="<?php echo esc_url( get_theme_file_uri("/dist")); ?>/assets/images/common/common-btn-img--before.png"
                                            alt="before" />
                                    </div>
                                    <div class="common-btn__img common-btn__img--after">
                                        <img src="<?php echo esc_url( get_theme_file_uri("/dist")); ?>/assets/images/common/common-btn-img--after.png"
                                            alt="after" />
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </section>
</main>
<!-- footer -->
<footer class="footer footer-layout">
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
<!-- トップページボタン -->
<div class="page-top-btn page-top-btn-layout js-page-top-btn">
    <img src="<?php echo esc_url( get_theme_file_uri("/dist")); ?>/assets/images/common/top-btn.png" alt="top-btn" />
</div>
</body>

</html>