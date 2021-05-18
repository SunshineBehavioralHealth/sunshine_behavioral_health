<section class="all_centers_accordion_section">
    <div class="all_centers_accordion_container">
        <div class="all_centers_accordion_wrapper">
            <?php
            if (have_rows('all_centers_accordion_-_repeater', 'option')) :
                while (have_rows('all_centers_accordion_-_repeater', 'option')) : the_row();
                    $centerValue = get_field('center', 'option');

            ?>
                    <div class="all_centers_accordion_element  <?php if ($centerValue == "Chapters Capistrano") echo "chapters_styles";
                                                                elseif ($centerValue == "Monarch Shores") echo "monarch_styles";
                                                                elseif ($centerValue == "Mountain Springs") echo "mountain_styles";
                                                                elseif ($centerValue == "Willow Springs") echo "willow_styles"; ?>">
                        <img src="<?php echo get_sub_field('center_image', 'option')['url'] ?>" alt="">
                        <p><?php echo $centerValue; ?></p>
                        <div class="all_centers_accordion_row">
                            <div class="all_centers_accordion_headline_wrapper">
                                <h4>Location</h4>
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/plus.png' ?>" alt="">
                            </div>
                            <div class="all_centers_accordion_dropdown_wrapper">
                                <?php if ($centerValue == "Chapters Capistrano") : ?>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3329.724328088017!2d-117.63236908449115!3d33.43043075768753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dcf40f3530b4cd%3A0xe9dceac46fd44fd4!2s1525%20Buena%20Vista%2C%20San%20Clemente%2C%20CA%2092672!5e0!3m2!1sen!2sus!4v1619809011507!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                    <div class="center_page_location_address" style="background-color: var(--chapters_primary);">
                                        <a href="https://www.google.com/maps/place/1525+Buena+Vista,+San+Clemente,+CA+92672/@33.4304308,-117.6323691,17z/data=!3m1!4b1!4m5!3m4!1s0x80dcf40f3530b4cd:0xe9dceac46fd44fd4!8m2!3d33.4304263!4d-117.6301804"><span>Address: </span>1525 Buena Vista, San Clemente, CA 92672</a>
                                    </div>
                                <?php elseif ($centerValue == "Monarch Shores") : ?>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3327.0664989986176!2d-117.6580030844899!3d33.499646954094324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dcf1efd1bb11f7%3A0x521f70a0edb1c6b5!2s27123%20Calle%20Arroyo%20%232121%2C%20San%20Juan%20Capistrano%2C%20CA%2092675!5e0!3m2!1sen!2sus!4v1619809037054!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                                    <div class="center_page_location_address" style="background-color: var(--monarch_primary);">
                                        <a href="https://www.google.com/maps/place/27123+Calle+Arroyo+%232121,+San+Juan+Capistrano,+CA+92675/@33.499647,-117.6580031,17z/data=!3m1!4b1!4m5!3m4!1s0x80dcf1efd1bb11f7:0x521f70a0edb1c6b5!8m2!3d33.4996425!4d-117.6558144"><span>Address: </span>27123 Calle Arroyo #2121, San Juan Capistrano, CA 92675</a>
                                    </div>
                                <?php elseif ($centerValue == "Mountain Springs") : ?>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3096.4226461415133!2d-104.86456988437968!3d39.09684684276736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x876cade5e7b20a25%3A0x1e60b73ef75cbe49!2s1865%20Woodmoor%20Dr%2C%20Monument%2C%20CO%2080132!5e0!3m2!1sen!2sus!4v1619809190008!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                                    <div class="center_page_location_address" style="background-color: var(--mountain_primary);">
                                        <a href="https://www.google.com/maps/place/1865+Woodmoor+Dr,+Monument,+CO+80132/@39.0968468,-104.8645699,17z/data=!3m1!4b1!4m5!3m4!1s0x876cade5e7b20a25:0x1e60b73ef75cbe49!8m2!3d39.0968427!4d-104.8623812"><span>Address: </span>1865 Woodmor Monument, CO 80132</a>
                                    </div>
                                <?php elseif ($centerValue == "Willow Springs") : ?>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3449.9826650436426!2d-97.22942738454705!3d30.151911620442053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86448f838b5d2377%3A0x2c75933c9fdd6b23!2s1128%20TX-21%2C%20Bastrop%2C%20TX%2078602!5e0!3m2!1sen!2sus!4v1619809147810!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                                    <div class="center_page_location_address" style="background-color: var(--willow_primary);">
                                        <a href="https://www.google.com/maps/place/Willow+Springs+Recovery+-+Inpatient+Drug+and+Alcohol+Rehab,+Texas+Rehab,+Dual+Diagnosis+Treatment+Center/@30.151904,-97.227223,15z/data=!4m5!3m4!1s0x0:0x8ef094c9da9bd044!8m2!3d30.151904!4d-97.227223"><span>Address: </span>1128 TX-21, Bastrop, TX 78602</a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="all_centers_accordion_row">
                            <div class="all_centers_accordion_headline_wrapper">
                                <h4><?php echo get_sub_field('content_1_headline', 'option') ?></h4>
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/plus.png' ?>" alt="">
                            </div>
                            <div class="all_centers_accordion_dropdown_wrapper">

                            </div>
                        </div>

                        <div class="all_centers_accordion_row">
                            <div class="all_centers_accordion_headline_wrapper">
                                <h4><?php echo get_sub_field('content_2_headline', 'option') ?></h4>
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/plus.png' ?>" alt="">
                            </div>
                            <div class="all_centers_accordion_dropdown_wrapper">
                                <?php if (have_rows('content_2_list', 'option')) : ?>
                                    <?php while (have_rows('content_2_list', 'option')) : the_row(); ?>
                                        <span><img src="<?php echo get_template_directory_uri() . '/assets/images/icons/checkmark.png' ?>" alt="">
                                            <p><?php echo get_sub_field('item', 'option') ?></p>
                                        </span>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="all_centers_accordion_row">
                            <div class="all_centers_accordion_headline_wrapper">
                                <h4>Accreditations</h4>
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/plus.png' ?>" alt="">
                            </div>
                            <div class="all_centers_accordion_dropdown_wrapper">
                                <?php if ($centerValue == "Chapters Capistrano") : ?>

                                <?php elseif ($centerValue == "Monarch Shores") : ?>

                                <?php elseif ($centerValue == "Mountain Springs") : ?>
                                    <a href="https://www.legitscript.com/websites/mountainspringsrecovery.com/" title="Verify LegitScript Approval" target="_blank" rel="nofollow noopener">
                                        <img src="https://static.legitscript.com/seals/4466021.png" alt="LegitScript approved" loading="lazy">
                                    </a>
                                    <?php if (have_rows('all_centers_accordion_expandable_rows_repeater', 'option')) : ?>
                                        <?php while (have_rows('all_centers_accordion_expandable_rows_repeater', 'option')) : the_row(); ?>
                                            <img src="<?php echo get_sub_field('center_badge', 'option') ?>" alt="">
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                <?php elseif ($centerValue == "Willow Springs") : ?>

                                <?php endif; ?>

                                <?php if (have_rows('accreditation_badges', 'option')) : ?>
                                    <?php while (have_rows('accreditation_badges', 'option')) : the_row(); ?>
                                        <img src="<?php echo get_sub_field('image', 'option') ?>" alt="">
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>


                        <?php if (have_rows('all_centers_accordion_expandable_rows_repeater', 'option')) : ?>
                            <?php while (have_rows('all_centers_accordion_expandable_rows_repeater', 'option')) : the_row(); ?>

                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
        </div>

<?php
                endwhile;
            endif;
?>
    </div>
    </div>
</section>