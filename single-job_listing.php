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
							{% if listings|length > 0 %}
								{% for job in listings %}
									<li>
										<a href="{{ job.link }}">{{ job.title }}</a>
									</li>
								{% endfor %}
							{% else %}
								<li>-</li>
							{% endif %}
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
		<img src="{{ site.theme.link }}/assets/img/who_we_are_group_md_update.png" srcset="{{ site.theme.link }}/assets/img/who_we_are_global_md_update.png, {{ site.theme.link }}/assets/img/who_we_are_global_md_update.png 2x" class="img-fluid d-none d-md-block d-lg-none mx-auto" alt="First Page"/>
		<img src="{{ site.theme.link }}/assets/img/who_we_are_group_lg_new_update.png" srcset="{{ site.theme.link }}/assets/img/who_we_are_group_lg_new_update.png, {{ site.theme.link }}/assets/img/who_we_are_group_lg_new_update.png 2x" class="img-fluid d-none d-lg-block mt-5 mx-auto" alt="First Page"/>
		<img src="{{ site.theme.link }}/assets/img/who_we_are_group_sm_new_update.png" srcset="{{ site.theme.link }}/assets/img/who_we_are_group_sm_new_update.png, {{ site.theme.link }}/assets/img/who_we_are_group_sm_new_update.png 2x" class="img-fluid d-md-none mt-5" alt="First Page"/>
	</section>
<?php get_footer();