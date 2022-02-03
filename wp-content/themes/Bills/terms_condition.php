<?php 
/*
 * Template Name: terms and condition
*/ 
get_header() ?>
<!-- Main -->

<?php  $banner = get_field('banner1');
$banner_tittle = get_field('banner_tittle');
 ?>
<section class="top-header info-banner terms-conditions-banner desktop-banner" style ="background-image: url('<?php echo esc_url( $banner['desktop_banner'] ); ?>');">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12">
                    <h1><?php echo get_the_title(); ?></h1>
                </div>
            </div>
        </div>
</section>
<section class="top-header info-banner terms-conditions-banner mobile-banner" style ="background-image: url('<?php echo esc_url( $banner['mobile_banner'] ); ?>');">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12">
                    <h1><?php echo get_the_title(); ?></h1>
                </div>
            </div>
        </div>
</section>
<div class="wrapper terms-con-wrap">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-sm-12 col-md-10 col-lg-12 col-xl-12">
                    
                    
                        <?php the_content(); ?>
                   
                    
                </div>
            </div>
        </div>
    </div>
<?php get_footer() ?>