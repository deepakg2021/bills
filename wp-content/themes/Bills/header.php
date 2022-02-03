<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
<title>
    <?php if(is_front_page() || is_home())
    {
        echo get_bloginfo('name');
    }
    else
    {
        echo wp_title('');
    }
    ?>
</title>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php wp_head() ?>
<script>
  var SITE_URL = '<?php echo get_site_url() ?>';
</script>
</head>
<header>
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-12  col-lg-12">
            <nav id="navbar_top" class="navbar navbar-light bg-light fixed-top ">
              <div class="container-fluid">
                 <?php the_custom_logo(); ?>
                <?php 
                $args = array(
                    'menu_class' => 'custom-nav',        
                    'menu' => 'primary'
                );
                wp_nav_menu( $args );
                ?>

                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <!-- <span class="navbar-toggler-icon"></span> -->
                <img src="<?php bloginfo('template_url'); ?>/assets/images/menu-bar-icon.svg" alt="" />
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                  <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>
                    <img class="btn-close text-reset" src="<?php bloginfo('template_url'); ?>/assets/images/menu-bar-close-icon.svg" alt="" data-bs-dismiss="offcanvas" aria-label="Close" />
                    <!-- <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button> -->
                  </div>
                  <div class="offcanvas-body">
                    <?php 
                     $args = array(
                         'menu_class' => 'navbar-nav justify-content-end flex-grow-1 pe-3',        
                         'menu' => 'Sidebar Menu'
                     );
                     wp_nav_menu( $args ); 
                     ?>
                    
                    <?php 
                      $hSocial =  get_field( "social_icon", "option" );                       
                    
                    ?>

                    <ul class="social-section">
                      <?php foreach ($hSocial as $hSoc) { ?>                     
                      <li>
                        <a href="<?php echo $hSoc['link'] ?>">
                          <img src="<?php echo $hSoc['image']; ?>">
                        </a>
                      </li>  
                      <?php  }  ?>                    
                    </ul>
                  </div>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
</header>
<?php 
$bodyClass = 'inner-page';	
$bookATableBtn = '<a href="javascript:void(0)" class="book-table-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable">Book A Table</a>';
if (is_front_page()) { 
	$bodyClass = '';
	$bookATableBtn = '';
}else if(is_page_template( 'group_bookings.php' ) || is_page_template( 'faq.php' ) || is_page_template( 'contact.php' )){
	$bodyClass = 'inner-page booking-group-bdy';
	$bookATableBtn = '<a href="javascript:void(0)" class="book-table-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable">Book A Table</a>';	
}

?>
<body class="<?php echo $bodyClass ?>">
<?php echo $bookATableBtn; ?>