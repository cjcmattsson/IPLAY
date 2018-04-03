<?php /* Template Name: Superusers */ ?>

<?php
$fields = get_fields(77);

$args = array(
    'post_type' => 'superuser',
    'order' => 'DESC',
);
$superusers = collect(get_posts($args))->shuffle()->take(3);

// foreach($superusers as $user) {
//     $post_id = $user->ID;
//     var_dump(get_field('featured', $post_id));
// };

?>

<div class="row">
    <div class="col">


        <div class="header-super">
            <h1 class=""><?php echo $fields['hero_text'] ?></h1>
        </div>

        <div class="content-super">
            <div class="superusers">
                <div class="athletes-info-text">
                    <?php foreach($superusers as $user): ?>
                        <?php $post_id = $user->ID; ?>
                        <?php if (get_field('featured', $post_id) === 'Featured'): ?>
                            <?php $name = get_field('name', $post_id); ?>
                            <?php $club = get_field('club', $post_id); ?>
                            <h4 class="athletes-name"><?php echo $name ?></h4>
                            <p class="athletes-club"><?php echo $club ?></p>
                        <?php endif; ?>
                    <?php endforeach; ?>

                    <div class="cta-super">
                        <p>Join IPLAY and become a SUPERUSER aswell!</p>
                        <div class="buttons">
                            <button type="button" name="button">Join IPLAY</button>
                        </div>
                    </div>
                </div>
                <div class="athletes-images">
                    <?php foreach($superusers as $user): ?>
                        <?php $post_id = $user->ID; ?>
                        <?php if (get_field('featured', $post_id) === 'Featured'): ?>
                        <?php $img = get_field('image', $post_id); ?>
                        <img class="image-super" src="<?php echo $img['url'] ?>" alt="">
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
        <svg class="line-super" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        width="1282.88px" height="509.975px" viewBox="0 0 1282.88 509.975" style="enable-background:new 0 0 1282.88 509.975;"
        xml:space="preserve">
        <line style="fill:none;stroke:#45E78E;stroke-width:3;stroke-miterlimit:10;" x1="22.499" y1="412.481" x2="418.479" y2="254.987"/>
        <line style="fill:none;stroke:#45E78E;stroke-width:3;stroke-miterlimit:10;" x1="418.479" y1="254.987" x2="815.96" y2="461.979"/>
        <line style="fill:none;stroke:#45E78E;stroke-width:3;stroke-miterlimit:10;" x1="815.96" y1="461.979" x2="1274.937" y2="206.992"/>
        </svg>




</div><!-- /col -->
</div><!-- /row -->
