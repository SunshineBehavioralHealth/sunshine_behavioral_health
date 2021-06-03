<script>
    jQuery(document).ready(function($) {
        // Inserts Nav Icons
        <?php

        $navIcon1 = get_template_directory_uri() . '/images/icons/navbar_icon_about.png';

        $navIcon2 = get_template_directory_uri() . '/images/icons/navbar_icon_heart.png';

        $navIcon3 = get_template_directory_uri() . '/images/icons/navbar_icon_addiction.png';

        $navIcon4 = get_template_directory_uri() . '/images/icons/navbar_icon_resources.png';

        $navIcon5 = get_template_directory_uri() . '/images/icons/navbar_icon_insurance.png';

        ?>


        function addNavIcons() {
            let navIcon1 = '<img class="nav_icon_1 " src="" width="35" height="35">';
            $(".top_level_nav_1").prepend(navIcon1);
            $(".nav_icon_1").attr("src", "<?php echo $navIcon1 ?>");

            let navIcon2 = '<img class="nav_icon_2 " src="" width="35" height="35">';
            $(".top_level_nav_2").prepend(navIcon2);
            $(".nav_icon_2").attr("src", "<?php echo $navIcon2 ?>");

            let navIcon3 = '<img class="nav_icon_3 " src="" width="35" height="35">';
            $(".top_level_nav_3").prepend(navIcon3);
            $(".nav_icon_3").attr("src", "<?php echo $navIcon3 ?>");

            let navIcon4 = '<img class="nav_icon_4 " src="" width="35" height="35">';
            $(".top_level_nav_4").prepend(navIcon4);
            $(".nav_icon_4").attr("src", "<?php echo $navIcon4 ?>");

            let navIcon5 = '<a href="<?php echo '/insurance' ?>"><img class="nav_icon_5 " src="" width="35" height="35"></a>';
            $(".top_level_nav_5").prepend(navIcon5);
            $(".nav_icon_5").attr("src", "<?php echo $navIcon5 ?>");
        }
        addNavIcons();

        // Checks p tags and if empty deletes
        $('aside p').each(function() {
            var $this = $(this);
            if ($this.html().replace(/\s|&nbsp;/g, '').length == 0)
                $this.remove();
        });
    });
</script>