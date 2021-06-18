<?php get_template_part('template-parts/javascript/expandableRowsShortcodeJs'); ?>
<?php get_template_part('template-parts/javascript/accordion_with_toc_JS'); ?>

<div class="accordion_with_toc_container">
    <section class="accordion_with_toc_toc_section">
        <h1>Accordion with TOC goes here</h1>
    </section>


    <?php
    if (have_rows('accordions_with_toc-repeater')) :
        while (have_rows('accordions_with_toc-repeater')) : the_row(); ?>
            <section class="expandable_rows_shortcode_section">
                <div class="expandable_rows_shortcode_container">
                    <?php
                    if (have_rows('accordions_with_toc-element_repeater')) :
                        while (have_rows('accordions_with_toc-element_repeater')) : the_row();
                    ?>
                            <div class="expandable_row_element">
                                <div class="expandable_row_element_headline_img_wrapper">
                                    <h2><?php echo get_sub_field('headline') ?></h2>
                                    <img src="<?php echo get_template_directory_uri() . '/images/icons/plus_icon_blue.png' ?>" alt="" loading="lazy">
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
            </section>
    <?php
        endwhile;
    endif;
    ?>
</div>