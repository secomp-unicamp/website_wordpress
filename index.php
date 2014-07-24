<?php
get_header();
?>

<!-- Slider  -->
<div id ="slider">

	<div id="slider-inner"  class="container_16">
		<?php
echo do_shortcode("[metaslider id=970]");
?>
	</div>
</div>

<!--  SECOMP.NOW -->

<?php
if (is_active_sidebar('sidebar2') || is_active_sidebar('sidebar3') || is_active_sidebar('sidebar4')):
?>

<?php
endif;
?>

<!-- Divisor  -->
<!-- 	
<div class="content-divisor red"></div> 
-->
	<!-- Principal  -->
	<div id="content">

		<div id="inner-content">

			<div id="main" class="container_16" role="main">

				<h1 class="title-left grid_8">Cronograma</h1>

				<h1 class="title-right grid_8">Últimas Notícias</h1>

				<!-- CRONOGRAMA -->
				
				<div class="grid_8">
				<div class="grid_8 unavailable"><p>Aguarde<br/>Em breve!</p></div>
					<div id="ai1ec-calendar" class="grid_8">
						<div id="ai1ec-calendar-view-container">
							<div id="ai1ec-calendar-view">
								<div class="ai1ec-clearfix">
									<h2 class="ai1ec-calendar-title">11 de Agosto de 2014</h2>
									<div class="ai1ec-title-buttons ai1ec-btn-toolbar ai1ec-pull-right">

										<div class="ai1ec-pagination ai1ec-btn-group">
											<a class="ai1ec-prev-day ai1ec-load-view ai1ec-btn ai1ec-btn-default
											" data-type="json" href="http://localhost/wordpress/?page_id=93&amp;ai1ec=action~oneday|exact_date~1407639600">
											<i class="ai1ec-fa ai1ec-fa-chevron-left"></i>
										</a>
										<!-- LINK PARA O CRONOGRAMA -->
										<a class="ai1ec-minical-trigger ai1ec-btn ai1ec-btn-default" data-date="11/8/2014" data-date-format="d/m/yyyy" data-date-weekstart="0" href="#" data-href="http://localhost/wordpress/?page_id=93&amp;ai1ec=action~oneday|exact_date~__DATE__" data-type="json">
											<img src="http://localhost/wordpress/wp-content/plugins/all-in-one-event-calendar/public/themes-ai1ec/vortex//img/date-icon.png" class="ai1ec-icon-datepicker" alt="Choose a date using calendar">
										</a>

										<a class="ai1ec-next-day ai1ec-load-view ai1ec-btn ai1ec-btn-default
										" data-type="json" href="http://localhost/wordpress/?page_id=93&amp;ai1ec=action~oneday|exact_date~1407812400">
										<i class="ai1ec-fa ai1ec-fa-chevron-right"></i>
									</a>
								</div>
							</div>
						</div>

						<div class="ai1ec-oneday-view ai1ec-popover-boundary">
							<table class="tablescroll_head" cellspacing="0" style="width: 280px">
								<thead>
									<tr>
										<th class="ai1ec-weekday">
											<span class="ai1ec-weekday-date">11</span>
											<span class="ai1ec-weekday-day">SEGUNDA-FEIRA</span>

										</th>
									</tr>
									<tr>

									</tr>
								</thead>
							</table>

							<div class="tablescroll_wrapper ai1ec-popover-boundary" style="width: 578px; height: 840px;">

								<table class="ai1ec-oneday-view-original tablescroll_body" style="width: 565px;">

									<tbody>
										<tr class="ai1ec-oneday">
											<td>

												<div class="ai1ec-grid-container">
													<div class="ai1ec-hour-marker ai1ec-business-hour ai1ec-first-visible" style="top: 0px;">
														<div>09:00</div>
													</div>
													<div class="ai1ec-quarter-marker" style="top: 15px;"></div>
													<div class="ai1ec-quarter-marker" style="top: 30px;"></div>
													<div class="ai1ec-quarter-marker" style="top: 45px;"></div>
													<div class="ai1ec-hour-marker ai1ec-business-hour" style="top: 60px;">
														<div>10:00</div>
													</div>
													<div class="ai1ec-quarter-marker" style="top: 60px;">
														<!-- START: Minicurso WTD -->
														<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-lg-offset-3 event orange dur-half popover-dismiss" style="height:180px; width:200px;">
															<div class="event-time">10:00 am</div>
															<div class="event-name">Minicursos WTD</div>
														</div>
														<div class="popover-title" style="display: none">
															<div class="event-popover-title">Minicursos WTD</div>
														</div>
														<div class="popover-content" style="display: none">
															<div class="popover-inner-content">
																<img src="bootstrap/Bob.png" class="img-circle popover-img" style="height:100px; width:100px; clip: rect(110px, 160px, 170px, 60px); "alt=""/>
																<div class="popover-info">
																	<span><b>Palestrante:</b> Bob Mendes</span><br/>
																	<span><b>Local:</b> Sala 323 - IC</span><br/>
																	<span><b>Horário:</b> 10:00 às 32:00</span>
																</div>
																<div class="see-more"><a href="#">mais »</a></div>
															</div>
														</div>
														<!-- END: Minicurso WTD -->
													</div>

													<div class="ai1ec-quarter-marker" style="top: 75px;">
													</div>
													<div class="ai1ec-quarter-marker" style="top: 90px;">
														<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 event green dur-half popover-dismiss" style="height:180px; width:200px;">
															<div class="event-time">10:30 am</div>
															<div class="event-name">Credenciamento</div>
														</div>
													</div>
													<div class="ai1ec-quarter-marker" style="top: 105px;"></div>
													<div class="ai1ec-hour-marker ai1ec-business-hour" style="top: 120px;">
														<div>11:00</div>
													</div>
													<div class="ai1ec-quarter-marker" style="top: 135px;"></div>
													<div class="ai1ec-quarter-marker" style="top: 150px;"></div>
													<div class="ai1ec-quarter-marker" style="top: 165px;"></div>
													<div class="ai1ec-hour-marker  ai1ec-business-hour" style="top: 180px;">
														<div>12:00</div>
													</div>
													<div class="ai1ec-quarter-marker" style="top: 195px;"></div>
													<div class="ai1ec-quarter-marker" style="top: 210px;"></div>
													<div class="ai1ec-quarter-marker" style="top: 225px;"></div>
													<div class="ai1ec-hour-marker ai1ec-business-hour" style="top: 240px;">
														<div>13:00</div>
													</div>
													<div class="ai1ec-quarter-marker" style="top: 240px;"></div>
													<div class="ai1ec-quarter-marker" style="top: 255px;"></div>
													<div class="ai1ec-quarter-marker" style="top: 270px;"></div>
													<div class="ai1ec-quarter-marker" style="top: 285px;"></div>
													<div class="ai1ec-hour-marker ai1ec-business-hour" style="top: 300px;">
														<div>14:00</div>
													</div>
													<div class="ai1ec-quarter-marker" style="top: 300px;"></div>
													<div class="ai1ec-quarter-marker" style="top: 315px;"></div>
													<div class="ai1ec-quarter-marker" style="top: 330px;"></div>
													<div class="ai1ec-quarter-marker" style="top: 345px;"></div>
													<div class="ai1ec-hour-marker ai1ec-business-hour" style="top: 360px;">
														<div>15:00</div>
													</div>
													<div class="ai1ec-quarter-marker" style="top: 360px;"></div>
													<div class="ai1ec-quarter-marker" style="top: 375px;"></div>
													<div class="ai1ec-quarter-marker" style="top: 390px;"></div>
													<div class="ai1ec-quarter-marker" style="top: 405px;"></div>
													<div class="ai1ec-hour-marker ai1ec-business-hour" style="top: 420px;">
														<div>16:00</div>
													</div>
													<div class="ai1ec-quarter-marker" style="top: 420px;"></div>
													<div class="ai1ec-quarter-marker" style="top: 435px;"></div>
													<div class="ai1ec-quarter-marker" style="top: 450px;"></div>
													<div class="ai1ec-quarter-marker" style="top: 465px;"></div>
													<div class="ai1ec-hour-marker ai1ec-business-hour" style="top: 480px;">
														<div>17:00</div>
													</div>
													<div class="ai1ec-quarter-marker" style="top: 480px;"></div>
													<div class="ai1ec-quarter-marker" style="top: 495px;"></div>
													<div class="ai1ec-quarter-marker" style="top: 510px;"></div>
													<div class="ai1ec-quarter-marker" style="top: 525px;"></div>
													<div class="ai1ec-hour-marker ai1ec-business-hour" style="top: 540px;">
														<div>18:00</div>
													</div>
													<div class="ai1ec-quarter-marker" style="top: 540px;"></div>
													<div class="ai1ec-quarter-marker" style="top: 555px;"></div>
													<div class="ai1ec-quarter-marker" style="top: 570px;"></div>
													<div class="ai1ec-quarter-marker" style="top: 585px;"></div>
													<div class="ai1ec-hour-marker ai1ec-business-hour" style="top: 600px;">
														<div>19:00</div>
													</div>
													<div class="ai1ec-quarter-marker" style="top: 600px;"></div>
													<div class="ai1ec-quarter-marker" style="top: 615px;"></div>
													<div class="ai1ec-quarter-marker" style="top: 630px;"></div>
													<div class="ai1ec-quarter-marker" style="top: 645px;"></div>
													<div class="ai1ec-hour-marker ai1ec-business-hour" style="top: 660px;">
														<div>20:00</div>
													</div>
													<div class="ai1ec-quarter-marker" style="top: 660px;"></div>
													<div class="ai1ec-quarter-marker" style="top: 675px;"></div>
													<div class="ai1ec-quarter-marker" style="top: 690px;"></div>
													<div class="ai1ec-quarter-marker" style="top: 702px;"></div>
													<div class="ai1ec-hour-marker ai1ec-business-hour" style="top: 720px;">
														<div>21:00</div>
													</div>
													<div class="ai1ec-quarter-marker" style="top: 720px;"></div>
													<div class="ai1ec-quarter-marker" style="top: 735px;"></div>
													<div class="ai1ec-quarter-marker" style="top: 750px;"></div>
													<div class="ai1ec-quarter-marker" style="top: 765px;"></div>
													<div class="ai1ec-hour-marker ai1ec-business-hour" style="top: 780px;">
														<div>22:00</div>
													</div>
													<div class="ai1ec-quarter-marker" style="top: 780px;"></div>
													<div class="ai1ec-quarter-marker" style="top: 795px;"></div>
													<div class="ai1ec-quarter-marker" style="top: 810px;"></div>
													<div class="ai1ec-quarter-marker" style="top: 825px;"></div>

												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div> <!-- end table scrollwrapper -->
						</div>  <!-- end cronograma --> 
					</div> <!-- end main -->
				</div> <!-- end inner content -->
			</div>
		</div>

				<div id="popover_content_wrapper_title" style="display: none">
					<div class="event-popover-title"> Hackathon do Site </b>
					</div>
				</div>


				<!-- NEWS -->
				<div class="grid_8">

					<?php if (have_posts()):    
					$position = 0;
					while (have_posts()):the_post();
					$position++;

					?>

					<article id="post-<?php the_ID();?>" <?php  post_class("grid_8 post-index");?> role="article">

						<!-- thumbnail  -->
						<?php
		/*
        if (has_post_thumbnail() && is_home()):
            the_post_thumbnail();
        endif;
		// */
        ?>
        <!-- end thumbnail -->

        <header class="article-header news">

        	<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"> <?php the_title(); ?></a></h1>

        	</header> <!-- end article header -->

        	<section class="entry-content clearfix">

        		<!-- article desc -->	
        		<?php
					/*
				        the_content();
				    // */
				        ?>  
				        <!-- end article desc -->

				    </section> <!-- end article section -->


							<!--
							<footer class="article-footer">
							
							</footer> --> <!-- end article footer -->

							<!-- article comments -->
							<?php 
							/* 
							comments_template(); // uncomment if you want to use them 
							// */
							?>


						</article> <!-- end article -->

						<?php
						endwhile;
						?>

					</div>

					<!-- post pages navigation -->
					<?php
					if (function_exists('bones_page_navi')) {
						?>

						<?php
						bones_page_navi();
						?>

						<?php
					} else {
						?>

						<nav class="wp-prev-next">

							<ul class="clearfix">

								<li class="prev-link"><?php
									next_posts_link(__('&laquo; Anterior', "bonestheme"));
									?></li>

									<li class="next-link"><?php
										previous_posts_link(__('Próximo &raquo;', "bonestheme"));
										?></li>

									</ul>

								</nav>

								<?php
							}
							?>



							<?php
							else:
								?>



							<article id="post-not-found" class="hentry clearfix">

								<header class="article-header">

									<h1><?php
										_e("Não há publicações", "bonestheme");
										?></h1>

									</header>

									<section class="entry-content">

										<p><?php
											_e("Uh Oh. Alguma coisa está faltando. Tente checar se o endereço está correto.", "bonestheme");
											?></p>

										</section>

									</article>



									<?php
									endif;
									?>



								</div> <!-- end #main -->



		<?php //get_sidebar(); 
		?>



	</div> <!-- end #inner-content -->



</div> <!-- end #content -->



<div id="partner">

	<div id="inner-partner" class="container_16">

		<div id="main-partner" class="grid_8"><?php
			dynamic_sidebar('sidebar2');
			?></div>

			<div id="other-partner" class="grid_8">

				<div class="grid_8 alpha omega"><?php
					dynamic_sidebar('sidebar3');
					?></div>

					<div class="grid_8 alpha omega"><?php
						dynamic_sidebar('sidebar4');
						?></div>

					</div>

				</div>



			</div>

			<script>
				var showPopover = function () {
					$(this).popover('show');
				}
				, hidePopover = function () {
					$(this).popover('hide');
				};

				$(document).ready(function(){
					$('.popover-dismiss').popover({trigger: 'manual', 
						html: true,  
						title: function() {
							return $(this).next('.popover-title').html();
						},
						content: function() {
							return $(this).next('.popover-title').next('.popover-content').html();
						}}).click(showPopover);
				});

				/* Hides popover if the users click somewhere else */
				$('html').on('mouseup', function(e) {
					if(!$(e.target).closest('.popover').length) {
						$('.popover').each(function(){
							$(this.previousSibling).popover('hide');
						});
					}
				});

			</script>


<?php
get_footer();
?>
