<?php /* Template Name: The App */ ?>

<?php
$fields = get_fields(46);


?>

<div class="row">
    <div class="col">


        <h1 class="section-header-text the-app-header"><?php echo $fields['hero_text'] ?></h1>
            <div class="phones">
                <div class="the-app-cross">
                    <div class="app-line-left"></div>
                    <div class="app-line-right"></div>
                </div>
                <img class="iphone-left-back" src="themes/IPLAY/assets/images/iphone-small.png" alt="">
                <img class="iphone-middle-front" src="themes/IPLAY/assets/images/iphone-small.png" alt="">
                <img class="iphone-right-back" src="themes/IPLAY/assets/images/iphone-small.png" alt="">
            </div>

            <div class="the-app-text-buttons">
                <div class="arrow-cta-text">
                    <p>Try IPLAY by swiping/pressing the phone above</p>
                    <img class="arrow" src="themes/IPLAY/assets/images/arrow.png" alt="">
                </div>
                <div class="buttons the-app-buttons">
                    <button type="button" name="button"><img class="apple-icon" src="themes/IPLAY/assets/images/apple.png" alt=""><span class="button-text">Download on the App Store</span></button>
                    <button type="button" name="button"><i class="material-icons">android</i> <span class="button-text">Download on Google Play</span></button>
                </div>
            </div>


    </div><!-- /col -->
</div><!-- /row -->
