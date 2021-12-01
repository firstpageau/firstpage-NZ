<?php if ( have_rows('content') ) : ?>

<?php $i=1; while ( have_rows('content') ) : the_row();
    //$block_field_key = get_sub_field('block_id');
?>

    <?php if ( get_row_layout() == 'text' ) : ?>
        <?php include locate_template( 'template-blocks/block-text.php' ); ?>
    <?php endif; ?>

    <?php if ( get_row_layout() == 'two_full_column_image_text' ) : ?>
        <?php include locate_template( 'template-blocks/block-two_full_column_image_text.php' ); ?>
    <?php endif; ?>

    <?php if ( get_row_layout() == 'brand-slider' ) : ?>
        <?php include locate_template( 'template-blocks/block-brand-slider.php' ); ?>
    <?php endif; ?>

    <?php if ( get_row_layout() == 'faqs' ) : ?>
        <?php include locate_template( 'template-blocks/block-faqs.php' ); ?>
    <?php endif; ?>

    <?php if ( get_row_layout() == 'testimonials' ) : ?>
        <?php include locate_template( 'template-blocks/block-testimonials.php' ); ?>
    <?php endif; ?>

    <?php if ( get_row_layout() == 'two_column' ) : ?>
        <?php include locate_template( 'template-blocks/block-two_column.php' ); ?>
    <?php endif; ?>


    <?php if ( get_row_layout() == 'brands-image-block' ) : ?>
        <?php include locate_template( 'template-blocks/block-brands.php' ); ?>
    <?php endif; ?>

    <?php if ( get_row_layout() == 'code-field' ) : ?>
        <?php include locate_template( 'template-blocks/block-code-field.php' ); ?>
    <?php endif; ?>

    <?php if ( get_row_layout() == 'featured-in-block' ) : ?>
        <?php include locate_template( 'template-blocks/block-featured-in.php' ); ?>
    <?php endif; ?>

    <?php if ( get_row_layout() == 'case-study-block' ) : ?>
        <?php include locate_template( 'template-blocks/block-casestudy.php' ); ?>
    <?php endif; ?>

    <?php if ( get_row_layout() == 'two-section-block' ) : ?>
        <?php include locate_template( 'template-blocks/block-two-section.php' ); ?>
    <?php endif; ?>

    <?php if ( get_row_layout() == 'slider-repeater-block' ) : ?>
        <?php include locate_template( 'template-blocks/block-multiple-column-button-section.php' ); ?>
    <?php endif; ?>

     <?php if ( get_row_layout() == 'long_image_left_block' ) : ?>
        <?php include locate_template( 'template-blocks/block-image-left-section.php' ); ?>
    <?php endif; ?>

    <?php if ( get_row_layout() == 'long_image_right_block' ) : ?>
        <?php include locate_template( 'template-blocks/block-image-right-section.php' ); ?>
    <?php endif; ?>

    <?php if ( get_row_layout() == 'generated-revenue-block' ) : ?>
        <?php include locate_template( 'template-blocks/block-generated-revenue.php' ); ?>
    <?php endif; ?>

    <?php if ( get_row_layout() == 'web_conversion_health_check_block' ) : ?>
        <?php include locate_template( 'template-blocks/block-web-conversion-health-check.php' ); ?>
    <?php endif; ?>
    
    
<?php  $i++; endwhile; ?>

<?php endif; ?>
