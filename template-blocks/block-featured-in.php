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

<div class="<?php echo $animation; ?> block block--text <?php the_sub_field('classes'); ?> <?php echo $customClass; ?>" style="background-color: <?php echo $background['colour']; ?>; background-image: url('<?php echo $background_url; ?>'); background-position: <?php echo $background['position']; ?>; background-repeat: <?php echo $background['repeat']; ?>; background-size: <?php echo $background['size']; ?>; margin: <?php echo $margin['desktop']; ?>; padding: <?php echo $padding['desktop']; ?>;" data-<?php the_sub_field('layout'); ?>="true">

<?php if($layout == 'full-width'): ?>
    <div class="container">
<?php endif; ?>

    <div class="block__featured_in">
    <style>
    @media (min-width: 768px) {
        section.section-featured-in {
            padding-top: 50px;
        }
    }
    </style>

    <section class="section-featured-in">
        <div class="container">
            <div class="row align-items-center no-gutters">
                <div class="col-12 col-xl-3">
                    <p class="p-tag-h2-style text-center text-xl-left">Featured in</p>
                </div>
                <div class="col-12 col-xl-9">
                    <img src="/wp-content/uploads/2021/11/img_featured_in_news_mob.svg" class="img-fluid d-md-none d-block m-auto" alt="Featured in" />
                    <img src="/wp-content/uploads/2021/11/img_featured_in_news.svg" class="img-fluid d-none d-md-inline-block" alt="Featured in" />
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
