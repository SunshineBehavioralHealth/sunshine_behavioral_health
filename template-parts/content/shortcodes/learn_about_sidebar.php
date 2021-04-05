<section class="learnAbout_sidebar_section">
    <div class="learnAbout_sidebar_container">
        <h4>Learn About Our Center</h4>
        <div class="learnAbout_sidebar_links">
            <?php
            if (have_rows('learn_about')) :
                while (have_rows('learn_about')) : the_row();
            ?>
                    <a href="<?php echo get_sub_field('link')['url']; ?>"><?php echo get_sub_field('text'); ?></a>
            <?php
                endwhile;
            else : 
            ?>
                <a href="https://www.sunshinebehavioralhealth.com/mountain-spring-recovery-about-us/">About Us</a>
                <a href="https://www.sunshinebehavioralhealth.com/staff/">Our Staff</a>
                <a href="https://www.sunshinebehavioralhealth.com/schedule/">Program Schedule</a>
            <?php endif; ?>
        </div>
    </div>
</section>