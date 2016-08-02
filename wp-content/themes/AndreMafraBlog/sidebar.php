<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1' )  ) :

		$siteurl = get_site_url();
		$postid = url_to_postid( $siteurl.'/about' );
		?>
		<div class="widget">
		 <div class="titulo">Autor</div>
		 <?php
		 //get_post_thumbnail_id( $post_id->$postid );
		 echo "<div class='content about'>";
		$the_query = new WP_Query( 'page_id='.$postid );

			while ($the_query -> have_posts()) : $the_query -> the_post();
											 echo get_the_post_thumbnail($post->ID,'medium',array( 'class' =>'img-responsive'));
											 echo "<h4>Andre Mafra</h4>";
                       the_excerpt();
			endwhile;

		 echo "</div>";
		 ?>
		</div>
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
<?php endif; ?>
