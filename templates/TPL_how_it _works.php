<?php
/**
Template Name: How it works
Template Post Type: post, page, event
 */
get_header();
?>


<?php


if( have_rows('page_builder') ):
    while( have_rows('page_builder') ): the_row();

        if( get_row_layout() == 'main_video_block' ):

            while ( have_rows('video_block') ) : the_row();
                $title = get_sub_field('title');
                $text_block = get_sub_field('text_block');
                $bg_img = get_sub_field('bg');
                $bg = get_sub_field('background_video');
                $btn = get_sub_field('request_button');
                $video_btn= get_sub_field('video_btn');
                ?>
                <section class="main_video_block bg" style="background-image: url(<?php echo $bg_img;?>)">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-7">
                                <div class="main_video_text_block">
                                    <div class="title_block">
                                        <?php echo $title;?>
                                    </div>
                                    <div class="subtitle">
                                        <?php echo $text_block;?>
                                    </div>
                                    <div class="btn_block flex justify-content-start">
                                        <a class="btn blue" href="<?php echo esc_url( $btn['url'] ); ?>" target="<?php echo esc_attr( $btn['title'] ); ?>"><?php echo esc_html( $btn['title'] ); ?></a>
                                        <a class="btn blue_b open_popup watch_v" href="#"  data-attr="<?php echo esc_url( $bg ); ?>" >Watch video</a>
                                    </div>
                                    <div class="squer_blocks">
                                        <div class="squer"></div>
                                        <div class="squer"></div>
                                        <div class="squer"></div>
                                        <div class="squer"></div>
                                        <div class="squer"></div>
                                        <div class="squer"></div>
                                        <div class="squer"></div>
                                        <div class="squer"></div>
                                        <div class="squer"></div>
                                        <div class="squer"></div>
                                        <div class="squer"></div>
                                        <div class="squer"></div>
                                        <div class="squer"></div>
                                        <div class="squer"></div>
                                        <div class="squer"></div>
                                        <div class="squer"></div>
                                        <div class="squer"></div>
                                        <div class="squer"></div>
                                        <div class="squer"></div>
                                        <div class="squer"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="squer_blocks">
                            <div class="squer"></div>
                            <div class="squer"></div>
                            <div class="squer"></div>
                        </div>
                    </div>


                </section>

            <?php endwhile; ?>

        <?php elseif( get_row_layout() == 'image_block_with_text_on_right_side' ): ?>
            <section class="image_block_with_text_on_right_side">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <?php $title = get_sub_field('title'); ?>
                            <h2><?php echo $title;?></h2>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <?php $bg = get_sub_field('image'); ?>
                        <div class="img_block bg" style="background-image: url(<?php echo $bg;?>)"></div>

                        <?php if( have_rows('text_block') ):
                            while( have_rows('text_block') ): the_row();
                                $title = get_sub_field('title');
                                $text = get_sub_field('text');
                                $btn = get_sub_field('button');
                                ?>
                                <div class="text_block">
                                    <div class="body_field_16">
                                        <h3><?php echo $title;?></h3>
                                        <p><?php echo $text;?></p>
                                    </div>
                                    <div class="btn_block">
                                        <a class="btn white" href="<?php echo esc_url( $btn['url'] ); ?>" target="<?php echo esc_attr( $btn['title'] ); ?>"><?php echo esc_html( $btn['title'] ); ?></a>
                                    </div>
                                    <div class="squer_blocks">
                                        <div class="squer"></div>
                                    </div>
                                </div>

                            <?php endwhile;
                        endif;?>

                    </div>

                </div>
            </section>

        <?php elseif( get_row_layout() == 'image_bg_with_text_on_left_side' ):
            $bg = get_sub_field('image');
            ?>
            <section class="image_bg_with_text_on_left_side bg" style="background-image: url(<?php echo $bg;?>)">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6" >
                            <div class="img_block bg" style="background-image: url(<?php echo $bg;?>)"></div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <?php if( have_rows('text_block') ):
                                while( have_rows('text_block') ): the_row();
                                    $title = get_sub_field('title');
                                    $text = get_sub_field('text');
                                    $btn = get_sub_field('button');
                                    ?>
                                    <div class="text_block">
                                        <div class="body_field_16">
                                            <h2><?php echo $title;?></h2>
                                            <p><?php echo $text;?></p>
                                        </div>
                                        <div class="btn_block">
                                            <a class="btn default" href="<?php echo esc_url( $btn['url'] ); ?>" target="<?php echo esc_attr( $btn['title'] ); ?>"><?php echo esc_html( $btn['title'] ); ?></a>
                                        </div>
                                    </div>
                                <?php endwhile;
                            endif;?>
                        </div>

                    </div>
                    <div class="squer_blocks">
                        <div class="squer"></div>
                        <div class="squer"></div>
                        <div class="squer"></div>
                        <div class="squer"></div>
                    </div>
                </div>
                <div class="overlay"></div>
            </section>

        <?php elseif( get_row_layout() == 'benefits_blocks' ):
            $title = get_sub_field('title');
            ?>
            <section class="benefit_section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 flex justify-content-center">
                            <div class="title_block">
                                <h2><?php echo $title;?></h2>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <?php if( have_rows('benefit_block') ):
                            while( have_rows('benefit_block') ): the_row();
                                $icon = get_sub_field('icon');
                                $title = get_sub_field('title');
                                $text = get_sub_field('text');
                                ?>
                                <div class="col-12 col-lg-4">
                                    <div class="benefit_block">
                                        <div class="benefit_title flex  align-items-start">
                                            <div class="icon_block flex">
                                                <img src="<?php echo $icon;?>" alt="">
                                            </div>
                                            <div class="title">
                                                <h5><?php echo $title;?></h5>
                                            </div>
                                        </div>
                                        <div class="body_field_16">
                                            <p><?php echo $text;?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile;
                        endif;?>
                    </div>
                </div>
            </section>
        <?php elseif( get_row_layout() == 'text_block_with_bg_3_link_block_on_left' ):
            $title = get_sub_field('title');
            $text = get_sub_field('text');
            $bg= get_sub_field('bg');
            ?>
            <section class="text_block_with_bg_3_link_block_on_left">
                <div class="bg right_bg" style="background-image: url(<?php echo $bg;?>)"></div>
                <div class="container">
                    <?php if( $title ):?>
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-6">
                                <div class="title">
                                    <h2><?php echo $title;?></h2>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="text_block">
                                <div class="body_field_16">
                                    <?php echo $text;?>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="bg img_block" style="background-image: url(<?php echo $bg;?>)"></div>
                        </div>


                        <div class="squer_blocks">
                            <div class="squer"></div>
                            <div class="squer"></div>
                        </div>
                    </div>
                    <div class="link_blocks flex justify-content-between">
                        <?php if( have_rows('link_blocks') ):
                            while( have_rows('link_blocks') ): the_row();
                                $img = get_sub_field('image');
                                $btn = get_sub_field('link');

                                ?>

                                <div class="link_block">
                                    <div class="img_block flex">
                                        <img src="<?php echo $img;?>" alt="">
                                    </div>

                                    <div class="btn_block">
                                        <a class="btn default" href="<?php echo esc_url( $btn['url'] ); ?>" target="<?php echo esc_attr( $btn['title'] ); ?>"><?php echo esc_html( $btn['title'] ); ?></a>
                                    </div>
                                </div>


                            <?php endwhile;
                        endif;?>
                        <div class="squer_blocks">
                            <div class="squer"></div>

                        </div>
                    </div>

                </div>
            </section>

        <?php elseif( get_row_layout() == 'text_block_with_bg_and_3_link_blocks_on_right' ):
            $title = get_sub_field('title');
            $text = get_sub_field('text');
            $bg= get_sub_field('bg');
            ?>
            <section class="text_block_with_bg_3_link_block_on_right">
                <div class="bg left_bg" style="background-image: url(<?php echo $bg;?>)"></div>
                <div class="container">
                    <?php if( $title ):?>
                        <div class="row justify-content-center">
                            <div class="col-6">
                                <div class="title">
                                    <h2><?php echo $title;?></h2>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="row justify-content-end">
                        <div class="col-12 col-md-6">
                            <div class="bg left_bg" style="background-image: url(<?php echo $bg;?>)"></div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="text_block">
                                <div class="body_field_16">
                                    <?php echo $text;?>
                                </div>
                            </div>
                        </div>
                        <div class="squer_blocks">
                            <div class="squer"></div>
                        </div>
                    </div>
                    <div class="link_blocks flex justify-content-between">
                        <?php if( have_rows('link_blocks') ):
                            while( have_rows('link_blocks') ): the_row();
                                $img = get_sub_field('image');
                                $btn = get_sub_field('link');

                                ?>

                                <div class="link_block">
                                    <div class="img_block flex">
                                        <img src="<?php echo $img;?>" alt="">
                                    </div>

                                    <div class="btn_block">
                                        <a class="btn default" href="<?php echo esc_url( $btn['url'] ); ?>" target="<?php echo esc_attr( $btn['title'] ); ?>"><?php echo esc_html( $btn['title'] ); ?></a>
                                    </div>
                                </div>

                            <?php endwhile;
                        endif;?>
                    </div>
                </div>
            </section>
        <?php elseif( get_row_layout() == 'worksites_management' ):
            $title = get_sub_field('title');
            ?>
            <section class="worksites_management flex flex-wrap">
                <div class="title">
                    <?php echo $title;?>
                </div>
                <div class="squer_blocks mobile">
                    <div class="squer"></div>
                    <div class="squer"></div>
                    <div class="squer"></div>
                </div>
                <div class="management_items flex flex-wrap">
                    <?php if( have_rows('management_item') ):
                        while( have_rows('management_item') ): the_row();
                            $bg = get_sub_field('bg');
                            $title = get_sub_field('title');
                            $btn = get_sub_field('link');

                            ?>
                            <div class="management_item flex bg justify-content-center" style="background-image: url(<?php echo $bg;?>)">
                                <div class="hover_block">
                                    <div class="btn_block">
                                        <div class="btn_text">
                                            <h5><?php echo esc_attr( $btn['title'] ); ?></h5>
                                            <h5 class="mobile_title"><?php echo $title;?></h5>
                                        </div>
                                        <a class="btn_l" href="<?php echo esc_url( $btn['url'] ); ?>" target="<?php echo esc_attr( $btn['title'] ); ?>"></a>
                                    </div>
                                </div>
                                <div class="opacity_block"></div>
                                <h3><?php echo $title;?></h3>
                                <div class="squer_blocks">
                                    <div class="squer"></div>
                                    <div class="squer"></div>
                                    <div class="squer"></div>
                                </div>
                            </div>
                        <?php endwhile;
                    endif;?>
                    <div class="squer_blocks">
                        <div class="squer"></div>
                        <div class="squer"></div>
                        <div class="squer"></div>
                    </div>
                </div>
            </section>
        <?php elseif( get_row_layout() == 'metrics' ):
            ?>
            <section class="metrics">
                <div class="container">
                    <div class="row">
                        <?php if( have_rows('metric_block') ):
                            while( have_rows('metric_block') ): the_row();
                                $icon = get_sub_field('icon');
                                $title = get_sub_field('title');
                                $text = get_sub_field('text');

                                ?>
                                <div class="col-6 col-md-3">
                                    <div class="metric_block">
                                        <div class="benefit_title flex">
                                            <div class="icon_block flex">
                                                <img src="<?php echo $icon;?>" alt="">
                                            </div>
                                            <div class="text_block">
                                                <div class="title">
                                                    <h3><?php echo $title;?></h3>
                                                </div>
                                                <div class="body_field_16">
                                                    <p><?php echo $text;?></p>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            <?php endwhile;
                        endif;?>
                    </div>
                </div>
            </section>
        <?php elseif( get_row_layout() == 'members' ):
            $title = get_sub_field('title');
            ?>
            <section class="members">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="title">
                                <h2><?php echo $title;?></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-around">
                        <?php if( have_rows('member_block') ):
                            while( have_rows('member_block') ): the_row();

                                ?>
                                <div class="col">
                                    <?php if( have_rows('member_item') ):
                                        while( have_rows('member_item') ): the_row();
                                            $mem_or_col = get_sub_field('member_or_color');
                                            $bg = get_sub_field('background_color');
                                            $member = get_sub_field('member');
                                            $company = get_sub_field('company');
                                            ?>
                                            <?php if( $mem_or_col == 'member' ):  ?>
                                                <div class="member_block member bg" style="background-image:url(<?php echo $member;?>) ">
                                                </div>

                                            <?php elseif( $mem_or_col == 'color' ): ?>
                                                <div class="member_block color" style="background: <?php echo $bg;?>">
                                                </div>
                                            <?php elseif( $mem_or_col == 'company' ): ?>
                                                <div class="member_block company bg" style="background-image:url(<?php echo $company;?>) ">
                                                </div>

                                            <?php
                                            endif;
                                        endwhile;
                                    endif;?>
                                </div>
                            <?php endwhile;
                        endif;?>
                    </div>
                </div>
                <div class="squer_blocks">
                    <div class="squer"></div>
                    <div class="squer"></div>
                    <div class="squer"></div>
                    <div class="squer"></div>
                    <div class="squer"></div>
                    <div class="squer"></div>
                    <div class="squer"></div>
                    <div class="squer"></div>
                </div>
            </section>
        <?php elseif( get_row_layout() == 'image_bg_with_text_on_right_side' ):
            $bg = get_sub_field('image');
            ?>
            <section class="image_bg_with_text_on_right_side bg" style="background-image: url(<?php echo $bg;?>)">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-12 col-md-6">
                            <?php if( have_rows('text_block') ):
                                while( have_rows('text_block') ): the_row();
                                    $title = get_sub_field('title');
                                    $text = get_sub_field('text');
                                    $btn = get_sub_field('button');
                                    ?>
                                    <div class="text_block">
                                        <div class="body_field_16">
                                            <h2><?php echo $title;?></h2>
                                            <p><?php echo $text;?></p>
                                        </div>
                                        <div class="btn_block">
                                            <a class="btn blue" href="<?php echo esc_url( $btn['url'] ); ?>" target="<?php echo esc_attr( $btn['title'] ); ?>"><?php echo esc_html( $btn['title'] ); ?></a>
                                        </div>
                                        <div class="squer_blocks">
                                            <div class="squer"></div>
                                        </div>
                                    </div>
                                <?php endwhile;
                            endif;?>
                        </div>

                    </div>
                </div>
            </section>
        <?php elseif( get_row_layout() == 'slider' ):
            $title = get_sub_field('title');
            ?>
            <section class="slider_section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="title">
                                <h2><?php echo $title;?></h2>
                            </div>
                        </div>
                    </div>
                    <div class="slider">
                        <?php if( have_rows('slide') ):
                            while( have_rows('slide') ): the_row();
                                $bg = get_sub_field('bg');
                                $title = get_sub_field('title');
                                $sub_title = get_sub_field('sub_title');
                                ?>
                                <div class="slide bg" style="background-image: url(<?php echo $bg;?>)">
                                    <div class="text_block">
                                        <h3><?php echo $title;?></h3>
                                        <p><?php echo $sub_title;?></p>
                                    </div>
                                    <div class="bg_linear"></div>
                                </div>
                            <?php endwhile;
                        endif;?>
                    </div>
                </div>
            </section>
        <?php elseif( get_row_layout() == 'posts_section' ):
            $title = get_sub_field('title');
            ?>
            <section class="posts_section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 flex align-items-start justify-content-between">
                            <div class="title">
                                <h2><?php echo $title;?></h2>
                            </div>
                            <div class="btn_block view_all">
                                <a class="btn blue_b" href="">View more</a>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-between">
                        <div class="col-12 col-md-6">
                            <?php
                            $featured_posts = get_sub_field('main_post');
                            if( $featured_posts ): ?>
                                <?php foreach( $featured_posts as $featured_post ):
                                    $permalink = get_permalink( $featured_post->ID );
                                    $title = get_the_title( $featured_post->ID );
                                    $thumbnail = get_the_post_thumbnail_url( $featured_post->ID );
                                    $date = get_the_date( 'F j, Y', $featured_post->ID )

                                    ?>

                                    <div class="main_post">
                                        <div class="thumbnail bg" style="background-image: url(<?php echo $thumbnail?>)"></div>
                                        <div class="text_block">
                                            <h5 class="post_title"><?php echo esc_html( $title ); ?></h5>
                                        </div>
                                        <div class="btn_block">
                                            <p><?php echo esc_html( $date ); ?></p>
                                            <a class="btn_l" href="<?php echo esc_url( $permalink ); ?>"></a>
                                        </div>

                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                        <div class="col-12 col-md-6">
                            <?php
                            $second_posts = get_sub_field('second_post');
                            if( $second_posts ): ?>
                                <?php foreach( $second_posts as $second_post ):
                                    $permalink = get_permalink( $second_post->ID );
                                    $title = get_the_title( $second_post->ID );
                                    $thumbnail = get_the_post_thumbnail_url( $second_post->ID );
                                    $date = get_the_date( 'F j, Y', $second_post->ID )

                                    ?>

                                    <div class="small_post flex align-items-start">
                                        <div class="thumbnail bg" style="background-image: url(<?php echo $thumbnail?>)"></div>
                                        <div class="text_block">

                                            <h5><?php echo wp_trim_words(  $title , 9, '...' )?></h5>

                                            <div class="btn_block">
                                                <p><?php echo esc_html( $date ); ?></p>
                                                <a class="btn default" href="<?php echo esc_url( $permalink ); ?>">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            <?php
                            $third_posts = get_sub_field('third_post');
                            if( $third_posts ): ?>
                                <?php foreach( $third_posts as $third_post ):
                                    $permalink = get_permalink( $third_post->ID );
                                    $title = get_the_title( $third_post->ID );
                                    $thumbnail = get_the_post_thumbnail_url( $third_post->ID );
                                    $date = get_the_date( 'F j, Y', $third_post->ID )

                                    ?>

                                    <div class="small_post flex align-items-start">
                                        <div class="thumbnail bg" style="background-image: url(<?php echo $thumbnail?>)"></div>
                                        <div class="text_block">
                                            <h5><?php echo wp_trim_words(  $title , 9, '...' )?></h5>
                                            <div class="btn_block">
                                                <p><?php echo esc_html( $date ); ?></p>
                                                <a class="btn default" href="<?php echo esc_url( $permalink ); ?>">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                        <div class="col-12">
                            <div class="btn_block view_all_mobile">
                                <a class="btn blue_b" href="">View more</a>
                            </div>
                        </div>
                    </div>
                    <div class="squer_blocks">
                        <div class="squer"></div>
                        <div class="squer"></div>
                        <div class="squer"></div>
                        <div class="squer"></div>
                        <div class="squer"></div>
                    </div>
                </div>
            </section>
        <?php elseif( get_row_layout() == 'directions_section' ): ?>
            <section class="directions_section">
                <?php if( have_rows('direction_block_first') ):
                    while( have_rows('direction_block_first') ): the_row();
                        $bg = get_sub_field('bg');
                        $title = get_sub_field('title');
                        ?>
                        <div class="directions_card">

                            <img class="directions_image" src="<?php echo $bg;?>" alt="" />
                            <div class="directions_title">
                                <h4 class="directions_title"><?php echo $title;?></h4>
                            </div>

                            <div class="squer" style="top: -80px; left: 0px"></div>
                            <div class="squer" style="bottom: -80px; left: -80px"></div>
                            <div class="squer" style="top: 0px; left: -80px"></div>
                            <div class="squer" style="top: 0px; left: -160px"></div>
                            <div class="squer" style="top: 80px; left: -160px"></div>
                            <div class="squer_mobile" style="top: -40px; left: 0px"></div>
                            <div class="squer_mobile" style="top: -40px; left: 40px"></div>
                            <div class="squer_mobile" style="top: -80px; left: -40px"></div>
                            <div class="squer_mobile" style="top: -40px; right: 0px"></div>
                            <div class="squer_mobile" style="top: -80px; right: 40px"></div>
                            <div class="squer_mobile" style="top: 0px; left: -160px"></div>
                        </div>
                    <?php endwhile;
                endif; ?>
            <?php if( have_rows('direction_block_second') ):
                while( have_rows('direction_block_second') ): the_row();
                    $bg = get_sub_field('bg');
                    $title = get_sub_field('title');
                    ?>
                <div class="directions_card">
                    <img class="directions_image" src="<?php echo $bg;?>" alt="" />
                    <div class="directions_title">
                        <h4 class="directions_title"><?php echo $title;?></h4>
                    </div>
                </div>
                <?php endwhile;
            endif; ?>
            <?php if( have_rows('direction_block_third') ):
                while( have_rows('direction_block_third') ): the_row();
                    $bg = get_sub_field('bg');
                    $title = get_sub_field('title');
                    ?>
                <div class="directions_card">
                    <img class="directions_image" src="<?php echo $bg;?>" alt="" />
                    <div class="directions_title">
                        <h4 class="directions_title"><?php echo $title;?></h4>
                    </div>
                    <div class="squer" style="top: -80px; right: -80px"></div>
                    <div class="squer" style="bottom: -80px; right: -80px"></div>
                    <div class="squer" style="bottom: 0px; right: -160px"> </div>
                    <div class="squer_mobile" style="bottom: -40px; left: 0px"></div>
                    <div class="squer_mobile" style="bottom: -80px; left: 40px"></div>
                    <div class="squer_mobile" style="bottom: 0px; left: -40px"></div>
                    <div class="squer_mobile" style="bottom: -40px; left: -40px"></div>
                    <div class="squer_mobile" style="bottom: -40px; right: -40px"></div>
                    <div class="squer_mobile" style="bottom: -80px; right: 0"></div>
                    <?php endwhile;
                    endif; ?>
            </section>

        <?php elseif( get_row_layout() == 'support_section' ):
            $title = get_sub_field('title');
            $bg= get_sub_field('bg');
            $btn = get_sub_field('button');
            ?>
            <section class="support_section"
                     style="background: url(<?php echo $bg;?>); background-repeat: no-repeat; background-size: cover;">
                <div class="squer_mobile" style="top: 0px; left: 0px"></div>
                <div class="squer_mobile" style="top: 70px; right: 17px"></div>
                <div class="squer_mobile" style="top: 0px; right: -53px"></div>
                <h2 class="title col-12 col-md-5">
                    <?php echo $title;?>
                </h2>
                <div class="cards_case">
                    <?php if( have_rows('support_block') ):
                        while( have_rows('support_block') ): the_row();
                            $text = get_sub_field('text');
                            ?>
                            <div class="card">
                                <div class="cards_squer" style="top: -70px; left: -70px"></div>
                                <div class="cards_squer" style="top: -140px; left: -140px"></div>
                                <?php echo $text;?>
                            </div>
                        <?php endwhile;
                    endif; ?>

                </div>
                <div class="cards_case_mobile">
                    <?php if( have_rows('support_block') ):
                        while( have_rows('support_block') ): the_row();
                            $text = get_sub_field('text');
                            ?>
                                <div class="card">
                                    <?php echo $text;?>
                                </div>
                        <?php endwhile;
                    endif; ?>
                </div>
                <div class="support_button">
                    <a class="btn blue" href="<?php echo esc_url( $btn['url'] ); ?>" target="<?php echo esc_attr( $btn['title'] ); ?>"><?php echo esc_html( $btn['title'] ); ?></a>

                </div>
            </section>
        <?php elseif( get_row_layout() == 'customer_quotes' ):
            $title = get_sub_field('title');
            ?>
            <section class="customer_quotes">
                <div class="squer_mobile" style="position: absolute; top: 0; right: -53px"></div>
                <div class="squer_mobile" style="position: absolute; top: 70px; right: 17px"></div>
                <div class="heading">
                    <h3><?php echo $title;?></h3>
                    <div class="slider_controls">
                        <div class="slider-arrow left">
                            <img class="left" src="/wp-content/uploads/2021/03/Arrow_p.png" alt="" />
                        </div>
                        <div class="slider-arrow right">
                            <img src="/wp-content/uploads/2021/03/Arrow_w.png" alt="" />
                        </div>
                    </div>
                </div>
                <div class="slider_track" id="slider">
                    <?php if( have_rows('slide') ):
                        while( have_rows('slide') ): the_row();
                            $bg = get_sub_field('bg');
                            $text = get_sub_field('text');
                            $author_name = get_sub_field('author_name');
                            $author_position = get_sub_field('author_position');
                            ?>
                                <div class="slider_item">
                                    <div class="content">
                                        <div class="author_photo">
                                            <div class="squer">
                                                <img src="<?php echo $bg;?>" alt="" />
                                            </div>
                                            <div class="squer" style="position: absolute; top: 0; left: -200px"></div>
                                            <div class="squer" style="position: absolute; top: -100; left: -100px"
                                            ></div>
                                        </div>
                                        <img class="quote_icon" src="./assets/quote.svg" alt="" />
                                        <?php echo $text;?>
                                        <div class="author">
                                            <p><?php echo $author_name;?></p>
                                            <p><?php echo $author_position;?></p>
                                        </div>
                                    </div>
                                </div>
                        <?php endwhile;
                    endif; ?>
                </div>
            </section>
        <?php elseif( get_row_layout() == 'drone_mapping_section' ):
            $title = get_sub_field('title');
            $count=1;
            ?>
        <section class="drone_mapping_title">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="title_block">
                            <h2><?php echo $title;?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
            <?php if( have_rows('drone_mapping_block') ):
                while( have_rows('drone_mapping_block') ): the_row();
                    $title = get_sub_field('title');
                    $text = get_sub_field('text');
                    $bg = get_sub_field('bg');
                    ?>
                    <?php if( $count%2===0):?>
                        <section class="mapping_section link_left">
                            <div class="bg right_bg" style="background-image: url(<?php echo $bg;?>)"></div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="text_block">
                                            <div class="mapping_title_block flex">
                                                <div class="icon_block flex">
                                                    <span><?php echo $count?></span>
                                                </div>
                                                <div class="title">
                                                    <h3><?php echo $title;?></h3>
                                                </div>
                                            </div>
                                            <div class="body_field_16">
                                                <?php echo $text;?>
                                            </div>
                                            <?php if( get_sub_field('btn_choise') ): {
                                                $choise = get_sub_field( 'add_button' );
                                                $btn = get_sub_field( 'btn' ); ?>
                                                <div class="btn_block">
                                                <?php if( $choise=='simple'):{ ?>
                                                    <a class="btn blue_b" href="<?php echo esc_url( $btn['url'] ); ?>" target="<?php echo esc_attr( $btn['title'] ); ?>"><?php echo esc_html( $btn['title'] ); ?></a>

                                                <?php }
                                                elseif( $choise=='video'):{ ?>

                                                    <a class="btn blue_b open_popup watch_v" href="<?php echo esc_url( $btn['url'] ); ?>" target="<?php echo esc_attr( $btn['title'] ); ?>"><?php echo esc_html( $btn['title'] ); ?></a>

                                                <?php }
                                                endif; } ?>
                                                </div>
                                            <?php endif;
                                            ?>

                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="bg img_block" style="background-image: url(<?php echo $bg;?>)"></div>
                                    </div>
                                    <div class="squer_blocks">
                                        <div class="squer"></div>
                                        <div class="squer"></div>
                                        <div class="squer"></div>
                                    </div>
                                </div>
                                <div class="link_blocks flex justify-content-between">
                                    <?php if( have_rows('link_blocks') ):
                                        while( have_rows('link_blocks') ): the_row();
                                            $img = get_sub_field('image');
                                            $btn = get_sub_field('link');

                                            ?>

                                            <div class="link_block">
                                                <div class="img_block flex">
                                                    <img src="<?php echo $img;?>" alt="">
                                                </div>

                                                <div class="btn_block">
                                                    <a class="btn default" href="<?php echo esc_url( $btn['url'] ); ?>" target="<?php echo esc_attr( $btn['title'] ); ?>"><?php echo esc_html( $btn['title'] ); ?></a>
                                                </div>
                                            </div>
                                        <?php endwhile;
                                    endif;?>
                                </div>
                            </div>
                        </section>
                        <?php else: ?>
                        <section class="mapping_section link_right">
                            <div class="bg left_bg" style="background-image: url(<?php echo $bg;?>)"></div>
                            <div class="container">
                                <div class="row justify-content-end">
                                    <div class="col-12 col-md-6">
                                        <div class="bg left_bg" style="background-image: url(<?php echo $bg;?>)"></div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="text_block">
                                            <div class="mapping_title_block flex">
                                                <div class="icon_block flex">
                                                    <span><?php echo $count?></span>
                                                </div>
                                                <div class="title">
                                                    <h3><?php echo $title;?></h3>
                                                </div>
                                            </div>
                                            <div class="body_field_16">
                                                <?php echo $text;?>
                                            </div>
                                            <?php if( get_sub_field('btn_choise') ): {
                                                $choise = get_sub_field( 'add_button' );
                                                $btn = get_sub_field( 'btn' ); ?>
                                                <div class="btn_block">
                                                <?php if( $choise=='simple'):{ ?>
                                                    <a class="btn blue_b" href="<?php echo esc_url( $btn['url'] ); ?>" target="<?php echo esc_attr( $btn['title'] ); ?>"><?php echo esc_html( $btn['title'] ); ?></a>

                                                <?php }
                                                elseif( $choise=='video'):{ ?>

                                                    <a class="btn blue_b open_popup watch_v" href="<?php echo esc_url( $btn['url'] ); ?>" target="<?php echo esc_attr( $btn['title'] ); ?>"><?php echo esc_html( $btn['title'] ); ?></a>

                                                <?php }
                                                endif; } ?>
                                                </div>
                                            <?php endif;
                                            ?>

                                        </div>
                                    </div>
                                    <div class="squer_blocks">
                                        <div class="squer"></div>
                                        <div class="squer"></div>
                                        <div class="squer"></div>
                                    </div>
                                </div>
                                <div class="link_blocks flex justify-content-between">
                                    <?php if( have_rows('link_blocks') ):
                                        while( have_rows('link_blocks') ): the_row();
                                            $img = get_sub_field('image');
                                            $btn = get_sub_field('link');

                                            ?>

                                            <div class="link_block">
                                                <div class="img_block flex">
                                                    <img src="<?php echo $img;?>" alt="">
                                                </div>

                                                <div class="btn_block">
                                                    <a class="btn default" href="<?php echo esc_url( $btn['url'] ); ?>" target="<?php echo esc_attr( $btn['title'] ); ?>"><?php echo esc_html( $btn['title'] ); ?></a>
                                                </div>
                                            </div>

                                        <?php endwhile;
                                    endif;?>
                                </div>
                            </div>
                        </section>
                        <?php endif?>
                <?php
                    $count++;
                endwhile;
            endif; ?>
        <?php endif;
    endwhile;
endif;


get_footer();