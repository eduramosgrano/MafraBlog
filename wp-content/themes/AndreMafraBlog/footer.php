<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<footer class="container">
	<div class="row">

	<?php get_sidebar('content-bottom'); ?>
</div>
<!-- <div class="row">
	<div class="col-md-12 text-center">
		<span class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
		<a href=""></a>
	</div>
</div> -->
</footer>



<?php wp_footer(); ?>
</body>
</html>
