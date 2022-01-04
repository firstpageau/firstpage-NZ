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
				<div class="menu d-none d-lg-block">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item nav-item-main d-none d-lg-block">
							<a class="scroll-nav-logo" href="<?php echo home_url() ?>">
								<img id="scroll-nav-logo" src="/wp-content/themes/firstpage/img/fp-logo.png" srcset="/wp-content/themes/firstpage/img/fp-logo@2x.png 2x" alt="First Page"/>
							</a>
						</li>
						<?php wp_nav_menu( array( 'theme_location' =>   'primary_navigation' ) ); ?>
						<li class="nav-item">
							<a class="nav-link nav-border" href="<?php echo home_url() ?>/free-proposal/">Free Proposal</a>
						</li>
					</ul>
				</div>

				<div class="menu d-block d-md-block d-lg-none">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item nav-item-main d-none d-lg-block">
							<a class="scroll-nav-logo" href="<?php echo home_url() ?>">
								<img id="scroll-nav-logo" src="/wp-content/themes/firstpage/img/fp-logo.png" srcset="/wp-content/themes/firstpage/img/fp-logo@2x.png 2x" alt="First Page"/></a>
						</li>
						<li class="nav-item nav-item-main">
							<a class="nav-link" href="/seo/">SEO</a>
						</li>
						<li class="nav-item nav-item-main dropdown">
							<p class="nav-link dropdown-toggle mb-0 d-lg-none" data-toggle="dropdown">GOOGLE ADS</p>
							<div class="dropdown-menu">
								<div class="dropdown-cont">
									<?php wp_nav_menu( array( 'theme_location' =>   'mobile_google_ads' ) ); ?>
								</div>
							</div>
						</li>
						<li class="nav-item nav-item-main dropdown">
							<p class="nav-link dropdown-toggle mb-0 d-lg-none" data-toggle="dropdown">SOCIAL</p>
							<div class="dropdown-menu">
								<div class="dropdown-cont">
									<?php wp_nav_menu( array( 'theme_location' =>   'mobile_social' ) ); ?>
								</div>
							</div>
						</li>
						<li class="nav-item nav-item-main dropdown">
							<p class="nav-link dropdown-toggle mb-0 d-lg-none" data-toggle="dropdown">OTHER SERVICES</p>
							<div class="dropdown-menu">
								<div class="dropdown-cont">
									<?php wp_nav_menu( array( 'theme_location' =>   'mobile_other_services' ) ); ?>
								</div>
							</div>
						</li>
						<li class="nav-item nav-item-main dropdown">
							<p class="nav-link dropdown-toggle mb-0 d-lg-none" data-toggle="dropdown">FREE TOOLS</p>
							<div class="dropdown-menu">
								<div class="dropdown-cont">
									<?php wp_nav_menu( array( 'theme_location' =>   'mobile_free_tools' ) ); ?>
								</div>
							</div>
						</li>
						<li class="nav-item nav-item-main dropdown">
							<p class="nav-link dropdown-toggle mb-0 d-lg-none" data-toggle="dropdown">ABOUT US</p>
							<div class="dropdown-menu">
								<div class="dropdown-cont">
									<?php wp_nav_menu( array( 'theme_location' =>   'mobile_about_us' ) ); ?>
								</div>
							</div>
						</li>
						<li class="nav-item nav-item-main">
							<a class="nav-link" href="#">CONTACT</a>
						</li>
						<li class="nav-item mobile-go-back" id="goBackMain">
							<a class="nav-link" role="button">Go Back</a>
						</li>
						<li class="nav-item mobile-go-back" id="goBackServices">
							<a class="nav-link" role="button">Go Back</a>
						</li>
						<li
							class="nav-item">
							<a class="nav-link nav-border" href="{{ home_url }}free-proposal/">Free Proposal</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
