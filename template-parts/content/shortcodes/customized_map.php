<?php
$centerSelection = get_field('customized_map_center_options');
?>

<section class="customized_map_section">
    <div class="customized_map_container">
        <div class="customized_map_wrapper">
            <?php if ($centerSelection == "Chapters Capistrano") :
                $checkmarkIcon = '/assets/images/icons/checkmark_icon_chapters.png';
            ?>
                <img src="<?php echo get_template_directory_uri() . '/assets/images/customized_map_banner_monarch.png' ?>" alt="">
                <div class="customized_map_iframe_wrapper">
                    <?php echo get_field('customized_map_iframe') ?>
                </div>
                <div class="customized_map_address_container">
                    <?php if (get_field('customized_map_legal_notice')) : ?>
                        <?php if ($centerSelection == "Chapters Capistrano") : ?>
                            <p>Facility Location: 1525 Buena Vista, San Clemente, CA 92672</p>
                        <?php elseif ($centerSelection == "Lincoln Recovery") : ?>
                            <p>Facility Location: </p>
                        <?php elseif ($centerSelection == "Monarch Shores") : ?>
                            <p>Facility Location: 27123 Calle Arroyo #2121, San Juan Capistrano, CA 92675</p>
                        <?php elseif ($centerSelection == "Mountain Springs Recovery") : ?>
                            <p>Facility Location: 1865 Woodmor Monument, CO 80132</p>
                        <?php elseif ($centerSelection == "Wilow Springs Recovery") : ?>
                            <p>Facility Location: 1128 TX-21, Bastrop, TX 78602</p>
                        <?php endif; ?>
                    <?php endif; ?>
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
    </div>
</section>