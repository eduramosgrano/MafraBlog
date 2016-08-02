<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */


 get_header(); ?>

 <div class="container single-post">



 	<div class="row">
 		<section class="col-md-9 post-loop">

 			<!-- Caminho do post -->
 				<div class="row">
 					<ol class="col-md-12 breadcrumb">
 						<li><a href="<?php echo get_site_url(); ?>">Home</a></li>
 					</ol>
 				</div>
 				<div class="row">
 					<div class="col-md-12 post">
 				<?php
 				// Start the loop.
 				while ( have_posts() ) : the_post();
 				get_template_part( 'template-parts/content', 'single' );

 				if ( comments_open() || get_comments_number() ) {
 					comments_template();
 				}
 				endwhile;
 				?>



 					</div>
 				</div>
 		</section>

 		<sidebar class="col-md-2 col-md-offset-1 sidebar">
 			<?php get_sidebar(); ?>
 		</sidebar>
 	</div>


 </div>

 

 </div><!-- .content-area -->


 <?php get_footer(); ?>
