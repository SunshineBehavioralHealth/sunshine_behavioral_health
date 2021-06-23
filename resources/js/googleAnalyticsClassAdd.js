
jQuery(document).ready(function ($) {
    // Adds GTM class to submit button on forms
    $('footer .gform_footer input[type=submit]').addClass('footerContactForm');
    $('footer .gform_footer input[type=submit]').attr('id', 'footerContactForm_TOAST1');

    $('.contact_us_container .gform_footer input[type=submit]').addClass('contactPageFormSubmit');
    $('.contact_us_container .gform_footer input[type=submit]').attr('id', 'contactPageFormSubmit_TOAST2');

    $('.contact_form_shortcode_section .gform_footer input[type=submit]').addClass('contactFormCta');
    $('.contact_form_shortcode_section .gform_footer input[type=submit]').attr('id', 'contactFormCta_TOAST3');

});


