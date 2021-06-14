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
});
