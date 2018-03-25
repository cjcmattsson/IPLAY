<?php /* Template Name: Home */ ?>

<?php
$fields = get_fields();
$hero_text = $fields['hero_text'];
$button = $fields['cta_button'];
$video = $fields['video'];


?>

<div class="row">
    <div class="col">


        <h1><?php echo $hero_text ?></h1>
        <div class="embed-container">
            <?php the_field('video'); ?>
        </div>
        <button><?php echo $button ?></button>



    </div><!-- /col -->
</div><!-- /row -->
