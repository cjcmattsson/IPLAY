<?php /* Template Name: Home */ ?>

<?php
$fields = get_fields();
$hero_text = $fields['hero_text'];

$hero_sentence = explode(' ', $hero_text);
$last_word = array_pop($hero_sentence);

$lastSpacePosition = strrpos($hero_text, ' ');
$textWithoutLastWord = substr($hero_text, 0, $lastSpacePosition);

$line_break = array( '<br>' );

$hero_array = explode (' ', $textWithoutLastWord);
array_splice($hero_array, 2, 0, $line_break);
$hero_string = implode(' ', $hero_array);


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

        <div class="hero-line-left"></div>
        <div class="hero-line-right"></div>
        <div class="embed-container video">
            <?php echo $iframe; ?>
        </div>
        <img class="iphone" src="themes/IPLAY/assets/images/iphone-small.png" alt="">
        <div class="hero-text-cta">
            <div class="line"></div>
            <h1 class="section-header-text hero-header"><?php echo "$hero_string " ?><span class="purple-hero"><?php echo $last_word ?></span></h1>
            <p><?php echo $sub_header ?></p>
            <div class="buttons">
                <button type="button" name="button"><img class="apple-icon" src="themes/IPLAY/assets/images/apple.png" alt=""><span class="button-text">Download on the App Store</span></button>
                <button type="button" name="button"><i class="material-icons">android</i> <span class="button-text">Download on Google Play</span></button>
            </div>
            <p class="explore"><i class="material-icons">arrow_drop_down</i><?php echo $explore ?><i class="material-icons">arrow_drop_down</i></p>
        </div>



    </div><!-- /col -->
</div><!-- /row -->
