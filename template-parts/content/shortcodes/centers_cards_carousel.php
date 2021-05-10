<section class="centers_cards_carousel_section">
    <div class="centers_cards_carousel_container">

    </div>
</section>

<section>
    <div class=" testimonial_bg" style="background-image: url(<?php echo get_field('testimonial_carousel_background_image')['url'] ?>)">
        <div class="">
            <h4><?php echo get_field('testimonial_headline') ?></h4>
            <div class="glide">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <?php
                        if (have_rows('centers_cards_carousel', 'option')) :
                            while (have_rows('centers_cards_carousel', 'option')) : the_row();
                        ?>
                                <li class="glide__slide">
                                    <div class="centers_cards_indv_card">
                                        <p><?php echo get_sub_field('state', 'option') ?></p>
                                        <img src="<?php echo get_sub_field('image', 'option') ?>" alt="">
                                        <a href="<?php echo get_sub_field('link', 'option') ?>">
                                            <h4><?php echo get_sub_field('center_name', 'option') ?></h4>
                                        </a>
                                        <p><?php echo get_sub_field('center_subheadline', 'option') ?></p>
                                        <a href="<?php echo get_sub_field('link', 'option') ?>">Learn More</a>
                                    </div>
                                </li>
                        <?php
                            endwhile;
                        endif;
                        ?>
                    </ul>
                </div>
                <div class="glide__bullets" data-glide-el="controls[nav]">
                    <?php
                    $centersCardIncrement = -1;
                    if (have_rows('centers_cards_carousel', 'option')) :
                        while (have_rows('centers_cards_carousel', 'option')) : the_row();
                    ?>
                            <button class="glide__bullet" data-glide-dir="<?php $centersCardIncrement++ ?>"></button>

                    <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>