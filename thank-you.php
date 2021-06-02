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
    <?php get_template_part('template-parts/heros/desktop_and_mobile_hero_full_width'); ?>

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
</main>
<?php
get_footer();
