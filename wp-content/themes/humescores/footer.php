<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Humescores
 */
 $noWidget = false;
?>


</div><!-- #content -->



<footer id="colophon" class="site-footer <?= ($noWidget)? 'no-widget': 'yes-widget'?>" role="contentinfo">
    <div class="footer-widget ">
        
        <?php
if ( ! is_active_sidebar( 'sidebar-1' ) ) {
    $noWidget = true;
	return;
}
?>

<aside id="footer-widget-area" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-2' ); ?>
</aside><!-- #secondary -->
    </div>
    <div class="social-media__container">
        <nav id="social-media" class="footer-navigation" role="navigation">

            <?php wp_nav_menu(array('theme_location' => 'secondary', 'menu_id' => 'secondary-menu')); ?>
        </nav><!-- #site-navigation -->
    </div> <!-- .social-media__container-->
    <div class="site-info">
        <a href="<?php echo esc_url(__('https://wordpress.org/', 'humescores')); ?>"><?php printf(esc_html__('Proudly powered by %s', 'humescores'), 'WordPress'); ?></a>
        <span class="sep"> | </span>
        <?php printf(esc_html__('Theme: %1$s by %2$s.', 'humescores'), 'humescores', '<a href="https://henrtfritz.xyz" rel="designer">Mr. Bibb Let Us</a>'); ?>

    </div><!-- .site-info -->


</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
