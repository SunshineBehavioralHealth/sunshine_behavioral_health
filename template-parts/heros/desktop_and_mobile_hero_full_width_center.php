<?php $centerValue = get_field('center'); ?>

<div class="desktop_and_mobile_hero_image_wrapper center_page_hero">
    <img class="page_desktop_image hero_image hide_on_mobile show_on_tablet" src="<?php echo get_field('desktop_center_image')['url']; ?>">
    <img class="page_mobile_image hero_image hide_on_desktop hide_on_tablet" src="<?php echo get_field('mobile_center_hero')['url']; ?>">
    <div class="hero_banner_headlines_container">
        <div class="hero_banner_headlines_wrapper">
            <?php if ($centerValue == "Chapters Capistrano") : ?>
                <img class="hero_center_logo" src="<?php echo get_template_directory_uri() . '/images/logos/chapters_capistrano_logo.jpg' ?>" alt="">
            <?php elseif ($centerValue == "Monarch Shores") : ?>
                <img class="hero_center_logo" src="<?php echo get_template_directory_uri() . '/images/logos/monarch_shores_logo.jpg' ?>" alt="">
            <?php elseif ($centerValue == "Mountain Springs") : ?>
                <img class="hero_center_logo" src="<?php echo get_template_directory_uri() . '/images/logos/mountain_springs_logo.jpg' ?>" alt="">
            <?php elseif ($centerValue == "Willow Springs") : ?>
                <img class="hero_center_logo" src="<?php echo get_template_directory_uri() . '/images/logos/willow_springs_logo.jpg' ?>" alt="">
            <?php endif; ?>
            <h1><?php echo get_field('center_page_hero_headline') ?></h1>
            <?php if (get_field('page_subheadline_paragraph')) : ?>
                <?php if (get_field('page_subheadline_paragraph')) : ?>
                    <p class="hero_subheadline"><?php echo get_field('page_subheadline_paragraph') ?></p>
                <?php endif; ?>
            <?php endif; ?>
            <p class="center_page_hero_cta_top_text">Talk to an Intake Specialist</p>
            <a id="centerPageHeroPhone" class="invocaNumber centerPageHeroPhone" onclick="dataLayer.push({'event': 'phone_click', 'shortcode_type' : 'centerPageHeroPhone'});" href="tel:949-276-2886">949-276-2886</a>
        </div>
    </div>
</div>