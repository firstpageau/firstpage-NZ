<?php get_header(); ?>
	<section class="pad-header"></section>

	<section id="details" class="section-job section-grey no-border">
		<div
			class="container mob-center">
			<div class="div-view-all">
				<a href="/careers/#vacancies" class="view-all">
					<i class="fa fa-caret-left" aria-hidden="true"></i>
					View All Vacancies</a>
			</div>
			<div class="row">
				<div class="col-12 col-xl-8 mb-5">
					<div class="blog-content">
						<div class="post-content">
							<?php
							while ( have_posts() ) : the_post();
								get_template_part( 'template-parts/job', get_post_type() );
							endwhile;
							?>
						</div>
					</div>
				</div>

				<div class="col-12 col-xl-4 mb-5">
					<div class="related-articles other-vacancies">
						<h2>Other Vacancies</h2>
						<ul>
							<?php
							$jobs = get_job_listings();

							if ( $jobs->have_posts() ) {

								while ( $jobs->have_posts() ) : $jobs->the_post();
								?>
								<li><a href="<?php the_job_permalink() ?>"><?php wpjm_the_job_title(); ?></a></li>
								<?php
								endwhile;

							}
							else {
								?>
								<li>No jobs available.</li>
								<?php
							}

							wp_reset_postdata();
							?>
						</ul>
						<a href="/careers/" class="view-all">View All
							<i class="fa fa-caret-right" aria-hidden="true"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section-background text-center py-5">
		<div class="container container-single-image">
			<img src="/wp-content/themes/firstpage/img/who_we_are_group_md_new_update.png" class="img-fluid d-none d-md-block d-lg-none mx-auto" alt="First Page"/>
			<img src="/wp-content/themes/firstpage/img/who_we_are_group_lg_new_update.png" class="img-fluid d-none d-lg-block mt-5 mx-auto" alt="First Page"/>
		</div>
		<img src="/wp-content/themes/firstpage/img/who_we_are_group_sm_new_update.png" class="img-fluid d-md-none mt-5" alt="First Page"/>
	</section>
<?php get_footer();