
jQuery(document).ready(function (e) {
    $(function () {
        $(".invoca").click(function () {
            console.log("invoca button clicked")
            $.cookie("shortcode_type", $(this).id());
            console.log("invoca cookie created")

        });
    });
});