<?php 

/*
 * Template Name: Our Menu
 */

get_header();
 ?>
  <?php
    $banner = get_field('banner1');
    $banner_tittle = get_field('banner_tittle');
  ?>
  <section class="top-header menu-banner desktop-banner" style ="background-image: url('<?php echo esc_url( $banner['desktop_banner'] ); ?>');" >
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-12">
          <div class="content">
            <h1><?php echo get_the_title(); ?></h1>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="top-header menu-banner mobile-banner" style ="background-image: url('<?php echo esc_url( $banner['mobile_banner'] ); ?>');" >
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-12">
          <div class="content">
            <h1><?php echo get_the_title(); ?></h1>
          </div>
          
        </div>
      </div>
    </div>
  </section>



  <section class="menu-link-top">
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
          <ul class="link first_link">
            <?php            
            $args1 = array(
              'post_type' => 'fdm-menu',             
            );
            
            $menu_query1 = new WP_Query($args1);

            $menus1 = $menu_query1->get_posts();

            foreach ($menus1 as $value) { 

            //echo '<pre>';
            //print_r($value);

            ?>

            <li><a href="<?php //echo $value->guid; ?>" class="menu-link1" data-menu-id= "<?php echo $value->ID; ?>"><?php echo $value->post_title; ?></a></li><?php
            }
            ?>
          </ul>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
          <ul class="link second_link">
          <?php 
            $Fields = $fdm_controller->settings->get_menu_item_custom_fields();
            //echo '<pre>';
            //Print_r($Fields[2]->values);
            $sMain = explode (",", $Fields[0]->values); 
              foreach($sMain as $val) {
              //echo '<pre>';
              //print_r($val);

              ?>
              <li><a href="javascript:void(0)" class="menu_link2" data-attr = "<?php echo $val ?>"><?php echo $val; ?></a></li>
            <?php } 
          ?>              
              
          </ul>
        </div>
       
      </div>
    </div>
  </section>

 
 <section class="menu-link-bottom">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3">
        <div class="heading">Allergens</div>
        <div class="view">
          <p>Remove items containing:</p>
          <button class="btn clear-filter"><span>Clear Filters</span></button>
        </div>
      </div>
      <div class="col-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
        <div class="right-part">
          <div class="select-box">
            <form action="">
              <ul>
                <?php 
                $Fields = $fdm_controller->settings->get_menu_item_custom_fields();
                //echo '<pre>';
                //Print_r($Fields[2]->values);
                $sMain = explode (",", $Fields[2]->values); 
                  foreach($sMain as $val) {
                  //echo '<pre>';
                  //print_r($val);

                ?>
                <li data-attr = "<?php echo $val ?>" >
                  <div class="chk">
                    <label>
                      <input type="checkbox" name="selector" value="<?php echo $val; ?>" >
                      <span></span>
                      <em>
                       <?php echo $val; ?>
                      </em>
                    </label>
                  </div>
                  
                </li>
                <?php
                }
                ?>
               
              </ul>
            </form>
          </div>
          <a class="icon-box" href="javascript:void(0)"></a>
        </div>
      </div>
    </div>
  </div>
 </section>

  <div class="loc-wrapper menu-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
          <div class="stp-box_custom">
            <div id="contentArea">
                <?php            
                $args2 = array(
                  'post_type' => 'fdm-menu',             
                );
                
                $menu_query2 = new WP_Query($args2);

                $menus2 = $menu_query2->get_posts();           
                
                foreach ($menus2 as $value) {

                  //echo '<pre>';
                  //print_r($value);
                  $post_meta = get_post_meta( $value->ID );
                  //$post_meta = get_post_meta('626');
                 /*  echo '<pre>';
                  print_r($post_meta['fdm_menu_column_one']); */
                  foreach($post_meta['fdm_menu_column_one'] as $term) 
                  {
                    $arr = explode(',',$term);
                    foreach($arr as $ar) 
                    {
                      ?>
                      <div class="stp-box menu_item_div menu<?php echo $value->ID; ?>" >
                      <div data-id="<?php echo $value->ID; ?>" class="menu-items title" ><?php echo get_term( $ar )->name; ?></div>
                      <?php 
                        $query_term = get_posts( array(
                          'post_type' => 'fdm-menu-item',
                          'tax_query' => array(
                            array(
                              'taxonomy' => 'fdm-menu-section',   
                              'field' => 'term_id',           
                              'terms' => $ar,  
                            )
                          )
                        ));
                            //echo '<pre>';
                            //print_r($query_term);
                            foreach($query_term as $q_term) 
                            {
                              ?>
                             <ul class="link link_target">
                               <?php

                              /*echo '<pre>';
                              print_r($q_term->ID);*/

                              $custom_fieldm = get_post_meta( $q_term->ID, '_fdm_menu_item_custom_fields', true );
                              $price = get_post_meta( $q_term->ID, 'fdm_item_price', true );
                              //print_r($custom_fieldm['allergy-filter']);
                              if($custom_fieldm['allergy-filter']=='')
                              {

                              }
                              else
                              {
                                $imploded_string = implode(",", $custom_fieldm['allergy-filter']);
                                //echo $imploded_string;

                              }

                              /*if($custom_fieldm['menu-category']=='food'){*/
                              ?>
                              <li class="allergent" data-id="<?php echo $custom_fieldm['menu-category'] ?>" data-allergy="<?php echo $imploded_string; ?>">
                                <div class="subtitle" ><?php
                                if($q_term->post_title =='')
                                {
                                  $flag=1;
                                }
                                else
                                {
                                  echo $q_term->post_title; ?></div><?php 
                                } ?>
                                <p>
                                  <?php echo $q_term->post_content; ?>
                                </p>
                              </li>
                              <li data-id="<?php echo $custom_fieldm['menu-category'] ?>">
                                <div class="price"><?php echo $price ?></div>
                              </li>
                            </ul>  
                            <?php  /*}*/
                          }
                          ?> 
                        
                     </div>
                    <?php }
                  }
                } 
              ?>
            </div> 
          </div>
        </div>
        
      </div>
    </div>
  </div>

 

