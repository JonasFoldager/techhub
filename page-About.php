<?php get_header()?>

<div style="background-color: #EBDCB1">
    <div id="aboutimg" style="background-image: url(<?php the_field("toppicture") ?>); clip-path: polygon(0 0, 100% 0%, 100% 100%, 0 89%);">
   
    <div class="aboutcoverbox">
            <h1 class="whoarewe"><?php the_field("whoarewe")?></h1>
            <h1 class="whatwedo"><?php the_field("whatwedo")?></h1>
    </div>
            
    </div>
</div>

    <div class="startup_section">
        <h3 class="startupheader"><?php the_field("aboutheader")?></h3>
    </div>
    <div class="boxaroundinfo">
        <div class="about_info_box_startup">

            <div class="keywordbox">
                <p class="aboutinfotext"><?php the_field("aboutinfo")?></p>
            </div>

            <div class="keywordbox">
                <div class="keyword"><?php the_field("keyword1")?></div>
                <div class="keyword"><?php the_field("keyword2")?></div>
            </div>      
    </div>

    <h3 class="startupheader"><?php the_field("missionheader")?></h3>



    <div>
        <?php
            $loop = new WP_Query( array(
                    'post_type' => 'citat',
                    'posts_per_page' => -1
                )
                );
                ?>

                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                  <div class="missioninfo">
                    <div class="missiont"><?php the_title() ?></div>
                 </div>
                <?php endwhile; wp_reset_query(); ?>
    </div>


<?php get_footer()?>


<img class="missionpicture" src="<?php the_field("missionimage") ?>" alt="">
