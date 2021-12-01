<?php

	$background = get_sub_field('background');
    $animation = get_sub_field('animation');
    $animation = $animation ? " wow {$animation} " : '';
	$margin = get_sub_field('margin');
	$padding = get_sub_field('padding');
	$customClass = get_sub_field('custom_class');
	$layout = get_sub_field('layout');

	$background_url = '';
	if ( $background['image'] )
		$background_url = wp_get_attachment_image_url( $background['image'], 'full' );

?>

<?php if($layout == 'normal'): ?>
<div class="container">
<?php endif; ?>

<div class="<?php echo $animation; ?> block block--testimonials <?php the_sub_field('classes'); ?> <?php echo $customClass; ?>" style="background-color: <?php echo $background['colour']; ?>; background-image: url('<?php echo $background_url; ?>'); background-position: <?php echo $background['position']; ?>; background-repeat: <?php echo $background['repeat']; ?>; background-size: <?php echo $background['size']; ?>; margin: <?php echo $margin['desktop']; ?>; padding: <?php echo $padding['desktop']; ?>;" data-<?php the_sub_field('layout'); ?>="true">
	
	<?php if($layout == 'full-width'): ?>
		<div class="container">
	<?php endif; ?>

		<div class="block_slider_repeater">
			
		<?php if ( 'Stacked' == get_sub_field('slider_type') ): ?>
			<section class="section-services">
				<div class="container">
					<div class="section-title">
						<h2><?php the_sub_field('heading_slider'); ?>
						</h2>
						<h3 class="font-weight-normal"><?php the_sub_field('subheading_slider'); ?></h3>
					</div>
					<div class="row">
						<?php if( have_rows('main_repeater') ): ?>
							<?php while( have_rows('main_repeater') ): the_row(); 
								$image = get_sub_field('image');
								?>
									<div class="col-12 col-md-6 col-lg-3">
										<div class="card">
											<img src="<?php echo $image['url']; ?>"  width="100" height="100" alt="<?php echo $image['alt']; ?>" />
											<div class="card-body">
												<h3 class="card-title capitalize"><?php the_sub_field('heading'); ?></h3>
												<p class="card-text min-height"><?php the_sub_field('content'); ?></p>
												<div class="card-bullets">
												<?php if(get_sub_field('below_content')): ?>
													<h4>Start with…</h4>
													<?php echo get_sub_field('below_content'); ?>
												<?php endif; ?> 
												</div>
											</div>
											<?php 
											$link = get_sub_field('cta');
											if($link_title){
												$link_title = $link['title'];
											}
											if(get_sub_field('cta')): ?>
											<div class="card-footer">
												<a href="<?php the_sub_field('cta'); ?>"><?php echo esc_html( $link_title ); ?></a>
											</div>
											<?php endif; ?> 
										</div>
									</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
			</section>

			<?php else: ?>
