<?php /* Template Name: The App */ ?>

<?php
$fields = get_fields(46);


?>

<div class="row">
    <div class="col">


                <h1><?php the_title() ?></h1>
                <p><?php echo $fields['app_text'] ?></p>



    </div><!-- /col -->
</div><!-- /row -->
