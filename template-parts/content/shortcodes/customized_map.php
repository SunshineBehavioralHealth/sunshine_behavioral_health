<?php
$centerSelection = get_field('customized_map_center_options');
?>

<section class="customized_map_section">
    <div class="customized_map_container 
    <?php if ($centerSelection == "Chapters Capistrano") : echo "chaptersPrimaryBorder";
    elseif ($centerSelection == "Lincoln Recovery") : echo "lincolnPrimaryBorder";
    elseif ($centerSelection == "Monarch Shores") : echo "monarchPrimaryBorder";
    elseif ($centerSelection == "Mountain Springs Recovery") : echo "mountainPrimaryBorder";
    elseif ($centerSelection == "Willow Springs Recovery") : echo "willowPrimaryBorder";
    endif; ?>">
        <div class="customized_map_left_wrapper">
            <?php if ($centerSelection == "Chapters Capistrano") :
                $checkmarkIcon = '/assets/images/icons/checkmark_icon_chapters.png';
            ?>
                <img src="<?php echo get_template_directory_uri() . '/assets/images/chapters_map.jpg' ?>" alt="">
                <ul>
                    <li><img src="<?php echo get_template_directory_uri() . $checkmarkIcon ?>" alt="">
                        <p>24/7 access to a doctor</p>
                    </li>
                    <li><img src="<?php echo get_template_directory_uri() . $checkmarkIcon ?>" alt="">
                        <p>Cell phone and laptop friendly</p>
                    </li>
                    <li><img src="<?php echo get_template_directory_uri() . $checkmarkIcon ?>" alt="">
                        <p>Smoke/vape friendly</p>
                    </li>
                    <li><img src="<?php echo get_template_directory_uri() . $checkmarkIcon ?>" alt="">
                        <p>Six different houses</p>
                    </li>
                    <li><img src="<?php echo get_template_directory_uri() . $checkmarkIcon ?>" alt="">
                        <p>Upscale, luxurious location</p>
                    </li>
                    <li><img src="<?php echo get_template_directory_uri() . $checkmarkIcon ?>" alt="">
                        <p>Breathtaking seaside views</p>
                    </li>
                </ul>
                <div class="customized_map_cta_wrapper">
                    <p></p>
                    <a class="invocaNumber customzied_map_cta customziedMapPhoneCta" onclick="dataLayer.push({'event': 'phone_click', 'shortcode_type' : 'customziedMapPhoneCta'});" href="tel:949-276-2886">Talk to Our Intake Coordinators</a>
                </div>
            <?php elseif ($centerSelection == "Lincoln Recovery") :
                $checkmarkIcon = '/assets/images/icons/checkmark_icon_lincoln.png'; ?>
                <img src="<?php echo get_template_directory_uri() . '/assets/images/lincoln_map.jpg' ?>" alt="">
                <ul>
                    <li><img src="<?php echo get_template_directory_uri() . $checkmarkIcon ?>" alt="">
                        <p>Cell phone and laptop friendly</p>
                    </li>
                    <li><img src="<?php echo get_template_directory_uri() . $checkmarkIcon ?>" alt="">
                        <p>Full-service detox and treatment</p>
                    </li>
                    <li><img src="<?php echo get_template_directory_uri() . $checkmarkIcon ?>" alt="">
                        <p>Relaxing environment</p>
                    </li>
                    <li><img src="<?php echo get_template_directory_uri() . $checkmarkIcon ?>" alt="">
                        <p>Counselors and doctors on staff</p>
                    </li>
                    <li><img src="<?php echo get_template_directory_uri() . $checkmarkIcon ?>" alt="">
                        <p>Private Rooms Available</p>
                    </li>
                    <li><img src="<?php echo get_template_directory_uri() . $checkmarkIcon ?>" alt="">
                        <p>Non 12-step treatment</p>
                    </li>
                </ul>
                <div class="customized_map_cta_wrapper">
                    <p></p>
                    <a class="invocaNumber customzied_map_cta customziedMapPhoneCta" href="tel:949-276-2886">Talk to Our Intake Coordinators</a>
                </div>
            <?php elseif ($centerSelection == "Monarch Shores") :
                $checkmarkIcon = '/assets/images/icons/checkmark_icon_monarch.png'; ?>
                <img src="<?php echo get_template_directory_uri() . '/assets/images/monarch_map.jpg' ?>" alt="">
                <ul>
                    <li><img src="<?php echo get_template_directory_uri() . $checkmarkIcon ?>" alt="">
                        <p>Upscale, luxurious location</p>
                    </li>
                    <li><img src="<?php echo get_template_directory_uri() . $checkmarkIcon ?>" alt="">
                        <p>4.5:1 client-to-therapist ratio</p>
                    </li>
                    <li><img src="<?php echo get_template_directory_uri() . $checkmarkIcon ?>" alt="">
                        <p>Cell phone and laptop friendly</p>
                    </li>
                    <li><img src="<?php echo get_template_directory_uri() . $checkmarkIcon ?>" alt="">
                        <p>Off-site outpatient treatment</p>
                    </li>
                    <li><img src="<?php echo get_template_directory_uri() . $checkmarkIcon ?>" alt="">
                        <p>Full-service detox</p>
                    </li>
                    <li><img src="<?php echo get_template_directory_uri() . $checkmarkIcon ?>" alt="">
                        <p>Regular outings</p>
                    </li>
                </ul>
                <div class="customized_map_cta_wrapper">
                    <p></p>
                    <a class="invocaNumber customzied_map_cta customziedMapPhoneCta" href="tel:949-276-2886">Talk to Our Intake Coordinators</a>
                </div>
            <?php elseif ($centerSelection == "Mountain Springs Recovery") :
                $checkmarkIcon = '/assets/images/icons/checkmark_icon_mountain.png'; ?>
                <img src="<?php echo get_template_directory_uri() . '/assets/images/mountain_map.jpg' ?>" alt="">
                <ul>
                    <li><img src="<?php echo get_template_directory_uri() . $checkmarkIcon ?>" alt="">
                        <p>Cell phone and laptop friendly</p>
                    </li>
                    <li><img src="<?php echo get_template_directory_uri() . $checkmarkIcon ?>" alt="">
                        <p>Full-service detox and treatment</p>
                    </li>
                    <li><img src="<?php echo get_template_directory_uri() . $checkmarkIcon ?>" alt="">
                        <p>Relaxing environment</p>
                    </li>
                    <li><img src="<?php echo get_template_directory_uri() . $checkmarkIcon ?>" alt="">
                        <p>Mountainside views</p>
                    </li>
                    <li><img src="<?php echo get_template_directory_uri() . $checkmarkIcon ?>" alt="">
                        <p>Joint Commission accreditation</p>
                    </li>
                    <li><img src="<?php echo get_template_directory_uri() . $checkmarkIcon ?>" alt="">
                        <p>Non 12-step treatment</p>
                    </li>
                </ul>
                <div class="customized_map_cta_wrapper">
                    <p></p>
                    <a class="invocaNumber customzied_map_cta customziedMapPhoneCta" href="tel:949-276-2886">Talk to Our Intake Coordinators</a>
                </div>
            <?php elseif ($centerSelection == "Willow Springs Recovery") :
                $checkmarkIcon = '/assets/images/icons/checkmark_icon_willow.png'; ?>
                <img src="<?php echo get_template_directory_uri() . '/assets/images/willow_map.jpg' ?>" alt="">
                <ul>
                    <li><img src="<?php echo get_template_directory_uri() . $checkmarkIcon ?>" alt="">
                        <p>24/7 nursing assistance</p>
                    </li>
                    <li><img src="<?php echo get_template_directory_uri() . $checkmarkIcon ?>" alt="">
                        <p>Volleyball courts and a pool</p>
                    </li>
                    <li><img src="<?php echo get_template_directory_uri() . $checkmarkIcon ?>" alt="">
                        <p>All clinical services on-site</p>
                    </li>
                    <li><img src="<?php echo get_template_directory_uri() . $checkmarkIcon ?>" alt="">
                        <p>Relapse prevention</p>
                    </li>
                    <li><img src="<?php echo get_template_directory_uri() . $checkmarkIcon ?>" alt="">
                        <p>Electronic-friendly</p>
                    </li>
                    <li><img src="<?php echo get_template_directory_uri() . $checkmarkIcon ?>" alt="">
                        <p>On-site gym</p>
                    </li>
                </ul>
                <div class="customized_map_cta_wrapper">
                    <p></p>
                    <a class="invocaNumber customzied_map_cta customziedMapPhoneCta" href="tel:949-276-2886">Talk to Our Intake Coordinators</a>
                </div>
            <?php endif; ?>
        </div>
        <div class="customized_map_right_wrapper">
            <?php echo get_field('customized_map_iframe') ?>
            <?php if (get_field('customized_map_legal_notice')) : ?>
                <?php if ($centerSelection == "Chapters Capistrano") : ?>
                    <p>Our closest facility is in California</p>
                <?php elseif ($centerSelection == "Lincoln Recovery") : ?>
                    <p>Our closest facility is in Illinois</p>
                <?php elseif ($centerSelection == "Monarch Shores") : ?>
                    <p>Our closest facility is in California</p>
                <?php elseif ($centerSelection == "Mountain Springs Recovery") : ?>
                    <p>Our closest facility is in Colorado</p>
                <?php elseif ($centerSelection == "Wilow Springs Recovery") : ?>
                    <p>Our closest facility is in Texas</p>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
</section>