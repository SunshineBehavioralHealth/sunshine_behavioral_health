<?php

/**
 * Template Name: Full Width Hero NO Sidebar
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



<main id="primary" class="alumni_page">
    <div class="desktop_and_mobile_hero_image_wrapper">
        <img class="page_desktop_image hero_image hide_on_mobile show_on_tablet" src="<?php echo get_field('desktop_image')['url']; ?>">
        <img class="page_mobile_image hero_image hide_on_desktop hide_on_tablet" src="<?php echo get_field('mobile_image')['url']; ?>">
        <div class="hero_banner_headlines_container">
            <h1><?php echo get_field('page_headline') ?></h1>
            <?php if (get_field('page_subheadline_paragraph')) : ?>
                <p class="hero_subheadline"><?php echo get_field('page_subheadline_paragraph') ?></p>
            <?php endif; ?>
        </div>
    </div>
    <div class="full_width_hero_no_sidebar_content_container">
        <div class="page_wrapper">
            <!-- Page Content -->
            <section class="page_content list_styling ipad_width_restriction">
                <?php get_template_part('template-parts/content/googleTranslate'); ?>
                <?php echo get_field('content') ?>
            </section>

            <!-- Disclosure -->
            <section class="page_disclosure_section">
                <?php get_template_part('template-parts/content/pageDisclaimer'); ?>
            </section>

            <?php get_template_part('template-parts/content/phoneTreatmentCta'); ?>
        </div>
    </div>
</main> <?php
        get_footer();
