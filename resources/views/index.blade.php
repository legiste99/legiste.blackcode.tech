<!doctype html>
<html lang="en">

<head>
    <x-head/>
</head>

<body>
    <!--Menu-->
    <div class="main-menu fixed-top">
        <nav class="nav-menu">
            <ul class="menu">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/services">Services</a></li>
                <li><a href="#"><s>Portfolio</s></a></li>
                <li><a href="/#"><s>Blog</s></a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
        <!--hamburger-menu-->
        <a class="hamburger-menu js-toggle-menu" href="#">
            <div class="g-lines">
                <span class="line line-dark-2"></span>
                <span class="line line-dark-2"></span>
                <span class="line line-dark-2"></span>
            </div>
        </a>
    </div>

    <div class="main-logo text-left">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <a class="logo wow customFadeInUp slow"  href="#">LN</a>
                </div>
            </div>
        </div>
    </div>

    <!--Home-->
    <section class="home home-4 d-flex align-items-center" >
        <div class="container">
            <div class="row ">
                <div class="col-lg-7">
                    <div class="home-banner text-left wow customFadeInUp delay-0-2s slow">
                        <h6> Welcome! </h6>
                        <h1 class="cd-headline clip text-left">I'm
                            <span class="cd-words-wrapper base-color">
                                <b class="is-visible"> Legiste Ndabashinze </b>
                                <b> <span style="color: #35404e">a</span> Software Developer</b>
                                <b> <span style="color: #35404e">a</span> Web Developer</b>
                            </span>
                        </h1>
                        <p class="max-width-500  ml-0" >
                            Hi there! I'm Legiste Ndabashinze, a passionate software developer based in Cape Town.
                            With a Diploma in ICT: Applications Development from the esteemed Cape Peninsula University
                            of Technology, I'm ready to make my mark in the world of technology.</p>

                        <ul class="social-icons list-inline">
                            <li><a href="https://www.facebook.com/legiste.ndabashinze/" target="_blank"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/legiste-ndabashinze-06920b209/" target="_blank"> <i class="fab fa-linkedin"></i></a></li>
                            <li><a href="https://www.instagram.com/legiste.ndabashinze/" target="_blank"> <i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://wa.me/27684834924" target="_blank"> <i class="fab fa-whatsapp"></i></a></li>
                            <li><a href="/contact"> <i class="fas fa-envelope"></i></a></li>
                        </ul>
                        <a href="/about" class="btn-custom">More about me</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero" style="background-image: url({{asset('img/bg/1.png')}})"></div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 text-left">
                            <span class="wow customFadeInUp delay-0-4s slow" >© 2023 Blackcode — All Rights Reserved.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


     <!--loading -->
    <div class="loading">
        <div class="circle"></div>
    </div>


<x-javascript/>


</body>

</html>
