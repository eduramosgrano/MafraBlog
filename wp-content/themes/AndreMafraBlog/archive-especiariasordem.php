<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */




get_header(); ?>

<div class="container single-post">
	<div class="row">
		<section class="col-md-9 post-loop">
			<?php
			$siteurlo = get_site_url();
			$postido = url_to_postid( $siteurlo.'/especiarias-por-ordem' );
			$the_query_o = new WP_Query( 'page_id='.$postido );

				while ($the_query_o -> have_posts()) : $the_query_o -> the_post();
												the_title("<a href='/especiariasordem'><h1>",'</h1></a>');
												echo "<div class='row'><div class='col-md-12 post'>";
												echo "<div class='content'>";
												the_content();
												echo "</div></div></div>";
				endwhile;
			 ?>



			<div class="row">
				<div class="col-md-12 post">
		<?php if ( have_posts() ) : ?>

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentysixteen' ),
				'next_text'          => __( 'Next page', 'twentysixteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
	</div>
</div>
</section>
		<sidebar class="col-md-2 col-md-offset-1 sidebar">
			<?php get_sidebar(); ?>
		</sidebar>
	</div>


</div>
<?php get_footer(); ?>
