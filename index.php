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
                <h3>Hello, I'm <?= $system['fullname'] ?></h3>
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
                    <p class="lead"><?= $system['about_first'] ?></p>
                    <p><?= $system['about_second'] ?></p>
                    <p><?= $system['about_third'] ?></p>
                    <p><?= $system['about_fourth'] ?></p>
                </div>
            </div>
    
            <div class="row about-me__buttons">
                <div class="column large-half tab-full" data-aos="fade-up">
                    <a href="mailto:<?= $system['email'] ?>" class="btn btn--stroke full-width">Hire Me</a>
                </div>
                <div class="column large-half tab-full" data-aos="fade-up">
                    <form action="<?= base_url . 'assets/docs/' . $system['resume'] ?>" method="POST">
                        <button class="btn btn--primary full-width" download>Download Resume</button>
                    </form>
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

                        <?php
                            $sql = "SELECT * FROM work ORDER BY priority DESC";
                            $sql_run = mysqli_query($con, $sql);

                            if ($sql_run) {
                                if(mysqli_num_rows($sql_run) > 0){
                                    while ($row = mysqli_fetch_assoc($sql_run)) {
                                        ?>
                                        <div class="timeline__block">
                                            <div class="timeline__bullet"></div>
                                            <div class="timeline__header">
                                                <p class="timeline__timeframe"><?= $row['started'] ?> - <?= $row['ended'] ?></p>
                                                <h3 class="item-title"><?= $row['company'] ?></h3>
                                                <h5><?= $row['position'] ?></h5>
                                            </div>
                                            <div class="timeline__desc">
                                                <p><?= $row['description'] ?></p>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                } else {
                                    echo "&nbsp;No work at the moment.";
                                }
                            } else {
                                echo "Query failed: " . mysqli_error($con);
                            }
                        ?>

                    </div>
                </div>

                <div class="column large-half tab-full" data-aos="fade-up">
                    <div class="timeline">

                        <div class="timeline__icon-wrap">
                            <span class="timeline__icon timeline__icon--education"></span>
                        </div>

                        <?php
                            $sql = "SELECT * FROM education ORDER BY priority DESC";
                            $sql_run = mysqli_query($con, $sql);

                            if ($sql_run) {
                                if(mysqli_num_rows($sql_run) > 0){
                                    while ($row = mysqli_fetch_assoc($sql_run)) {
                                        ?>
                                        <div class="timeline__block">
                                            <div class="timeline__bullet"></div>
                                            <div class="timeline__header">
                                                <p class="timeline__timeframe"><?= $row['started'] ?> - <?= $row['ended'] ?></p>
                                                <h3 class="item-title"><?= $row['school'] ?></h3>
                                                <h5><?= $row['degree'] ?></h5>
                                            </div>
                                            <div class="timeline__desc">
                                                <p><?= $row['description'] ?></p>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                } else {
                                    echo "&nbsp;No school at the moment.";
                                }
                            } else {
                                echo "Query failed: " . mysqli_error($con);
                            }
                        ?>

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

    <!-- styles
    ================================================== -->
    <section id="styles" class="s-works">
        <div class="column large-12 tab-full">

            <h3 class="text-center">Skill Bars</h3>

            <ul class="skill-bars">
                <li>
                    <div class="progress percent95"><span>92%</span></div>
                    <strong>PHP</strong>
                </li>
                <li>
                    <div class="progress percent90"><span>90%</span></div>
                    <strong>HTML5</strong>
                </li>
                <li>
                    <div class="progress percent85"><span>85%</span></div>
                    <strong>C++</strong>
                </li>
                <li>
                    <div class="progress percent80"><span>80%</span></div>
                    <strong>CSS</strong>
                </li>
                <li>
                    <div class="progress percent75"><span>73%</span></div>
                    <strong>Javascript</strong>
                </li>
                <li>
                    <div class="progress percent70"><span>70%</span></div>
                    <strong>JQuery</strong>
                </li>
                <li>
                    <div class="progress percent60"><span>66%</span></div>
                    <strong>Editing</strong>
                </li>
                <li>
                    <div class="progress percent40"><span>40%</span></div>
                    <strong>Flutter</strong>
                </li>
                <li>
                    <div class="progress percent35"><span>35%</span></div>
                    <strong>Dart</strong>
                </li>
                <li>
                    <div class="progress percent15"><span>12%</span></div>
                    <strong>Angular JS</strong>
                </li>
            </ul>

        </div>
    </section>

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
                    We highly recommend <a href="https://www.hostinger.ph" target="_blank">Hostinger</a>.
                    Powerful web and Wordpress hosting. Guaranteed.
                    Starting at ₱500 per month.
                </p>

                <a href="https://www.hostinger.ph" target="_blank" class="btn full-width">Get Started</a>
            </div>
        </div> <!-- end ad-content -->

    </section> <!-- end s-cta -->


    <!-- works
    ================================================== -->
    <section id="works" class="s-works target-section">

        <div class="row heading-block heading-block--center" data-aos="fade-up">
            <div class="column large-full">
                <h2 class="section-heading section-heading--centerbottom">Works</h2>
                <p class="section-desc">
                    Here are some of my works I have done lately. Feel free to 
                    check them out.
                </p>
            </div>
        </div> <!-- end heading-block -->

        <div class="masonry-wrap">

            <div class="masonry">
                <div class="grid-sizer"></div>
    
                <?php
                    $sql = "SELECT * FROM work ORDER BY priority DESC";
                    $sql_run = mysqli_query($con, $sql);

                    if ($sql_run) {
                        if(mysqli_num_rows($sql_run) > 0){
                            while ($row = mysqli_fetch_assoc($sql_run)) {
                                ?>
                                <div class="masonry__brick" data-aos="fade-up">
                                    <div class="item-folio">
                                        <div class="item-folio__thumb">
                                            <a href="<?php echo base_url ?>assets/images/works/<?= $row['banner'] ?>" class="thumb-link" title="<?= $row['name'] ?>" data-size="1050x700">
                                                <img src="<?php echo base_url ?>assets/images/works/<?= $row['banner'] ?>" 
                                                    srcset="<?php echo base_url ?>assets/images/works/<?= $row['banner'] ?> 1x, <?php echo base_url ?>assets/images/workds/<?= $row['banner'] ?> 2x" alt="<?= $row['name'] ?>">
                                            </a>    
                                            <a href="https://<?= $row['url'] ?>" class="item-folio__project-link" title="Project link" target="_blank"></a>
                                        </div>
                    
                                        <div class="item-folio__text">
                                            <h4 class="item-folio__title">
                                                <?= $row['name'] ?>
                                            </h4>
                                            <p class="item-folio__cat">
                                                <?= $row['type'] ?>
                                            </p>
                                        </div>
                    
                                        <div class="item-folio__caption">
                                            <p><?= $row['description'] ?></p>
                                        </div>
                                    </div>
                                </div> <!-- end masonry__brick -->
                                <?php
                            }
                        } else {
                            echo '<div style="text-align: center;">No my works at the moment.</div>';
                        }
                    } else {
                        echo "Query failed: " . mysqli_error($con);
                    }
                ?>

            </div> <!-- end masonry -->

        </div> <!-- end masonry-wrap -->

    </section> <!-- end s-work -->


    <!-- testimonies
    ================================================== -->
    <section class="s-testimonials">
    
        <div class="row testimonials" data-aos="fade-up">

            <div class="column large-full testimonials__slider">

                <?php
                    $sql = "SELECT * FROM testimonials";
                    $sql_run = mysqli_query($con, $sql);

                    if ($sql_run) {
                        if(mysqli_num_rows($sql_run) > 0){
                            while ($row = mysqli_fetch_assoc($sql_run)) {
                                ?>
                                <div class="testimonials__slide">
                                    <p><?= $row['description'] ?></p>
                                    <div class="testimonials__info">
                                        <img src="<?php echo base_url ?>assets/images/avatars/<?= $row['photo'] ?>" alt="Author image" class="testimonials__avatar">
                                        <cite class="testimonials__cite">
                                            <strong><?= $row['name'] ?></strong>
                                            <span><?= $row['position'] ?></span>
                                        </cite>
                                    </div>
                                </div> <!-- end testimonials__slide -->
                                <?php
                            }
                        } else {
                            echo '<div style="text-align: center;">No testimonials at the moment.</div>';
                        }
                    } else {
                        echo "Query failed: " . mysqli_error($con);
                    }
                ?>
                
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

                <p class="section-desc">
                I'm happy to connect, listen and help. Let's work together and build
                something awesome. Let's turn your idea to an even greater product.
                <a href="mailto:<?= $system['email'] ?>">Email Me</a>.
                </p>
            </div>
        </div>

        <div class="row contact-infos" data-aos="fade-up" data-aos-anchor=".contact-main">

            <div class="column large-5 medium-full contact-phone">
                <h4>Call Me</h4>
                <a href="tel:<?= $system['number'] ?>"><?= $system['number'] ?></a>
            </div>

            <div class="column large-7 medium-full contact-social">
                <h4>Social</h4>
                <ul>
                    <li><a href="<?= $system['facebook'] ?>" target="_blank" title="Facebook">Facebook</a></li>
                    <li><a href="<?= $system['twitter'] ?>" target="_blank" title="Twitter">Twitter</a></li>
                    <li><a href="<?= $system['instagram'] ?>" target="_blank" title="Instagram">Instagram</a></li>
                    <li><a href="<?= $system['github'] ?>" target="_blank" title="GitHub">GitHub</a></li>
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