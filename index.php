<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <?php
        include('includes/header.php');
    ?>
    <!-- Title -->
    <title><?= $system['name'] ?></title>
</head>

<body id="top">

    <!-- site header
    ================================================== -->
    <?php
        include ('includes/topbar.php');
    ?>


    <!-- intro
    ================================================== -->
    <section id="intro" class="s-intro target-section">

        <div class="row intro-content">

            <div class="column large-9 mob-full intro-text">
                <h3>Hello, I'm John Doe</h3>
                <h1>
                    Digital Designer <br>
                    and Web Developer <br>
                    Based In Somewhere.
                </h1>
            </div>

            <div class="intro-scroll">
                <a href="#about" class="intro-scroll-link smoothscroll">
                    Scroll For More
                </a>
            </div>

            <div class="intro-grid"></div>
            <div class="intro-pic"></div>

        </div> <!-- end row -->

    </section> <!-- end intro -->


    <!-- about
    ================================================== -->
    <section id="about" class="s-about target-section">

        <div class="about-me">

            <div class="row heading-block" data-aos="fade-up">
                <div class="column large-full">
                    <h2 class="section-heading">About Me</h2>
                </div>
            </div>

            <div class="row about-me__content" data-aos="fade-up">
                <div class="column large-full about-me__text">
                    <p class="lead">
                    Nulla aspernatur nam et accusantium. Tempore delectus dignissimos aut
                    ab commodi. Labore et cupiditate temporibus odio debitis eaque. 
                    Officia provident aut iste et dicta perferendis. Velit iure adipisci. 
                    Molestiae qui fuga rerum facilis.
                    </p>

                    <p>
                    Reprehenderit quia id facilis nihil odit perferendis fugiat quidem voluptas. 
                    Non ratione tenetur. Quis earum quia deleniti fugit fugiat minus omnis. 
                    Iure dolore dolorum. Aspernatur quos cumque ea dolorum nemo nihil 
                    beatae magnam. Qui molestiae rem. Maxime enim provident ipsum reprehenderit tenetur. Et cupiditate 
                    repellendus. Et modi ipsum aut harum. Ratione alias.
                    </p>

                    <p>
                    Rerum consequatur dolore quae.
                    Qui excepturi facilis quam quae quasi. Mollitia occaecati minus voluptas veniam.
                    Qui excepturi facilis quam quae quasi. Mollitia occaecati minus voluptas veniam. Est est occaecati dolor 
                    qui aut et eum. Aspernatur quos cumque ea dolorum nemo nihil 
                    beatae magnam. Qui molestiae rem.
                    </p>

                    <p>
                    Maxime enim provident ipsum reprehenderit tenetur. Et cupiditate 
                    repellendus. Et modi ipsum aut harum. Ratione alias sed. Rerum 
                    consequatur dolore quae. Qui excepturi facilis quam quae quasi. 
                    Mollitia occaecati minus voluptas veniam. Est est occaecati dolor 
                    qui aut et eum. Aspernatur quos cumque ea dolorum nemo nihil 
                    beatae magnam. Qui molestiae rem. Aspernatur quos cumque ea dolorum 
                    nemo nihil. Qui molestiae rem.
                    </p>
                </div>
            </div>
    
            <div class="row about-me__buttons">
                <div class="column large-half tab-full" data-aos="fade-up">
                    <a href="#0" class="btn btn--stroke full-width">Hire Me</a>
                </div>
                <div class="column large-half tab-full" data-aos="fade-up">
                    <a href="#0" class="btn btn--primary full-width">Download CV</a>
                </div>
            </div>

        </div> <!-- end about-me -->

        <div class="about-experience">

            <div class="row heading-block" data-aos="fade-up">
                <div class="column large-full">
                    <h2 class="section-heading">Work & Education</h2>
                </div>
            </div>

            <div class="row about-experience__timeline">

                <div class="column large-half tab-full" data-aos="fade-up">
                    <div class="timeline">

                        <div class="timeline__icon-wrap">
                            <span class="timeline__icon timeline__icon--work"></span>
                        </div>

                        <div class="timeline__block">
                            <div class="timeline__bullet"></div>
                            <div class="timeline__header">
                                <p class="timeline__timeframe">July 2018 - Present</p>
                                <h3 class="item-title">Awesome Studio</h3>
                                <h5>Lead Designer</h5>
                            </div>
                            <div class="timeline__desc">
                                <p>Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi cupidatat laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident cupidatat nulla esse cillum laborum occaecat nostrud sit dolor incididunt amet est occaecat nisi.</p>
                            </div>
                        </div>

                        <div class="timeline__block">
                            <div class="timeline__bullet"></div>
                            <div class="timeline__header">
                                <p class="timeline__timeframe">July 2017 - June 2018</p>
                                <h3 class="item-title">Super Cool Agency</h3>
                                <h5>Frontend Developer</h5>
                            </div>
                            <div class="timeline__desc">
                                <p>Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi cupidatat laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident cupidatat nulla esse cillum laborum occaecat nostrud sit dolor incididunt amet est occaecat nisi.</p>
                            </div>
                        </div>

                        <div class="timeline__block">
                            <div class="timeline__bullet"></div>
                            <div class="timeline__header">
                                <p class="timeline__timeframe">March 2016 - June 2017</p>
                                <h3 class="item-title">Epic Design Studio</h3>
                                <h5>Frontend Developer</h5>
                            </div>
                            <div class="timeline__desc">
                                <p>Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi cupidatat laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident cupidatat nulla esse cillum laborum occaecat nostrud sit dolor incididunt amet est occaecat nisi.</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="column large-half tab-full" data-aos="fade-up">
                    <div class="timeline">

                        <div class="timeline__icon-wrap">
                            <span class="timeline__icon timeline__icon--education"></span>
                        </div>

                        <div class="timeline__block">
                            <div class="timeline__bullet"></div>
                            <div class="timeline__header">
                                <p class="timeline__timeframe">July 2011 - June 2015</p>
                                <h3 class="item-title">University of Life</h3>
                                <h5>Master Degree</h5>
                            </div>
                            <div class="timeline__desc">
                                <p>Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi cupidatat laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident cupidatat nulla esse cillum laborum occaecat nostrud sit dolor incididunt amet est occaecat nisi.</p>
                            </div>
                        </div>

                        <div class="timeline__block">
                            <div class="timeline__bullet"></div>
                            <div class="timeline__header">
                                <p class="timeline__timeframe">July 2009 - June 2011</p>
                                <h3 class="item-title">State Design University</h3>
                                <h5>Bachelor Degree</h5>
                            </div>
                            <div class="timeline__desc">
                                <p>Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi cupidatat laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident cupidatat nulla esse cillum laborum occaecat nostrud sit dolor incididunt amet est occaecat nisi.</p>
                            </div>
                        </div>

                        <div class="timeline__block">
                            <div class="timeline__bullet"></div>
                            <div class="timeline__header">
                                <p class="timeline__timeframe">July 2005 - June 2009</p>
                                <h3 class="item-title">School of Hard Knocks</h3>
                                <h5>Bachelor Degree</h5>
                            </div>
                            <div class="timeline__desc">
                                <p>Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi cupidatat laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident cupidatat nulla esse cillum laborum occaecat nostrud sit dolor incididunt amet est occaecat nisi.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div> <!-- end about-experience -->

    </section> <!-- end s-about -->


    <!-- services
    ================================================== -->
    <section id="services" class="s-services ss-dark target-section">

        <div class="shadow-overlay"></div>

        <div class="row heading-block heading-block--center" data-aos="fade-up">
            <div class="column large-full">
                <h2 class="section-heading section-heading--centerbottom">Capabilities</h2>

                <p class="section-desc">
                    My passion and goal is to help you make your business standout.
                </p>
            </div>
        </div> <!-- end heading-block -->

        <div class="row services-list block-large-1-3 block-medium-1-2 block-tab-full">

            <div class="column item-service" data-aos="fade-up">
                <div class="item-service__content">
                    <h4 class="item-title">Brand Identity</h4>
                    <p>
                    Sit ut cum molestiae. Dolore ducimus qui quasi. Fugiat consequatur sit vel illum vel et 
                    a delectus. Vel sequi vitae voluptatem perspiciatis eligendi. Voluptatibus optio natus 
                    asperiores est commodi amet quia architecto. Dolores necessitatibus et.
                    </p>
                </div>
            </div>

            <div class="column item-service" data-aos="fade-up">
                <div class="item-service__content">
                    <h4 class="item-title">Illustration</h4>
                    <p>
                    Sit ut cum molestiae. Dolore ducimus qui quasi. Fugiat consequatur sit vel illum vel et 
                    a delectus. Vel sequi vitae voluptatem perspiciatis eligendi. Voluptatibus optio natus 
                    asperiores est commodi amet quia architecto. Dolores necessitatibus et.
                    </p>
                </div>
            </div>

            <div class="column item-service" data-aos="fade-up">
                <div class="item-service__content">
                    <h4 class="item-title">Web Design</h4>
                    <p>
                    Sit ut cum molestiae. Dolore ducimus qui quasi. Fugiat consequatur sit vel illum vel et 
                    a delectus. Vel sequi vitae voluptatem perspiciatis eligendi. Voluptatibus optio natus 
                    asperiores est commodi amet quia architecto. Dolores necessitatibus et.
                    </p>
                </div>
            </div>

            <div class="column item-service" data-aos="fade-up">
                <div class="item-service__content">
                    <h4 class="item-title">Product Strategy</h4>
                    <p>
                    Sit ut cum molestiae. Dolore ducimus qui quasi. Fugiat consequatur sit vel illum vel et 
                    a delectus. Vel sequi vitae voluptatem perspiciatis eligendi. Voluptatibus optio natus 
                    asperiores est commodi amet quia architecto. Dolores necessitatibus et.
                    </p>
                </div>
            </div>

            <div class="column item-service" data-aos="fade-up">
                <div class="item-service__content">
                    <h4 class="item-title">UI/UX Design</h4>
                    <p>
                    Sit ut cum molestiae. Dolore ducimus qui quasi. Fugiat consequatur sit vel illum vel et 
                    a delectus. Vel sequi vitae voluptatem perspiciatis eligendi. Voluptatibus optio natus 
                    asperiores est commodi amet quia architecto. Dolores necessitatibus et.
                    </p>
                </div>
            </div>

            <div class="column item-service" data-aos="fade-up">
                <div class="item-service__content">
                    <h4 class="item-title">Mobile Design</h4>
                    <p>
                    Sit ut cum molestiae. Dolore ducimus qui quasi. Fugiat consequatur sit vel illum vel et 
                    a delectus. Vel sequi vitae voluptatem perspiciatis eligendi. Voluptatibus optio natus 
                    asperiores est commodi amet quia architecto. Dolores necessitatibus et.
                    </p>
                </div>
            </div>

        </div> <!-- end services-list -->

    </section> <!-- end s-services -->


    <!-- CTA
    ================================================== -->
    <section class="s-cta ss-dark">

        <div class="row heading-block heading-block--center" data-aos="fade-up">
            <div class="column large-full">
                <h2 class="section-desc">
                    Need a great reliable web hosting?
                </h2>
            </div>
        </div> <!-- end heading-block -->

        <div class="row cta-content" data-aos="fade-up">
            <div class="column large-full">
                <p>
                We highly recommend <a href="https://www.dreamhost.com/r.cgi?287326">DreamHost</a>.
                Powerful web and Wordpress hosting. Guaranteed.
                Starting at $2.95 per month.
                </p>

                <a href="https://www.dreamhost.com/r.cgi?287326" class="btn full-width">Get Started</a>
            </div>
        </div> <!-- end ad-content -->

    </section> <!-- end s-cta -->


    <!-- works
    ================================================== -->
    <section id="works" class="s-works target-section">

        <div class="row heading-block heading-block--center" data-aos="fade-up">
            <div class="column large-full">
                <h2 class="section-heading section-heading--centerbottom">Selected Works</h2>
                <p class="section-desc">
                    Here are some of my selected works I have done lately. Feel free to 
                    check them out.
                </p>
            </div>
        </div> <!-- end heading-block -->

        <div class="masonry-wrap">

            <div class="masonry">
                <div class="grid-sizer"></div>
    
                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">
                        <div class="item-folio__thumb">
                            <a href="<?php echo base_url ?>assets/images/portfolio/gallery/g-city-building.jpg" class="thumb-link" title="Shutterbug" data-size="1050x700">
                                <img src="<?php echo base_url ?>assets/images/portfolio/city-building.jpg" 
                                     srcset="<?php echo base_url ?>assets/images/portfolio/city-building.jpg 1x, <?php echo base_url ?>assets/images/portfolio/city-building@2x.jpg 2x" alt="">
                            </a>    
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link" target="_blank"></a>
                        </div>
    
                        <div class="item-folio__text">
                            <h4 class="item-folio__title">
                                City Building
                            </h4>
                            <p class="item-folio__cat">
                                Branding
                            </p>
                        </div>
    
                        <div class="item-folio__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </div>
                    </div>
                </div> <!-- end masonry__brick -->
    
                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">
                        <div class="item-folio__thumb">
                            <a href="<?php echo base_url ?>assets/images/portfolio/gallery/g-woodcraft.jpg" class="thumb-link" title="Woodcraft" data-size="1050x700">
                                <img src="<?php echo base_url ?>assets/images/portfolio/woodcraft.jpg" 
                                     srcset="<?php echo base_url ?>assets/images/portfolio/woodcraft.jpg 1x, <?php echo base_url ?>assets/images/portfolio/woodcraft@2x.jpg 2x" alt="">
                            </a>
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link" target="_blank"></a>
                        </div>
                        <div class="item-folio__text">
                            <h4 class="item-folio__title">
                                Woodcraft
                            </h4>
                            <p class="item-folio__cat">
                                Web Design
                            </p>
                        </div>
                        <div class="item-folio__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </div>
                    </div>
                </div> <!-- end masonry__brick -->

                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">
                            
                        <div class="item-folio__thumb">
                            <a href="<?php echo base_url ?>assets/images/portfolio/gallery/g-beetle.jpg" class="thumb-link" title="The Beetle Car" data-size="1050x700">
                                <img src="<?php echo base_url ?>assets/images/portfolio/the-beetle.jpg"
                                     srcset="<?php echo base_url ?>assets/images/portfolio/the-beetle.jpg 1x, <?php echo base_url ?>assets/images/portfolio/the-beetle@2x.jpg 2x" alt="">
                            </a>
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link" target="_blank"></a>
                        </div>
                        <div class="item-folio__text">
                            <h4 class="item-folio__title">
                                The Beetle
                            </h4>
                            <p class="item-folio__cat">
                                Web Development
                            </p>
                        </div>
                        <div class="item-folio__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </div>
                    </div>
                </div> <!-- end masonry__brick -->

                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">
                        <div class="item-folio__thumb">
                            <a href="<?php echo base_url ?>assets/images/portfolio/gallery/g-shutterbug.jpg" class="thumb-link" title="Grow Green" data-size="1050x700">
                                <img src="<?php echo base_url ?>assets/images/portfolio/shutterbug.jpg" 
                                     srcset="<?php echo base_url ?>assets/images/portfolio/shutterbug.jpg 1x, <?php echo base_url ?>assets/images/portfolio/shutterbug@2x.jpg 2x" alt="">
                            </a>
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link" target="_blank"></a>
                        </div>
                        <div class="item-folio__text">
                            <h4 class="item-folio__title">
                                Shutterbug
                            </h4>
                            <p class="item-folio__cat">
                                Branding
                            </p>
                        </div>
                        <div class="item-folio__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </div>
                    </div>
                </div> <!-- end masonry__brick -->

                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">
                            
                        <div class="item-folio__thumb">
                            <a href="<?php echo base_url ?>assets/images/portfolio/gallery/g-lamp.jpg" class="thumb-link" title="Guitarist" data-size="1050x700">
                                <img src="<?php echo base_url ?>assets/images/portfolio/lamp.jpg" 
                                     srcset="<?php echo base_url ?>assets/images/portfolio/lamp.jpg 1x, <?php echo base_url ?>assets/images/portfolio/lamp@2x.jpg 2x" alt="">
                            </a>
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link" target="_blank"></a>
                        </div>
                        <div class="item-folio__text">
                            <h4 class="item-folio__title">
                                Lamp
                            </h4>
                            <p class="item-folio__cat">
                                Web Design
                            </p>
                        </div>
                        <div class="item-folio__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </div>
                    </div>
                </div> <!-- end masonry__brick -->
        
                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">
                            
                        <div class="item-folio__thumb">
                            <a href="<?php echo base_url ?>assets/images/portfolio/gallery/g-fuji.jpg" class="thumb-link" title="Palmeira" data-size="1050x700">
                                <img src="<?php echo base_url ?>assets/images/portfolio/fuji.jpg"
                                     srcset="<?php echo base_url ?>assets/images/portfolio/fuji.jpg 1x, <?php echo base_url ?>assets/images/portfolio/fuji@2x.jpg 2x" alt="">
                            </a>
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link" target="_blank"></a>
                        </div>
                        <div class="item-folio__text">
                            <h4 class="item-folio__title">
                                Fuji
                            </h4>
                            <p class="item-folio__cat">
                                Web Design
                            </p>
                        </div>
                        <div class="item-folio__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </div>
                    </div>
                </div> <!-- end masonry__brick -->

            </div> <!-- end masonry -->

        </div> <!-- end masonry-wrap -->

    </section> <!-- end s-work -->


    <!-- testimonies
    ================================================== -->
    <section class="s-testimonials">
    
        <div class="row testimonials" data-aos="fade-up">

            <div class="column large-full testimonials__slider">

                <div class="testimonials__slide">
                    <p>Molestiae incidunt consequatur quis ipsa autem nam sit enim magni. Voluptas tempore rem. 
                    Explicabo a quaerat sint autem dolore ducimus ut consequatur neque.  Nisi dolores quaerat fuga rem nihil nostrum.
                    Laudantium quia consequatur molestias delectus culpa.</p>
                    <div class="testimonials__info">
                        <img src="<?php echo base_url ?>assets/images/avatars/user-02.jpg" alt="Author image" class="testimonials__avatar">
                        <cite class="testimonials__cite">
                            <strong>Tim Cook</strong>
                            <span>CEO, Apple</span>
                        </cite>
                    </div>
                </div> <!-- end testimonials__slide -->

                <div class="testimonials__slide">
                    <p>Excepturi nam cupiditate culpa doloremque deleniti repellat. Veniam quos repellat voluptas animi adipisci.
                    Nisi eaque consequatur. Voluptatem dignissimos ut ducimus accusantium perspiciatis.
                        Quasi voluptas eius distinctio. Atque eos maxime.</p>
                    <div class="testimonials__info">
                        <img src="<?php echo base_url ?>assets/images/avatars/user-01.jpg" alt="Author image" class="testimonials__avatar">
                        <cite class="testimonials__cite">
                            <strong>Sundar Pichai</strong>
                            <span>CEO, Google</span>
                        </cite>
                    </div>
                </div> <!-- end testimonials__slide -->

                <div class="testimonials__slide">
                    <p>Repellat dignissimos libero. Qui sed at corrupti expedita voluptas odit. Nihil ea quia nesciunt. Ducimus aut sed ipsam.  
                    Autem eaque officia cum exercitationem sunt voluptatum accusamus. Quasi voluptas eius distinctio.
                    Voluptatem dignissimos ut.</p>
                    <div class="testimonials__info">
                        <img src="<?php echo base_url ?>assets/images/avatars/user-04.jpg" alt="Author image" class="testimonials__avatar">
                        <cite class="testimonials__cite">
                            <strong>Satya Nadella</strong>
                            <span>CEO, Microsoft</span>
                        </cite>
                    </div>
                </div> <!-- end testimonials__slide -->
                
            </div> <!-- end testimonials__slider -->

        </div> <!-- end testimonials -->

    </section> <!-- end s-testimonials -->


    <!-- contact
    ================================================== -->
    <section id="contact" class="s-contact ss-dark target-section">

        <div class="row heading-block" data-aos="fade-up">
            <div class="column large-full">
                <h2 class="section-heading">Get In Touch</h2>
            </div>
        </div>

        <div class="row contact-main" data-aos="fade-up">
            <div class="column large-full">
                <p class="contact-email">
                    <a href="mailto:#0">hello@epitome.com</a>
                </p>

                <p class="section-desc">
                I'm happy to connect, listen and help. Let's work together and build
                something awesome. Let's turn your idea to an even greater product.
                <a href="mailto:#0">Email Me</a>.
                </p>
            </div>
        </div>

        <div class="row contact-infos" data-aos="fade-up" data-aos-anchor=".contact-main">

            <div class="column large-5 medium-full contact-phone">
                <h4>Call Me</h4>
                <a href="tel:197-543-2345">+197 543 2345</a>
            </div>

            <div class="column large-7 medium-full contact-social">
                <h4>Social</h4>
                <ul>
                    <li><a href="#0" title="Facebook">Facebook</a></li>
                    <li><a href="#0" title="Twitter">Twitter</a></li>
                    <li><a href="#0" title="Instagram">Instagram</a></li>
                </ul>
            </div>

        </div> <!-- end contact-infos -->

    </section> <!-- end s-contact -->


    <!-- footer -->
    <?php
        include ('includes/footer.php');
    ?>


    <!-- photoswipe background
    ================================================== -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
                    "Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
                    "Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
                "Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div><!-- end photoSwipe background -->


    <!-- Bottom -->
    <?php
        include('includes/bottom.php');
    ?>

</body>