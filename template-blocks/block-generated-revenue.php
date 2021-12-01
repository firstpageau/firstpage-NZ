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

    <div class="<?php echo $animation; ?> block block--text <?php the_sub_field('classes'); ?> <?php echo $customClass; ?>"
        style="background-color: <?php echo $background['colour']; ?>; background-image: url('<?php echo $background_url; ?>'); background-position: <?php echo $background['position']; ?>; background-repeat: <?php echo $background['repeat']; ?>; background-size: <?php echo $background['size']; ?>; margin: <?php echo $margin['desktop']; ?>; padding: <?php echo $padding['desktop']; ?>;"
        data-<?php the_sub_field('layout'); ?>="true">

        <?php if($layout == 'full-width'): ?>
        <div class="container">
            <?php endif; ?>

            <div class="block__generated_revenue">
                <!--BEGIN custom HTML code below -->
                <section class="section-features section-grey">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <img src="/wp-content/themes/firstpage/img/icn_revenue.svg" width="83" height="80"
                                    alt="First Page">
                                <h5>Generated over $3.8+ billion
                                    <br class="d-none d-lg-block">
                                    in sales for our clients
                                </h5>
                            </div>
                            <div class="col-12 col-md-4">
                                <img src="/wp-content/themes/firstpage/img/img_google-reviews.svg" width="198"
                                    height="80" alt="First Page">
                                <h5>500+ Google reviews globally
                                    <br class="d-none d-lg-block">
                                    with a 4.9/5 rating
                                </h5>
                            </div>
                            <div class="col-12 col-md-4">
                                <img src="/wp-content/themes/firstpage/img/icn_awards.svg" width="73" height="80"
                                    alt="First Page">
                                <h5>Won 14 digital awards
                                    <br class="d-none d-lg-block">
                                    and counting
                                </h5>
                            </div>
                        </div>
                    </div>
                </section>
                <!--END custom HTML code below -->
            </div>

            <?php if($layout == 'full-width'): ?>
        </div>
        <?php endif; ?>

    </div>

    <?php if($layout = 'normal'): ?>
</div>
<?php endif; ?>