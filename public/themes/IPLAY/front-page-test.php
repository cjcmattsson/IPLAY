<?php get_header(); ?>

<?php

function title() {
    $space = ' ';
    $underscore = '_';
    if (strpos($title, $space)) {
        $spaceTitle = str_replace($space, $underscore, $title);
        echo strtolower($spaceTitle);
    } else {
        echo strtolower($title);
    };
}

 ?>

<div class="parallax">
    <main role="main" class="wrapper">
        <?php if (have_posts()): while (have_posts()): echo the_post(); ?>

            <div class="parallax__group">
                <div class="parallax__layer parallax__layer--base">

                <?php  $pages = get_posts(
                    array(
                        'post_type' => 'page',
                        'order' => 'ASC',
                        'orderby' => 'menu_order'
                    ));



                foreach ($pages as $page_data):


                ?>

                <?php
                $content = apply_filters('the_content', $page_data->post_content);

                $title = $page_data->post_name;?>


                    <span id='<?php echo $title ?>'></span>
                    <div class="one-page-section">
                        <?php  require __DIR__."/page-templates/$title.php"?>
                    </div>

            <?php endforeach; ?>

        <?php endwhile; else: ?>
            <article>
                <p>Nothing to see.</p>
            </article>
        <?php endif; ?>
        <?php get_footer(); ?>

    </div>
        <div class="parallax__layer parallax__layer--back"></div>
    </div>
</main>

</div>
