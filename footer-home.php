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
    <?php get_template_part('template-parts/footer/info-home_page'); ?>
    <?php get_template_part('template-parts/footer/footer_accreditations'); ?>
    <?php get_template_part('template-parts/footer/home_socials_bar'); ?>
    <?php get_template_part('template-parts/footer/footer_mobile_buttons'); ?>






    <!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->

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
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>