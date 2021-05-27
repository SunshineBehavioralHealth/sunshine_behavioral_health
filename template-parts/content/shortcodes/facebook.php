<section class="facebook_shortcode_section">
    <div class="facebook_shortcode_container">
        <h3><?php echo get_field('facebook_-_headline', 'option') ?></h3>
        <p><?php echo get_field('facebook_-_subheadline', 'option') ?></p>
        <div class="facebook_shortcode_repeater_container">
            <?php
            if (have_rows('facebook_-_repeater', 'option')) :
                while (have_rows('facebook_-_repeater', 'option')) : the_row();
            ?>
                    <div class="facebook_shortcode_repeater_element">
                        <a href="/<?php echo get_sub_field('link', 'option') ?>"><img src="<?php echo get_sub_field('icon', 'option')['url'] ?>" alt=""></a>
                    </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>