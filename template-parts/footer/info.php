<?php

/**
 * Template part for displaying the footer info
 *
 * @package sunshine_behavioral_health
 */

namespace WP_Rig\WP_Rig;

?>

<div class="footer_bottom_wrapper">
	<section class="standard_footer_section">
		<div class="standard_footer_container">
			<div class="standard_footer_contact_container">
				<h5>CONTACT INFORMATION</h5>
				<div class="standard_footer_contact_content">

					<div class="stanard_footer_address">
						<img loading="lazy" src="<?php echo get_template_directory_uri() . '/images/icons/address_white_icon.png' ?>" alt="">
						<div class="standard_footer_address_content">
							<p>30950 Rancho Viejo Road</p>
							<p>Suite 225</p>
							<p>San Juan Capistrano, CA 92675</p>
						</div>

					</div>

					<div class="stanard_footer_phone">
						<img loading="lazy" src="<?php echo get_template_directory_uri() . '/images/icons/phone_white_icon.png' ?>" alt="">
						<a id="footerPhone" class="invocaNumber footerPhone" href="tel:949-276-2886">949-276-2886</a>
					</div>

					<div class="stanard_footer_email">
						<img loading="lazy" src="<?php echo get_template_directory_uri() . '/images/icons/email_white_icon.png' ?>" alt="">
						<p>contact@sunshinebh.com</p>
					</div>
				</div>
			</div>
			<div class="footer_form_spacer"></div>

			<div class="standard_footer_form_container">
				<h5>Have an Intake Expert Reach out to you</h5>


				<div class="footer_nonhome_form_container">
					<?php
					$url = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];


					if (strpos($url, 'dev.') !== false) {
						echo do_shortcode('[gravityform id="3" title="false" description="false"]');
					} else {
						echo do_shortcode('[gravityform id="3" title="false" description="false"]');
					}
					?>
				</div>
				<div class="footer_form_spacer"></div>

			</div>

			<div class="standard_footer_badges_container">
				<div class="standard_footer_badge_wrapper">
					<?php echo get_field('badge_1', 'option') ?>
				</div>
				<div class="standard_footer_badge_wrapper">
					<img loading="lazy" src="<?php echo get_field('badge_2', 'option')['url'] ?>" alt="">
				</div>
				<div class="standard_footer_badge_wrapper">
					<img loading="lazy" src="<?php echo get_field('badge_3', 'option')['url'] ?>" alt="">

				</div>
				<div class="standard_footer_badge_wrapper">
					<img loading="lazy" src="<?php echo get_field('badge_4', 'option')['url'] ?>" alt="">
				</div>
			</div>
		</div>
		<div class="social_media_container">
			<a href="https://www.facebook.com/SunshineBehavi1">
				<img loading="lazy" src="<?php echo get_template_directory_uri() . '/images/icons/facebook.png' ?>" alt="">
			</a>
			<a href="https://twitter.com/SunshineBehavi1">
				<img loading="lazy" src="<?php echo get_template_directory_uri() . '/images/icons/twitter.png' ?>" alt="">
			</a><a href="https://www.instagram.com/sunshinebehav/">
				<img loading="lazy" src="<?php echo get_template_directory_uri() . '/images/icons/instagram.png' ?>" alt="">
			</a><a href="https://www.linkedin.com/company/sunshine-behavioral-health/">
				<img loading="lazy" src="<?php echo get_template_directory_uri() . '/images/icons/linkedin.png' ?>" alt="">
			</a>
		</div>
	</section>
	<div class="copyright_container">


		<div class="footer_copyright_wrapper">
			<div class="terms_and_privacy_container">
				<a href="<?php echo get_field('terms_of_service_link', 'option'); ?>">Terms of Use</a>
				<p>|</p>
				<a href="<?php echo get_field('privacy_policy_url', 'option'); ?>">Privacy Policy</a>
			</div>


			<p class="non_home_copyright">© <?php echo date("Y"); ?> Sunshine Behavioral Health | All Rights Reserved.</p>
		</div>
	</div>
</div><!-- .site-info -->