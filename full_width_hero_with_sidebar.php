<?php

/**
 * Template Name: Full Width Hero with Sidebar
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



<main id="primary" class="full_width_hero_with_sidebar_page">
    <?php get_template_part('template-parts/heros/desktop_and_mobile_hero_full_width'); ?>
    <div class="page_grid">
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
        <?php get_sidebar('responsive'); ?>
    </div>
</main> <?php
        get_footer();
