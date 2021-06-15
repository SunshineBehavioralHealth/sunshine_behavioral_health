<section class="alumni_calendar_section">
    <div class="alumni_calendar_container">
        <div class="alumnmi_calendar_image_and_content">
            <img src="<?php echo get_field('alumni_calendar-hero_image', 'option')['url'] ?>" alt="" loading="lazy">
            <div class="alumni_calendar_content">
                <?php echo get_field('alumni_calendar-content', 'option') ?>
            </div>
        </div>
        <div class="alumni_calendar_form_and_calendar">
            <div class="alumni_calendar_form_wrapper">
                <?php $alumniCalendarFormId = '[gravityform id="' . get_field('alumni_calendar-gravity_form_id', 'option') . '" title="false" description="false"]';
                echo do_shortcode($alumniCalendarFormId); ?>
            </div>
            <div class="alumni_calendar_calendar_wrapper">
                <?php echo get_field('alumni_calendar-calendar_iframe', 'option') ?>
            </div>
        </div>
    </div>
</section>