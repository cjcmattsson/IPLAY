
<footer>
<div class="footer-content">

    <div class="social">

    <img class="footer-logo" src="<?php
        $variable = get_field('logotype', 'option');
        echo $variable['url'];
     ?>" alt="">
    <div class="social-media-links">
        <img class="footer-small-icon" src="themes/IPLAY/assets/images/facebook-logo-button.png" alt="">
        <img class="footer-small-icon" src="themes/IPLAY/assets/images/instagram-logo.png" alt="">
        <img class="footer-small-icon" src="themes/IPLAY/assets/images/play-button-silhouette.png" alt="">
        <img class="footer-small-icon" src="themes/IPLAY/assets/images/shape.png" alt="">

    </div>
</div>

    <div class="footer-info">
        <div class="help">
            <h4><?php the_field('header_left', 'option'); ?></h4>
            <p><?php the_field('first_left', 'option'); ?></p>
            <p><?php the_field('second_left', 'option'); ?></p>
        </div>
        <div class="about">
            <h4><?php the_field('header_middle', 'option'); ?></h4>
            <p><?php the_field('first_middle', 'option'); ?></p>
            <p><?php the_field('second_middle', 'option'); ?></p>
        </div>
        <div class="contact">
            <h4><?php the_field('header_right', 'option'); ?></h4>
            <p><?php the_field('first_right', 'option'); ?></p>
            <p><?php the_field('second_right', 'option'); ?></p>
        </div>
    </div>
</div>
<p class="footer-rights"><?php the_field('rights_iplay', 'option'); ?></p>
</footer>
<?php wp_footer(); ?>
</body>
</html>
