<?php

/**
 * Template Name: Insurance Verification
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


<main id="primary" class="maxWidth insurance_verification_page">
    <?php get_template_part('template-parts/heros/desktop_and_mobile_hero_full_width'); ?>

    <div class="content_container">
        <div class="page_wrapper">
            <section class="insurance_page_video_content_section">
                <div class="insurance_page_video_content_container">
                    <div class="insurance_page_video_headline">
                        <h3><?php echo get_field('video_headline') ?></h3>
                    </div>
                    <div class="insurance_page_video_iframe">
                        <?php echo get_field('youtube_iframe') ?>
                    </div>
                    <div class="insurance_page_video_content_container">
                        <?php echo get_field('video_paragraph') ?>
                    </div>
                </div>
            </section>

            <section class="insurance_page_form_section">
                <div class="insurance_page_form_container">
                    <?php echo do_shortcode('[gravityform id="6" title="false" description="false"]') ?>
                </div>
            </section>
            <?php get_template_part('template-parts/content/pageDisclaimer'); ?>

            <?php get_template_part('template-parts/content/phoneTreatmentCta'); ?>
        </div>
    </div>
</main> <?php
        get_footer();
