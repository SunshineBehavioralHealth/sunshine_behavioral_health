jQuery(document).ready(function ($) {
    $(function () {

        function setCookie(name, value, days) {
            var expires = "";
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                expires = "; expires=" + date.toUTCString();
            }
            document.cookie = name + "=" + (value || "") + expires + "; path=/";
        }

        $(".invocaNumber").click(function () {
            console.log("invoca button clicked")
            let invocaGTMCookie = $(this).id
            console.log("cookie created:", invocaGTMCookie)
            setCookie('shortcode_type', invocaGTMCookie, 7)
            console.log("invoca cookie created")
        });
    });
});
