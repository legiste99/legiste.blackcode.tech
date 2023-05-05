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
                <li><a href="/">Home</a></li>
                <li><a href="/about" >About</a></li>
                <li><a href="/#services">Services</a></li>
                <li><a href="#"><s>Portfolio</s></a></li>
                <li><a href="/#"><s>Blog</s></a></li>
                <li><a href="/#" class="active">Contact</a></li>
            </ul>
        </nav>
        <!--hamburger-menu-->
        <a class="hamburger-menu js-toggle-menu" href="#">
            <div class="g-lines">
                <span class="line line-dark"></span>
                <span class="line line-dark"></span>
                <span class="line line-dark"></span>
            </div>
        </a>
    </div>

    <!-- contact-->
    <div class="section contact">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!--Section title-->
                    <div class="section-heading">
                        <p class="section-description bg-base-color">Feel free to contact me</p>
                        <h2 class="section-title"> Contact Me</h2>
                    </div>
                </div>
            </div>

            <div class="row ">
                <div class="col-lg-3 col-md-6">
                    <!--phone-->
                    <div class="contact-item ">
                        <p><i class="fab fa-whatsapp base-color"></i> Phone: </p>
                        <p><a href="tel:+27684834924">068 483 4924</a></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <!--Email-->
                    <div class="contact-item">
                        <p><i class="fas fa-envelope base-color"></i> Email: </p>
                        <p> <a href="mailto:legistendabashinze@gmail.com">legistendabashinze@gmail.com </a></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <!--Adress-->
                    <div class="contact-item">
                        <p><i class="fas fa-map-marker-alt base-color"></i> Adress: </p>
                        <p>Kraaifontein, Cape town, ZA</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <!--social-icons-->
                    <div class="contact-item">
                        <p><i class="fas fa-share-alt base-color"></i>Socials media: </p>
                        <ul class="social-icons list-inline">
                            <li><a href="https://www.facebook.com/legiste.ndabashinze/" target="_blank"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/legiste-ndabashinze-06920b209/" target="_blank"> <i class="fab fa-linkedin"></i></a></li>
                            <li><a href="https://www.instagram.com/legiste.ndabashinze/" target="_blank"> <i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://wa.me/27684834924" target="_blank"> <i class="fab fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mb-30" >
                <!--form-->
                <div class="col-lg-7 wow customFadeInUp slow" >

                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                    @endif

                    <form action="{{asset('php/mail.php')}}" class="contact_form" method="POST" id="main_contact_form">
                        <div class="alert alert-success contact_msg" style="display: none" role="alert">
                            Your message was sent successfully.
                        </div>
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Name" required="required">
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email" required="required">
                        </div>

                        <div class="form-group">
                            <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject" required="required">
                        </div>

                        <div class="form-group">
                            <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Message" required="required"></textarea>
                        </div>

                        <button type="submit" name="submit" class="btn-custom">Send Message</button>
                    </form>
                </div>
                <!--google-map-->
                <div class="col-lg-5 wow customFadeInUp delay-0-4s slow">
                    <div class="google-map mb-30">
                        <iframe src="https://www.google.com/maps/embed/v1/place?q=Kraaifontein,+Cape+Town,+South+Africa&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8" allowfullscreen="">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--
<div style="overflow:hidden;max-width:100%;width:500px;height:500px;"><div id="gmap-canvas" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Kraaifontein,+Cape+Town,+South+Africa&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe></div><a class="code-for-google-map" href="https://www.bootstrapskins.com/themes" id="enable-map-info">premium bootstrap themes</a><style>#gmap-canvas .text-marker{}.map-generator{max-width: 100%; max-height: 100%; background: none;</style></div>
--}}

    <!--loading -->
    <div class="loading">
        <div class="circle"></div>
    </div>

<x-javascript/>

</body>

</html>
