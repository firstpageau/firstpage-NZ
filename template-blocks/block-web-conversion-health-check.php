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

<div class="<?php echo $animation; ?> block block--text <?php the_sub_field('classes'); ?> <?php echo $customClass; ?>" style="background-color: rgba(255, 82, 84, 1) !important;; background-image: url('<?php echo $background_url; ?>'); background-position: <?php echo $background['position']; ?>; background-repeat: <?php echo $background['repeat']; ?>; background-size: <?php echo $background['size']; ?>; margin: <?php echo $margin['desktop']; ?>; padding: <?php echo $padding['desktop']; ?>;" data-<?php the_sub_field('layout'); ?>="true">

<?php if($layout == 'full-width'): ?>
    <div class="container">
<?php endif; ?>

    <div class="block__web_conversion" style="padding: 4rem 0 !important;">
        <div class="section-letstalk section-orange section-letstalk-new">
            <div class="container text-center text-white">
                <p class="mb-3 p-tag-h2-style"><strong>Get your free Website & Converstion Health Check </br class="d-none d-lg-block"> with an experienced digital strategist valued at </br class="d-none d-lg-block">>$2,000HKD.</strong></p>
                <p class="font-italic mb-4" style="font-size: 18px; font-weight:normal;">Hurry! Limited spots available.</p>
                <a href="/free-growth-strategy" class="btn fp-btn fp-btn-white fp-btn-shadow fp-session free-session-btn">Get my free health check</a>
            </div>
        </div>


    </div>
    
<?php if($layout == 'full-width'): ?>
    </div>
<?php endif; ?>

</div>

<?php if($layout = 'normal'): ?>
</div>
<?php endif; ?>
