 <!-- サイドメニュー -->
 <div class="blog-container__side blog-container">
     <div class="blog-container__inner inner">
         <!-- 人気記事 -->
         <div class="blog-container__article">
             <h2 class="blog-container__title blog-container__title--article">人気記事</h2>
             <div class="blog-container__article-cards">
                 <div class="blog-container__article-card">
                     <a href="#">
                         <div class="blog-container__article-img">
                             <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/about-img2-fish.jpg"
                                 alt="yellow-fish" />
                         </div>
                         <div class="blog-container__article-texts">
                             <time class="blog-container__article-date" datetime="2023-11-17">2023.11/17</time>
                             <h3 class="blog-container__article-title">ライセンス取得</h3>
                         </div>
                     </a>
                 </div>
                 <div class="blog-container__article-card">
                     <a href="#">
                         <div class="blog-container__article-img">
                             <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/blog-card-turtle.jpg"
                                 alt="turtle" />
                         </div>
                         <div class="blog-container__article-texts">
                             <time class="blog-container__article-date" datetime="2023-11-17">2023.11/17</time>
                             <h3 class="blog-container__article-title">ウミガメと泳ぐ</h3>
                         </div>
                     </a>
                 </div>
                 <div class="blog-container__article-card">
                     <a href="#">
                         <div class="blog-container__article-img">
                             <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/blog-card-clownfish.jpg"
                                 alt="clown-fish" />
                         </div>
                         <div class="blog-container__article-texts">
                             <time class="blog-container__article-date" datetime="2023-11-17">2023.11/17</time>
                             <h3 class="blog-container__article-title">カクレクマノミ</h3>
                         </div>
                     </a>
                 </div>
             </div>
         </div>
         <!-- 口コミ -->
         <div class="blog-container__reviews">
             <h2 class="blog-container__title blog-container__title--reviews">口コミ</h2>
             <div class="blog-container__reviews-card">
                 <div class="blog-container__reviews-img">
                     <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/reviewd-img.jpg"
                         alt="men&women" />
                 </div>
                 <div class="blog-container__reviews-texts">
                     <time class="blog-container__reviews-date" datetime="2023-11-17">30代(カップル)</time>
                     <h3 class="blog-container__reviews-text">ここにタイトルが入ります。ここにタイトル</h3>
                 </div>
             </div>
             <!-- common　ボタン -->
             <div class="blog-container__btn-wrap blog-container__btn-wrap--reviews">
                 <a class="blog-container__btn common-btn" href="<?php echo esc_url(home_url("/blog")) ?>">
                     <span>view more</span>
                 </a>
             </div>
         </div>
         <!-- キャンペーン -->
         <div class="blog-container__campaign">
             <h2 class="blog-container__title">キャンペーン</h2>
             <div class="blog-container__campaign-cards campaign-cards">
                 <div class="blog-container__campaign-card campaign-card">
                     <div class="campaign-card__img campaign-card__img--blog-container">
                         <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/campaign-test.jpg"
                             alt="campaign-card-fish" />
                     </div>
                     <div class="campaign-card__text-wrapper campaign-card__text-wrapper--blog">
                         <h2 class="campaign-card__title">ライセンス取得</h2>
                     </div>
                     <div class="campaign-card__price-wrapper">
                         <div class="campaign-card__text">全部コミコミ(お一人様)</div>
                         <div class="campaign-card__price-block">
                             <div class="campaign-card__price-before">¥56,000</div>
                             <div class="campaign-card__price-after">¥46,000</div>
                         </div>
                     </div>
                 </div>
                 <div class="blog-container__campaign-card campaign-card">
                     <div class="campaign-card__img campaign-card__img--blog-container">
                         <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/campaign-card-boat.jpg"
                             alt="campaign-card-boat" />
                     </div>
                     <div class="campaign-card__text-wrapper campaign-card__text-wrapper--blog">
                         <h2 class="campaign-card__title">貸切体験ダイビング</h2>
                     </div>
                     <div class="campaign-card__price-wrapper">
                         <div class="campaign-card__text">全部コミコミ(お一人様)</div>
                         <div class="campaign-card__price-block">
                             <div class="campaign-card__price-before">¥24,000</div>
                             <div class="campaign-card__price-after">¥18,000</div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!-- common　ボタン -->
         <div class="blog-container__btn-wrap blog-container__btn-wrap--campaign">
             <a class="blog-container__btn common-btn" href="campaign.html">
                 <span>view more</span>
             </a>
         </div>
         <!--アーカイブ -->
         <div class="blog-container__archive">
             <h2 class="blog-container__title blog-container__title--archive">アーカイブ</h2>
             <!-- accordion -->
             <div class="blog-container__accordion">
                 <div class="blog-container__accordion-container">
                     <div class="blog-container__accordion-item js-accordion-item">
                         <h3 class="blog-container__accordion-title js-accordion-title">2023</h3>
                         <div class="blog-container__accordion-content js-blog-container__accordion-content">
                             <div class="blog-container__accordion-container-month">
                                 <div class="blog-container__accordion-item-month">
                                     <h3 class="blog-container__accordion-title-month js-accordion-title-month">
                                         3月
                                     </h3>
                                     <div class="blog-container__accordion-content-month">
                                         <p class="blog-container__accordion-text">コンテンツが入ります。</p>
                                     </div>
                                 </div>
                                 <div class="blog-container__accordion-item-month">
                                     <h3 class="blog-container__accordion-title-month js-accordion-title-month">
                                         2月
                                     </h3>
                                     <div class="blog-container__accordion-content-month">
                                         <p class="blog-container__accordion-text">
                                             コンテンツが入ります。コンテンツが入ります。コンテンツが入ります。コンテンツが入ります。</p>
                                     </div>
                                 </div>
                                 <div class="blog-container__accordion-item-moth">
                                     <h3 class="blog-container__accordion-title-month js-accordion-title-month">
                                         1月
                                     </h3>
                                     <div class="blog-container__accordion-content-month">
                                         <p class="blog-container__accordion-text">
                                             コンテンツが入ります。コンテンツが入ります。コンテンツが入ります。コンテンツが入ります。</p>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="blog-container__accordion-item-month">
                         <h3 class="blog-container__accordion-title js-accordion-title">2022</h3>
                         <div class="blog-container__accordion-content">
                             <div class="blog-container__accordion-container-month">
                                 <div class="blog-container__accordion-item-month">
                                     <h3 class="blog-container__accordion-title-month js-accordion-title-month">
                                         3月
                                     </h3>
                                     <div class="blog-container__accordion-content-month">
                                         <p class="blog-container__accordion-text">コンテンツが入ります。</p>
                                     </div>
                                 </div>
                                 <div class="blog-container__accordion-item-month">
                                     <h3 class="blog-container__accordion-title-month js-accordion-title-month">
                                         2月
                                     </h3>
                                     <div class="blog-container__accordion-content-month">
                                         <p class="blog-container__accordion-text">
                                             コンテンツが入ります。コンテンツが入ります。コンテンツが入ります。コンテンツが入ります。</p>
                                     </div>
                                 </div>
                                 <div class="blog-container__accordion-item-moth">
                                     <h3 class="blog-container__accordion-title-month js-accordion-title-month">
                                         1月
                                     </h3>
                                     <div class="blog-container__accordion-content-month">
                                         <p class="blog-container__accordion-text">
                                             コンテンツが入ります。コンテンツが入ります。コンテンツが入ります。コンテンツが入ります。</p>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- /.accordion-container -->
             </div>
             <!-- .accordion -->
         </div>
     </div>
     <!-- 左右セクション閉じタグ↓ -->
 </div>