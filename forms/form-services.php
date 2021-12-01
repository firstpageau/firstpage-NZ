<?php $form_page = ((empty($form_page)) ? ('General') : ($form_page)); ?>
<?php $form_button = ((empty($form_button)) ? ('Free SEO Quote') : ($form_button)); ?>
<?php $form_hs = ((empty($form_hs)) ? ('hs_quote_form') : ($form_hs)); ?>
<?php $form_thankyou = ((empty($form_thankyou)) ? ('thank-you') : ($form_thankyou)); ?>
<?php $form_website_placeholder = ((empty($form_website_placeholder)) ? ('Enter your website') : ($form_website_placeholder)); ?>

<div class="quote-form quote-form-big">
	<!-- Quote Form -->
	<form class="fp-form" action="<?php echo $home_url; ?><?php echo $form_thankyou; ?>" method="POST">
		<div class="form-step-1 form-step">
				<div class="input-group">
						<div class="select-container form-control">
							<select class="form-control" name="lead_interest">
								<option value="I need more traffic to my website">I need more traffic to my website</option>
								<option value="I need more customers">I need more customers</option>
								<option value="I need more leads">I need more leads</option>
								<option value="I need more sales">I need more sales</option>
								<option value="I need help with brand awareness">I need help with brand awareness</option>
								<option value="All of the above">All of the above</option>
							</select>
						</div>
						<div class="input-group-btn">
							<button type="button" class="btn fp-btn fp-btn-orange form-continue">Get A Free Quote</button>
						</div>
					</div>
		</div>
		<div class="form-step-2 form-step">
			<p class="text-center step-2-title">Please enter your details.</p>
			<div class="row">
				<div class="col-12 col-md-6">
					<input type="text" class="form-control" name="lead_name" placeholder="First Name*" required=""/>
				</div>
				<div class="col-12 col-md-6">
					<input type="tel" class="form-control" name="lead_phone" placeholder="Phone*" required=""/>
				</div>
				<div class="col-12 col-md-6">
					<input type="email" class="form-control" name="lead_email" placeholder="Email*" data-parsley-error-message="Please enter a valid email address" data-parsley-trigger="change" required=""/>
				</div>
				<?php if ($website_needed) { ?>
					<div class="col-12 col-md-6">
						<input type="text" class="form-control" name="lead_website" placeholder="Website" data-parsley-website-check/>
					</div>
				<?php } ?>
				<div class="col-12 col-md-6">
					<input type="hidden" name="lead_formname" value="<?php echo $form_page; ?>"/>
					<input type="hidden" name="lead_language" value="en"/>
					<input
					type="hidden" name="lead_formtype" value="<?php echo $form_hs; ?>"/>
					<button type="submit" data-title="Main Banner Get A Free Quote" class="form-control btn fp-btn fp-btn-orange buttonFormClick"><?php echo $form_button; ?></button>
				</div>
			</div>
		</div>
			<div class="form-thankyou">
				<p class="bold-lg">Yes! Welcome to more<br/>leads, sales &amp; success online.</p>
				<p class="small">Your Digital Growth Specialist will be in touch within 48 hours. Alternatively, for an instant chat, please call
					<a href="tel:<?php echo strtr($site_phone, [' ' => '']); ?>" class="text-nowrap"><?php echo $site_phone; ?></a>
				</p>
			</div>
	</form>
	<!-- End of Form -->
</div>
