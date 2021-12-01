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

    <div class="<?php echo $animation; ?> block block__great_brands <?php the_sub_field('classes'); ?> <?php echo $customClass; ?>"
        style="background-color: <?php echo $background['colour']; ?>; background-image: url('<?php echo $background_url; ?>'); background-position: <?php echo $background['position']; ?>; background-repeat: <?php echo $background['repeat']; ?>; background-size: <?php echo $background['size']; ?>; margin: <?php echo $margin['desktop']; ?>; padding: <?php echo $padding['desktop']; ?>;"
        data-<?php the_sub_field('layout'); ?>="true">

        <?php if($layout == 'full-width'): ?>
        <div class="container">
            <?php endif; ?>

            <div class="block__great_brands">
                <section class="section-experience">
                    <div class="container">
                        <div class="section-title">
                            <p class="p-tag-h2-style">We work with great<br class="d-sm-none"> brands of all sizes</p>
                        </div>
                        <img src="/wp-content/themes/firstpage/img/brands_we_work_with_mob.svg"
                            class="img-fluid d-md-none" alt="We work with great brands of all sizes" />
                        <img src="/wp-content/themes/firstpage/img/brands_we_work_with_new.svg"
                            class="img-fluid d-none d-md-inline-block" alt="We work with great brands of all sizes" />
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