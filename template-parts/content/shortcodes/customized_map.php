<?php
$centerSelection = get_field('customized_map_center_options');
?>

<section class="customized_map_section">
    <div class="customized_map_container">
        <div class="customized_map_wrapper">
            <?php if ($centerSelection == "Chapters Capistrano") :
                $checkmarkIcon = '/assets/images/icons/checkmark_icon_chapters.png';
            ?>
                <img class="customized_map_banner" src="<?php echo get_template_directory_uri() . '/assets/images/customized_map_banner_monarch.png' ?>" alt="">
                <div class="customized_map_iframe_wrapper hide_on_desktop hide_on_tablet">
                    <?php echo get_field('customized_map_iframe') ?>
                </div>
                <div class="customized_map_address_container" style="background-color: 
                <?php if ($centerSelection == "Chapters Capistrano") : echo "var(--chapters_primary)";
                elseif ($centerSelection == "Lincoln Recovery") : echo "var(--lincoln_primary)";
                elseif ($centerSelection == "Monarch Shores") : echo "var(--monarch_primary)";
                elseif ($centerSelection == "Mountain Springs Recovery") : echo "var(--mountain_primary)";
                elseif ($centerSelection == "Willow Springs Recovery") : echo "var(--willow_primary)";
                endif; ?>;">
                    <?php if (get_field('customized_map_legal_notice')) : ?>
                        <?php if ($centerSelection == "Chapters Capistrano") : ?>
                            <p>Facility Location: <span>1525 Buena Vista, San Clemente, CA 92672</span></p>
                        <?php elseif ($centerSelection == "Lincoln Recovery") : ?>
                            <p>Facility Location: <span>Raymond, IL</span></p>
                        <?php elseif ($centerSelection == "Monarch Shores") : ?>
                            <p>Facility Location: <span>27123 Calle Arroyo #2121, San Juan Capistrano, CA 92675</span></p>
                        <?php elseif ($centerSelection == "Mountain Springs Recovery") : ?>
                            <p>Facility Location: <span>1865 Woodmor Monument, CO 80132</span></p>
                        <?php elseif ($centerSelection == "Wilow Springs Recovery") : ?>
                            <p>Facility Location: <span>1128 TX-21, Bastrop, TX 78602</span></p>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
                <div class="customized_map_body_wrapper">
                    <img class="customized_map_main_image" src="<?php echo get_template_directory_uri() . '/assets/images/customized_map_main_monarch.png' ?>" alt="">
                    <a class="invocaNumber customzied_map_cta customziedMapPhoneCta" onclick="dataLayer.push({'event': 'phone_click', 'shortcode_type' : 'customziedMapPhoneCta'});" href="tel:949-276-2886" style="background-color: 
                    <?php if ($centerSelection == "Chapters Capistrano") : echo "var(--chapters_primary)";
                    elseif ($centerSelection == "Lincoln Recovery") : echo "var(--lincoln_primary)";
                    elseif ($centerSelection == "Monarch Shores") : echo "var(--monarch_primary)";
                    elseif ($centerSelection == "Mountain Springs Recovery") : echo "var(--mountain_primary)";
                    elseif ($centerSelection == "Willow Springs Recovery") : echo "var(--willow_primary)";
                    endif; ?>;">Talk to Our Intake Coordinators</a>
                </div>


            <?php elseif ($centerSelection == "Lincoln Recovery") :

                $checkmarkIcon = '/assets/images/icons/checkmark_icon_lincoln.png'; ?>

            <?php elseif ($centerSelection == "Monarch Shores") :
                $checkmarkIcon = '/assets/images/icons/checkmark_icon_monarch.png'; ?>

            <?php elseif ($centerSelection == "Mountain Springs Recovery") :
                $checkmarkIcon = '/assets/images/icons/checkmark_icon_mountain.png'; ?>

            <?php elseif ($centerSelection == "Willow Springs Recovery") :
                $checkmarkIcon = '/assets/images/icons/checkmark_icon_willow.png'; ?>

            <?php endif; ?>
        </div>
        <div class="customized_map_right_wrapper hide_on_mobile show_on_tablet">
            <?php echo get_field('customized_map_iframe') ?>
        </div>
    </div>
</section>