<?php get_footer(); ?>


<script type="text/javascript">
  jQuery(document).ready(function($){

    var a=626;
    var b='food';
    //console.log(a);
    $(".menu_item_div").hide();
    $(".menu-items").hide();
    $(".menu"+a).show();
    // $(".menu"+a+" .menu-items").show();
    $(".menu"+a+" .link li").show().addClass("show");
    $(".menu-link1[data-menu-id="+a+"]").addClass("active_menu_id");

    // var countLi = $(".link_target").find(".show").length;
    // console.log(countLi);

    // $(".menu-link1[data-menu-id="+a+"]").each(function(){
    //   console.log(this);
    //   legnth = $('.show').length;
    //   console.log(length);
    // });


    $(".menu-link1").click( function(e)
    {
      clearFilter();
      $('.first_link').find(".active_menu_id").removeClass("active_menu_id");
      $(this).addClass("active_menu_id");
      e.preventDefault();
      var data_id = $(this).data("menu-id");
      //console.log(data_id);
      // $(".menu-items").hide();
      // $(".menu-items[data-id="+data_id+"] ").show();
      $(".menu_item_div").hide();
      $(".menu"+data_id).show();
      //$(".menu"+data_id+" .link li").show().addClass("show");
       if( $('.second_link').find(".active_menu_id").length > 0 ) 
       {
        var data_menu_id = $('.second_link').find(".active_menu_id").data("attr").toLowerCase();   
        console.log(data_menu_id);     
        $(".menu"+data_id+" .link li[data-id="+data_menu_id+"]").show().addClass("show");
        $(".menu"+data_id+" .link li[data-id="+data_menu_id+"]").parent(".link").siblings(".menu-items").show();
       }
        // countClass = $(".stp-box").find("li.show").length;
        // if(countClass < 1 ) {
        //  alert(countClass);
        // }
    });

    
    var c='Food';
    //menu item 1 is selected
    $("#contentArea .link li").hide().removeClass("show"); 
    $(".menu"+a+" .link li[data-id="+b+"]").show().addClass("show");
    $(".menu"+a+" .link li[data-id="+b+"]").parent(".link").siblings(".menu-items").show();
    $(".menu_link2[data-attr="+c+"]").addClass("active_menu_id")

    
    $(".menu_link2").click(function(e)
    {
      e.preventDefault();
      clearFilter();
      $('.second_link').find(".active_menu_id").removeClass("active_menu_id");
      $(this).addClass("active_menu_id");
      var data_id = $(this).data("attr").toLowerCase();
      console.log(data_id);
      if( $('.first_link').find(".active_menu_id").length > 0 )
      {
        // var data_menu_id = $(document).find(".active_menu_id").data("menu-id");
        var data_menu_id = $('.first_link').find(".active_menu_id").data("menu-id");
        //console.log(data_menu_id);
        //menu item 1 is selected
        $("#contentArea .link li").hide().removeClass("show"); 
        $("#contentArea .menu-items").hide(); 
        $(".menu"+data_menu_id+" .link li[data-id="+data_id+"]").show().addClass("show");
        $(".menu"+data_menu_id+" .link li[data-id="+data_id+"]").parent(".link").siblings(".menu-items").show();

        // countClass = $(".stp-box").find(".show").length;
        // if(countClass < 1 ) {
        //   $('.stp-box').hide();
        // }

       $(".menu"+data_menu_id+" .link li[data-id="+data_id+"]").each(function(){

           legnth = $('.show',this).length;
           console.log(length);
        });


      }



      //$("#contentArea .link li[data-id="+data_id+"]").show();
    });



    $(".chk").change(function(){
        var favorite = [];
        var allergy_name = $(this).find("input[type=checkbox]").val().toLowerCase().replaceAll(" ", "-");

        if( $(this).find("input[type=checkbox]").prop("checked") ){
          $.each( $(".menu_item_div ul.link li.allergent.show"), function(index, item){
            var allerg = $(item).data("allergy");
            console.log( allerg, "allerg" );
            if( typeof(allerg) != undefined ){
              if( allerg.includes(allergy_name) ){
                $(item).hide().removeClass("showAllerg");
                $(item).parent(".link").siblings(".menu-items").hide();
                $(item).siblings('li.show').hide().removeClass("showAllerg");
              }
            }
          });
          return;
        }else{
          $.each($(".chk input[type=checkbox]:checked"), function(index, item){
            favorite.push($(item).val().toLowerCase().replaceAll(" ", "-"))
          });
          console.log( favorite, "favorite");
          // $(".menu-items").hide();
          var found = 0;
          $.each( $(".menu_item_div ul.link li.allergent.show"), function(index, item){
            var allerg = $(item).data("allergy");
            // console.log( allerg, "allerg" );

            if( favorite.length > 0 ){
              for(i=0;i<favorite.length;i++){
                if( typeof(allerg) != undefined && allerg !== "" ){
                  if( allerg.includes(favorite[i]) ){
                    $(item).hide().removeClass("showAllerg");
                    $(item).parent(".link").siblings(".menu-items").hide();
                    $(item).siblings('li.show').hide().removeClass("showAllerg");
                    console.log("found");
                    found++;
                  }
                }
              }
              if(found == 0){
                if( allerg.includes(allergy_name) ){
                  $(item).show().addClass("showAllerg");
                  $(item).parent(".link").siblings(".menu-items").show();
                  $(item).siblings('li.show').show().addClass("showAllerg");
                }
              }
            }else{
              if( typeof(allerg) != undefined && allerg !== "" ){
                if( allerg.includes(allergy_name) ){
                  $(item).show().addClass("showAllerg");
                  $(item).parent(".link").siblings(".menu-items").show();
                  $(item).siblings('li.show').show().addClass("showAllerg");
                }
              }
            }
          });
        }
    });


    //clear allergent filters
    $(document).on("click", ".clear-filter", function(e){
      e.preventDefault();
      clearFilter();
    });

    function clearFilter(){
      $(".right-part input").prop("checked", false);
    }
  });
</script>
