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
        <div class="footer-icon clearfix padding">
            <div class="p3 top10">
                <footer id="colophon" class="site-footer">
					<div class="site-info col-md-4 top25">
						<?php
							$site_name = get_bloginfo( 'name' );
							$current_year = date('Y');
							printf( esc_html__( 'All Rights Reserved. %s', 'barracuda' ), $site_name  );
							printf(esc_html__( ' %s', 'barracuda' ), $current_year);
						?>
					</div><!-- .site-info -->
					<div class="supporters col-md-8">
						<ul>
							<li>Supported by</li>
							<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/capital_enterprise.png" alt="Capital Enterprise"></a></li>
							<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/casts.png" alt="CASTS"></a></li>
							<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/eu.png"  alt="European Union"></a></li>
						</ul>
					</div>
					
				</footer><!-- #colophon -->
            </div>
        </div>
    </div>
</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
