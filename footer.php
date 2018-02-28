<footer>
    <div class="bottom-bar">
        <div class="footer-content row">
            <div class="footer-left medium-6 column">
                <?php dynamic_sidebar( 'footer-left' ); ?>
            </div>
            <div class="footer-right medium-6 column">
                <?php dynamic_sidebar( 'footer-right' ); ?>
            </div>
        </div>
    </div>
    <div class="bottomest-bar">
        <div class="row">
            <p>&copy; <?php echo (date("Y")=="2017" ? "2017" : "2017 - " . date("Y")); ?> Mat-Su Resort</p>
            <a href="http://www.beaconmm.com" target="_blank">DESIGNED BY BEACON MEDIA + MARKETING</a>
        </div>
    </div>
</footer>


<?php wp_footer(); ?>
</body>
</html>