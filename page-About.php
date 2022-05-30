<?php get_header()?>

<div class="logo_and_menu">
        <div class="logo_box">
            <a href="<?php echo site_url()?>">
            <img class="logo" src="<?php the_field("logo-about")?>" alt="">
            </a>
        </div>

        <div class="menu">
          <?php wp_nav_menu(array("theme_location" => "techhub_green")) ?>
        </div>
    </div>

<div style="background-color: #EBDCB1">
    <div id="aboutimg" style="background-image: url(<?php the_field("toppicture") ?>); clip-path: polygon(0 0, 100% 0%, 100% 100%, 0 89%);">
   
    <div class="aboutcoverbox">
            <h1 class="whoarewe"><?php the_field("whoarewe")?></h1>
            <h1 class="whatwedo"><?php the_field("whatwedo")?></h1>
    </div>
            
    </div>
</div>

    <div class="startup_section">
        <h1 class="startupheader"><?php the_field("aboutheader")?></h1>
    </div>
    <div class="boxaroundinfo">
        <div class="about_info_box_startup">
            <div class="keywords-1">
                    <div class="keywordbox-text">
                        <p class="aboutinfotext"><?php the_field("aboutinfo")?></p>
                    </div>

                    <div class="keywordbox-words">
                        <div class="keyword"><?php the_field("keyword1")?></div>
                        <div class="keyword"><?php the_field("keyword2")?></div>
                    </div>  
                </div>    
    </div>

    <h1 class="startupheadermission"><?php the_field("missionheader")?></h1>



    <div>
        <?php
            $loop = new WP_Query( array(
                    'post_type' => 'about',
                    'posts_per_page' => -1
                )
                );
                ?>


                <?php $i = 0 ?>
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <?php $class = ($i % 2 == 0) ? "odd" : "even" ?>
                    <div class="missioninfo <?php echo $class?>">

                        <div class="abouttitlebox">
                            <div class="missiontitle"><?php the_title() ?></div>
                        </div>

                        <div class="aboutimagebox">
                            <img id="missionpicture" src="<?php the_field("missionimage") ?>" alt="">
                        </div>

                    </div>
                    <?php $i++ ?>
                <?php endwhile; wp_reset_query(); ?>


        <div class="whatwedobox">
            <h1 class="whatwedoheader"><?php the_field("whatwedoheader")?></h1>

            <?php
            $loop = new WP_Query( array(
                    'post_type' => 'whatwedo',
                    'posts_per_page' => -1
                )
                );
                ?>


                <?php $i = 0 ?>
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <?php $class = ($i % 2 == 0) ? "odd" : "even" ?>
                    <div class="whatwedocpt ">

                    <div class="infoarea <?php echo $class?>">
                        <div class="titelandinfo">
                            <div class="whatwedotitle"><?php the_title() ?></div>
                            <div class="whatwedoinfo"><?php the_field("whatwedoinfo") ?></div> 
                        </div> 
                        <div class="whatimagebox">
                            <img id="whatwedopicture" src="<?php the_field("whatwedoimage") ?>" alt="">
                        </div>
                    </div>
                    
                    <?php $i++ ?>
                <?php endwhile; wp_reset_query(); ?>

        


<?php get_footer()?>


