<?php
/*
Template Name: Home
*/
get_header(); ?>

<!--Hero-->
        <div class="hero_container home">
            <div class="mySlides fade">
            <a href="/page-closets.php/closets"><h1>Closets you'll want to live in</h1></a>
            <img class src="<?php bloginfo('template_url'); ?>/assets/dist/img/closet_home.jpg" alt="closets" height="600"/>
            </div>
            <div class="mySlides fade">
            <a href="/page-garages.php/garages"><h1>Garages for your tools and toys</h1></a>
            <img src="<?php bloginfo('template_url'); ?>/assets/dist/img/garage.jpg" alt="garages" height="600"/>
            </div>
            <div class="mySlides fade">
            <a href="/page-smallspaces.php/small-spaces"><h1>Custom solutions just for you</h1></a>
            <img src="<?php bloginfo('template_url'); ?>/assets/dist/img/custom.jpg" alt="custom" height="600"/>
            </div>
        </div>

        <div class="dots">
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
        </div>

        <!--Welcome-->
        <div class="welcome">
            <h2>Welcome to Music City Closets, your key to organization.</h2>
            <p>Our designers are ready to help you with all of your organization
            needs, from simple pantries to elaborate walk-in closets and everything
            in between. <a href="/page-contact.php/contact">Contact</a> us today for a free consultation with one of our
            designers.</p>
        </div>


        <!--About-->
        <div class="about_clarks">
            <img src="<?php bloginfo('template_url'); ?>/assets/dist/img/gaines.jpg" alt="gaines family" width="450"/>
            <h2>About Wayne and Cece</h2>
            <p>Wayne Clark and his wife Cece have been designing custom closets for
            clients all over the United States since April of 1987.  After building
            a very successful and reputable closet design business in Central Florida,
            Wayne and his wife discovered and fell in love with middle Tennessee and
            the Nashville area back in 2006.  Wayne and Cece love all that Nashville
            offers and they look forward to earning your business.</p>
            <div class="consult"><a href="/page-contact.php/contact">SCHEDULE A FREE CONSULTATION</a></div>
        </div>



        <!--Let Wayne and Cece design something for you-->
        <div class="cards">
            <h2>Let Wayne and Cece design something for you</h2>
            <div class="card-wrapper">
                <div class="card__img closet">
                    <a href="/page-closets.php/closets">Closets</a>
                </div>
                <div class="card__img garage">
                    <a href="/page-garages.php/garages">Garages</a>
                </div>
                <div class="card__img ss">
                    <a href="/page-smallspaces.php/small-spaces">Small Spaces</a>
                 </div>
            </div>
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
