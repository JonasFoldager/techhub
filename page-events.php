<?php get_header()?>

<div class="logo_and_menu">
        <div class="logo_box">
            <a href="<?php echo site_url()?>">
            <img class="logo" src="<?php the_field("logo_event")?>" alt="">
            </a>
        </div>

        <div class="menu">
          <?php wp_nav_menu(array("theme_location" => "techhub_green")) ?>
        </div>
    </div>

             <div class="eventbackground">
                 <div class="textarea">
                    <h1 class="eventheader"><?php the_field("eventheader") ?></h1>
                    <p class="eventtext"><?php the_field("eventtext") ?></p>
                    <a id="ticektbox" href="https://www.eventbrite.com/o/techhub-syd-26210215133">Find tickets</a>
                </div>
             </div>

             <?php
                $loop = new WP_Query( array(
                'post_type' => 'upcomingevents',
                'posts_per_page' => -1
                )
                );?>

                <div class="loopevents" style="height: <?php echo 50*$loop->post_count - 5*($loop->post_count-1) ?>vh; overflow: hidden;">
                    <?php $i = 0 ?>
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <?php $class = ($i % 2 == 0) ? "odd" : "even" ?>
                        <div class="eventsections">
                        <div class="events_title" class="<?php echo $class; ?>" style="transform: translateY(-<?php echo 10*$i ?>%)"> 
                            <a href="<?php the_field("upcomingeventsimage") ?>" data-lightbox="event-<?php echo $i ?>"><?php the_title()?>
                        </div>
                        
                        <div><img id="eventpictures" class="<?php echo $class; ?>" src="<?php the_field("upcomingeventsimage") ?>" style="transform: translateY(-<?php echo 10*$i ?>%)" alt="">
                        </div>
                  
                        </div>
                        
                        <?php $i++ ?>

                    <?php endwhile; wp_reset_query(); ?>
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