<?php

/**
 * Template Name: Thank You
 * Template Post Type: Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sunshine_behavioral_health
 */

namespace WP_Rig\WP_Rig;

get_header();
get_template_part('template-parts/javascript/navigationJs');
get_template_part('template-parts/javascript/expandableRowsShortcodeJs');

sunshine_behavioral_health()->print_styles('sunshine_behavioral_health-custom-page-nosidebar', 'sunshine_behavioral_health-content');

$centerValue = get_field('center')

?>



<main id="primary" class="thank_you_page">
    <div class="desktop_and_mobile_hero_image_wrapper">
        <img class="page_desktop_image hero_image hide_on_mobile show_on_tablet" src="<?php echo get_field('thank_you_desktop_image')['url']; ?>">
        <img class="page_mobile_image hero_image hide_on_desktop hide_on_tablet" src="<?php echo get_field('thank_you_mobile_image')['url']; ?>">
        <div class="hero_banner_headlines_container">
            <h1><?php echo get_field('thank_you_headline') ?></h1>
            <?php if (get_field('thank_you_subheadline')) : ?>
                <p class="hero_subheadline"><?php echo get_field('thank_you_subheadline') ?></p>
            <?php endif; ?>
        </div>
    </div>
    <div class="thank_you_page_main_content">
        <!-- Page Content -->
        <section class="page_content list_styling">
            <?php echo get_field('thank_you_top_content') ?>
        </section>
    </div>

    <div class="page_grid">
        <div class="page_wrapper thank_you_page_wrapper">
            <section class="page_content thank_you_infographic_container">
                <?php echo get_field('thank_you_infographic_wysiwyg') ?>
            </section>


        </div>
        <?php get_sidebar('dynamic'); ?>
    </div>
    <div class="thank_you_page_footer">
        <?php get_template_part('template-parts/content/shortcodes/centers_cards_carousel_image'); ?>

        <?php get_template_part('template-parts/content/pageDisclaimer'); ?>

    </div>
</main> <?php
        get_footer();
