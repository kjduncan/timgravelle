<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
 $imgDir = get_stylesheet_directory_uri() . '/images/';
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<div class="row">
				<div class="columns small-12 large-6">
					<p><strong>TIM GRAVELLE - GLACIER REAL ESTATE</strong></p>
					<p>Brokers License RRE-BRO-LIC-19032</p>
					<p>Glacier Real Estate 428 East Idaho Kalispell, MT 59901</p>
					<p>Tim.Gravelle@TheRealMontana.com</p>
					<p>Cell: (406) 250-9803 <br>Phone: (406) 752-1555 <br>Fax: (406) 752-2661</p>
				</div>
				<div class="columns small-12 large-6">
					<ul class="footer-logos">
						<li>
							<img src="<?php echo $imgDir."equal_housing.png" ?>" alt="">
						</li>
						<li>
							<img src="<?php echo $imgDir."realtor_mls.png" ?>" alt="">
						</li>
						<li>
							<img src="<?php echo $imgDir."realtor_logo.png" ?>" alt="">
						</li>
						<li>
							<img src="<?php echo $imgDir."equator_certified.png" ?>" alt="">
						</li>
					</ul>

				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
