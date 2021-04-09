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

<?php if (get_field('has_google_translate')) : ?>
    <div id="google_translate_element"></div>
    <script>
        function googleTranslateElementInit() {

            new google.translate.TranslateElement({

                pageLanguage: 'en'

            }, 'google_translate_element');

        }
    </script>
    <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<?php endif; ?>

<main id="primary" class="maxWidth insurance_verification_page">
    <div class="page_image">
        <img class="page_desktop_image hero_image hide_on_mobile show_on_tablet" src="<?php echo get_field('desktop_image')['url']; ?>">
        <img class="page_mobile_image hero_image hide_on_desktop hide_on_tablet" src="<?php echo get_field('mobile_image')['url']; ?>">
        <div class="page_mobile_image_text_and_cta_container">
            <h1><?php echo get_field('insurance_page_headline') ?></h1>
            <p class="hero_subheadline"><?php echo get_field('insurance_page_subheadline_paragraph') ?></p>
        </div>
    </div>
    <div class="hide_on_mobile">
        <h1><?php echo get_field('insurance_page_headline') ?></h1>
        <p class="hero_subheadline"><?php echo get_field('insurance_page_subheadline_paragraph') ?></p>
    </div>

    <!-- Covid Notice -->
    <?php get_template_part('template-parts/content/mobileCovidNotice'); ?>

    <div class="insurance_page_container">

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
                <?php get_template_part('template-parts/forms/insurance_verification_form'); ?>
            </div>
        </section>

    </div>
    <section class="page_disclosure_section">
        <?php get_template_part('template-parts/content/pageDisclaimer'); ?>
    </section>
</main> <?php
        get_footer();
