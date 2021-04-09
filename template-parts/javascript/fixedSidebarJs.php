<?php ?>

<script>
    jQuery(document).ready(function($) {
        $(function() {
            var fixedSidebar = $(".fixed_sidebar");
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();

                if (scroll >= 500) {
                    fixedSidebar.addClass("fixedSidebarPositionFixed");
                    console.log("added class")
                } else {
                    fixedSidebar.removeClass("fixedSidebarPositionFixed");
                    console.log("removed class")
                }
            });
        });
    });
</script>