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
        <a class="sign_up_startups" href="">Sign up</a>
            
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

<div class="mailbox">
    <div class="startup_mail">
        <h3 class="techstartupheader"><?php the_field("startups_mail_headline")?></p>

        <?php echo apply_shortcodes( '[contact-form-7 id="125" title="startups contact form"]' ); ?>
    </div>
</div>





<?php get_footer()?>