<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PAWSGANG
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'pawsgang' ); ?></a>

	<nav class="navbar navbar-expand-md navbar-light  fixed-top bg-primary">
		<div class="container-fluid ">
			<!-- <a class="navbar-brand " href="#">
				<img  src="<?php echo get_template_directory_uri();?>/img/logo_val.svg" class="img-fluid" style="width:100px" loading="lazy" alt="...">	
			</a> -->

			

			
			<button class="navbar-cart" >
				<a href="<?php echo wc_get_cart_url(); ?>" class="cart-icon m-0 p-0"> <i class="bi bi-cart "> </i> </a>
				<a class="cart-customlocation m-0 p-0" href="<?php echo wc_get_cart_url(); ?> " title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( _n( '%d ', '%d ', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> – <?php echo WC()->cart->get_cart_total(); ?></a>
			</button>

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			

			<div class="collapse navbar-collapse " id="main-menu">
				<?php
				wp_nav_menu(array(
					'theme_location' => 'main-menu',
					'container' => false,
					'menu_class' => '',
					'fallback_cb' => '__return_false',
					'items_wrap' => '<ul id="%1$s" class="navbar-nav ms-auto  %2$s">%3$s</ul>',
					'depth' => 2,
					'walker' => new bootstrap_5_wp_nav_menu_walker()
				));
				?>
			</div>

		</div>
	</nav>




	<!-- <nav id="site-navigation" class="main-navigation page fixed-top bg-primary-opacity-8 ">

		<div class="container d-flex justify-content-center ">

			<div class="row justify-content-between mx-0 px-0 w-100">
				
				<div class="col-6 col-md-12 d-flex justify-content-s align-items-center m-0 p-0 ">
					<button class="menu-toggle text-center" aria-controls="primary-menu" aria-expanded="false">
						<i class="bi bi-list "style="font-size: 2rem;"></i>
						<?php esc_html_e( '', 'pawsgang' ); ?>
					</button>
				</div>

				<div class="col-6  col-md-3  cart d-flex justify-content-center  align-items-center m-0 p-0 ">
					<a href="<?php echo wc_get_cart_url(); ?>" class="cart-icon m-0 p-0"> <i class="bi bi-bag-dash "> </i> </a>
					<a class="cart-customlocation m-0 p-0" href="<?php echo wc_get_cart_url(); ?> " title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> – <?php echo WC()->cart->get_cart_total(); ?></a>
				</div>

				<div class="col text-center text-md-center m-0 p-0 d-flex justify-content-center justify-content-lg-end">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							)
						);
						?>
				</div>
			</div>
		</div>
	</nav> -->
		
		
		<!-- #site-navigation -->
	</header><!-- #masthead -->
