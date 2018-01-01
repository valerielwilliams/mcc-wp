<?php
/*
Template Name: Gallery
*/
get_header(); ?>

<!--Hero-->
        <div class="hero_container gallery">
            <h1>Gallery</h1>
        </div>


        <!--Intro-->
        <div class="intro">
            <h2>Closet and pantries and garages, oh my!</h2>
            <p>Take a look at some of our recent work and <a href="/page-contact.php/contact">contact</a> us today for a
            for a free consultation with one of our designers.</p>
        </div>

        <!--Gallery photos with Advanced Custom Fields-->
        <?php $images = get_field('gallery'); $size = 'full';

               if( $images ): ?>
        <div class="gallery_wrapper">


                <?php foreach( $images as $image ): ?>

                    	        <?php echo wp_get_attachment_image( $image['ID'], $size ); ?>

                        <?php endforeach; ?>

        </div>
             <?php endif; ?>


<?php get_footer(); ?>
