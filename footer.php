<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PAWSGANG
 */

?>
<div xlass="container-fluid">
	<footer id="colophon" class="site-footer ">

		<div class="container-fluid  d-flex justify-content-center pt-2 pb-2 " >
			<div class="row  align-items-center">
				<div class="col ">
					<p>    關於 <a href="<?php echo home_url('/contact'); ?>" target="_blank" >softselectshop</a></p>
					<!-- <img  src="<?php echo get_template_directory_uri();?>/img/logo_val.svg"  style="width:10rem" loading="lazy" alt="..."> -->
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
