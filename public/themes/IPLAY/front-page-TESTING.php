
<?php get_header(); ?>
<div class="parallax">
    <main role="main" class="wrapper">
        <?php if (have_posts()): while (have_posts()): echo the_post(); ?>

            <div class="parallax__group">
                <div class="parallax__layer parallax__layer--base">


                        <div class="one-page-section">
                        <?php  require __DIR__."/page-templates/home.php";?>
                    </div>

                        <div class="one-page-section">
                        <?php  require __DIR__."/page-templates/the-app.php";?>
                    </div>
                        <div class="one-page-section">
                        <?php  require __DIR__."/page-templates/the_app.php";?>
                    </div>
                        <div class="one-page-section">
                        <?php  require __DIR__."/page-templates/the_app.php";?>
                    </div>



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
