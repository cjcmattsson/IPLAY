<?php /* Template Name: Home */ ?>

<?php
$fields = get_fields();
$hero_text = $fields['hero_text'];
$sub_header = $fields['hero_sub_header'];
$explore = $fields['explore'];

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
    'autoplay'  => 0,
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

        <div class="hero-line-left"></div>
        <div class="hero-line-right"></div>
        <div class="embed-container video">
            <?php echo $iframe; ?>
        </div>
        <img class="iphone" src="themes/IPLAY/assets/images/iphone.png" alt="">
        <div class="hero-text-cta">
            <div class="line"></div>
            <h1><?php echo $hero_text ?></h1>
            <p><?php echo $sub_header ?></p>
            <div class="buttons">
                <button type="button" name="button"><img class="apple-icon" src="themes/IPLAY/assets/images/apple.png" alt="">Download on the App Store</button>
                <button type="button" name="button"><i class="material-icons">android</i> Download on Google Play</button>
            </div>
            <p class="explore"><i class="material-icons">arrow_drop_down</i><?php echo $explore ?><i class="material-icons">arrow_drop_down</i></p>
        </div>



    </div><!-- /col -->
</div><!-- /row -->
