<?php get_header(); ?>
<div class="wrap">
    <!-- メインビュー -->
    <section class="sub-fv sub-fv-layout">
        <picture class="sub-fv__img">
            <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/contact-sp.jpg"
                media="(max-width: 767px)" />
            <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/contact-pc.jpg" alt="ocean" />
        </picture>
        <h1 class="sub-fv__title"><span>c</span>ontact</h1>
    </section>
    <!-- パンくずリスト -->
    <div class=" breadcrumbs breadcrumbs-blog-layout">
        <div class="breadcrumbs__inner inner">
            <?php get_template_part('parts/breadcrumbs') ?>
        </div>
    </div>
    <!-- 送信完了セクション -->
    <section class="thanks thanks-layout">
        <div class="thanks__inner inner">
            <h2 class="thanks__title">お問い合わせ内容を送信完了しました。</h2>
            <p class="thanks__text">
                このたびは、お問い合わせ頂き<span>誠にありがとうございます。</span><br />お送り頂きました内容を確認の上、<span>3営業日以内に折り返しご連絡させて頂きます。<span></br>また、ご記入頂いたメールアドレスへ、<span>自動返信の確認メールをお送りしております。</span>
            </p>
        </div>
    </section>
</div>
<?php get_footer('2'); ?>