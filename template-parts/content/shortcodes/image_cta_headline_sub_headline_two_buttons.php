<section class="image_cta_section shortcode_section">
    <div class="image_cta_container">
        <div class="image_cta_wrapper">
            <img loading="lazy" class="" src="<?php echo get_field('image_cta_desktop_image')['url'] ?>" alt="">
            <!-- <img loading="lazy" class="hide_on_desktop" src="<?php echo get_field('image_cta_headline_sub_headline_two_buttons_-_mobile_image')['url'] ?>" alt=""> -->

            <div class="image_cta_wrapper_body">
                <div class="image_cta_headlines">
                    <h4><?php echo get_field('image_cta_headline') ?></h4>
                    <p><?php echo get_field('image_cta_subheadline') ?></p>
                </div>
                <div class="image_cta_container_ctas">
                    <a href="tel:949-276-2886" class="invocaNumber image_cta_container_cta_1 imageCtaPhone" onclick="dataLayer.push({'event': 'phone_click', 'shortcode_type' : 'imageCtaPhone'});">949-276-2886</a>

                    <a class="image_cta_container_cta_2 imageCtaInsurance" onclick="dataLayer.push({'event': 'insurance_click', 'shortcode_type' : 'imageCtaInsurance'});" href="https://www.sunshinebehavioralhealth.com/insurance/">Verify Insurance</a>
                </div>
            </div>
        </div>
    </div>
</section>