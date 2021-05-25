<div class="desktop_and_mobile_hero_image_wrapper">
    <img class="page_desktop_image hero_image hide_on_mobile show_on_tablet" src="<?php echo get_field('desktop_image')['url']; ?>">
    <img class="page_mobile_image hero_image hide_on_desktop hide_on_tablet" src="<?php echo get_field('mobile_image')['url']; ?>">
    <div class="center_page_hero_content_wrapper">
        <!-- Need to correct images - need transparent center logos -->
        <?php if ($centerValue == "Chapters Capistrano") : ?>
            <img src="<?php echo get_template_directory_uri() . '/images/chapters_capistrano_logo.jpg' ?>" alt="">
        <?php elseif ($centerValue == "Monarch Shores") : ?>
            <img src="<?php echo get_template_directory_uri() . '/images/chapters_capistrano_logo.jpg' ?>" alt="">
        <?php elseif ($centerValue == "Mountain Springs") : ?>
            <img src="<?php echo get_template_directory_uri() . '/images/chapters_capistrano_logo.jpg' ?>" alt="">
        <?php elseif ($centerValue == "Willow Springs") : ?>
            <img src="<?php echo get_template_directory_uri() . '/images/chapters_capistrano_logo.jpg' ?>" alt="">
        <?php endif; ?>
        <div class="center_page_hero_headline_wrapper">
            <h1><?php echo get_field('center_page_hero_headline') ?></h1>
            <?php if (get_field('page_subheadline_paragraph')) : ?>
                <p class="hero_subheadline"><?php echo get_field('page_subheadline_paragraph') ?></p>
            <?php endif; ?>
            <p class="center_page_hero_cta_top_text">Talk to an Intake Specialist</p>
            <a id="centerPageHeroPhone" class="invocaNumber centerPageHeroPhone" onclick="dataLayer.push({'event': 'phone_click', 'shortcode_type' : 'centerPageHeroPhone'});" href="tel:949-276-2886">949-276-2886</a>
        </div>
    </div>
</div>