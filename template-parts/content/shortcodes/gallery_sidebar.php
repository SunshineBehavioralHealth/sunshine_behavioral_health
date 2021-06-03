<section class="gallery_sidebar_section">
    <div class="gallery_sidebar_container">
        <div class="gallery_sidebar_image">
            <?php if (get_field('gallery_image')) : ?>
                <img src="<?php echo get_field('gallery_image')['url'] ?>" alt="">
            <?php else : ?>
                <img src="<?php echo get_template_directory_uri() . '/images/sidebar_gallery_default_image.jpg' ?>" alt="">
            <?php endif; ?>
        </div>
        <div class="gallery_sidebar_body">
            <h5>Look what Sunshine Behavioral Health Recovery has to Offer You</h5>
            <div class="gallery_sidebar_body_cta">
                <a href="<?php echo get_field('gallery_link')['url'] ?>">View Our Facility</a>
            </div>
        </div>
    </div>
</section>