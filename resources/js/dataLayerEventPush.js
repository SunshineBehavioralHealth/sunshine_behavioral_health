jQuery(document).ready(function ($) {
    // Insurance list universal
    $('.list_and_cta_list_element a').click(function (event) {
        var insuranceName = $(this).attr('id');
        dataLayer.push({
            'event': 'coverage_table_click',
            'coverage_type': insuranceName
        });
    });

    // Facebook
    $('.facebook_shortcode_repeater_element a').click(function (event) {
        var facebookGroup = $(this).attr('id');
        dataLayer.push({
            'event': 'facebook_alum_click',
            'alumni_group': facebookGroup
        });
    });

    // FAQ
    $('.faq_sidebar_element a').click(function (event) {
        var faqString = $(event.target).text();
        dataLayer.push({
            'event': 'faq_sidebar_click',
            'question_asked': faqString
        });
    });

    // State Table
    $('.state_table_element a').click(function (event) {
        var stateName = $(event.target).text();
        dataLayer.push({
            'event': 'state_table_click',
            'state_clicked': stateName
        });
    });

    // Learn Centers Sidebar
    $('.learn_centers_center_container a').click(function (event) {
        let rehabCenterURL = $(this).attr("href");
        let rehabCenterValue;

        if (rehabCenterURL.indexOf("chapters") > -1) {
            rehabCenterValue = "Chapters Capistrano"
        } else if (rehabCenterURL.indexOf("lincoln") > -1) {
            rehabCenterValue = "Lincoln Recovery"
        } else if (rehabCenterURL.indexOf("monarch") > -1) {
            rehabCenterValue = "Monarch Shores"
        } else if (rehabCenterURL.indexOf("mountain") > -1) {
            rehabCenterValue = "Mountain Springs Recovery"
        } else if (rehabCenterURL.indexOf("willow") > -1) {
            rehabCenterValue = "Willow Springs Recovery"
        }

        dataLayer.push({
            'event': 'rehab_center_table',
            'rehab_center': rehabCenterValue
        });
    });

    // Treatment Options
    $('.treatmentOptions a p').click(function (event) {
        let treatmentOptionsValue = $(this).text();

        console.log("treatment options text clicked:", treatmentOptionsValue)
        dataLayer.push({
            'event': 'your_treatment_options_click',
            'treatment_option': treatmentOptionsValue
        });
    });
});
