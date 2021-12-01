<?php
/**
 * The template for displaying the footer
 * Contains the closing of the #content div and all content after.
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package roi
 */
?>

	</div><!-- #content -->
				<footer>
				<div class="container">
					<div class="row no-gutters">
						<div class="col-site-map col-12 col-md-6 col-lg-4 mb-5 d-md-none d-lg-block">
							<div class="row">
								<div class="col-6">
									<h3 class="footer__h3Title">Services</h3>
									<ul class="footer-nav">
										<li>
											<a href="/seo/">SEO</a>
										</li>
										<li>
											<a href="/google-ads/">Google Ads</a>
										</li>
										<li>
											<a href="/facebook-advertising/">Social</a>
										</li>
										<li>
											<a href="/programmatic-advertising/">Other Services</a>
										</li>
										<li>
											<a href="/seo-audit/">Free Tools</a>
										</li>

									</ul>
								</div>
								<div class="col-6">
									<h3 class="footer__h3Title">Company</h3>
									<ul class="footer-nav">
										<li>
											<a href="/who-we-are/">Who We Are</a>
										</li>
										<li>
											<a href="/careers/">Careers</a>
										</li>
										<li>
											<a href="/reviews/">Client Reviews</a>
										</li>
										<li>
											<a href="/contact/">Contact</a>
										</li>
										<li>
											<a href="/learning-centre/">Blog</a>
										</li>
										<li>
											<a href="/partners/">Partner with us</a>
										</li>

									</ul>
								</div>
							</div>

							<p class="mt-4 footer__contactDetail">
								<strong>First Page</strong><br/><a href="https://www.google.com/maps/place/First+Page+-+%231+%F0%9F%8F%85Digital+Marketing+%26+SEO+Agency/@-37.8285184,144.997028,15z/data=!4m5!3m4!1s0x0:0xd19eee9ef63d8720!8m2!3d-37.8285485!4d144.99728" title="The SEO Agency Melbourne - Lv 6, 534 Church Street, Cremorne Melbourne VIC 3121">
							<?php the_field('address', 'option'); ?>
							</a>
							</p>
							<p>
								<strong>Call</strong><br/>
								<a href="tel:<?php the_field( 'phone_number', 'option' ); ?>"><?php the_field( 'phone_number', 'option' ); ?></a>
							</p>
							<p class="mb-2">
								<strong>Email</strong><br/>
								<a href="mailto:<?php the_field( 'email', 'option' ); ?>" class="white"><?php the_field( 'email', 'option' ); ?></a>
							</p>
						</div>


						<div
							class="col-contact-details col-12 col-md-6 col-lg-4 mb-5">

							<div class="podcast-holder ">
								<div class="podcast-info-row row ">
									<div class="col-6 pl-2 pr-0">
										<div class="lisnic-photo">
											<img src="/wp-content/themes/firstpage/img/Nick&Lisa@4x.png" class="img-fluid" alt=""/>
										</div>
									</div>
									<div class="col-6 podcast-info pl-0">
										<img src="/wp-content/themes/firstpage/img/img_lisnic_podcast.svg" class="img-fluid" alt=""/>

									</div>
								</div>
								<div class="podcast-links-row row">
									<div class="col-12">
										<a href="https://podcasts.apple.com/au/podcast/lisnic/id1492675735" target="_blank">
											<div class="single-podcast-item">
												<img src="/wp-content/themes/firstpage/img/icon_podcast_apple.svg" class="img-fluid" alt=""/>
												<p>
													<span class="font-weight-bold">Apple</span>
													Podcasts</p>
											</div>
										</a>

										<a href="https://open.spotify.com/show/3ZPhX0JjjnSPlQbj6OHC3v" target="_blank">
											<div class="single-podcast-item">
												<img src="/wp-content/themes/firstpage/img/icon_podcast_spotify.svg" class="img-fluid" alt=""/>
												<p>
													<span class="font-weight-bold">Spotify</span>
													Podcasts</p>
											</div>
										</a>


										<a href="https://www.youtube.com/c/Lisniclearning" target="_blank">
											<div class="single-podcast-item">
												<img src="/wp-content/themes/firstpage/img/icon_channel_youtube.svg" class="img-fluid" alt=""/>
												<p>
													<span class="font-weight-bold">Youtube</span>
													Podcasts</p>
											</div>
										</a>

										<h3 class="mt-5 mb-3 ft-24">Love us as we love you!</h3>

										<div class="social">
											<a href="https://www.facebook.com/FirstPageHK/">
											<img src="/wp-content/themes/firstpage/img/social-facebook.png" class="img-fluid" alt=""/>
											</a>
											<a href="#">
											<img src="/wp-content/themes/firstpage/img/social-googleplus.png" class="img-fluid" alt=""/>
											</a>
											<a href="https://www.linkedin.com/company/firstpage-digital/mycompany/">
											<img src="/wp-content/themes/firstpage/img/social-linkedin.png" class="img-fluid" alt=""/>
											</a>
											<a href="https://www.instagram.com/firstpage.hk/">
											<img src="/wp-content/themes/firstpage/img/social-instagram.png" class="img-fluid" alt=""/>
											</a>
											<a href="#">
											<img src="/wp-content/themes/firstpage/img/social-youtube.png" class="img-fluid" alt=""/>
											</a>
											
											
											
										</div>

									</div>
								</div>

								<div class="py-4">
									<img src="/wp-content/themes/firstpage/img/img-australian-owned-badge.svg" class="img-fluid" alt=""/>
								</div>

								<div>
									<a href="https://au.linkedin.com/company/firstpage-digital" target="_blank"><img src="{{ site.theme.link }}/assets/img/img_connect_with_linkedin.svg" class="img-fluid" alt=""/></a>
								</div>

							</div>
						</div>

						<div class="col-contact-form col-12 col-md-6 col-lg-4 mb-5">
							<h3 class="h3-italic footer-h3-title text-center footer__formH3">We can grow your sales.
								<br class="d-block d-sm-none">Ask us how!</h3>
							<div
								id="footer-form">
								<!-- Footer Form -->
								<form class="fp-form" action="/thank-you" method="POST">
									<div class="form-group mb-0">
										<div class="row">
											<div class="col-12 mb-3">
												<input type="text" class="form-control" name="lead_name" placeholder="Name*" required=""/>
											</div>
										</div>
										<div class="row">
											<div class="col-12 mb-3">
												<input type="email" class="form-control" name="lead_email" placeholder="Email*" data-parsley-error-message="Please enter a valid email address" data-parsley-trigger="change" required=""/>
											</div>
										</div>
										<div class="row">
											<div class="col-12 mb-3">
												<input type="tel" class="form-control" name="lead_phone" placeholder="Phone*" required=""/>
											</div>
										</div>
										<div class="row">
											<div class="col-12 mb-3">
												<textarea class="form-control" name="lead_message" rows="4" placeholder="Message*" required=""></textarea>
											</div>
										</div>
										<div class="row">
											<div class="col-12">
												<input type="hidden" name="lead_formname" value="Contact Us (Footer)"/>
												<input type="hidden" name="lead_language" value="en"/>
												<input type="hidden" name="lead_formtype" value="hs_quote_form"/>
												<button type="submit" data-title="Footer Contact Form" class="btn form-control fp-btn fp-btn-orange fp-btn-shadow form-submit buttonFormClick">Increase My Sales</button>
											</div>
										</div>
									</div>
								</form>
								<!-- End of Form -->
							</div>
						</div>
					</div>
				</div>

				<div class="container d-none d-md-block d-lg-none">

					<div class="row no-gutters">
						<div class="col-4">
							<h3 class="footer__h3Title">Services</h3>
							<ul class="footer-nav">
								<li>
									<a href="/seo/">SEO</a>
								</li>
								<li>
									<a href="/google-ads/">Google Ads</a>
								</li>
								<li>
									<a href="/facebook-advertising/">Social</a>
								</li>
								<li>
									<a href="/programmatic-advertising/">Other Services</a>
								</li>
								<li>
									<a href="/seo-audit/">Free Tools</a>
								</li>

							</ul>
						</div>

						<div class="col-4">

							<h3 class="footer__h3Title">Company</h3>
							<ul class="footer-nav">
								<li>
									<a href="/who-we-are/">Who We Are</a>
								</li>
								<li>
									<a href="/careers/">Careers</a>
								</li>
								<li>
									<a href="/reviews/">Client Reviews</a>
								</li>
								<li>
									<a href="/contact/">Contact</a>
								</li>
								<li>
									<a href="/learning-centre/">Blog</a>
								</li>
								<li>
									<a href="/partners/">Partner with us</a>
								</li>


							</ul>

						</div>

						<div class="col-4">

							<p class="mt-4">
								<strong>First Page</strong><br/><a href="https://www.google.com/maps/place/First+Page+-+%231+%F0%9F%8F%85Digital+Marketing+%26+SEO+Agency/@-37.8285184,144.997028,15z/data=!4m5!3m4!1s0x0:0xd19eee9ef63d8720!8m2!3d-37.8285485!4d144.99728">
								<?php the_field('address', 'option'); ?></a>
							</p>
							<p>
								<strong>Call</strong><br/>
								<a href="tel:<?php the_field('phone_number', 'option'); ?>"><?php the_field('phone_number', 'option'); ?></a>
							</p>
							<p class="mb-2">
								<strong>Email</strong><br/>
								<a href="mailto:<?php the_field('email', 'option'); ?>" class="white"><?php the_field('email', 'option'); ?></a>
							</p>

						</div>
					</div>

				</div>

			</footer>
			<section class="copyright">
				<div class="container">
					<div class="row align-items-center no-gutters">
						<div class="text col-12 col-md-4">
							
								Copyright &copy;
								<?php echo date("Y"); ?>
								First Page.
							<br>
							<a href="/terms-of-business/">Terms of Business</a>
						</div>
						<div class="logos col-12 col-md-8">
							<img src="/wp-content/themes/firstpage/img/logo_content_king_certified_partner.svg" class="img-fluid" alt=""/>
							<img src="/wp-content/themes/firstpage/img/logo-googlepartner.png" class="img-fluid" alt=""/>
							<img src="/wp-content/themes/firstpage/img/logo-hubspot.png" class="img-fluid" alt=""/>
							<img src="/wp-content/themes/firstpage/img/facebookmarketing.png" class="img-fluid" alt=""/>
						</div>
					</div>
				</div>
			</section>
</div><!-- #page -->

<?php get_template_part( 'template-parts/sticky-footer/sticky-footer' ); ?>
	


<?php wp_footer(); ?>

<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://unpkg.com/tippy.js@6"></script>

</body>
</html>
