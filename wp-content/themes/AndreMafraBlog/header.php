<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="site-inner">
		<!-- <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentysixteen' ); ?></a> -->

		<header>

	  <!-- NAV BAR HEADER -->
	      <nav class="navbar navbar-default">
	      <div class="container">
	        <!-- Brand and toggle get grouped for better mobile display -->
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
						<a class="navbar-brand" href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a>
	        </div>

	        <!-- Collect the nav links, forms, and other content for toggling -->
	        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


						<?php /* Primary navigation */
							wp_nav_menu( array(
							  'menu' => 'top_menu',
							  'depth' => 2,
							  'container' => false,
							  'menu_class' => 'nav navbar-nav menu-principal',
							  //Process nav menu using our custom nav walker
							  'walker' => new wp_bootstrap_navwalker())
							);
							?>


	          <form class="navbar-form navbar-right" role="search">
	            <div class="form-group">
	              <input type="text" class="form-control" placeholder="" value="<?php echo get_search_query(); ?>" name="s" id="s" >
	            </div>
	            <button type="submit" class="btn btn-default" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>">Pesquisar</button>
	          </form>
	        </div><!-- /.navbar-collapse -->
	      </div><!-- /.container-fluid -->
	    </nav>

	  <!--END NAV BAR HEADER -->



	  </header>
