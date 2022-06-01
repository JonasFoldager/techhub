<?php get_header()?>
<div class="logo_and_menu">
        <div class="logo_box">
            <a href="<?php echo site_url()?>">
            <img class="logo" src="<?php the_field("logo-startup")?>" alt="">
            </a>
        </div>

        <div class="menu">
          <?php wp_nav_menu(array("theme_location" => "techhub_green")) ?>
        </div>
    </div>

    <div style="background-color: #EBDCB1">
    <div id="pageimg" style="background-image: url(<?php the_field("frontpage_img") ?>); clip-path: polygon(0 0, 100% 0%, 100% 100%, 0 89%);">
   
        <h2 class="headline1"><?php the_field("start_ups_headline1")?></h2>
        <h3 class="headline2"><?php the_field("start_ups_headline2")?></h3>
        <a class="sign_up_startups" href="#mailbox">Sign up</a>
            
    </div>
    </div>

    <div class="startup_section">
        <h3 class="startupheader"><?php the_field("start_ups_page")?></h3>
    </div>

    <div class="boxaroundinfo">
        <div class="info_box_startup">
            <p class="startupbio"><?php the_field("startups_bio1")?></p>
            <p class="startupbio"><?php the_field("startups_bio2")?></p>
            <p class="startupbio"><?php the_field("startups_bio3")?></p>
    </div>

    
    </div>

<div id="mailbox">
    <div class="startup_mail">
        <h3 class="techstartupheader"><?php the_field("startups_mail_headline")?></p>

        <?php echo apply_shortcodes( '[contact-form-7 id="125" title="startups contact form"]' ); ?>
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




 