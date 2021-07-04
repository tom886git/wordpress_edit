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

	<!-- <div class="announcement-bar">
		<div class="container">
		<div class="row">
			<div class="col-md-4 ">
				<ul class="announcement-bar__list">
					<li>
						<i class="bi bi-telephone rounded-circle"></i>
						<a href="tel: +44 555 22211"> +44 555 22211</a>
					</li>
					<li>
						<i class="bi bi-envelope rounded-circle"></i>
						<a href="mailto:hello@pawsgang.shop"> hello@pawsgang.shop</a>
					</li>
				</ul>
			</div>
			<div class="col-md-8  d-flex justify-content-end">
				<ul class="announcement-bar__list">
					<li>
						<i class="bi bi-truck rounded-circle"></i>FREE SHIPPING
					</li>
					<li>
						<i class="bi bi-clock-history rounded-circle"></i>30DAYS MONEYBACK GURANTEE
					</li>
					<li>
						<i class="bi bi-person rounded-circle"></i>24/7 CUSTOMER SUPPORT
					</li>
				</ul>
			</div>
		</div>
		</div>
	</div> -->



	<header id="masthead" class="site-header">
		<div class="container pt-2 pb-2">
			<div class="row align-items-center">
				<div class="col site-header__logo d-flex justify-content-center ">
					<!-- <?php the_custom_logo() ?> -->
					<!-- <img  src="<?php echo get_template_directory_uri();?>/img/logo_black.svg" class="img-fluid" style="width:100px;" loading="lazy" alt="..."> -->
				</div>	
			</div>
		</div>

		<nav class="navbar navbar-expand-lg navbar-light bg-light mb-0 fixed-top">	
			<div class="container-fluid">
				<a class="navbar-brand" href="#">Navbar</a>

				<!-- <div class="col-6 col-md-12 cart d-flex justify-content-center  align-items-center m-0 p-0 ">
						<a href="<?php echo wc_get_cart_url(); ?>" class="cart-icon m-0 p-0"> <i class="bi bi-bag-dash "> </i> </a>
						<a class="cart-customlocation m-0 p-0" href="<?php echo wc_get_cart_url(); ?> " title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> – <?php echo WC()->cart->get_cart_total(); ?></a>
				</div> -->

				<form class="d-flex">
					<!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success" type="submit">Search</button> -->
					<a href="<?php echo wc_get_cart_url(); ?>" class="cart-icon m-0 p-0"> <i class="bi bi-bag-dash "> </i> </a>
						<a class="cart-customlocation m-0 p-0" href="<?php echo wc_get_cart_url(); ?> " title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> – <?php echo WC()->cart->get_cart_total(); ?></a>
				</form>



				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse " id="navbarSupportedContent">
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
		</nav>

		<!-- <nav id="site-navigation" class="main-navigation page fixed-top bg-primary-opacity-8">
			<div class="container d-flex justify-content-center ">
				<div class="row justify-content-between mx-0 px-0">
					
					<div class="col-6 col-md-12 d-flex justify-content-center align-items-center m-0 p-0 ">
						<button class="menu-toggle text-center" aria-controls="primary-menu" aria-expanded="false">
							<i class="bi bi-list "style="font-size: 2rem;"></i>
							<?php esc_html_e( '', 'pawsgang' ); ?>
						</button>
					</div>
					
					<div class="col-6 col-md-12 cart d-flex justify-content-center  align-items-center m-0 p-0 ">
						<a href="<?php echo wc_get_cart_url(); ?>" class="cart-icon m-0 p-0"> <i class="bi bi-bag-dash "> </i> </a>
						<a class="cart-customlocation m-0 p-0" href="<?php echo wc_get_cart_url(); ?> " title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> – <?php echo WC()->cart->get_cart_total(); ?></a>
					</div>

					
					<div class="col-12 text-center text-md-center ml-0 d-flex justify-content-center ">
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
