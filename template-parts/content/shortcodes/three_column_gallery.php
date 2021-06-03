<section class="three_column_gallery_shortcode_section">
    <div class="three_column_gallery_shortcode_container">
        <?php
        if (have_rows('three_column_gallery')) :
            while (have_rows('three_column_gallery')) : the_row();
        ?>
                <div class="three_column_gallery_image">
                    <a href="<?php echo get_sub_field('image_link') ?>"><img src="<?php echo get_sub_field('image')['url'] ?>" alt="<?php echo get_sub_field('alt_attribute') ?>" loading="lazy"></a>
                </div>

        <?php
            endwhile;
        endif;
        ?>
    </div>
</section>