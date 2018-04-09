<?php /* Template Name: Get the App */ ?>

<?php
$fields = get_fields(8)
?>

<div class="row">
    <div class="col">


        <h1 class="section-header-text cta-header"><?php echo $fields['hero_text'] ?></h1>


        <div class="content-cta">

            <div class="triangle">
                <div class="triangle-small"></div>
            </div>
            <img class="cta-iphone" src="themes/IPLAY/assets/images/iphone-small.png" alt="">
            <div class="line-cta-left"></div>
            <div class="line-cta-right"></div>
            <div class="buttons the-app-buttons">
                <button type="button" name="button"><img class="apple-icon" src="themes/IPLAY/assets/images/apple.png" alt="">Download on the App Store</button>
                <button type="button" name="button"><i class="material-icons">android</i> Download on Google Play</button>
            </div>

        </div>

    </div><!-- /col -->
</div><!-- /row -->
