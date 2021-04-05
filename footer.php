<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sunshine_behavioral_health
 */

namespace WP_Rig\WP_Rig;

?>

<footer id="colophon" class="site-footer">
    <?php
    if (!wp_is_mobile()) { ?>
        <div class="banner_top_image" style="background-image: url(
		<?php echo get_field('above_footer_image_desktop', 'option')['url']; ?>);">
        </div>
    <?php    }
    ?>



    <?php get_template_part('template-parts/footer/info'); ?>
    <?php get_template_part('template-parts/footer/footer_mobile_buttons'); ?>



    <!-- Invoca 4021290535 -->
    <script>
        (function(i, n, v, o, c, a) {
            i.InvocaTagId = o;
            var s = n.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = ('https:' === n.location.protocol ? 'https://' : 'http://') + v;
            var fs = n.getElementsByTagName('script')[0];
            fs.parentNode.insertBefore(s, fs);
        })(window, document, 'solutions.invocacdn.com/js/pnapi_integration-latest.min.js', '1282/4021290535');
    </script>


    <?php if (get_field('graph_tabset_1_table_headline')) : ?>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <?php endif; ?>
    <!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>