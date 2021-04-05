<?php

/**
 * Template Name: Center Page
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

<script type="text/javascript">
    jQuery(document).ready(function($) {
        var sliders = document.querySelectorAll('.glide');

        for (var i = 0; i < sliders.length; i++) {
            var glide = new Glide(sliders[i], {
                gap: 15,
                perView: 1,
                autoplay: 2500,
                800: {
                    peek: {
                        before: 100,
                        after: 100
                    }
                },
                hoverpause: true,
                keyboard: true,
            });

            glide.mount();
        }
    });
</script>

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

<main id="primary" class="maxWidth center_page">

    <?php if (get_field('desktop_image')) : ?>
        <div class="page_image">
            <img class="page_desktop_image hero_image hide_on_mobile show_on_tablet" src="<?php echo get_field('desktop_image')['url']; ?>">
            <img class="page_mobile_image hero_image hide_on_desktop hide_on_tablet" src="<?php echo get_field('mobile_image')['url']; ?>">
            <div class="page_mobile_image_text_and_cta_container">
                <h1><?php echo get_field('page_headline') ?></h1>
                <p class="hero_subheadline"><?php echo get_field('page_subheadline_paragraph') ?></p>
            </div>
        </div>
        <div class="hide_on_mobile">
            <h1><?php echo get_field('page_headline') ?></h1>
            <p class="hero_subheadline"><?php echo get_field('page_subheadline_paragraph') ?></p>
        </div>
    <?php endif; ?>

    <div class="center_page_container">
        <section class="center_text_left_carousel_right">
            <div class="center_carousel_paragraph">
                <div>
                    <?php echo get_field('carousel_paragraphs') ?>
                </div>
            </div>
            <div class="center_carousel_container">
                <div class="glide carousel1 ?>">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides image_slides_ul">
                            <?php
                            if (have_rows('carousel_gallery')) :
                                while (have_rows('carousel_gallery')) : the_row();
                            ?>
                                    <li class="glide__slide mobileWidthSet" style="width: 200px; "><img src="<?php echo get_sub_field('image')['url'] ?>" alt=""></li>
                            <?php
                                endwhile;
                            endif;
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="center_page_address_container">
                    <h4>Address:</h4>
                    <h5><?php echo (get_field('center_address')) ?></h5>

                </div>
            </div>

        </section>

        <section class="center_page_cta_interjection1_section">
            <div class="center_page_cta_interjection1_container">
                <div class="center_interjection_1_headline_container">
                    <h3><?php echo get_field('interjection_cta_1_headline') ?></h3>
                </div>

                <div class="center_interjection_1_btn_container cta_btn"><a class="invocaNumber" href="tel:949-276-2886" class="invocaNumber">949-276-2886</a></div>
            </div>
        </section>

        <section>
            <div class=" testimonial_bg" style="background-image: url(<?php echo get_field('testimonial_carousel_background_image')['url'] ?>)">
                <div class="">
                    <h4><?php echo get_field('testimonial_headline') ?></h4>
                    <div class="glide carousel<?php echo get_sub_field('increment') ?>">
                        <div class="glide__track" data-glide-el="track">
                            <ul class="glide__slides">
                                <?php
                                if (have_rows('testimonials')) :
                                    while (have_rows('testimonials')) : the_row();
                                ?>
                                        <li class="glide__slide">
                                            <p><?php echo get_sub_field('testimonial') ?></p>
                                        </li>
                                <?php
                                    endwhile;
                                endif;
                                ?>
                            </ul>
                        </div>
                        <div class="glide__bullets" data-glide-el="controls[nav]">
                            <button class="glide__bullet" data-glide-dir="=0"></button>
                            <button class="glide__bullet" data-glide-dir="=1"></button>
                            <button class="glide__bullet" data-glide-dir="=2"></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="center_page_badge_section">
            <div class="center_page_page_container">
                <div class="center_page_badge_container">
                    <?php echo get_field('badge_1') ?>
                </div>
                <div class="center_page_badge_container">
                    <img src="<?php echo get_field('badge_2')['url'] ?>" alt="" loading="lazy">
                </div>
                <div class="center_page_badge_container">
                    <img src="<?php echo get_field('badge_3')['url'] ?>" alt="" loading="lazy">
                </div>
            </div>
        </section>
        <section class="treatment_bullets_section">
            <div>
                <h2>Treatment at <?php echo get_field('center') ?></h2>
                <div class="treatment_bullets_container">
                    <ul class="bullet_column_1">
                        <?php
                        if (have_rows('treatment_bullets_column_1')) :
                            while (have_rows('treatment_bullets_column_1')) : the_row();
                        ?>
                                <li class="">
                                    <p><img src="<?php echo get_template_directory_uri() . '/assets/images/icons/checkmark_icon.png' ?>" alt="" loading="lazy"><?php echo get_sub_field('bullet') ?></p>
                                </li>
                        <?php
                            endwhile;
                        endif;
                        ?>
                    </ul>
                    <ul class="bullet_column_2">
                        <?php
                        if (have_rows('treatment_bullets_column_2')) :
                            while (have_rows('treatment_bullets_column_2')) : the_row();
                        ?>
                                <li class="">
                                    <p><img src="<?php echo get_template_directory_uri() . '/assets/images/icons/checkmark_icon.png' ?>" alt="" loading="lazy"><?php echo get_sub_field('bullet') ?></p>
                                </li>
                        <?php
                            endwhile;
                        endif;
                        ?>
                    </ul>
                    <ul class="bullet_column_3">
                        <?php
                        if (have_rows('treatment_bullets_column_3')) :
                            while (have_rows('treatment_bullets_column_3')) : the_row();
                        ?>
                                <li class="">
                                    <p><img src="<?php echo get_template_directory_uri() . '/assets/images/icons/checkmark_icon.png' ?>" alt="" loading="lazy"><?php echo get_sub_field('bullet') ?></p>
                                </li>
                        <?php
                            endwhile;
                        endif;
                        ?>
                    </ul>
                </div>
            </div>
        </section>


        <section class="center_page_form_section">
            <div class="center_page_content_container">
                <?php echo get_field('insurance_verification_content') ?>
            </div>
            <div class="center_page_form_container">
                <?php get_template_part('template-parts/forms/insurance_verification_form'); ?>
            </div>
        </section>
    </div>
</main> <?php
        get_footer();
