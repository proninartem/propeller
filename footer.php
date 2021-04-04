<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Propeller
 */

?>

            <footer id="colophon" class="site-footer">
              <div class="container">
                  <div class="row flex-wrap align-items-stretch">
                      <div class="col-6 col-lg-2">
                          <div class="foter_menu_col">
                              <h5>Technology</h5>
                              <div class="menu_block">
                                  <nav id="site-navigation" class="footer-navigation">
                                      <?php wp_nav_menu(
                                          array(
                                              'theme_location' => 'footer_menu_1',
                                              'menu_id'        => 'footer_menu_1',
                                          )
                                      );
                                      ?>
                                  </nav>
                              </div>
                          </div>
                      </div>
                      <div class="col-6 col-lg-2">
                          <div class="foter_menu_col">
                              <h5>Industries</h5>
                              <div class="menu_block">
                                  <nav id="site-navigation" class="footer-navigation">
                                      <?php wp_nav_menu(
                                          array(
                                              'theme_location' => 'footer_menu_2',
                                              'menu_id'        => 'footer_menu_2',
                                          )
                                      );
                                      ?>
                                  </nav>
                              </div>
                          </div>
                      </div>
                      <div class="col-6 col-lg-2">
                          <div class="foter_menu_col">
                              <h5>Use Cases</h5>
                              <div class="menu_block">
                                  <nav id="site-navigation" class="footer-navigation">
                                      <?php wp_nav_menu(
                                          array(
                                              'theme_location' => 'footer_menu_3',
                                              'menu_id'        => 'footer_menu_3',
                                          )
                                      );
                                      ?>
                                  </nav>
                              </div>
                          </div>
                      </div>
                      <div class="col-6 col-lg-2">
                          <div class="foter_menu_col">
                              <h5>Company</h5>
                              <div class="menu_block">
                                  <nav id="site-navigation" class="footer-navigation">
                                      <?php wp_nav_menu(
                                          array(
                                              'theme_location' => 'footer_menu_4',
                                              'menu_id'        => 'footer_menu_4',
                                          )
                                      );
                                      ?>
                                  </nav>
                              </div>
                          </div>
                      </div>
                      <div class="col-6 col-lg-2">
                          <div class="foter_menu_col">
                              <h5>Resources</h5>
                              <div class="menu_block">
                                  <nav id="site-navigation" class="footer-navigation">
                                      <?php wp_nav_menu(
                                          array(
                                              'theme_location' => 'footer_menu_5',
                                              'menu_id'        => 'footer_menu_5',
                                          )
                                      );
                                      ?>
                                  </nav>
                              </div>
                          </div>
                      </div>
                      <div class="col-6 col-lg-2">
                          <div class="foter_menu_col">
                              <h5>Join the team</h5>
                              <div class="menu_block">
                                  <nav  class="footer-navigation flex">
                                      <?php wp_nav_menu(
                                          array(
                                              'theme_location' => 'footer_menu_6',
                                              'menu_id'        => 'footer_menu_6',
                                          )
                                      );
                                      ?>
                                  </nav>
                              </div>
                              <?php
                              $contact_us_button = get_field('contact_us_button', 'option');
                              if( $contact_us_button ):
                                  ?>
                                  <div class="btn_block">
                                      <a class="btn blue_b" href="<?php echo esc_url( $contact_us_button['url'] ); ?>"><?php echo esc_html( $contact_us_button['title'] ); ?></a>
                                  </div>
                              <?php endif; ?>

                          </div>
                      </div>
                      <div class="col-12 col-lg-6 flex justify-content-start">
                          <div class="site-branding">
                              <?php
                              $logo = get_field('footer_logo', 'option'); ?>
                              <a href="/">
                                  <div class="logo_img bg" style="background-image: url(<?php  echo $logo; ?>)"></div>
                              </a>
                          </div><!-- .site-branding -->
                          <div class="footer_text_block">
                              <?php
                              $footer_text = get_field('footer_text', 'option');
                              echo $footer_text;
                              ?>
                          </div>
                      </div>
                      <div class="col-12 col-lg-6">
                          <div class="soc_block flex ">
                              <?php if( have_rows('soc_icons','option') ):
                                  while( have_rows('soc_icons','option') ): the_row();
                                      if( have_rows('soc_icon') ):
                                          while( have_rows('soc_icon') ): the_row();
                                              $icon_image = get_sub_field('icon_image', 'option');
                                              $soc_link = get_sub_field('soc_link', 'option');

                                              ?>

                                              <div class="soc_item">
                                                  <a href="<?php echo esc_url( $soc_link['url'] ); ?>">
                                                      <div class="soc_img bg" style="background-image: url(<?php echo $icon_image; ?>)"></div>
                                                  </a>
                                              </div>
                                          <?php endwhile;
                                      endif;
                                  endwhile;
                              endif; ?>
                          </div>

                      </div>
                  </div>

              </div>
            </footer><!-- #colophon -->
        </div><!-- #page -->

        <?php wp_footer(); ?>

    </body>
</html>
