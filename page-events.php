<?php get_header()?>

<div class="fontpageimg">
            <div class="logo_box">
                <div class="logo">
                    <a href="index.php">
                            <img id="logo-front-page" src="<?php the_field("logo")?>" alt="">
                        </a>
                </div>
                <div class="menu">
                    <?php wp_nav_menu(array("theme_location" => "techhub_green")) ?>
                </div>
             </div>
</div>

             <div class="eventbackground">
                 <div class="textarea">
                    <h1 class="eventheader"><?php the_field("eventheader") ?></h1>
                    <p class="eventtext"><?php the_field("eventtext") ?></p>
                    <p class="eventtext"><?php the_field("eventfree") ?></p>
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
                        <div class="events_title" class="<?php echo $class; ?>" style="transform: translateY(-<?php echo 10*$i ?>%)"> <?php the_title()?></div>

                        <div><img id="eventpictures" class="<?php echo $class; ?>" src="<?php the_field("upcomingeventsimage") ?>" style="transform: translateY(-<?php echo 10*$i ?>%)" alt="">
                        </div>
                        </div>
                        
                        <?php $i++ ?>

                    <?php endwhile; wp_reset_query(); ?>
                </div>  

<?php get_footer()?>