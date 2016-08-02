<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<div class="container home-page">

			<!-- Carousel -->
			<div class="row">
	      <section class="col-md-12 banner">
	        <!-- Carouse -->
	        <div class="owl-carousel">
							<?php
							$args = array( 'post_type' => 'slider', 'posts_per_page' => 10 );
							$loop = new WP_Query( $args );
							while ( $loop->have_posts() ) : $loop->the_post();
								$imagem = get_post_meta( get_the_ID(), '_wiki_test_image', true );
								$linhafina = get_post_meta( get_the_ID(), '_wiki_test_linhafina', true );
								$link = get_post_meta( get_the_ID(), 'prefix_related_post', true );
								$linkUrl = get_page_link($link);
								if ( ! empty($imagem) ){
									echo "<div class='item' style='background-image:url($imagem)'>";
								} else {
									echo "<div class='item'>";
								};
								if ( ! empty($link) ){
									echo "<a class='link' href='$linkUrl'></a>";
								};
								echo "<div class='content'>";
								the_title('<h1>','</h1>');
								the_date('d/m/y','<h6 class="data">','</h6>');
								if ( ! empty($linhafina) ){
									echo $linhafina;
								} else {
									echo '';
								};
								//echo '<div class="coments">0 comentário</div>';
								echo '</div></div>';
							endwhile;

							 ?>
	        </div>
	        <!-- End Carousel -->
	      </section>
			</div>





			<div class="row">
	      <section class="col-md-9 post-loop">
	          <div class="row">
	            <div class="col-md-12 section-titulo">Últimos posts</div>
	          </div>

						<?php if ( have_posts() ) : ?>
								<?php
								$r = 0;
								while ( have_posts() ) : the_post();
									$linkUrl = get_page_link($post->ID);
									$url =get_post_meta( get_the_ID(), '_wiki_test_embed', true );


									if($r==0){
										echo "<div class='row posts'>";
									}
										echo " <div class='col-md-4 post'>";
										if ( has_post_thumbnail() ) {
													?>
													<a href="<?php echo $linkUrl ?>"><div class='img' style='background-image:url(<?php echo the_post_thumbnail_url( 'medium' ) ?>)'></div></a>
													<?php
											}
										?>
											<div class="content">
												<?php
															echo "<h6 class='data'>";
															echo get_the_date('d/m/y',$post->ID);
															echo "</h6>";
															echo "<a href='$linkUrl'>";
															the_title("<h4 class='titulo'>","</h4>");
															echo "</a>";
															the_excerpt();
															echo "<div class='coments'>";
															comments_number( 'Sem comentários', '1 comentário', '% comentários' );
															echo "</div>"; //comentarios
												?>
											</div>

										<?php
										echo " </div>";
									if($r==2){
										//close row
										echo "</div>";
										$r = -1;
									}
									$r++;
								// End the loop.
								endwhile;
								if($r!=0){
									echo "</div>";
								}
								 ?>

						<?php endif; ?>

						<div class="row new-line">
	            <div class="col-md-12 section-titulo">Especiarias na História</div>
	          </div>

						<?php if ( have_posts() ) : ?>
								<?php
								$argsEspHist = array( 'post_type' => 'EspeciariasHistoria', 'posts_per_page' => 8 );
								$loopEspHist = new WP_Query( $argsEspHist );

								$r = 0;
								while ( $loopEspHist->have_posts() ) : $loopEspHist->the_post();
									$linkUrl = get_page_link($post->ID);
									$url =get_post_meta( get_the_ID(), '_wiki_test_embed', true );


									if($r==0){
										echo "<div class='row posts blue-wrap'>";
									}
										echo " <div class='col-md-3 post'>";
										if ( has_post_thumbnail() ) {
													?>
													<a href="<?php echo $linkUrl ?>"><div class='img' style='background-image:url(<?php echo the_post_thumbnail_url( 'medium' ) ?>)'></div></a>
													<?php
											}
										?>
											<div class="content">
												<?php
															echo "<h6 class='data'>";
															echo get_the_date('d/m/y',$post->ID);
															echo "</h6>";
															echo "<a href='$linkUrl'>";
															the_title("<h4 class='titulo'>","</h4>");
															echo "</a>";
															the_excerpt();

															echo "<div class='coments'>";
															comments_number( 'Sem comentários', '1 comentário', '% comentários' );
															echo "</div>"; //comentarios
												?>
											</div>

										<?php
										echo " </div>";
									if($r==3){
										//close row
										echo "</div>";
										$r = -1;
									};
									$r++;
								// End the loop.
								endwhile;
								if($r!=0){
									echo "</div>";
								}
								 ?>

						<?php endif; ?>

						<div class="row new-line">
	          </div>
						<div class="row posts">
						<div class="col-md-6">

							<?php
							$siteurlo = get_site_url();
							$postido = url_to_postid( $siteurlo.'/especiarias-por-ordem' );
							$the_query_o = new WP_Query( 'page_id='.$postido );

								while ($the_query_o -> have_posts()) : $the_query_o -> the_post();
																the_title("<a href='/especiariasordem'><h1>",'</h1></a>');
																echo "<div class='row'>";
																echo "<div class='col-md-10 col-md-offset-2'>";
					                      the_content();
																echo "</div></div>";
								endwhile;
							 ?>

							</div>
						<div class="col-md-6">
							<?php
							$argsEspOrdem = array( 'post_type' => 'EspeciariasOrdem', 'posts_per_page' => 8 );
							$loopEspOrdem = new WP_Query( $argsEspOrdem );

							while ( $loopEspOrdem->have_posts() ) : $loopEspOrdem->the_post();
									$linkUrlO = get_permalink();

									?>
									<div class="content">
										<?php

													echo "<a href='$linkUrlO'>";
													the_title("<h4 class='titulo'>","</h4>");
													echo "</a>";

										?>
									</div>

									<?php
							// End the loop.
							endwhile;
							 ?>
							 <a href="<?php echo $siteurlo.'/especiarias-por-ordem' ?>">Vejam mais</a>
						 </div>
						</div>


	      </section>


	      <sidebar class="col-md-2 col-md-offset-1 sidebar">
					<?php get_sidebar(); ?>
	      </sidebar>
	    </div>


		</div>

	</div><!-- container home-page -->


<?php get_footer(); ?>
