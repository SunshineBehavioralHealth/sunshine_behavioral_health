jQuery(document).ready(function ($) {
    function getCookie(name) {
        var re = new RegExp(name + "=([^;]+)");
        var value = re.exec(document.cookie);
        return (value != null) ? unescape(value[1]) : null;
    }
    // Google Analytics User ID
    let googleAnalyticsUserID = getCookie('_ga');
    let googleAnalyticsUserIdInput = $('.google_analytics_id_field  input');

    googleAnalyticsUserIdInput.val(googleAnalyticsUserID);
    // To work with Gravity forms add the class 'google_analytics_id_field' to the form input. See selector above.
});
