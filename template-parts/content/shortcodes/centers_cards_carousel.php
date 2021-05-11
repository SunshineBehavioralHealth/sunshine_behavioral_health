<script type="text/javascript">
    jQuery(document).ready(function($) {
        var sliders = document.querySelectorAll('.glide.centers_cards_carousel');

        for (var i = 0; i < sliders.length; i++) {
            var glide = new Glide(sliders[i], {
                gap: 15,
                perView: 4,
                //autoplay: 3000,
                hoverpause: true,
                keyboard: true,
            });

            glide.mount();
        }
    });
</script>

<section class="centers_cards_carousel_section">
    <div class="centers_cards_carousel_container">
        <?php if (is_page_template('front-page.php')) : ?>
            <h2 class=""><?php echo get_field('treatment_center_card_headline') ?></h2>
            <h4><?php echo get_field('treatment_center_card_subheadline') ?></h4>
        <?php endif; ?>
        <div class="glide centers_cards_carousel">
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                    <?php
                    if (have_rows('centers_cards_carousel', 'option')) :
                        while (have_rows('centers_cards_carousel', 'option')) : the_row();
                    ?>
                            <li class="glide__slide">
                                <div class="centers_cards_indv_card">
                                    <p class="centers_cards_indv_card_state"><?php echo get_sub_field('state', 'option') ?></p>
                                    <img src="<?php echo get_sub_field('image', 'option')['url'] ?>" alt="">
                                    <a href="<?php echo get_sub_field('link', 'option') ?>">
                                        <h4><?php echo get_sub_field('center_name', 'option') ?></h4>
                                    </a>
                                    <p class="centers_cards_indv_card_subheadline"><?php echo get_sub_field('center_subheadline', 'option') ?></p>
                                    <a href="<?php echo get_sub_field('link', 'option') ?>" class="centers_cards_indv_card_learn_more">Learn More</a>
                                </div>
                            </li>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </ul>
            </div>
        </div>
    </div>
</section>