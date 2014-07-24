<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="container_16">

					<div id="main" class="grid_16" role="main">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class('grid_16 alpha omega post-single'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
							<header class="article-header">
									<div class="destaque-wrapper">

										<div class="destaque destaque-960">
												<!-- thumbnail -->
										<?php

										if (has_post_thumbnail()):
											the_post_thumbnail('bones-thumb-960');
											endif;					
										?>
											<div class="destaque-titulo">												
												<div class="destaque-cat"> 
													<?php the_category() ?> <!-- post category  -->
													<br>
												</div>

												<h1 class="single-title title-left title-post entry-title" itemprop="headline"><?php the_title(); ?></h1> <!-- post title  -->
											</div>

										</div>
									</div>
								</header> <!-- end article header -->

								<section class="entry-content clearfix" itemprop="articleBody">
									<?php the_content(); ?>
								</section> <!-- end article section -->
									<p class="byline vcard text-right">
												<?php
													printf(__('<time class="date updated" datetime="%1$s" pubdate>%2$s</time> - Por <span class="vcard author">%3$s</span>.', 'bonestheme'), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), bones_get_the_author_posts_link());
												?></p>
								<?php if ( is_active_sidebar( 'sidebar5' )) : ?>								
								<footer>
									<?php dynamic_sidebar( 'sidebar5' ); ?>
								</footer> <!-- end article footer -->
								<?php endif; ?>

							</article> <!-- end article -->

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry clearfix">
										<header class="article-header">
											<h1><?php _e("Oops, Publicação não encontrada!", "bonestheme"); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e("Uh Oh. Algo está faltando...", "bonestheme"); ?></p>
										</section>
									</article>

							<?php endif; ?>

						</div> <!-- end #main -->

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
