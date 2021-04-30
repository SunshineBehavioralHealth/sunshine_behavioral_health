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
get_template_part('template-parts/javascript/expandableRowsShortcodeJs');

sunshine_behavioral_health()->print_styles('sunshine_behavioral_health-custom-page-nosidebar', 'sunshine_behavioral_health-content');

$centerSelection = get_field('center')

?>



<script type="text/javascript">
    jQuery(document).ready(function($) {
        var sliders = document.querySelectorAll('.glide');

        for (var i = 0; i < sliders.length; i++) {
            var glide = new Glide(sliders[i], {
                gap: 15,
                perView: 1,
                autoplay: 2500,
                hoverpause: true,
                keyboard: true,
                peek: {
                    before: 100,
                    after: 100
                },
            });

            glide.mount();
        }
    });
</script>

<main id="primary" class="maxWidth center_page">
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


    <div class="center_page_container">
        <section class="center_page_location_section">
            <div class="center_page_location_container">
                <h2><?php echo get_field('center_page_-_location_headline') ?></h2>
                <div class="center_page_location_wrapper">
                    <div class="center_page_location_content_wrapper">

                    </div>

                    <div class="center_page_location_iframe_wrapper">
                        <?php if ($centerValue == "Chapters Capistrano") : ?>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3329.724328088017!2d-117.63236908449115!3d33.43043075768753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dcf40f3530b4cd%3A0xe9dceac46fd44fd4!2s1525%20Buena%20Vista%2C%20San%20Clemente%2C%20CA%2092672!5e0!3m2!1sen!2sus!4v1619809011507!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            <div class="center_page_location_address">
                                <a href=""><span>Address:</span>1525 Buena Vista, San Clemente, CA 92672</a>
                            </div>
                        <?php elseif ($centerValue == "Monarch Shores") : ?>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3327.0664989986176!2d-117.6580030844899!3d33.499646954094324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dcf1efd1bb11f7%3A0x521f70a0edb1c6b5!2s27123%20Calle%20Arroyo%20%232121%2C%20San%20Juan%20Capistrano%2C%20CA%2092675!5e0!3m2!1sen!2sus!4v1619809037054!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                            <div class="center_page_location_address">
                                <a href=""><span>Address:</span>27123 Calle Arroyo #2121, San Juan Capistrano, CA 92675</a>
                            </div>
                        <?php elseif ($centerValue == "Mountain Springs") : ?>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3096.4226461415133!2d-104.86456988437968!3d39.09684684276736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x876cade5e7b20a25%3A0x1e60b73ef75cbe49!2s1865%20Woodmoor%20Dr%2C%20Monument%2C%20CO%2080132!5e0!3m2!1sen!2sus!4v1619809190008!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                            <div class="center_page_location_address">
                                <a href=""><span>Address:</span>1865 Woodmor Monument, CO 80132</a>
                            </div>
                        <?php elseif ($centerValue == "Willow Springs") : ?>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3449.9826650436426!2d-97.22942738454705!3d30.151911620442053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86448f838b5d2377%3A0x2c75933c9fdd6b23!2s1128%20TX-21%2C%20Bastrop%2C%20TX%2078602!5e0!3m2!1sen!2sus!4v1619809147810!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                            <div class="center_page_location_address">
                                <a href=""><span>Address:</span>1128 TX-21, Bastrop, TX 78602</a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="center_page_image_carousel_section">
            <div class="glide carousel<?php echo get_sub_field('increment') ?>">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <?php
                        if (have_rows('center_page_carousel')) :
                            while (have_rows('center_page_carousel')) : the_row();
                        ?>
                                <li class="glide__slide">
                                    <img src="<?php echo get_sub_field('image') ?>" alt="" loading="lazy">
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
        </section>

        <section class="center_page_treatment_list_section">
            <div class="center_page_treatment_list_container">
                <ul>
                    <?php
                    if (have_rows('center_page_treatment_list_items')) :
                        while (have_rows('center_page_treatment_list_items')) : the_row();
                    ?>
                            <li>
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/checkmark_icon.png' ?>" alt="" loading="lazy"> <?php echo get_sub_field('text') ?>
                            </li>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </ul>
            </div>
        </section>

        <section class="center_page_badge_section">
            <div class="center_page_badge_container">
                <h3>Treatment at <?php if ($centerValue == "Chapters Capistrano") echo "Chapters Capistrano";
                                    elseif ($centerValue == "Monarch Shores") echo "Monarch Shores";
                                    elseif ($centerValue == "Mountain Springs") echo "Mountain Springs";
                                    elseif ($centerValue == "Willow Springs") echo "Willow Springs"; ?></h3>
                <div class="ceneter_page_badges_wrapper">
                    <?php if ($centerValue == "Chapters Capistrano") : ?>
                        <a href="https://legitscript.com/pharmacy/chapterscapistrano.com" title=" Verify LegitScript Approval">
                            <img src="https://static.legitscript.com/seals/3380243.png" alt="LegitScript approved" loading="lazy" width="140" height="100" />
                        </a>
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/gold_badge.png' ?>" alt="" loading="lazy">
                    <?php elseif ($centerValue == "Monarch Shores") : ?>
                        <a href="https://legitscript.com/pharmacy/monarchshores.com" title="Verify LegitScript Approval">
                            <img src="https://static.legitscript.com/seals/3380081.png" alt="LegitScript approved" loading="lazy" width="140" height="100" />
                        </a>
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/gold_badge.png' ?>" alt="" loading="lazy">
                    <?php elseif ($centerValue == "Mountain Springs") : ?>
                        <a href="https://www.legitscript.com/websites/mountainspringsrecovery.com/" title="Verify LegitScript Approval">
                            <img src="https://static.legitscript.com/seals/4466021.png" alt="LegitScript approved" loading="lazy" />
                        </a>
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/gold_badge.png' ?>" alt="" loading="lazy">
                    <?php elseif ($centerValue == "Willow Springs") : ?>
                        <a title="Verify LegitScript Approval" href="https://legitscript.com/pharmacy/willowspringsrecovery.com/" title="Verify LegitScript Approval">
                            <img src="https://static.legitscript.com/seals/3380258.png" alt="LegitScript approved" loading="lazy" width="140" height="100" />
                        </a>
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/gold_badge.png' ?>" alt="" loading="lazy">
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <section class="center_page_testimonial_section">
            <div class="center_page_testimonial_container">
                <p class="quote_icon">&quot;</p>
                <?php echo get_field('center_page_testimonial') ?>
                <div class="center_page_testimonial_star_wrapper">
                    <img src="" alt="" loading="lazy">
                </div>
            </div>
        </section>

        <section class="center_page_expandable_row_section">
            <div class="center_page_expandable_row_container">
                <div class="center_page_expandable_row_wrapper">
                    <?php
                    if (have_rows('center_page_expandable_rows')) :
                        while (have_rows('center_page_expandable_rows')) : the_row();
                    ?>
                            <div class="expandable_row_element">
                                <div class="expandable_row_element_headline_img_wrapper">
                                    <h5><?php echo get_sub_field('headline') ?></h5>
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/plus_icon_blue.png' ?>" alt="">
                                </div>

                                <div class="expandable_row_content hide">
                                    <p><?php echo get_sub_field('content') ?></p>
                                </div>

                            </div>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </div>
                <img src="" alt="" loading="lazy">
            </div>
        </section>

        <section class="center_page_insurance_form_section">
            <div class="center_page_insurance_form_container">
                <div class="center_page_insurance_form_content_wrapper">
                    <?php echo get_field('center_page_insurance_content') ?>
                </div>

                <div class="center_page_insurance_form_wrapper">
                    <?php get_template_part('template-parts/forms/insurance_verification_form'); ?>
                </div>
            </div>
        </section>

    </div>
</main> <?php
        get_footer();
