<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<section class="campaign-content">
    <h1 class="campaign-title"><?php the_title(); ?></h1>
    <div class="page-campaign__cards campaign-cards">
        <div class="page-campaign__card campaign-card">
            <div class="campaign-card__img">
                <?php $image = get_field('campaign-card-thumbnail'); ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </div>
            <div class="campaign-card__text-wrapper campaign-card__text-wrapper--page">
                <div class="campaign-card__color-title"><?php the_field('campaign-card-category'); ?></div>
                <h2 class="campaign-card__title campaign-card__title--page"><?php the_field('campaign-price-title'); ?>
                </h2>
            </div>
            <div class="campaign-card__price-wrapper campaign-card__price-wrapper--page">
                <div class="campaign-card__text campaign-card__text--page"><?php the_field('campaign-price-column'); ?>
                </div>
                <div class="campaign-card__price-block">
                    <div class="campaign-card__price-before"><?php the_field('price-before'); ?></div>
                    <div class="campaign-card__price-after campaign-card__price-after--page">
                        <?php the_field('price-after'); ?></div>
                </div>
            </div>
            <div class="campaign-card__add-text-wrapper">
                <p class="campaign-card__add-text"><?php the_field('additional-text'); ?></p>
                <div class="campaign-card__add-date"><?php the_field('date-range'); ?></div>
                <div class="campaign-card__add-form"><?php the_field('form-text'); ?></div>
            </div>
            <!-- common ボタン -->
            <div class="page-campaign__btn-wrap">
                <a class="common-btn" href="information.html">
                    <span>view more</span>
                </a>
            </div>
        </div>
    </div>
</section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>