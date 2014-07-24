<?php get_header(); ?>

			<div id="content">

				<div id="inner-content">

					<div id="main" class="container_16" role="main">

							<?php if (have_posts()) : ?>
							
							<h1 class="title-left grid_16"><?php echo single_cat_title("",false); ?></h1>
							
							<?php 
								$position = 0;
								while (have_posts()) : the_post();
									$position++;
							?>

							<article id="post-<?php the_ID(); ?>" <?php post_class("grid_8 post-index"); ?> role="article">
							
								<?php if(has_post_thumbnail() && is_home()): the_post_thumbnail(); endif; ?>

								<header class="article-header">

									<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>

								</header> <!-- end article header -->

								<section class="entry-content clearfix">
									<?php the_content(); ?>
								</section> <!-- end article section -->

								<footer class="article-footer">
									
								</footer> <!-- end article footer -->

								<?php // comments_template(); // uncomment if you want to use them ?>

							</article> <!-- end article -->
							
							<?php if(($position%2)==0): ?>
								<div class="clearfix"></div>
							<?php endif; endwhile; ?>

									<?php if (function_exists('bones_page_navi')) { ?>
											<?php bones_page_navi(); ?>
									<?php } else { ?>
											<nav class="wp-prev-next">
													<ul class="clearfix">
														<li class="prev-link"><?php next_posts_link(__('&laquo; Anterior', "bonestheme")) ?></li>
														<li class="next-link"><?php previous_posts_link(__('Próximo &raquo;', "bonestheme")) ?></li>
													</ul>
											</nav>
									<?php } ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry clearfix">
											<header class="article-header">
												<h1><?php _e("Oops, Publicação Não Encontrada!", "bonestheme"); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e("Uh Oh. Alguma coisa está faltando. Tente checar se o endereço está correto.", "bonestheme"); ?></p>
										</section>
									</article>

							<?php endif; ?>

						</div> <!-- end #main -->

						<?php //get_sidebar(); ?>

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
