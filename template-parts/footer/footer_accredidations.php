<?php

/**
 * Template part for displaying the footer info
 *
 * @package sunshine_behavioral_health
 */

namespace WP_Rig\WP_Rig;

?>

<div>
    <section class="home_footer_accreditations_section">
        <div class="home_footer_accreditations_container">
            <div class="home_footer_accreditations_wrapper">
                <img src="<?php echo get_template_directory_uri() . '/images/sunshine_gold_badge.jpg' ?>" alt="" loading="lazy">
                <a title="Verify LegitScript Approval" class="legit_script_wrapper" href="https://legitscript.com/pharmacy/sunshinebehavioralhealth.com" rel="noopener noreferrer">
                    <img class="" src="https://static.legitscript.com/seals/3380109.png" alt="LegitScript approved" width="140" height="100" />
                </a>
                <img src="<?php echo get_template_directory_uri()  . '/images/austin_texas_badge_150.jpg' ?>" alt="" loading="lazy">
                <img src="<?php echo get_template_directory_uri()  . '/images/colorado_springs_badge_150.png' ?>" alt="" loading="lazy">
            </div>
            <div class="footer_copyright_wrapper">
                <p>© <?php echo date("Y"); ?> Sunshine Behavioral Health | All Rights Reserved.</p>
            </div>
        </div>
    </section>
</div><!-- .site-info -->