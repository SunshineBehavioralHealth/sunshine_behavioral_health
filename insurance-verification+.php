<?php

/**
 * Template Name: Insurance Verification+
 * Template Post Type: Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sunshine_behavioral_health
 */

namespace WP_Rig\WP_Rig;

get_header();
get_template_part('template-parts/javascript/navigationJs');

sunshine_behavioral_health()->print_styles('sunshine_behavioral_health-custom-page-nosidebar', 'sunshine_behavioral_health-content');

?>


<main id="primary" class="insurance_verification_page">
    <?php get_template_part('template-parts/heros/desktop_and_mobile_hero_full_width'); ?>

    <div class="content_container">
        <div class="page_wrapper">
            <!-- Page Content -->
            <section class="page_content">
                <?php get_template_part('template-parts/content/googleTranslate'); ?>
                <?php echo get_field('content') ?>
            </section>

            <section class="insurance_form_section">
                <div class="insurance_form_wrapper">
                    <?php echo do_shortcode('[gravityform id="6" title="false" description="false"]') ?>
                </div>
            </section>

            <?php get_template_part('template-parts/content/pageDisclaimer'); ?>
        </div>
    </div>
</main> <?php
        get_footer();
