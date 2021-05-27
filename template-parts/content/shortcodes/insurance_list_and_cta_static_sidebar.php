<section id="coverageTable" class="list_and_cta_section insurance_list_and_cta sidebar_shortcode coverageTable">
    <div class="list_and_cta_container">
        <div class="list_and_cta_top">
            <h5>Learn More About Your Insurance Coverage</h5>
        </div>
        <div class="list_and_cta_bottom">
            <div class="list_and_cta_list_wrapper">

                <div class="list_and_cta_list_element">
                    <div class="list_and_cta_list_element_wrapper">
                        <a href="/insurance/cigna/">
                            <img src="<?php echo get_template_directory_uri() . '/images/icons/navbar_icon_treatment.png' ?>" alt="">
                            <p>Cigna</p>
                        </a>
                    </div>
                </div>

                <div class="list_and_cta_list_element">
                    <div class="list_and_cta_list_element_wrapper">
                        <a href="/insurance/aetna/">
                            <img src="<?php echo get_template_directory_uri() . '/images/icons/navbar_icon_treatment.png' ?>" alt="">
                            <p>Aetna</p>
                        </a>
                    </div>
                </div>

                <div class="list_and_cta_list_element">
                    <div class="list_and_cta_list_element_wrapper">
                        <a href="/insurance/blue-cross-blue-shield/">
                            <img src="<?php echo get_template_directory_uri() . '/images/icons/navbar_icon_treatment.png' ?>" alt="">
                            <p>BCBS</p>
                        </a>
                    </div>
                </div>

                <div class="list_and_cta_list_element">
                    <div class="list_and_cta_list_element_wrapper">
                        <a href="/insurance/umr-insurance/">
                            <img src="<?php echo get_template_directory_uri() . '/images/icons/navbar_icon_treatment.png' ?>" alt="">
                            <p>UMR</p>
                        </a>
                    </div>
                </div>

                <div class="list_and_cta_list_element">
                    <div class="list_and_cta_list_element_wrapper">
                        <a href="/insurance/oxford-health-plans-health-insurance/">
                            <img src="<?php echo get_template_directory_uri() . '/images/icons/navbar_icon_treatment.png' ?>" alt="">
                            <p>Oxford Health</p>
                        </a>
                    </div>
                </div>

                <div class="list_and_cta_list_element">
                    <div class="list_and_cta_list_element_wrapper">
                        <a href="/insurance/beacon-health-rehab-coverage/">
                            <img src="<?php echo get_template_directory_uri() . '/images/icons/navbar_icon_treatment.png' ?>" alt="">
                            <p>Beacon</p>
                        </a>
                    </div>
                </div>

                <div class="list_and_cta_list_element">
                    <div class="list_and_cta_list_element_wrapper">
                        <a id="harvard_pilgrim" href="/insurance/harvard-pilgrim-rehab-coverage/">
                            <img src="<?php echo get_template_directory_uri() . '/images/icons/navbar_icon_treatment.png' ?>" alt="">
                            <p>Harvard Pilgrim</p>
                        </a>
                    </div>
                </div>

                <div class="list_and_cta_list_element">
                    <div class="list_and_cta_list_element_wrapper">
                        <a id="humana" href="/insurance/humana-health">
                            <img src="<?php echo get_template_directory_uri() . '/images/icons/navbar_icon_treatment.png' ?>" alt="">
                            <p>Humana</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="list_and_cta_bottom_container">
                <p>Don't see your Insurance Provider?</p>
                <div class="list_and_cta_bottom_cta_wrapper">
                    <a class="coverageTableInsurance" href="/insurance" onclick="dataLayer.push({'event': 'insurance_click', 'shortcode_type' : 'coverageTableInsurance'});">Verify Your Insurance</a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    jQuery(document).ready(function($) {
        $('.list_and_cta_list_element a').click(function(event) {
            var insuranceName = $(event.target).id();
            dataLayer.push({
                'event': 'coverage_table_click ',
                'coverage_type ': insuranceName
            });
        });
    });
</script>