<?php
/**
Template Name: Resources
Template Post Type: post, page, event
 */
get_header();
?>




<!-- 










 -->








<?php


if( have_rows('page_builder') ):
    while( have_rows('page_builder') ): the_row();

        if( get_row_layout() == 'guide_cards' ): ?>


                <section class="giude_card_section">
                  <div class="cards">

                    <?php if( have_rows('cards') ):
                      while( have_rows('cards') ): the_row();
                        $img_desc = get_sub_field('image_desctop');
                        $img_mob = get_sub_field('image_mobile');
                        $title = get_sub_field('title');
                        $desc = get_sub_field('desc');
                        $subtitle = get_sub_field('subtitle');
                        $link = get_sub_field('link');
                      ?>



                    <div class="card">
                      <img class="desctop_img" src="<?php echo $img_desc; ?>" alt="" />
                      <img class="mobile_img" src="<?php echo $img_mob; ?>" alt="" />
                      <div class="text">
                        <h5><?php echo $title; ?></h5>
                        <p>
                          <?php echo $desc; ?>
                        </p>
                        <div class="subtitle"><?php echo $desc; ?></div>
                        <ul>
                           <?php
                            // check if the repeater field has rows of data
                            if( have_rows('list') ):
                              // loop through the rows of data
                                while ( have_rows('list') ) : the_row(); ?>
                          
                                  
                          <li><?php echo the_sub_field('text') ?></li>
                          
                                  
                          
                          
                                <?php endwhile;
                            else :
                                // no rows found
                            endif;
                          ?>
                          
                        </ul>
                        <a class="button" href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['title'] ); ?>"><?php echo esc_html( $link['title'] ); ?></a>
                      </div>
                    </div>


                      <?php endwhile;
                    endif;?>


                  
                  </div>
                </section>



              

        <?php elseif( get_row_layout() == 'data_analytics_slider' ): ?>
          <section class="data_analytics_section">
            <div class="heading">
              <div class="squar_mobile" style="top: -48px; right: -35px"></div>
              <div class="squar_mobile" style="top: 48px; right: 13px"></div>
              <div class="squar_mobile" style="top: 96px; right: -35px"></div>
              <div class="squar_mobile" style="top: -10px; left: -35px"></div>
              <div class="title">
                <h2><?php echo the_sub_field('title') ?></h2>
                <p>
                  <?php echo the_sub_field('subtitle') ?>
                </p>
              </div>
              <div class="slider_controls">
                <div class="slider-arrow left">
                  <img class="left" src="<?php bloginfo('template_url'); ?>/img/arr.svg" alt="" />
                </div>
                <div class="slider-arrow right">
                  <img src="<?php bloginfo('template_url'); ?>/img/arr.svg" alt="" />
                </div>
                <div class="squar" style="top: -70px; right: -70px"></div>
                <div class="squar" style="top: 0; right: -140px"></div>
                <div class="squar" style="top: 0; left: -70px"></div>
                <div class="squar" style="top: -70px; left: -70px"></div>
                <div class="squar" style="top: -70px; left: -140px"></div>
                <div class="squar" style="top: 0; left: -210px"></div>
                <div class="squar" style="top: -70px; left: -350px"></div>
              </div>
            </div>
            <div class="slider_track_analytics">
               <?php
                // check if the repeater field has rows of data
                if( have_rows('slider') ):
                  // loop through the rows of data
                    while ( have_rows('slider') ) : the_row(); ?>
              
                      
              
              <div class="card">
                <img class="image_resouces" src="<?php echo the_sub_field('images') ?>" alt="" />
                <div class="content">
                  <p>
                    <?php echo the_sub_field('text') ?>
                  </p>
                  <div class="card_button">
                    <a href="<?php echo the_sub_field('link_on_guide') ?>" class="button">DOWNLOAD THE GUIDE</a>
                  </div>
                </div>
              </div>
                      
              
              
                    <?php endwhile;
                else :
                    // no rows found
                endif;
              ?>
          
            </div>
          </section>


        

        <?php elseif( get_row_layout() == 'form_block' ): ?>
          <section class="form_section" 
            style="
              background: url(<?php echo the_sub_field('bg_image') ?>);
              background-size: cover;
              background-repeat: no-repeat;
            "
          >
          
          <?php echo do_shortcode('[contact-form-7 id="524" title="Contact form 1" html_class="form"]') ?>
           
          </section>


        

        <?php elseif( get_row_layout() == 'text_with_mockup' ): ?>
         <section class="text_with_mockup">
          <div class="image">
            <div class="background">
              <img src="<?php echo the_sub_field('image') ?>" alt="" />
            </div>
          </div>
          <div class="content">
            <h2><?php echo the_sub_field('title') ?></h2>
            <h4><?php echo the_sub_field('subtitle') ?></h4>
            <p>
              <?php echo the_sub_field('text_block') ?>
              
            </p>
            <ul class="list">
               <?php
                // check if the repeater field has rows of data
                if( have_rows('list') ):
                  // loop through the rows of data
                    while ( have_rows('list') ) : the_row(); ?>
              
                      
              
               <li class="list_item">
                <?php echo the_sub_field('text') ?>
              </li>
                      
              
              
                    <?php endwhile;
                else :
                    // no rows found
                endif;
              ?>
             
            </ul>
            <a href="<?php echo the_sub_field('link') ?>" class="button">Download the report</a>
          </div>
        </section>

        

       
        <?php endif;
    endwhile;
endif;


get_footer();