<section class="section-services-carousel">
	<div class="container">
		<div class="section-title">
			<h2><?php the_sub_field('heading_slider'); ?>
			</h2>
			<h3 class="font-weight-normal"><?php the_sub_field('subheading_slider'); ?></h3>
		</div>

		<?php 
			$carousel_counter = get_sub_field('heading_slider');
			$carousel_id = preg_replace('/[^A-Za-z0-9\-]/', '', $carousel_counter); 
			?>

		<div class="services-carousel-lg d-none d-lg-block <?php echo $carousel_id; ?>">
			
			<?php if( have_rows('main_repeater') ): ?>
				<?php while( have_rows('main_repeater') ): the_row(); 
				$image = get_sub_field('image');
				?>
				<div class="col card-link-building">
					<div class="card">
						<img src="<?php echo $image['url']; ?>" width="100" height="100" alt="<?php echo $image['alt']; ?>">
						<div class="card-body">
							<h4 class="card-title-carousel flex-item"><?php the_sub_field('heading'); ?></h4>
							<p class="card-text-carousel text-center text-lg-left"><?php the_sub_field('content'); ?></p>
							<div class="card-bullets">
							<?php if(get_sub_field('below_content')): ?>
								<h4>Start with…</h4>
								<?php echo get_sub_field('below_content'); ?>
							<?php endif; ?>
							</div>
						</div>
						<?php 
						$link = get_sub_field('cta');
						if($link_title){
							$link_title = $link['title'];
						}
						if(get_sub_field('cta')): ?>
						<div class="card-footer">
							<a href="<?php the_sub_field('cta'); ?>"><?php echo esc_html( $link_title ); ?></a>
						</div>
						<?php endif; ?> 
						</div>
				</div>
				<?php endwhile; ?>
			<?php endif; ?>

		</div>

		<?php 
			$carousel_counter = get_sub_field('heading_slider');
			$carousel_id_md = preg_replace('/[^A-Za-z0-9\-]/', '', $carousel_counter); ?>

		<div class="services-carousel-md d-none d-md-block d-lg-none <?php echo $carousel_id_md; ?>">
			

			<?php if( have_rows('main_repeater') ): ?>
				<?php while( have_rows('main_repeater') ): the_row(); 
				$image = get_sub_field('image');
				?>
				<div class="col card-link-building">
					<div class="card">
						<img src="<?php echo $image['url']; ?>" width="100" height="100" alt="<?php echo $image['alt']; ?>">
						<div class="card-body">
							<h4 class="card-title-carousel"><?php the_sub_field('heading'); ?></h4>
							<p class="card-text-carousel text-center text-lg-left"><?php the_sub_field('content'); ?></p>
							<div class="card-bullets">
							<?php if(get_sub_field('below_content')): ?>
								<h4>Start with…</h4>
								<?php echo get_sub_field('below_content'); ?>
							<?php endif; ?> 
							</div>
						</div>
						<?php 
						$link = get_sub_field('cta');
						if($link_title){
							$link_title = $link['title'];
						}
						if(get_sub_field('cta')): ?>
						<div class="card-footer">
							<a href="<?php the_sub_field('cta'); ?>"><?php echo esc_html( $link_title ); ?></a>
						</div>
						<?php endif; ?> 
						</div>
				</div>
				<?php endwhile; ?>
			<?php endif; ?>


		</div>

		<div class="services-carousel-sm d-block d-md-none <?php echo $carousel_id; ?>">
			

			<?php if( have_rows('main_repeater') ): ?>
				<?php while( have_rows('main_repeater') ): the_row(); 
				$image = get_sub_field('image');
				?>
				<div class="col card-link-building">
					<div class="card">
						<img src="<?php echo $image['url']; ?>" width="100" height="100" alt="<?php echo $image['alt']; ?>">
						<div class="card-body">
							<h4 class="card-title"><?php the_sub_field('heading'); ?></h4>
							<p class="card-text text-center text-lg-left"><?php the_sub_field('content'); ?></p>
							<div class="card-bullets">
							<?php if(get_sub_field('below_content')): ?>
								<h4>Start with…</h4>
								<?php echo get_sub_field('below_content'); ?>
							<?php endif; ?> 
							</div>
						</div>
						<?php 
						$link = get_sub_field('cta');
						if($link_title){
							$link_title = $link['title'];
						}
						if(get_sub_field('cta')): ?>
						<div class="card-footer">
							<a href="<?php the_sub_field('cta'); ?>"><?php echo esc_html( $link_title ); ?></a>
						</div>
						<?php endif; ?> 
						</div>
				</div>
				<?php endwhile; ?>
			<?php endif; ?>


		</div>

	</div>


</section>
					
					
			<?php endif; ?> 

		</div>
		
	<?php if($layout == 'full-width'): ?>
		</div>
	<?php endif; ?>

</div>

<?php if($layout = 'normal'): ?>
	</div>
<?php endif; ?>


<script>
	$(document).ready(function ($) {
	//equal height function
  $.fn.equalHeights = function () {
    var max_height = 0;
    $(this).each(function () {
      max_height = Math.max($(this).height(), max_height);
    });
    $(this).each(function () {
      $(this).height(max_height);
    });
  };

    $(document).ready(function () {
      $(".<?php echo $carousel_id; ?> .card-title-carousel").equalHeights();
    });
  

    $(document).ready(function () {
      $(".<?php echo $carousel_id; ?> .card-text-carousel").equalHeights();
    });

    $(document).ready(function () {
      $(".<?php echo $carousel_id; ?> .card-bullets").equalHeights();
    });
  

    $(document).ready(function () {
      $(".<?php echo $carousel_id_md; ?> .card-title-carousel").equalHeights();
    });
  

    $(document).ready(function () {
      $(".<?php echo $carousel_id_md; ?> .card-text-carousel").equalHeights();
    });
  

    $(document).ready(function () {
      $(".<?php echo $carousel_id_md; ?> .card-bullets").equalHeights();
    });
  
});
</script>