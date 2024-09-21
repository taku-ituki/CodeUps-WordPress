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
                     <a class="common-btn" href="<?php echo esc_url(home_url("/contact")) ?>">
                         <span>contact us</span>
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
                         <a href="<?php echo esc_url(home_url("/campaign_list")) ?>">キャンペーン</a>
                     </li>
                     <!-- 動的リンク生成 -->
                     <?php
                      $taxonomy = 'campaign_list_category';
                      $term_slugs = array(
                                  'license' => 'ライセンス取得',
                                  'experience' => '貸切体験ダイビング',
                                  'fun-diving' => 'ナイトダイビング'
                                   );

                      foreach ($term_slugs as $slug => $name) {
                      $term = get_term_by('slug', $slug, $taxonomy);
                      if ($term && !is_wp_error($term)) {
                      // クエリパラメーター形式でURLを生成
                      $term_link = add_query_arg('campaign_list_category', $slug, get_post_type_archive_link('campaign_list'));
                      echo '<li class="common-nav__item">';
                      echo '<a href="' . esc_url($term_link) . '">' . esc_html($name) . '</a>';
                      echo '</li>';
                       }
                     }
                    ?>

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
                         <a href="<?php echo esc_url(home_url("/price#price-license-diving-link")) ?>">ライセンス講習</a>
                     </li>
                     <li class="common-nav__item">
                         <a href="<?php echo esc_url(home_url("/price#price-experience-diving-link")) ?>">体験ダイビング</a>
                     </li>
                     <li class="common-nav__item">
                         <a href="<?php echo esc_url(home_url("/price#price-fun-diving-link")) ?>">ファンダイビング</a>
                     </li>
                     <li class="common-nav__item">
                         <a
                             href="<?php echo esc_url(home_url("/price#price-special-diving-link")) ?>">スペシャル<br>ダイビング</a>
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