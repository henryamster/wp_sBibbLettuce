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

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'humescores' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'humescores' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'humescores' ), 'humescores', '<a href="https://henrtfritz.xyz" rel="designer">Mr. Bibb Let Us</a>' ); ?>
                       
                        </div><!-- .site-info -->
                        <div class="social-media__container">
                       <nav id="social-media" class="footer-navigation" role="navigation">
                  
                    <?php wp_nav_menu(array('theme_location' => 'secondary', 'menu_id' => 'secondary-menu')); ?>
                </nav><!-- #site-navigation -->
                        </div> 
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
