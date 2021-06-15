<section class="treatment_centers_section">
    <div class="treatment_centers_container row ">
        <?php if (get_field('treatment_centers_headline')) : ?>
            <h2 class=""><?php echo get_field('treatment_centers_headline') ?></h2>
        <?php else : ?>
            <h2>OUR TREATMENT CENTERS</h2>
        <?php endif; ?>
        <div class="treatment_center_container">
            <?php
            if (get_field('treatment_centers')) :
                if (have_rows('treatment_centers')) :
                    while (have_rows('treatment_centers')) : the_row();
            ?>
                        <div class="treatment_center_card_container">
                            <a href="<?php echo get_sub_field('link') ?>">
                                <div class="treatment_center_image_container"><img loading="lazy" class="" src="<?php echo get_sub_field('image')['url'] ?>"></div>
                            </a>

                            <div class="treatment_center_card_content_wrapper">
                                <a href="<?php echo get_sub_field('link') ?>">
                                    <h4 class="treatment_center_name"><?php echo get_sub_field('center_name') ?></h4>
                                </a>
                                <h5><?php echo get_sub_field('center_subtext') ?></h5>
                                <div><?php echo get_sub_field('content') ?></div>

                                <a class="centers_cards_cta" href="<?php echo get_sub_field('link') ?>">Learn More</a>
                            </div>
                        </div>
                        <div class="twenty_px_margin_divider hide_on_desktop"></div>
                <?php
                    endwhile;
                endif;
            else :
                ?>


                <div class=" treatment_center_card_container">
                    <a href="/our-rehab-centers/monarch-shores/">
                        <div class="treatment_center_image_container"><img loading="lazy" class="" src="<?php echo get_template_directory_uri() . '/images/monarch-center.jpg' ?>"></div>
                    </a>

                    <div class="treatment_center_card_content_wrapper">
                        <a href="/our-rehab-centers/monarch-shores/">
                            <h4 class="treatment_center_name">Monarch Shores</h4>
                        </a>
                        <h5>Top Care, Top Comfort</h5>
                        <p>Monarch Shores offers a fully dynamic treatment experience, with incredible views of the <a href="https://sunshinebehavioralhealth.com/california-rehab-centers/">California coastline</a> and unparalleled comfort all for minimal expense.</p>
                        <div class="treatment_center_card_learn_more">
                            <a href="/our-rehab-centers/monarch-shores/">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="twenty_px_margin_divider hide_on_desktop"></div>


                <div class=" treatment_center_card_container">
                    <a href="/our-rehab-centers/chapters-capistrano/">
                        <div class="treatment_center_image_container"><img class="" src="<?php echo get_template_directory_uri() . '/images/chapters-center.jpg' ?>" loading="lazy"></div>
                    </a>
                    <div class="treatment_center_card_content_wrapper">
                        <a href="/our-rehab-centers/chapters-capistrano/">
                            <h4 class="treatment_center_name">Chapters Capistrano</h4>
                        </a>
                        <h5>Luxury Treatment</h5>
                        <p>Chapters Capistrano offers the most luxurious rehab experience available, all while maintaining the most premier levels of care in the world of addiction treatment.</p>
                        <div class="treatment_center_card_learn_more">
                            <a href="/our-rehab-centers/chapters-capistrano/">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="twenty_px_margin_divider hide_on_desktop"></div>


                <div class=" treatment_center_card_container">
                    <a href="/our-rehab-centers/willow-springs-recovery/">
                        <div class="treatment_center_image_container"><img class="" src="<?php echo get_template_directory_uri() . '/images/willows-center.jpg' ?>" loading="lazy"></div>
                    </a>
                    <div class="treatment_center_card_content_wrapper">
                        <a href="/our-rehab-centers/willow-springs-recovery">
                            <h4 class="treatment_center_name">Willow Springs</h4>
                        </a>
                        <h5>Seclusion and Sobriety</h5>
                        <p>Willow Springs is located on over 30 acres of gorgeous <a href="https://sunshinebehavioralhealth.com/texas-rehab-centers/">Texas countryside</a>, with all the amenities you’d expect from a top rehab center with an affordable cost.</p>
                        <div class="treatment_center_card_learn_more">
                            <a href="/our-rehab-centers/willow-springs-recovery">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="twenty_px_margin_divider hide_on_desktop"></div>


                <div class="treatment_center_card_container">
                    <a href="/our-rehab-centers/mountain-springs-recovery/">
                        <div class="treatment_center_image_container"><img class="" src="<?php echo get_template_directory_uri() . '/images/mountain-center.jpg' ?>" loading="lazy"></div>
                    </a>

                    <div class="treatment_center_card_content_wrapper">
                        <a href="/our-rehab-centers/mountain-springs-recovery/">
                            <h4 class="treatment_center_name">Mountain Springs</h4>
                        </a>
                        <h5>Relaxing Environment</h5>
                        <p>Mountain Springs Recovery can be instrumental in your quest for recovery. If you feel you have lost yourself to addiction, we will help you find yourself again.</p>
                        <div class="treatment_center_card_learn_more">
                            <a href="/our-rehab-centers/mountain-springs-recovery/">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="twenty_px_margin_divider hide_on_desktop"></div>
            <?php endif; ?>

        </div>
    </div>
</section>