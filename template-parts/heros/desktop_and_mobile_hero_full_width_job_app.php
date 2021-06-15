<?php $centerValue = get_field('center'); ?>

<div class="desktop_and_mobile_hero_image_wrapper">
    <?php if ($centerValue == "Chapters Capistrano") : ?>
        <img class="page_desktop_image hero_image hide_on_mobile show_on_tablet" src="<?php echo get_template_directory_uri() . '/images/career-chapters.jpg' ?>">
    <?php elseif ($centerValue == "Monarch Shores") : ?>
        <img class="page_desktop_image hero_image hide_on_mobile show_on_tablet" src="<?php echo get_template_directory_uri() . '/images/career-opportunities-monarch.jpg' ?>">
    <?php elseif ($centerValue == "Mountain Springs") : ?>
        <img class="page_desktop_image hero_image hide_on_mobile show_on_tablet" src="<?php echo get_template_directory_uri() . '/images/career-mountain-springs.jpg' ?>">
    <?php elseif ($centerValue == "Willow Springs") : ?>
        <img class="page_desktop_image hero_image hide_on_mobile show_on_tablet" src="<?php echo get_template_directory_uri() . '/images/career-opportunities-willow.jpg' ?>">
    <?php elseif ($centerValue == "Sunshine Behavioral Health") : ?>
        <img class="page_desktop_image hero_image hide_on_mobile show_on_tablet" src="<?php echo get_template_directory_uri() . '/images/career-sunshine.jpg' ?>">
    <?php endif; ?>

    <?php if ($centerValue == "Chapters Capistrano") : ?>
        <img class="page_mobile_image hero_image hide_on_desktop hide_on_tablet" src="<?php echo get_template_directory_uri() . '/images/chapters-mobile.jpg' ?>">
    <?php elseif ($centerValue == "Monarch Shores") : ?>
        <img class="page_mobile_image hero_image hide_on_desktop hide_on_tablet" src="<?php echo get_template_directory_uri() . '/images/monarch-moblie.jpg' ?>">
    <?php elseif ($centerValue == "Mountain Springs") : ?>
        <img class="page_mobile_image hero_image hide_on_desktop hide_on_tablet" src="<?php echo get_template_directory_uri() . '/images/mountain-springs-mobile.jpg' ?>">
    <?php elseif ($centerValue == "Willow Springs") : ?>
        <img class="page_mobile_image hero_image hide_on_desktop hide_on_tablet" src="<?php echo get_template_directory_uri() . '/images/willow-springs-mobile.jpg' ?>">
    <?php elseif ($centerValue == "Sunshine Behavioral Health") : ?>
        <img class="page_mobile_image hero_image hide_on_desktop hide_on_tablet" src="<?php echo get_template_directory_uri() . '/images/sunshine-mobile.jpg' ?>">
    <?php endif; ?>

    <div class="hero_banner_headlines_container">
        <div class="hero_banner_headlines_wrapper">
            <?php if (get_field('add_center_logo')) :
                if ($centerValue == "Chapters Capistrano") : ?>
                    <img class="hero_center_logo" src="<?php echo get_template_directory_uri() . '/images/logos/chapters_capistrano_logo.jpg' ?>" alt="">
                <?php elseif ($centerValue == "Monarch Shores") : ?>
                    <img class="hero_center_logo" src="<?php echo get_template_directory_uri() . '/images/logos/monarch_shores_logo.jpg' ?>" alt="">
                <?php elseif ($centerValue == "Mountain Springs") : ?>
                    <img class="hero_center_logo" src="<?php echo get_template_directory_uri() . '/images/logos/mountain_springs_logo.jpg' ?>" alt="">
                <?php elseif ($centerValue == "Willow Springs") : ?>
                    <img class="hero_center_logo" src="<?php echo get_template_directory_uri() . '/images/logos/willow_springs_logo.jpg' ?>" alt="">
            <?php endif;
            endif; ?>
            <h1><?php echo get_field('page_headline') ?></h1>
            <?php if (get_field('page_subheadline_paragraph')) : ?>
                <?php if (get_field('page_subheadline_paragraph')) : ?>
                    <p class="hero_subheadline"><?php echo get_field('page_subheadline_paragraph') ?></p>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
</div>