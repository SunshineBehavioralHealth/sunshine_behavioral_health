<section class="orange_outline_boxes_shortcode_section">
    <div class="orange_outline_boxes_shortcode_container">
        <h3><?php echo get_field('orange_outline_boxes_-_headline') ?></h3>
        <div class="orange_outline_boxes_shortcode_repeater_container">
            <?php
            if (have_rows('orange_outline_boxes_-_repeater')) :
                while (have_rows('orange_outline_boxes_-_repeater')) : the_row();
            ?>
                    <a href="/<?php echo get_sub_field('link') ?>">
                        <h4><?php echo get_sub_field('text') ?></h4>
                    </a>
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>