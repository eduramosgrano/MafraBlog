<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

	<h6 class="data">Publicado em <?php the_date('d/m/y'," ",""); ?></h6>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php twentysixteen_excerpt(); ?>
	<?php
		if(has_post_thumbnail()){
			if(is_page('about')){

			}else{
				?>
			<div class="post-thumbnail">
			<?php echo get_the_post_thumbnail($post->ID,'full',array( 'class' =>'img-responsive')); ?>
			</div>
			<?php }} ?>



		<div class="content">
		<?php
			the_content();

			// wp_link_pages( array(
			// 	'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
			// 	'after'       => '</div>',
			// 	'link_before' => '<span>',
			// 	'link_after'  => '</span>',
			// 	'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
			// 	'separator'   => '<span class="screen-reader-text">, </span>',
			// ) );

			// if ( '' !== get_the_author_meta( 'description' ) ) {
			// 	get_template_part( 'template-parts/biography' );
			// }
		?>
		<!-- <div class="social">
			<span>SHARE THIS</span>
		</div> -->
		<div class="tags"><span>CATEGORIAS:</span> <?php the_category( ','); ?> </div>
		<div class="tags"><span>TAGS:</span> <?php the_tags( '', ', ', '' ); ?> </div>
	</div>

	<footer class="entry-footer">
		<!-- <?php twentysixteen_entry_meta(); ?> -->
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
