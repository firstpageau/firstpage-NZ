<nav class="navbar fixed-top navbar-expand-lg navbar-header">
		<div class="container">
			<!-- Navigation Toggler -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fa fa-bars" aria-hidden="true"></i>
			</button>

			<!-- Logo -->
			<a class="navbar-brand" href="<?php echo home_url() ?>">
				<img src="/wp-content/themes/firstpage/img/fp-logo.png" srcset="/wp-content/themes/firstpage/img/fp-logo@2x.png 2x" alt="First Page" />
			</a>

			<div class="phone">
				<a href="tel:<?php echo strtr($site_phone, [' ' => '']); ?>">
					<img src="/wp-content/themes/firstpage/img/icn-phone.png" srcset="/wp-content/themes/firstpage/img/icn-phone@2x.png 2x" alt="First Page" />
					<span>1800 836 562</span>
				</a>
			</div>

			<!-- Navigation -->
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<!-- Contact -->
				<div class="additional-menu">
					<button class="navbar-toggler navbar-toggler-close collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<i class="fa fa-times" aria-hidden="true"></i>
					</button>
				</div>

				<hr class="header-separator" />

				<!-- Menu -->
				<div class="menu">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item nav-item-main d-none d-lg-block">
							<a class="scroll-nav-logo" href="<?php echo home_url() ?>">
								<img id="scroll-nav-logo" src="/wp-content/themes/firstpage/img/fp-logo.png" srcset="/wp-content/themes/firstpage/img/img/fp-logo@2x.png 2x" alt="First Page"/></a>
						</li>
						<li class="nav-item nav-item-main">
							<a class="nav-link" href="<?php echo home_url() ?>/seo/">SEO</a>
						</li>
						<li class="nav-item nav-item-main dropdown">
							<p class="nav-link dropdown-toggle mb-0 d-lg-none"  data-toggle="dropdown">GOOGLE
								ADS</p>
							<a class="nav-link dropdown-toggle d-none d-lg-block" href="<?php echo home_url() ?>/google-ads/">GOOGLE
								ADS</a>
							<div class="dropdown-menu">
								<div class="dropdown-cont">
									<a class="dropdown-item" href="<?php echo home_url() ?>/google-ads/">Google Ads</a>
									<a class="dropdown-item" href="<?php echo home_url() ?>/google-display-network/">Google Display</a>
									<a class="dropdown-item" href="<?php echo home_url() ?>/google-shopping/">Google Shopping</a>
								</div>
							</div>
						</li>
						<li class="nav-item nav-item-main dropdown">
							<p class="nav-link dropdown-toggle mb-0 d-lg-none" 
							   data-toggle="dropdown">SOCIAL</p>
							<a class="nav-link dropdown-toggle d-none d-lg-block" href="<?php echo home_url() ?>/facebook-advertising/">SOCIAL</a>
							<div class="dropdown-menu">
								<div class="dropdown-cont">
									<a class="dropdown-item" href="<?php echo home_url() ?>/facebook-advertising/">Facebook Ads</a>
									<a class="dropdown-item" href="<?php echo home_url() ?>/instagram-advertising/">Instagram Ads</a>
									<a class="dropdown-item" href="<?php echo home_url() ?>/linkedin-advertising/">LinkedIn Ads</a>
									<a class="dropdown-item" href="<?php echo home_url() ?>/youtube-advertising/">YouTube Ads</a>
									<a class="dropdown-item" href="<?php echo home_url() ?>/tiktok-advertising/">TikTok Ads</a>
								</div>
							</div>
						</li>
						<li class="nav-item nav-item-main dropdown">
							<p class="nav-link dropdown-toggle mb-0 d-lg-none"  data-toggle="dropdown">OTHER
								SERVICES</p>
							<a class="nav-link dropdown-toggle d-none d-lg-block"  href="<?php echo home_url() ?>/programmatic-advertising/" >OTHER
								SERVICES</a>
							<div class="dropdown-menu">
								<div class="dropdown-cont">
									<a class="dropdown-item" href="<?php echo home_url() ?>/programmatic-advertising/">Programmatic Advertising</a>
									<a class="dropdown-item" href="<?php echo home_url() ?>/reputation-management/">Reputation Repair</a>
									<a class="dropdown-item" href="<?php echo home_url() ?>/content-removal-australia/">Unwanted Content Removal</a>
									<a class="dropdown-item" href="<?php echo home_url() ?>/landing-page-agency/">Landing Page Development</a>

								</div>
							</div>
						</li>
			
						<li class="nav-item nav-item-main seo-dropdown dropdown">
							<p class="nav-link dropdown-toggle mb-0 d-lg-none"  data-toggle="dropdown">FREE
								TOOLS</p>
							<a class="nav-link dropdown-toggle d-none d-lg-block" href="<?php echo home_url() ?>/seo-audit/">FREE TOOLS</a>
							<div class="dropdown-menu" aria-labelledby="ddAudits">
								<div class="dropdown-cont">
									<a class="dropdown-item" href="<?php echo home_url() ?>/seo-audit/">Free SEO Audit</a>
									<a class="dropdown-item" href="<?php echo home_url() ?>/google-ads-audit/">Free Google Ads Audit</a>
									<a class="dropdown-item" href="<?php echo home_url() ?>/competitor-audit/">Free Competitor Audit</a>
									<a class="dropdown-item" href="<?php echo home_url() ?>/seo-roi-calculator/">SEO ROI Calculator</a>
								</div>
							</div>
						</li>
						<li class="nav-item nav-item-main dropdown">
							<p class="nav-link dropdown-toggle mb-0 d-lg-none"   data-toggle="dropdown">About
								Us</p>
							<a class="nav-link dropdown-toggle d-none d-lg-block" href="<?php echo home_url() ?>/who-we-are/">About Us</a>
							<div class="dropdown-menu">
								<div class="dropdown-cont">
									<a class="dropdown-item" href="<?php echo home_url() ?>/who-we-are/">Who We Are</a>
									<a class="dropdown-item" href="<?php echo home_url() ?>/careers/">Careers</a>
									<a class="dropdown-item" href="<?php echo home_url() ?>/learning-centre/">Learning Centre</a>
								</div>
							</div>
						</li>
						<li class="nav-item nav-item-main">
							<a class="nav-link" href="<?php echo home_url() ?>/contact/">Contact</a>
						</li>
						<li class="nav-item mobile-go-back" id="goBackMain">
							<a class="nav-link" role="button">Go Back</a>
						</li>
						<li class="nav-item mobile-go-back" id="goBackServices">
							<a class="nav-link" role="button">Go Back</a>
						</li>
						<li class="nav-item">
							<a class="nav-link nav-border" href="<?php echo home_url() ?>/free-proposal/">Free Proposal</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
