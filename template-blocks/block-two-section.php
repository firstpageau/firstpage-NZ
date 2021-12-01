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

$two_section_heading = get_sub_field('two_section_block_heading');


$image_desktop = get_sub_field('two_section_block_image_desktop');
$image_tablet = get_sub_field('two_section_block_image_tablet');
$image_mobile = get_sub_field('two_section_block_image_mobile');

$two_section_content = get_sub_field('two_section_block_content');
$two_section_cta = get_sub_field('two_section_block_cta');

$two_section_block_right_or_left = get_sub_field('two_section_block_right_or_left');
?>

<?php if($layout == 'normal'): ?>
<div class="container">
<?php endif; ?>

<div class="<?php echo $animation; ?> block block--two-section <?php the_sub_field('classes'); ?> <?php echo $customClass; ?>" style="background-color: <?php echo $background['colour']; ?>; background-image: url('<?php echo $background_url; ?>'); background-position: <?php echo $background['position']; ?>; background-repeat: <?php echo $background['repeat']; ?>; background-size: <?php echo $background['size']; ?>; margin: <?php echo $margin['desktop']; ?>; padding: <?php echo $padding['desktop']; ?>;" data-<?php the_sub_field('layout'); ?>="true">

<?php if($layout == 'full-width'): ?>
    <div class="container">
<?php endif; ?>

    <div class="block__two_section">
    <section class="section-paragraph p-4">
    <h2 class="d-block d-md-block d-lg-none container-padding text-center"><?php echo $two_section_heading; ?></h2>
    <div class="row no-gutters flex-column-reverse flex-md-row <?php if($two_section_block_right_or_left): echo 'flex-md-row-reverse'; endif; ?>">
        <div class="col-12 col-lg-6 image-container-right d-flex flex-column justify-content-center align-items-center p-4">
            <img src="<?php echo $image_desktop['url']; ?>" class="img-fluid d-none d-lg-inline-block" alt="First Page" style="width:450px;" />
            <img src="<?php echo $image_tablet['url']; ?>" class="img-fluid d-none d-md-inline-block d-lg-none" alt="First Page" style="width:450px;" />


        </div>
        <div class="col-12 col-lg-6 p-0 text-container text-container-seo-new">
            <h2 class="d-none d-md-none d-lg-block">
                <?php echo $two_section_heading; ?>
            </h2>
            <img src="<?php echo $image_mobile['url']; ?>"
                class="img-fluid d-block d-md-none mx-auto pb-4" alt="" style="width:250px;" />
            <?php if($two_section_content): ?>
                <div class="text-center text-md-left">
                    <?php echo $two_section_content; ?>
                </div>
            <?php endif; ?>

            <?php if($two_section_cta): ?>
                <button type="button" data-title="seopage-get-freeproposal-Triple"
                class="btn fp-btn fp-btn-orange show-popup-form buttonFormClick">
                GET A FREE QUOTE
                </button>
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
