<?php

/**
 * Template Name: Job Application
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
<main id="primary" class="job_application_page maxWidth">

    <div class="page_image">
        <?php if (!wp_is_mobile()) : ?>
            <?php

            $centerValue = get_field('center');

            if ($centerValue == "Chapters Capistrano") : ?>
                <img class="page_desktop_image" src="<?php echo get_template_directory_uri() . '/images/career-chapters.jpg' ?>">
            <?php elseif ($centerValue == "Monarch Shores") : ?>
                <img class="page_desktop_image" src="<?php echo get_template_directory_uri() . '/images/career-opportunities-monarch.jpg' ?>">
            <?php elseif ($centerValue == "Mountain Springs") : ?>
                <img class="page_desktop_image" src="<?php echo get_template_directory_uri() . '/images/career-mountain-springs.jpg' ?>">
            <?php elseif ($centerValue == "Willow Springs") : ?>
                <img class="page_desktop_image" src="<?php echo get_template_directory_uri() . '/images/career-opportunities-willow.jpg' ?>">
            <?php elseif ($centerValue == "Sunshine Behavioral Health") : ?>
                <img class="page_desktop_image" src="<?php echo get_template_directory_uri() . '/images/career-sunshine.jpg' ?>">
            <?php endif; ?>
        <?php else : ?>
            <?php

            $centerValue = get_field('center');

            if ($centerValue == "Chapters Capistrano") : ?>
                <img class="page_desktop_image" src="<?php echo get_template_directory_uri() . '/images/chapters-mobile.jpg' ?>">
            <?php elseif ($centerValue == "Monarch Shores") : ?>
                <img class="page_desktop_image" src="<?php echo get_template_directory_uri() . '/images/monarch-moblie.jpg' ?>">
            <?php elseif ($centerValue == "Mountain Springs") : ?>
                <img class="page_desktop_image" src="<?php echo get_template_directory_uri() . '/images/mountain-springs-mobile.jpg' ?>">
            <?php elseif ($centerValue == "Willow Springs") : ?>
                <img class="page_desktop_image" src="<?php echo get_template_directory_uri() . '/images/willow-springs-mobile.jpg' ?>">
            <?php elseif ($centerValue == "Sunshine Behavioral Health") : ?>
                <img class="page_desktop_image" src="<?php echo get_template_directory_uri() . '/images/sunshine-mobile.jpg' ?>">
            <?php endif; ?>
        <?php endif; ?>
        <div class="page_mobile_image_text_and_cta_container">
            <h1><?php echo get_field('page_headline') ?></h1>
            <?php if (get_field('page_subheadline_paragraph')) : ?>
                <p class="hero_subheadline"><?php echo get_field('page_subheadline_paragraph') ?></p>
            <?php endif; ?>
        </div>
    </div>

    <div class="job_application_page_content_container">
        <div>
            <h2><?php echo get_field('job_title') ?></h2>
            <div class="job_application_job_content">
                <?php echo get_field('job_content') ?>
            </div>
            <div class="job_application_form_container">
                <?php echo do_shortcode('[gravityform id="1" title="true" description="true"]') ?>
            </div>
        </div>
    </div>
</main> <?php
        get_footer();
