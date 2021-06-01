jQuery(document).ready(function ($) {
    function getCookie(name) {
        var re = new RegExp(name + "=([^;]+)");
        var value = re.exec(document.cookie);
        return (value != null) ? unescape(value[1]) : null;
    }

    let googleAnalyticsUserID = getCookie('_ga');
    console.log('User ID:', googleAnalyticsUserID);

    $('#googleAnalyticsUserID').value = googleAnalyticsUserID;
});
