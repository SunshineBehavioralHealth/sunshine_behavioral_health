<section class="two_column_gallery_shortcode_section">
    <div class="two_column_gallery_shortcode_container">
        <?php
        if (have_rows('two_column_gallery')) :
            while (have_rows('two_column_gallery')) : the_row();
        ?>
                <div class="two_column_gallery_image">
                    <a href="<?php echo get_sub_field('image_link') ?>"><img src="<?php echo get_sub_field('image')['url'] ?>" alt="<?php echo get_sub_field('alt_attribute') ?>" loading="lazy"></a>
                </div>

        <?php
            endwhile;
        endif;
        ?>
    </div>
</section>