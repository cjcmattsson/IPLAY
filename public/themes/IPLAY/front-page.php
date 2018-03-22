<?php get_header(); ?>
<div class="parallax">
    <main role="main" class="wrapper">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>

            <div class="parallax__group">
                <div class="parallax__layer parallax__layer--base">

                <?php  $pages = get_posts(
                    array(
                        'post_type' => 'page',
                        'order' => 'ASC',
                        'orderby' => 'menu_order'
                    ));

                foreach ($pages as $page_data): ?>

                <?php
                $content = apply_filters('the_content', $page_data->post_content);

                $title = $page_data->post_title;?>


                    <span id='<?php echo $title ?>'></span>
                    <div class="one-page-section">
                        <h1><?php echo $title ?></h1>
                        <div><?php echo $content ?></div>
                    </div>

            <?php endforeach; ?>

        <?php endwhile; else: ?>
            <article>
                <p>Nothing to see.</p>
            </article>
        <?php endif; ?>
    </div>
        <div class="parallax__layer parallax__layer--back"></div>
    </div>
</main>
</div>

<?php get_footer();
