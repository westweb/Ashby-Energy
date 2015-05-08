<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Ashby Energy
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php if ( ! is_active_sidebar( 'footer' ) ) {
			return;
		}
		?>

		<div id="footer-widgets" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'footer' ); ?>
		</div><!-- footer widgets -->



		<div class="site-info">
		
		<p>Ashby Energy Assessors Ltd, The Stables, Hill Top Farm, Croxton Kerrial, Grantham, NG32 1QJ - Company Number: 8644661 - <strong>Tel:</strong> 01476 870504 - <strong>Mobile:</strong> 
07975 684 176</p>
		<p>Copyright &copy; <?php echo date("Y")?> Ashby Energy Assessors</p> 
		</div><!-- .site-info -->
	<div id="small-print">
		<a href="http://www.ashbyenergy.co.uk/wpress/disclaimer/">Disclaimer</a>&nbsp;<a href="http://www.ashbyenergy.co.uk/wpress/privacy-policy/">Privacy Policy</a>&nbsp;<a href="http://www.ashbyenergy.co.uk/wpress/conditions-of-use/">Conditions of Use</a>
	</div>
	</footer><!-- #colophon -->
	

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
