<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Propeller
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

<!-- Lorem ipsum dolor sit amet consectetur adipisicing, elit. Alias, dolor, voluptates. Magni error, suscipit harum quod animi facere quaerat, ipsam veritatis placeat fugit accusantium rerum tempora necessitatibus dolores, vitae ea ipsum esse qui quisquam neque. Maxime temporibus possimus voluptate obcaecati repudiandae numquam vel nesciunt fugit facilis. Voluptates quia porro quae incidunt iste quod, consectetur quibusdam at deserunt pariatur inventore illum totam deleniti, eius quo dicta perspiciatis aliquam repellendus laudantium. Rem, dignissimos quo similique, nulla quisquam facilis quos alias dolorem maiores minus voluptates neque, recusandae in officiis nisi, accusamus nemo qui. Iure, voluptas. Culpa harum dolorum quas iste, velit dolor obcaecati! -->
	<header id="masthead" class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-2 flex">
                    <div class="site-branding">
                        <?php
                        $logo = get_field('logo', 'option'); ?>
                        <a href="/">
                            <div class="logo_img bg" style="background-image: url(<?php  echo $logo; ?>)"></div>
                        </a>
                    </div><!-- .site-branding -->
                </div>
                <div class="col-7 flex">
                    <div class="menu_block">
                        <nav id="site-navigation" class="main-navigation">
                            <?php wp_nav_menu(
                                array(
                                    'theme_location' => 'primary_menu',
                                    'menu_id'        => 'primary_menu',
                                )
                            );
                            ?>
                        </nav>
                    </div>

                </div>
                <div class="col-3">
                    <div class="header_btn_block flex justify-content-end">
                        <?php
                            $log_in = get_field('log_in_button', 'option');
                            $link_target = $log_in['target'] ? $log_in['target'] : '_self';
                            if( $log_in ):
                        ?>
                            <div class="log_in_btn">
                                <a href="<?php echo esc_url( $log_in['url'] ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                                    <div class="log_in bg"></div>
                                </a>
                            </div>
                        <?php endif; ?>
                        <?php
                            $request_btn = get_field('request_btn', 'option');
                            if( $request_btn ):
                        ?>
                                <div class="btn_block request_demo">
                                    <a class="btn black" href="<?php echo esc_url( $request_btn['url'] ); ?>"><?php echo esc_html( $request_btn['title'] ); ?></a>
                                </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div id="nav-icon" class="open_menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>




	</header><!-- #masthead -->
