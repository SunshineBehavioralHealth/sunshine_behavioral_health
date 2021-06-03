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
<main id="primary" class="job_application_page">
    <?php get_template_part('template-parts/heros/desktop_and_mobile_hero_full_width_job_app'); ?>

    <div class="content_container">
        <div class="page_wrapper">
            <!-- Page Content -->
            <section class="page_content list_styling">
                <h2><?php echo get_field('job_title') ?></h2>
                <div class="job_application_job_content">
                    <?php echo get_field('job_content') ?>
                </div>
                <div class="job_application_form_container">
                    <?php echo do_shortcode('[gravityform id="1" title="true" description="true"]') ?>
                </div>
            </section>
        </div>
    </div>
</main>

<?php get_footer();
