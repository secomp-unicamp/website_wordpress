<?php
/*
Template Name: Palestras
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

									<article class="atividade_wrapper">
									   <ul class="UL_2">
									      <li class="LI_3">
									         <a href="http://eventmanagerblog.com/januas-demo/?s=&amp;event-category[]=14" class="A_4">Palestra</a>
									      </li>
									      <li class="LI_5">
									      </li>
									   </ul>
									   <header class="atividade_titulo_wrapper">
									      <h1 class="atividade_titulo">
									         <a href="http://eventmanagerblog.com/januas-demo/events/workshop/" rel="bookmark" title="The Workshop" class="link">A Computação na Sociedade</a>
									      </h1>
									      
									         <div class="icon"><div class="location"></div></div> 
									         Data:
									         <time class="data">
									         11 de Agosto de 2014, às 10:00
									         </time>
									      <br/>
									      
									        <div class="icon"><div class="clock"></div></div> 
									        Onde:
									         <time class="local">
									         FE 12 - FEEC
									         </time>
									     
									   </header>
									   <!-- end article header -->
									   <section class="image_thumb">
									      <a href="http://eventmanagerblog.com/januas-demo/events/workshop/" class="A_12"><img width="306" height="306" src="http://eventmanagerblog.com/januas-demo/wp-content/uploads/2013/02/6111025648_63967073a4_b-306x306.jpg" alt="6111025648_63967073a4_b" class="IMG_13" /></a>
									   </section>
									   <!-- end article section -->
									   <footer class="buttons_wrapper">
									      <p class="buttons">
									         <a href="#" class="share_btn">COMPARTILHE</a> <a href="http://eventmanagerblog.com/januas-demo/events/workshop/" class="seemore_btn">VER MAIS</a>
									      </p>
									      <div class="DIV_18">
									         <div class="DIV_21">
									         </div>
									      </div>
									   </footer>
									   <!-- end article footer -->
									   <img src="http://eventmanagerblog.com/januas-demo/wp-content/themes/januas/lib/images/sold_out_three-columns.png" alt="Sold Out" class="IMG_23" /><img src="http://eventmanagerblog.com/januas-demo/wp-content/themes/januas/lib/images/ended_three-columns.png" alt="Ended" class="IMG_24" />
									</article>

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