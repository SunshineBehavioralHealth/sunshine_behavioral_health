jQuery(document).ready(function ($) {
    function getCookie(name) {
        var re = new RegExp(name + "=([^;]+)");
        var value = re.exec(document.cookie);
        return (value != null) ? unescape(value[1]) : null;
    }

    let googleAnalyticsUserID = getCookie('_ga');
    console.log('User ID:', googleAnalyticsUserID);

    let googleAnalyticsUserIdInput = $('.google_analytics_id_field  input');

    console.log("value of field before changing the value:", googleAnalyticsUserIdInput.val());

    googleAnalyticsUserIdInput.val(googleAnalyticsUserID);

    console.log('value of field after changing the value:', googleAnalyticsUserIdInput.val());
});
