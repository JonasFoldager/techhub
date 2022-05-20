<?php get_header()?>

<body>
        <div class="fontpageimg">
             <img id="background_img_frontpage" src="<?php the_field("background_img_frontpage") ?>" alt="">
             <div class="coverbox">
                 <!-- Vi har valgt at kode deres tagline fordi designet vil krave at kunden skal skrive information ind i 3 custom fields og det vil ikke være optimalt -->
                 <p class="info_frontpage"> We support <span class="info_span_front_page"> tech startups, students and investors</span> to grow the tech ecosystem in southern Denmark</p> 
                <a class="bottum_to_newsletter" href="">Sign up</a>
            </div>
        </div>
        <div class="mail">
            <div class="mail_headline"><?php the_field("mail_headline")?></div>
            <div class="mail_description"><?php the_field("mail_description")?></div>
            <div class="contact7">	
                <?php echo apply_shortcodes( '[contact-form-7 id="33" title="Contact form 1"]' ); ?>
            </div>
        </div>
        <div class="citat">
        <?php while(have_posts()): the_post() ?>
        <?php $quoteLoop = new WP_Query(array("post_type" => "citat", "posts_per_page" => -1)) ?>
        <?php while($quoteLoop->have_posts()): $quoteLoop->the_post() ?>
            <div class="quote">"<?php the_title() ?>"</div>
            <div class="author">- <?php the_field("author") ?></div>
        <?php endwhile ?>
        <?php wp_reset_postdata() ?>

    <?php endwhile ?>
        </div>

                




</body>

<?php get_footer()?>