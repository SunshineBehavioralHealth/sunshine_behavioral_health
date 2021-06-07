<section id="coverageTable" class="list_and_cta_section insurance_list_and_cta">
    <div class="list_and_cta_container">
        <div class="list_and_cta_top">
            <h5><?php echo get_field('insurance_list_and_cta_universal-headline', 'option') ?></h5>
        </div>
        <div class="list_and_cta_bottom">
            <div class="list_and_cta_list_wrapper">
                <?php
                if (have_rows('insurance_list_and_cta_universal-repeater', 'option')) :
                    while (have_rows('insurance_list_and_cta_universal-repeater', 'option')) : the_row();
                ?>
                        <div class="list_and_cta_list_element">
                            <div class="list_and_cta_list_element_wrapper">
                                <a id="<?php echo get_sub_field('google_analytics_class', 'option') ?>" class="<?php echo get_field('google_analytics_class', 'option') ?>" href="<?php echo get_sub_field('link') ?>">
                                    <img src="<?php echo get_template_directory_uri() . '/images/icons/navbar_icon_treatment.png' ?>" alt="" loading="lazy">
                                    <p><?php echo get_sub_field('insurance', 'option') ?></p>
                                </a>
                            </div>
                        </div>
                <?php
                    endwhile;
                endif;
                ?>

            </div>
            <div class="list_and_cta_bottom_container">
                <p>Don't see your Insurance Provider?</p>
                <div class="list_and_cta_bottom_cta_wrapper">
                    <a id="coverageTableInsurance" class="coverageTableInsurance" href="/insurance" onclick="dataLayer.push({'event': 'insurance_click', 'shortcode_type' : 'coverageTableInsurance'});">Verify Your Insurance</a>
                </div>
            </div>
        </div>
    </div>
</section>