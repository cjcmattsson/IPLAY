<?php /* Template Name: Home */ ?>

<?php
$fields = get_fields(get_the_ID());
$hero_text = $fields['hero_text'];
$button = $fields['cta_button'];


?>

<div class="row">
    <div class="col">


                <h1 class="<?php the_title() ?>"><?php the_title() ?></h1>
                <p><?php echo $hero_text ?></p>
                <p><?php echo $button ?></p>



    </div><!-- /col -->
</div><!-- /row -->
