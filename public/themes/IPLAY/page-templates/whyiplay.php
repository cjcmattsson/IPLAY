<?php /* Template Name: Why IPLAY */ ?>

<?php
$fields = get_fields(2)

?>

<div class="row">
    <div class="col">

        <h1 class="section-header-text why-header"><?php echo $fields['hero_text'] ?></h1>


        <div class="why-content">
            <div class="why-line-mobile"></div>
            <div class="logo-why-section-mobile">
                <img class="" src="<?php
                    $variable = get_field('logotype', 'option');
                    echo $variable['url'];
                 ?>" alt="">
            </div>
            <div class="left-social-com">
                <div class="social-media"><p><?php echo $fields['social_media'] ?></p></div>
                <div class="communication"><p><?php echo $fields['communication'] ?></p></div>
            </div>

            <div class="logo-why-section">
                <img class="" src="<?php
                    $variable = get_field('logotype', 'option');
                    echo $variable['url'];
                 ?>" alt="">
            </div>

            <div class="right-team-stakeholders">
                <div class="team"><p><?php echo $fields['team'] ?></p></div>
                <div class="stakeholders"><p><?php echo $fields['general_stakeholders'] ?></p></div>
            </div>
        </div>
        <div class="arrows-down">
            <i class="material-icons">arrow_drop_down</i><i class="material-icons">arrow_drop_down</i>
        </div>


    </div><!-- /col -->
</div><!-- /row -->
