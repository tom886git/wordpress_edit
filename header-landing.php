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
		<div class="container pt-3 pb-2">
			<div class="row align-items-center d-flex justify-content-center">
				<div class="col-6  site-header__logo  ">
					<img  src="<?php echo get_template_directory_uri();?>/img/logo_val.svg" class="img-fluid" style="height:20vh" loading="lazy" alt="...">
				</div>
			</div>
		</div>
		<nav id="site-navigation" class="main-navigation  landing ">
			<div class="container d-flex justify-content-center">
				<div class="row">
					
					<!-- <div class="col cart d-flex justify-content-center justify-content-lg-end align-items-center m-0 p-0">
						<a href="<?php echo wc_get_cart_url(); ?>"> <i class="bi bi-bag-dash p-0"> </i> </a>
						<a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> – <?php echo WC()->cart->get_cart_total(); ?></a>
					</div> -->
					<div class="col-12  text-center d-flex justify-content-center">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
								)
							);
							?>
					</div>		
					<div class="col-12 d-flex justify-content-center ">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="true">
							<i class="bi bi-list " style="font-size: 2rem; color:white;"></i>
							<?php esc_html_e( '', 'pawsgang' ); ?>
						</button>
					</div>
				</div>
			</div>
		</nav>
		
		
		<!-- #site-navigation -->
	</header><!-- #masthead -->
