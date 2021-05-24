<div class="desktop_and_mobile_hero_image_wrapper">
    <img class="page_desktop_image hero_image hide_on_mobile show_on_tablet" src="<?php echo get_field('desktop_image')['url']; ?>">
    <img class="page_mobile_image hero_image hide_on_desktop hide_on_tablet" src="<?php echo get_field('mobile_image')['url']; ?>">
    <div class="hero_banner_headlines_container">
        <div class="hero_banner_headlines_wrapper">
            <h1><?php echo get_field('page_headline') ?></h1>
            <?php if (get_field('page_subheadline_paragraph')) : ?>
                <p class="hero_subheadline"><?php echo get_field('page_subheadline_paragraph') ?></p>
            <?php endif; ?>
        </div>

    </div>
</div>