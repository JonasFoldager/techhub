<?php get_header()?>

<body <?php body_class() ?>>
    <div class="logo_and_menu">
        <div class="logo_box">
            <a href="<?php echo site_url()?>">
            <img class="logo" src="<?php the_field("logo")?>" alt="">
            </a>
        </div>

        <div class="menu">
          <?php wp_nav_menu(array("theme_location" => "techhub_green")) ?>
        </div>
    </div>
        <div class="fontpageimg">
            <video autoplay muted loop id="background_img_frontpage">
                <source src="<?php the_field("video_frontpage")?>" type="video/mp4">
            </video>
             <div class="coverbox">
                 <!-- Vi har valgt at kode deres tagline fordi designet vil krave at kunden skal skrive information ind i 3 custom fields og det vil ikke være optimalt -->
                 <p class="info_frontpage"> We support <span class="info_span_front_page"> tech startups, students and investors</span> to grow the tech ecosystem in southern Denmark</p> 
                <a class="bottum_to_newsletter" href="#mail">Sign up</a>
            </div>
        </div>

        <div id="mail">
            <div class="mail_headline"><?php the_field("mail_headline")?></div>
            <div class="mail_description"><?php the_field("mail_description")?></div>
            <div class="contact7">	
                <?php echo apply_shortcodes( '[contact-form-7 id="33" title="Contact form 1"]' ); ?>
            </div>
        </div>
        <div class="citat_background">
            <div class="citat">
                    <h1 class="citat_headline"><?php the_field("citat_headline") ?></h1>
                <div class="citat_texst">
                    <?php

                    $loop = new WP_Query( array(
                        'post_type' => 'citat',
                        'posts_per_page' => -1
                    )
                    );
                    ?>

                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="citat_box">
                        <img class="citat_marker" src="<?php the_field("citat_marker") ?>" alt="">
                        <div class="the_title"><?php the_title() ?></div>
                        <div class="name"><?php the_field("name") ?></div>
                        <div class="titel"><?php the_field("titel") ?></div>
                        <div class="company"><?php the_field("company") ?></div>
                    </div>
                    <?php endwhile; wp_reset_query(); ?>
                </div>
            </div>
        </div>
        <div class="partnerbackground">
        <div class="partner">
            <h1 class="partner_headline"><?php the_field("partner_headline") ?></h1>
       
            <?php
                $loop = new WP_Query( array(
                'post_type' => 'partners',
                'posts_per_page' => -1
                )
                );?>

                <div class="loop">
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <div class="partner_list">
                            
                            <div><img src="<?php the_field("partner_logo") ?>" alt=""></div>
                        </div>
                    <?php endwhile; wp_reset_query(); ?>
                </div>     
            </div>
            </div>

            <div class="footer_background">
            <div class="footer_green">

                <div class="footermenu">
                    <?php wp_nav_menu(array("theme_location" => "footermenu")) ?>
                </div>


                <div class="footer">
                    <div class="lnbox">
                        <a href="https://www.linkedin.com/in/kasperthom/" target="blank"><img id="lnlogo" src="<?php the_field("baseln") ?>" alt=""></a>
                        <div class="lnmail"><?php the_field("kaspermailbase") ?></div>
                    </div>
                    <div class="lnbox">
                        <a href="https://www.linkedin.com/in/trinefalbe/" target="blank"><img id="lnlogo" src="<?php the_field("baseln") ?>" alt=""></a>
                        <div class="lnmail"><?php the_field("trinemailbase") ?></div>
                    </div>
                    <div class="lnbox">
                        <a href="https://www.linkedin.com/in/ronni-baslund/" target="blank"><img id="lnlogo" src="<?php the_field("baseln") ?>" alt=""></a>
                        <div class="lnmail"><?php the_field("ronnimailbase") ?></div>
                    </div>

                </div>


            </div>
            <div class="copyright">
                <p class="copyright">
                    Copyright 2019 - TECHHUB SYD
                    <br>
                    By signing up to our community and newsletter you agree to receive updates on TECHHUB SYD events and news about relevant tech in the region.
                </p>
            </div>
        </div>

<?php get_footer()?>