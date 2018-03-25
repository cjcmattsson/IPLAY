<?php /* Template Name: Home */ ?>

<?php
$fields = get_fields();
$hero_text = $fields['hero_text'];
$button = $fields['cta_button'];


// get iframe HTML
$iframe = get_field('video');


// use preg_match to find iframe src
preg_match('/src="(.+?)"/', $iframe, $matches);
$src = $matches[1];


// add extra params to iframe src
$params = array(
    'controls'    => 0,
    'hd'        => 1,
    'autohide'    => 1,
    'autoplay'  => 1,
    'mute' => 1,
    'controls' => 0,
    'rel' => 0
);

$new_src = add_query_arg($params, $src);

$iframe = str_replace($src, $new_src, $iframe);


// add extra attributes to iframe html
$attributes = 'frameborder="0"';

$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);


?>

<div class="row hero">
    <div class="col">


        <div class="embed-container video">
            <?php echo $iframe; ?>
        </div>
        <h1 class="hero-header"><?php echo $hero_text ?></h1>
        <button><?php echo $button ?></button>



    </div><!-- /col -->
</div><!-- /row -->
