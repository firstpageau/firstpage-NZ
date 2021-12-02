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

	<div class="block_reviews">
        <section class="section-client-reviews">
            <div class="container">
                <div class="section-title">
                    <h2><?php the_sub_field('heading'); ?></h2>
                </div>
                <div class="row testimonial-cont">

                <?php if ( have_rows( 'reviews' ) ) : ?>
                <?php while ( have_rows( 'reviews' ) ) : the_row(); ?>
                    <div class="col-12 col-md-4">
                        <div class="testimonial">
                            <div class="stars">
                                <img src="/wp-content/themes/firstpage/img/icon-star.png" srcset="/wp-content/themes/firstpage/img/icon-star@2x.png 2x" alt="Five Stars">
                                <img src="/wp-content/themes/firstpage/img/icon-star.png" srcset="/wp-content/themes/firstpage/img/icon-star@2x.png 2x" alt="Five Stars">
                                <img src="/wp-content/themes/firstpage/img/icon-star.png" srcset="/wp-content/themes/firstpage/img/icon-star@2x.png 2x" alt="Five Stars">
                                <img src="/wp-content/themes/firstpage/img/icon-star.png" srcset="/wp-content/themes/firstpage/img/icon-star@2x.png 2x" alt="Five Stars">
                                <img src="/wp-content/themes/firstpage/img/icon-star.png" srcset="/wp-content/themes/firstpage/img/icon-star@2x.png 2x" alt="Five Stars">
                            </div>
                            <div class="text">
                                <?php the_sub_field('description'); ?>
                            </div>
                            <div class="person">
                                <div class="name"><?php the_sub_field('name'); ?></div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?>
                    
                </div>
            </div>
        </section>	
	</div>
		
	<?php if($layout == 'full-width'): ?>
		</div>
	<?php endif; ?>

</div>

<?php if($layout = 'normal'): ?>
	</div>
<?php endif; ?>
