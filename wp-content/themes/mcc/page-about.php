<?php
/*
Template Name: About
*/
get_header(); ?>

        <!--Hero-->

        <div class="hero_container about">
            <h1>About us</h1>
        </div>

        <!--Intro-->
        <div class="intro">
            <h2>About Wayne and Cece</h2>
            <p>Wayne Clark and his wife Cece have been designing custom closets for
            clients all over the United States since April of 1987.  After building
            a very successful and reputable closet design business in Central Florida,
            Wayne and his wife discovered and fell in love with middle Tennessee and
            the Nashville area back in 2006.</p>

            <p>They have three children; their oldest son in the the music business, a daughter who runs a
            women's clothing boutique with her mother in east Nashville and their youngest daugther who enjoys
            being homeschooled.</p>

            <p>Wayne and Cece love all that Nashville offers and they look forward to earning your business.</p>

            <div class="consult"><a href="/page-contact.php/contact">SCHEDULE A FREE CONSULTATION</a></div>
        </div>


        <!--Frequently Asked Questions-->

        <?php $query = new WP_Query( array(
            'posts_per_page' => '0',
            'post_type' => 'faqs'
            ) );
            if ($query->have_posts()) : ?>
        <div class="frequently-asked-questions js-faqs">

            <h2>Frequently Asked Questions</h2>

            <?php while ($query->have_posts()) : $query->the_post(); ?>
            <div class="faq_one">
                <div class="question">
                    <a href="#" class="js-faq-question"><?php the_title(); ?></a></div>
                <div class="answer js-faq-answer"><?php the_content(); ?></div>
            </div>
        <?php endwhile; ?>

        </div>
        <?php endif; ?>


        <!--Testimonials-->
        <div class="testimonials">
            <h2>Our customers love us</h2>
            <div class="tsl">
                <ul class="tsl-list">
                    <li class="tsl-item">
                        <div class="tsl-content">
                            <p>I wouldn't have believed that I had over 100 pairs of shoes until I saw Wayne count them.
                            He found a spot for all to be beautifully displayed. &mdash; C. Marie</p>
                        </div>
                    </li>
                    <li class="tsl-item">
                        <div class="tsl-content">
                            <p>When you first came out, I couldn't get one car in our two-car garage. Now its a
                            different story. I can't believe the difference. &mdash; S. Sharone</p>
                        </div>
                    </li>
                    <li class="tsl-item">
                        <div class="tsl-content">
                            <p>Throughout every step of the process, from initial meet and greet to the design and
                                installation, Wayne's company met and exceeded expectations. I highly recommend him. &mdash; Bill A.</p>
                        </div>
                    </li>
                    <li class="tsl-item">
                        <div class="tsl-content">
                            <p>I let my wife handle the closets, but my garage is my 'man cave'. I wanted it to not
                                only look good, but to be useful. It is useful and my garage looks amazing. &mdash; Robert T.</p>
                        </div>
                    </li>
                    <li class="tsl-item">
                        <div class="tsl-content">
                            <p>I used to throw out a lot of food due to expiration dates, but now that my pantry has been
                                reorganized, I can find everything now! &mdash; Lisa</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>


<?php get_footer(); ?>
