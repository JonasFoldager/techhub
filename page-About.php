<?php get_header()?>


<div class="menubar">
<div class="logo_box">
                <div class="logo">
                    <a href="#index">
                        <img id="logo-front-page" src="<?php the_field("logo")?>" alt="">
                    </a>
                </div>
                <div class="menu">
                    <?php wp_nav_menu(array("theme_location" => "techhub_green")) ?>
                </div>
             </div>   
</div>
<div style="background-color: #EBDCB1">
    <div id="pageimg" style="background-image: url(<?php the_costum_logo("frontpage_img") ?>); clip-path: polygon(0 0, 100% 0%, 100% 100%, 0 89%);">
        <h2 class="headline1"><?php the_field("start_ups_headline1")?></h2>
        <h3 class="headline2"><?php the_field("start_ups_headline2")?></h3>
        <a class="sign_up_startups" href="">Sign up</a>
            
    </div>
</div>






















<?php get_footer()?>