<header class="s-header">

    <div class="header-logo">
        <a class="site-logo" href="<?php echo base_url ?>">
            <img src="<?php echo base_url ?>assets/images/logo.svg" alt="Homepage">
        </a>
    </div>

    <nav class="header-nav-wrap">
        <?php
            if (strpos($_SERVER['PHP_SELF'], 'error') !== false) {
                // if error.php
            }
            else {
        ?>
        <ul class="header-main-nav">
            <li class="current"><a class="smoothscroll" href="#intro" title="intro">Intro</a></li>
            <li><a class="smoothscroll" href="#about" title="about">About</a></li>
            <li><a class="smoothscroll" href="#services" title="services">Services</a></li>
            <li><a class="smoothscroll" href="#works" title="works">Works</a></li>
            <li><a class="smoothscroll" href="#contact" title="contact us">Say Hello</a></li>	
        </ul>
        <?php } ?>

        <ul class="header-social">
            <li><a href="#0"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
            <li><a href="#0"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="#0"><i class="fab fa-dribbble" aria-hidden="true"></i></a></li>
            <li><a href="#0"><i class="fab fa-behance" aria-hidden="true"></i></a></li>
        </ul>
    </nav>

    <a class="header-menu-toggle" href="#"><span>Menu</span></a>

</header> <!-- end s-header -->