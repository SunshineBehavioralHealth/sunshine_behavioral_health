<section class="image_left_cta_right_shortcode_section">
    <div class="image_left_cta_right_shortcode_container">
        <div class="image_left_cta_right_shortcode_left_wrapper hide_on_mobile">
            <img src="<?php echo get_field('image_left_cta_right_list_dynamic - image')['url'] ?>" alt="">
        </div>
        <div class="image_left_cta_right_shortcode_right_wrapper">
            <h5><?php echo get_field('image_left_cta_right_list_dynamic-headline') ?></h5>

            <ul>
                <?php
                if (have_rows('image_left_cta_right_list_dynamic-list_repeater')) :
                    while (have_rows('image_left_cta_right_list_dynamic-list_repeater')) : the_row();
                ?>
                        <li class=""><?php echo get_sub_field('item') ?></li>
                <?php
                    endwhile;
                endif;
                ?>
            </ul>
            <div class="image_left_cta_right_shortcode_right_cta_wrapper">
                <a href="<?php echo get_field('image_left_cta_right_list_dynamic-cta_link') ?>"><?php echo get_field('image_left_cta_right-cta_text') ?></a>
            </div>

        </div>
    </div>
</section>