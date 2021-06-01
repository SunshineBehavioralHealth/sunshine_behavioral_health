<?php

get_template_part('template-parts/javascript/authorMedicalReviewJs');


$medicalReviewUser = get_field("medical_review_user");
$AuthorUser = get_field("editor_user");


$AuthorMetaData = get_user_meta($AuthorUser['ID']);
$medicalReviewerMetaData = get_user_meta($medicalReviewUser['ID']);


$authorAvatar = get_field('profile_thumbnail', 'user_' . $AuthorUser['ID']);
$medicalReviewAvatar = get_field('profile_thumbnail', 'user_' . $medicalReviewUser['ID']);

$medicalReviewMetaBio =  $medicalReviewerMetaData['description'][0];
?>


<?php if (get_field("editor_user")) : ?>
    <div class="medical_review_spacer"></div>

    <div class="editor_container <?php if (!get_field("medical_review_user")) echo "editor_container_no_medical_user"; ?>">
        <div class="editor_wrapper">
            <div id="editor_avatar_reference" class="">
                <img src="<?php echo $authorAvatar['url'] ?>" alt="" loading="lazy">
            </div>
            <div class="editor_meta_wrapper">
                <p class="editor_last_date"><span class="editor_last_date_span">Last Edited: </span><span class="editor_last_edit_date"><?php echo get_field('last_edited_date'); ?></span></p>
                <p class="editor_meta_name">
                    <span class="author_name_before_span">Author: </span>
                    <span class="author_name_span hide_on_mobile"><?php echo $AuthorUser['display_name'] ?></span>
                    <a href="/contributors#<?php echo $AuthorMetaData['first_name'][0] . '_' . $AuthorMetaData['last_name'][0] ?>" class="hide_on_desktop"><span class="author_name_span author_name_span_link"><?php echo $AuthorUser['display_name'] ?></span></a>
                </p>
            </div>

        </div>
    </div>
<?php endif; ?>

<?php if (get_field("medical_review_user")) : ?>
    <div class="medical_review_container">

        <div class="medical_review_wrapper">
            <div id="medical_review_avatar_reference">
                <img src="<?php echo $medicalReviewAvatar['url']; ?>" alt="" loading="lazy">
            </div>
            <div class="medical_review_meta_wrapper">
                <p class="medical_review_last_date">Clinically Reviewed: </p>
                <p class="medical_review_last_date_content"><?php echo get_field('clinically_reviewed_date'); ?></p>
                <p class="medical_review_meta_title">Medical Reviewer: </p>
                <p class="medical_review_meta_name hide_on_mobile"><?php echo $medicalReviewUser['display_name'] ?></p>
                <a href="/contributors#<?php echo $medicalReviewerMetaData['first_name'][0] . '_' . $medicalReviewerMetaData['last_name'][0] ?>" class="hide_on_desktop">
                    <p class="medical_review_meta_name"><?php echo $medicalReviewUser['display_name'] ?></p>
                </a>
            </div>
        </div>
    </div>


<?php endif; ?>
<div class="medical_review_spacer"></div>