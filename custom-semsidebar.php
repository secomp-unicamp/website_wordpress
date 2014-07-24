<?php
/*
Template Name: Sem Sidebar
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="container_16">

					<div id="main" class="grid_16" role="main">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('grid_16 alpha omega post-single'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">
									<h1 class="entry-title single-title title-left" itemprop="headline"><?php the_title(); ?></h1>
								</header> <!-- end article header -->

								<section class="entry-content clearfix" itemprop="articleBody">
									<?php the_content(); ?>
								</section> <!-- end article section -->
								<?php if ( is_active_sidebar( 'sidebar5' )) : ?>								
								<footer>
									<?php dynamic_sidebar( 'sidebar5' ); ?>
								</footer> <!-- end article footer -->
								<?php endif; ?>

							</article> <!-- end article -->

						<?php endwhile; ?>

						<?php else : ?>

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