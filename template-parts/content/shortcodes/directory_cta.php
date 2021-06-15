<section class="image_left_cta_right_shortcode_section directory_cta">
    <div class="image_left_cta_right_shortcode_container">
        <div class="image_left_cta_right_shortcode_left_wrapper hide_on_mobile">
            <img loading="lazy" src="<?php echo get_field('directory_cta-image', 'option')['url'] ?>" alt="">
        </div>
        <div class="image_left_cta_right_shortcode_right_wrapper">
            <h5><?php echo get_field('directory_cta-headline', 'option') ?></h5>
            <p><?php echo get_field('directory_cta-subheadline', 'option') ?></p>
            <ul>
                <?php
                if (have_rows('directory_cta-list_repeater', 'option')) :
                    while (have_rows('directory_cta-list_repeater', 'option')) : the_row();
                ?>
                        <li class=""><?php echo get_sub_field('item', 'option') ?></li>
                <?php
                    endwhile;
                endif;
                ?>
            </ul>
            <div class="image_left_cta_right_shortcode_right_cta_wrapper">
                <a href="<?php echo get_field('directory_cta-cta_link', 'option') ?>"><?php echo get_field('directory_cta-cta_text', 'option') ?></a>
            </div>

        </div>
    </div>
</section>