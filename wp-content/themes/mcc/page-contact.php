<?php
/*
Template Name: Contact
*/
get_header(); ?>

<!--Hero-->
        <div class="hero_container contact">
            <h1>Contact us</h1>
        </div>


        <!--Intro-->
        <div class="intro">
            <h2>Let Wayne and Cece design a storage solution just for you.</h2>
        </div>

        <div class="contact-form">
            <?= do_shortcode('[contact-form-7 id="55" title="Contact"]'); ?>
        </div>


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
