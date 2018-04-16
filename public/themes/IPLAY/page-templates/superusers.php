<?php /* Template Name: Superusers */ ?>

<?php
$fields = get_fields(77);

$args = array(
    'post_type' => 'superuser',
    'order' => 'DESC',
);
$superusers = collect(get_posts($args))->shuffle()->take(6);

?>

<div class="row">
    <div class="col">


        <div class="header-super">
            <p>Our</p>
            <h1 class="section-header-text"><?php echo $fields['hero_text'] ?></h1>
        </div>

        <div class="content-super">
            <div class="superusers">
              <div class="super-text-and-cta">

                <div class="athletes-info-text">
                    <?php foreach($superusers as $user): ?>
                        <?php $post_id = $user->ID; ?>
                        <?php if (get_field('featured', $post_id) === 'Featured'): ?>
                            <?php $name = get_field('name', $post_id); ?>
                            <?php $club = get_field('club', $post_id); ?>
                            <div class="athlete-text">
                                <h4 class="athletes-name"><?php echo $name ?></h4>
                                <p class="athletes-club"><?php echo $club ?></p>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
                <div class="cta-super">
                    <div class="buttons">
                        <button type="button" name="button">Join now!</button>
                    </div>
                    <p><?php echo $fields['cta_superusers'] ?></p>
                    <div class="down-arrows-super">
                        <i class="material-icons">arrow_drop_down</i>
                        <i class="material-icons">arrow_drop_down</i>
                    </div>
                </div>
              </div>


                <div class="athletes-images">
                    <?php foreach($superusers as $user): ?>
                        <?php $post_id = $user->ID; ?>
                        <?php if (get_field('featured', $post_id) === 'Featured'): ?>
                        <?php $img = get_field('image', $post_id); ?>
                        <div class="skew-img">
                            <div class="image-super" style="background-image: url(<?php echo $img['url'] ?>);"></div>
                        </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>



        </div>

        <svg class="line-super" width="1440px" height="366px" viewBox="0 0 1440 366" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <!-- Generator: Sketch 48.2 (47327) - http://www.bohemiancoding.com/sketch -->
            <title>Path 5</title>
            <desc>Created with Sketch.</desc>
            <defs></defs>
            <g id="Desktop-Iplay" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(0.000000, -1699.000000)">
                <polyline id="Path-5" stroke="#71D6C6" stroke-width="3" points="0 1854.17379 290.184998 1701 1051.47058 2063 1440 1774.67417"></polyline>
            </g>
        </svg>




</div><!-- /col -->
</div><!-- /row -->
