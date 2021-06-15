<?php $centerValue = get_field('center'); ?>

<div class="desktop_and_mobile_hero_image_wrapper">
    <img class="page_desktop_image hero_image hide_on_mobile show_on_tablet" src="<?php echo get_field('desktop_image')['url']; ?>">
    <img class="page_mobile_image hero_image hide_on_desktop hide_on_tablet" src="<?php echo get_field('mobile_image')['url']; ?>">
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