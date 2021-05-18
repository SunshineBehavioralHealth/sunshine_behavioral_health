<?php

/**
 * Template part for displaying the footer info
 *
 * @package sunshine_behavioral_health
 */

namespace WP_Rig\WP_Rig;

?>

<div>
	<section class="home_footer_section">
		<div class="home_footer_container">
			<div class="footer_contact_container">
				<div class="footer_contact_image">
					<img src="<?php echo get_template_directory_uri() . '/images/sunshine_logo.png' ?>" alt="" loading="lazy">
				</div>
				<div class="footer_contact_information">
					<h4>CONTACT INFORMATION</h4>
					<ul>
						<li><img src="<?php echo get_template_directory_uri() . '/images/icons/Address.png' ?>" alt="" loading="lazy">
							<div class="footer_contact_information_address_container">
								<p>30950 Rancho Viejo Road</p>
								<p>Suite 225</p>
								<p>San Juan Capistrano, CA 92675</p>
							</div>

						</li>
						<li>
							<img src="<?php echo get_template_directory_uri() . '/images/icons/phone.png' ?>" alt="" loading="lazy">
							<a class="invocaNumber" href="tel:949-276-2886">949-276-2886</a>
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri() . '/images/icons/email.png' ?>" alt="" loading="lazy">
							<p>contact@sunshinebh.com</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="footer_form_spacer"></div>
			<div class="footer_home_form">

				<div class="footer_home_form_container">
					<h5>Have an Intake Expert Reach out to you</h5>
					<?php echo do_shortcode('[gravityform id="4" title="false" description="false"]')
					?>
				</div>
			</div>

			<div class="footer_form_spacer"></div>

			<div class="footer_home_center_link_container">
				<div class="footer_home_center_link_wrapper">
					<h5>OUR CENTERS</h5>
					<ul>
						<li><a href="https://monarchshores.com/">Monarch Shores</a></li>
						<li><a href="https://chapterscapistrano.com/">Chapters Capistrano</a></li>
						<li><a href="https://mountainspringsrecovery.com/">Mountain Springs Recovery</a></li>
						<li><a href="https://willowspringsrecovery.com/">Willow Springs Recovery</a></li>
					</ul>
					<div class="footer_home_terms_and_privacy">
						<a href="<?php echo get_field('terms_of_service_link', 'option'); ?>">Terms of Use</a>
						<a href="<?php echo get_field('privacy_policy_url', 'option'); ?>">Privacy Policy</a>
					</div>
				</div>

			</div>


		</div>
	</section>
</div><!-- .site-info -->