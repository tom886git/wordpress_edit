<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pawsgang
 */

get_header('landing');
?>

	<main id="primary" class="site-main frontpage">
		<section class="container m-0 p-0">
			<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/img/slider/slide2.jpg" class="d-block w-100" alt="..."></a>
					</div>
					<div class="carousel-item">
					<a href="#"><img src="<?php echo get_template_directory_uri();?>/img/slider/slide1.jpg" class="d-block w-100" alt="..."></a>
					</div>
			
				</div>
			</div>
		</section>
	</main>
<?php
get_footer('landing');
