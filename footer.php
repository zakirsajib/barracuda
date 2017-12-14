<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Barracuda
 */

?>

	</div><!-- #content -->
	
<!-- footer starts -->
<div class="footer">
    <div class="container">
        <div class="footer-icon clearfix text-center padding">
            <ul class="footer-icon-list list-inline social ">
                <li>
                    <a href="#." class="facebook button">
                        <i class="fa fa-facebook" ></i>
                    </a>
                </li>
                <li>
                    <a href="#." class="twitter button">
                        <i class="fa fa-twitter" ></i>
                    </a>
                </li>
                <li>
                    <a href="#." class="google button">
                        <i class="fa fa-google-plus"></i>
                    </a>
                </li>
                <li>
                    <a href="#." class="linkedin button">
                        <i class="fa fa-linkedin" ></i>
                    </a>
                </li>
                <li>
                    <a href="#." class="pinterest button">
                        <i class="fa fa-pinterest-p"></i>
                    </a>
                </li>

            </ul>
            <div class="p3 top10">
                <footer id="colophon" class="site-footer">
					<div class="site-info">
						<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'barracuda' ) ); ?>"><?php
							/* translators: %s: CMS name, i.e. WordPress. */
							printf( esc_html__( 'Proudly powered by %s', 'barracuda' ), 'WordPress' );
						?></a>
						<span class="sep"> | </span>
						<?php
							/* translators: 1: Theme name, 2: Theme author. */
							printf( esc_html__( 'Theme: %1$s by %2$s.', 'barracuda' ), 'barracuda', '<a href="https://zakirsajib.online">Zakir Sajib</a>' );
						?>
					</div><!-- .site-info -->
				</footer><!-- #colophon -->
            </div>

        </div>

    </div>
</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
