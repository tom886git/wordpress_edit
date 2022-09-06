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




<header id="masthead" class="site-header">
	
	<nav class="navbar landing navbar-expand-md  navbar-dark fixed-top ">
		<div class="container-fluid ">

			
			
			<button class="navbar-cart-landing" >
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
	
		
		<!-- #site-navigation -->
</header><!-- #masthead -->
