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

    $case_study_image = get_sub_field( 'case_study_image' );
?>

<?php if($layout == 'normal'): ?>
<div class="container">
<?php endif; ?>

<div class="<?php echo $animation; ?> block block--testimonials <?php the_sub_field('classes'); ?> <?php echo $customClass; ?>" style="background-color: <?php echo $background['colour']; ?>; background-image: url('<?php echo $background_url; ?>'); background-position: <?php echo $background['position']; ?>; background-repeat: <?php echo $background['repeat']; ?>; background-size: <?php echo $background['size']; ?>; margin: <?php echo $margin['desktop']; ?>; padding: <?php echo $padding['desktop']; ?>;" data-<?php the_sub_field('layout'); ?>="true">
	
	<?php if($layout == 'full-width'): ?>
		<div class="container">
	<?php endif; ?>

		<div class="block_casestudy">
			<section class="section-casestudy casestudy-british-connections" style="background-image:url('<?php echo $case_study_image['url']; ?>');">
                <div class="container">
                    <div class="content-area">
                        <div class="info">
                            <h2>
                                <span class="small-grey">Our Recent Work</span>
                                <strong><?php the_sub_field( 'case_study_heading' ); ?></strong>
                            </h2>
                            <p><?php the_sub_field( 'case_study_content' ); ?></p>
                        </div>
                        <div class="stats">
                            <div class="stats-container">
                                <div class="row">
                                    <?php the_sub_field( 'case_study_strip_content' ); ?>
                                </div>
                            </div>
                        </div>
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
