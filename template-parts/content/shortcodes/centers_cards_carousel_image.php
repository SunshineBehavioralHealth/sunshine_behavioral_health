<script type="text/javascript">
    jQuery(document).ready(function($) {
        var sliders = document.querySelectorAll('.glide.centers_cards_carousel_image_glide');

        for (var i = 0; i < sliders.length; i++) {
            var glide = new Glide(sliders[i], {
                gap: 15,
                perView: 1,
                hoverpause: true,
                keyboard: true,
                animationDuration: 1000
            });

            glide.mount();
        }
    });
</script>

<section class="centers_cards_carousel_section">
    <div class="centers_cards_carousel_container">
        <h2 class=""><?php echo get_field('treatment_center_card_headline') ?></h2>
        <h4><?php echo get_field('treatment_center_card_subheadline') ?></h4>
        <div class="centers_cards_carousel">
            <?php
            if (have_rows('centers_cards_repeater', 'option')) :
                while (have_rows('centers_cards_repeater', 'option')) : the_row();
            ?>
                    <div class="centers_cards_indv_card_wrapper">
                        <div class="centers_cards_indv_card">
                            <a href="<?php echo get_sub_field('link', 'option') ?>">
                                <h5 class="centers_cards_indv_card_state"><?php echo get_sub_field('state', 'option') ?></h5>
                            </a>
                            <div class="glide centers_cards_carousel_image_glide">
                                <div class="glide__track" data-glide-el="track">
                                    <ul class="glide__slides">
                                        <?php if (have_rows('centers_cards_repeater_images', 'option')) : ?>
                                            <?php while (have_rows('centers_cards_repeater_images', 'option')) : the_row(); ?>
                                                <li class="glide__slide">
                                                    <img src="<?php echo get_sub_field('image', 'option')['url'] ?>" alt="">
                                                </li>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                                <div class="glide__arrows" data-glide-el="controls">
                                    <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><img src="<?php echo get_template_directory_uri() . '/images/icons/left_arrow.png'; ?>" loading="lazy" alt=""></button>
                                    <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><img src="<?php echo get_template_directory_uri() . '/images/icons/right_arrow.png'; ?>" loading="lazy" alt=""></button>
                                </div>
                            </div>
                            <a href="<?php echo get_sub_field('link', 'option') ?>">
                                <h4><?php echo get_sub_field('center_name', 'option') ?></h4>
                            </a>
                            <h5 class="centers_cards_indv_card_subheadline"><?php echo get_sub_field('center_subheadline', 'option') ?></h5>
                            <p class="centers_cards_indv_card_paragraph"><?php echo get_sub_field('center_paragraph', 'option') ?></p>
                            <a href="<?php echo get_sub_field('link', 'option') ?>" class="centers_cards_indv_card_learn_more">Learn More</a>
                        </div>
                    </div>


            <?php
                endwhile;
            endif;
            ?>

        </div>
    </div>
</section>