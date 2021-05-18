<?php get_template_part('template-parts/javascript/expandableRowsShortcodeJs'); ?>
<?php if (get_field('references')) : ?>
    <section class="sources_section">
        <h4>Sources</h4>
        <img class="sources_plus_icon" src="<?php echo get_template_directory_uri() . '/images/icons/plus_icon_blue.png' ?>" alt="">
        <div class="sources_wrapper hide">
            <?php echo get_field('references') ?>
        </div>
    </section>
<?php endif; ?>