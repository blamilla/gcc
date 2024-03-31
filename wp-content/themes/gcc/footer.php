<!-- footer -->
<footer class="footer">
    <div class="footer-logo">
        <a href="/" class="no-paywall">
            <img data-src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/GCC_Logo-Short-White.svg" class="lazyload" alt="Global Creators Community" />
        </a>
    </div>
    <div class="footer-container">        
        <div class="footer-first-column">
            <span class="small-text">                
                <?php echo get_field("footer_text"); ?>
            </span>
        </div>
        <div class="footer-last-column-375">
            <span class="small-text">
                <a href="https://www.instagram.com/globalcreatorscommunity/" class="no-paywall" target="_blank">
                    <img data-src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/icon-instagram-white.svg" class="lazyload" alt="Global Creators Community Instagram" />
                </a>
            </span>
        </div>
        <div class="footer-second-column">
            <span class="small-text footer-intro-item-menu">
                <?php echo get_field("footer_menu_item_1"); ?>
            </span>
            <span class="small-text">
                <?php echo get_field("footer_menu_item_2"); ?>
            </span>
            <span class="small-text">
                <?php echo get_field("footer_menu_item_3"); ?>
            </span>
        </div>
        <div class="footer-third-column">
            <span class="small-text footer-intro-item-menu">
                <?php echo get_field("footer_menu_item_4"); ?>
            </span>
            <span class="small-text">
                <?php echo get_field("footer_menu_item_5"); ?>
            </span>
            <span class="small-text">
                <?php echo get_field("footer_menu_item_6"); ?>
            </span>
        </div>
        <div class="footer-last-column">
            <span class="small-text">
                <a href="https://www.instagram.com/globalcreatorscommunity/" class="no-paywall" target="_blank">
                    <img data-src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/icon-instagram-white.svg" class="lazyload" alt="Global Creators Community Instagram" />
                </a>
            </span>
        </div>        
    </div>
    <div class="footer-copyright small-text">
        &copy; 2020 Global Creators Community. All Rights Reserved
    </div>
</footer>
<!-- /footer -->

</div>
<!-- /wrapper -->

<?php wp_footer(); ?>

<!-- analytics -->
<?php echo get_field('google_analytics','option'); ?>

</body>

</html>