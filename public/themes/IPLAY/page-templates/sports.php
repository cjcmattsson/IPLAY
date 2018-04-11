<?php /* Template Name: Sports */ ?>

<?php
$fields = get_fields(72);

$args = array(
    'post_type' => 'sports',
    'order' => 'DESC',
    'numberposts' => 4
);

$sports = collect(get_posts($args));


?>

<div class="row">
    <div class="col">

        <div class="sports-header">
            <div class="sports-header-left-line left"></div>
                <div class="sports-small-line"></div>
            <h1 class="section-header-text sports-header"><?php echo $fields['hero_text'] ?></h1>
                <div class="sports-small-line right"></div>
            <div class="sports-header-right-line"></div>
        </div>
        <div class="sports-line-mobile"></div>
        <div class="sports">
            <?php foreach($sports as $sport): ?>
                <?php $post_id = $sport->ID; ?>
                <?php if ((get_field('featured', $post_id) === 'Featured') && (get_field('released', $post_id) === 'Released')): ?>
                    <?php $image = get_field('image', $post_id); ?>
                    <?php $name_of_sport = get_field('name_of_sport', $post_id); ?>
                    <?php $date_of_release = get_field('date_of_release', $post_id); ?>
                    <div class="single-sport">
                        <div class="image-sport" style="background-image: url(<?php echo $image['url'] ?>);"><img src="themes/IPLAY/assets/images/checkmark.png"><div class="overlay"></div></div>
                        <h4 class=""><?php echo $name_of_sport ?></h4>
                        <p class=""><?php echo $date_of_release ?></p>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
            <?php foreach($sports as $sport): ?>
                <?php $post_id = $sport->ID; ?>
                <?php if ((get_field('featured', $post_id) === 'Featured') && (get_field('released', $post_id) === 'Upcoming')): ?>
                    <?php $image = get_field('image', $post_id); ?>
                    <?php $name_of_sport = get_field('name_of_sport', $post_id); ?>
                    <?php $date_of_release = get_field('date_of_release', $post_id); ?>
                    <div class="single-sport">
                        <div class="image-sport planned" style="background-image: url(<?php echo $image['url'] ?>);"><div class="overlay"></div></div>
                        <h4 class=""><?php echo $name_of_sport ?></h4>
                        <p class=""><?php echo $date_of_release ?></p>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>

        </div>

    </div><!-- /col -->
</div><!-- /row -->
