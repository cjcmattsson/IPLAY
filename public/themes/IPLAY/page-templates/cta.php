<?php /* Template Name: Get the App */ ?>

<?php
$fields = get_fields(8)
?>

<div class="row">
    <div class="col">

        <div class="cta-header-and-tagline">
            <h1 class="section-header-text cta-header"><?php echo $fields['hero_text'] ?></h1>
            <p class="subheader-cta">Be a part of the future in sports</p>
        </div>

        <div class="content-cta">

            <div class="triangle">
                <div class="triangle-small"></div>
            </div>
            <img class="cta-iphone" src="themes/IPLAY/assets/images/iphone-cta.png" alt="">
            <div class="line-cta-left"></div>
            <div class="line-cta-right"></div>

            <div class="buttons cta-buttons">
                <button type="button" name="button"><img class="apple-icon" src="themes/IPLAY/assets/images/apple.png" alt=""><span class="button-text">Download on the App Store</span></button>
                <button type="button" name="button"><i class="material-icons android">android</i> <span class="button-text">Download on Google Play</span></button>
            </div>

        </div>

    </div><!-- /col -->
</div><!-- /row -->
