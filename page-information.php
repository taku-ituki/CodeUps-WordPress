<?php get_header(); ?>
<!-- メインビュー -->
<section class="sub-fv sub-fv-layout">
    <picture class="sub-fv__img">
        <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common//mv-information-sp.jpg"
            media="(max-width: 767px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/mv-information-pc.jpg" alt="diving" />
    </picture>
    <h1 class="sub-fv__title"><span>i</span>nformation</h1>
</section>
<!-- パンくずリスト -->
<div class="breadcrumbs breadcrumbs-blog-layout">
    <div class="breadcrumbs__inner inner">
        <?php get_template_part('parts/breadcrumbs') ?>
    </div>
</div>
<!-- information -->
<section class="info-content info-content-layout">
    <div class="info-content__inner inner">
        <ul class="info-content__tab-area">
            <li class="info-content__tab js-info-content-tab active">ライセンス<br />講習</li>
            <li class="info-content__tab js-info-content-tab info-content__tab--fun">ファン<br />ダイビング</li>
            <li class="info-content__tab js-info-content-tab info-content__tab--experience">体験<br />ダイビング</li>
        </ul>
        <div class="info-content__cards">
            <!-- ライセンス講習 -->
            <div class="info-content__card js-info-content-card active">
                <div class="info-content__card-text-block">
                    <h2 class="info-content__card-title">ライセンス講習</h2>
                    <div class="info-content__card-text">
                        泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！
                        スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！
                    </div>
                </div>
                <div class="info-content__card-img">
                    <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/info-license.jpg"
                        alt="diving-img" />
                </div>
            </div>
            <!-- ファンダイビング -->
            <div class="info-content__card js-info-content-card info-content__card--fun">
                <div class="info-content__card-text-block">
                    <h2 class="info-content__card-title">ファンダイビング</h2>
                    <div class="info-content__card-text">ブランクダイバー、ライセンスを取り立ての方も安心！
                        沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！</div>
                </div>
                <div class="info-content__card-img">
                    <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/info-fundiving.jpg"
                        alt="diving-img" />
                </div>
            </div>
            <!-- 体験ダイビング -->
            <div class="info-content__card js-info-content-card info-content__card--experience">
                <div class="info-content__card-text-block">
                    <h2 class="info-content__card-title">体験ダイビング</h2>
                    <div class="info-content__card-text">ブランクダイバー、ライセンスを取り立ての方も安心！
                        沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！</div>
                </div>
                <div class="info-content__card-img">
                    <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/info-experience.jpg"
                        alt="diving-img" />
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>