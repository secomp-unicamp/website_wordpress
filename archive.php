<?php get_header(); ?>

			<?php if ( is_active_sidebar( 'sidebar2' ) || is_active_sidebar( 'sidebar3' ) || is_active_sidebar( 'sidebar4' )) : ?>

			<div id="partner">
			
				<div id="inner-partner" class="container_16">
				
						<div id="main-partner" class="grid_8"><?php dynamic_sidebar( 'sidebar2' ); ?></div>
						
						<div id="other-partner" class="grid_8">
							
							<div class="grid_8 alpha omega"><?php dynamic_sidebar( 'sidebar3' ); ?></div>
							
							<div class="grid_8 alpha omega"><?php dynamic_sidebar( 'sidebar4' ); ?></div>
						
						</div>

				</div>

			</div>

			<?php endif; ?>
			<div id="highlight">
				<div class="content-divisor white"></div>
				<div id="inner-highlight" class="container_16">
					<a class="highlight-control left grid_1"></a>
					<div class="highlight-boxholder grid_14">
					<?php
						global $post;
						$args = array('posts_per_page' => 50,'category' => 2);
						$highlight = get_posts( $args );
					?>
						<ul style='width:<?php echo count($highlight)*205; ?>px;'>
						<?php foreach( $highlight as $post ) : setup_postdata($post); ?>
							<li class="highlight-box">
								<div class="highlight-photo">
									<a href="<?php the_permalink(); ?>"><img src="<?php echo get_post_meta(get_the_ID(),"image",true); ?>"/></a>
								</div>
								<div class="highlight-title"><?php echo get_post_meta(get_the_ID(),"title",true); ?></div>
								<div class="highlight-subtitle"><?php echo get_post_meta(get_the_ID(),"subtitle",true); ?></div>
								<div class="highlight-more"><a href="<?php the_permalink(); ?>">Saiba Mais</a></div>
							</li>					
						<?php endforeach;?>
						</ul>
					</div>
					<a class="highlight-control right grid_1"></a>
				</div>
			</div>
			<div class="content-divisor red"></div>

			<div id="content">

				<div id="inner-content">

					<div id="main" class="container_16" role="main">

							<h1 class="title-left grid_16">
							<?php if (is_category()) {
									single_cat_title();
								} elseif (is_tag()) { 
									single_tag_title();
								} elseif (is_author()) {
									global $post;
									$author_id = $post->post_author;
									the_author_meta('display_name', $author_id);
								} elseif (is_day()) {
									the_time('l, F j, Y');
								} elseif (is_month()) {
										the_time('F Y');
								} elseif (is_year()) {
										the_time('Y');
								} ?>
							</h1>
							<?php
								if (have_posts()) :
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
