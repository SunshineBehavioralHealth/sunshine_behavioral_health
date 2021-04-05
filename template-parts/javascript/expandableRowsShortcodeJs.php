<script>
    jQuery(document).ready(function($) {
        $('.expandable_row_element').click(function(event) {
            event.stopImmediatePropagation();
            $(this).find('img').toggleClass('dropdown_active');
            $(this).find('.expandable_row_content').toggleClass('hide');
        });


        $('.covid19_container').click(function() {
            $('.covid19_content').toggleClass('hide');
            $('.covid19_container img').toggleClass('dropdown_active');
        });

        $('.sources_section').click(function(event) {
            console.log("sources section clicked")
            event.stopImmediatePropagation();
            $('.sources_wrapper').toggleClass('hide');
            $('.sources_section img.sources_plus_icon').toggleClass('dropdown_active');
        });
    });
</script>