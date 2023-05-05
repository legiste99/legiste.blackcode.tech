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
                <li><a href="#" class="active">About</a></li>
                <li><a href="/services">Services</a></li>
                <li><a href="#"><s>Portfolio</s></a></li>
                <li><a href="/#"><s>Blog</s></a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
        <!--hamburger-menu-->
        <a class="hamburger-menu js-toggle-menu" href="#" >
            <div class="g-lines">
                <span class="line line-dark"></span>
                <span class="line line-dark"></span>
                <span class="line line-dark"></span>
            </div>
        </a>
    </div>

    <!-- About-->
    <div class="section">
        <div class="container">
            <!--Section title-->
            <div class="row" >
                <div class="col-12">
                    <div class="section-heading">
                        <p class="section-description bg-base-color">Know About Me</p>
                        <h2 class="section-title">About Me</h2>
                    </div>
                </div>
            </div>
            <!--about-info-->
            <div class="row d-flex align-items-center mb-50 wow customFadeInUp slow">
                <div class="col-lg-7 ">
                    <div class="about-info">
                        <h5>I'm Legiste Ndabashinze, an Applications Developer Graduate from the Cape Peninsula University of Technology</h5>
                        <p>I am a freelancer based in the South Africa and i have been building noteworthy UX/UI designs and websites for years,
                                which comply with the latest design trends.</p>
                        <div class="g-listes">
                            <ul class="liste">
                                <li><span>Name:</span>Legiste Ndabashinze.</li>
                                <li><span>Phone:</span>068 483 4927.</li>
                                <li><span>Freelancer:</span>Available.</li>
                            </ul>
                            <ul class="liste">
                                <li><span>Email:</span>legistendabashinze@gmail.com</li>
                                <li><span>Location:</span>Kraaifontein, Cape town</li>
                                <li><span>Experience:</span>1 year(s) .</li>
                            </ul>
                        </div>
                        <div class="g-bottom">
                            <a class="btn-custom" href="{{asset('files/legiste_ndabashinze_resume_may_2023.pdf')}}" download="legiste_ndabashinze_resume_may_2023.pdf">Download My CV</a>
                            <ul class="social-icons list-inline">
                                <li><a href="https://www.facebook.com/legiste.ndabashinze/" target="_blank"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/legiste-ndabashinze-06920b209/" target="_blank"> <i class="fab fa-linkedin"></i></a></li>
                                <li><a href="https://www.instagram.com/legiste.ndabashinze/" target="_blank"> <i class="fab fa-instagram"></i></a></li>
                                <li><a href="https://wa.me/27684834924" target="_blank"> <i class="fab fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="row">
                        <div class="col-6">
                            <div class="about-box">
                                <h2 class="base-color">2</h2>
                                <p>Projects Completed</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="about-box">
                                <h2 class="base-color">1</h2>
                                <p>Cups of coffee</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="about-box">
                                <h2 class="base-color">0</h2>
                                <p>Awards won</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="about-box">
                                <h2 class="base-color">2</h2>
                                <p>Satisfied Clients</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Work & Eduction-->
            <div class="section-sub-heading">
                <h4 class="section-sub-title"> Work & Eduction</h4>
            </div>
            <div class="row mb-50">
                <div class="col-md-6 wow customFadeInUp  delay-0-2s slow">
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="icon"></div>
                            <div class="box">
                                <h5>Web Developer Intern </h5>
                                <small class="bg-base-color"> July 2022 - December 2022</small>
                                <p>
                                    Within a small team of interns, we built a chatbot that has been highly effective in providing benefits for both the business and its customers. Its 24/7 availability has increased efficiency and saved businesses time and money, while its ability to handle multiple requests at once ensures that customers receive prompt and accurate responses to their inquiries.
                                </p>
                            </div>
                        </div>
                        {{--<div class="timeline-item">
                            <div class="icon"></div>
                            <div class="box">
                                <h5>Back-End Developer</h5>
                                <small class="bg-base-color"> 2004 - 2007</small>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio quo repudiandae.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="icon"></div>
                            <div class="box ">
                                <h5>UI/UX Designer </h5>
                                <small class="bg-base-color"> 2004 - 2007</small>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio quo repudiandae.</p>
                            </div>
                        </div>--}}
                    </div>
                </div>
                <div class="col-md-6 wow customFadeInUp delay-0-4s slow">
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="icon"></div>
                            <div class="box ">
                                <h5>National Senior Certificate</h5>
                                <small class="bg-base-color"> 2012 - 2016</small>
                                <p>Obtained my NSC from Eben Donges High School</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="icon"> </div>
                            <div class="box ">
                                <h5>Higher Certificate : ICT</h5>
                                <small class="bg-base-color"> 2017</small>
                                <p>Obtained My Higher Certificate from the Cape Peninsula University of Technology</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="icon"></div>
                            <div class="box">
                                <h5>Diploma : ICT In Applications Development </h5>
                                <small class="bg-base-color"> 2018 - 2023</small>
                                <p>Obtained My Diploma in ICT: Applications Development from the Cape Peninsula University of Technology</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Skills-->
            <div class="section-sub-heading">
                <h4 class="section-sub-title"> My Skills</h4>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <!--skill-item-->
                    <div class="skill-item">
                        <p>Java & Spring Boot</p>
                        <div class="skill-progress">
                            <div class="skill-progress-bar bg-base-color" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                <span>80%</span>
                            </div>
                        </div>
                    </div>

                    <!--skill-item-->
                    <div class="skill-item">
                        <p>Android Mobile Development</p>
                        <div class="skill-progress">
                            <div class="skill-progress-bar bg-base-color" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                <span>80%</span>
                            </div>
                        </div>
                    </div>

                    <!--skill-item-->
                    <div class="skill-item">
                        <p>PHP & Laravel </p>
                        <div class="skill-progress">
                            <div class="skill-progress-bar bg-base-color" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                <span>70%</span>
                            </div>
                        </div>
                    </div>

                    <!--skill-item-->
                    <div class="skill-item">
                        <p>Python & Django</p>
                        <div class="skill-progress">
                            <div class="skill-progress-bar bg-base-color" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                <span>50%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <!--skill-item-->
                    <div class="skill-item">
                        <p>Javascript</p>
                        <div class="skill-progress">
                            <div class="skill-progress-bar bg-base-color" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                <span>50%</span>
                            </div>
                        </div>
                    </div>

                    <!--skill-item-->
                    <div class="skill-item">
                        <p>Adobe XD</p>
                        <div class="skill-progress">
                            <div class="skill-progress-bar bg-base-color" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                <span>70%</span>
                            </div>
                        </div>
                    </div>

                    <!--skill-item-->
                    <div class="skill-item">
                        <p>HTML & CSS </p>
                        <div class="skill-progress">
                            <div class="skill-progress-bar bg-base-color" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                <span>60%</span>
                            </div>
                        </div>
                    </div>

                    <!--skill-item-->
                    <div class="skill-item">
                        <p>WordPress</p>
                        <div class="skill-progress">
                            <div class="skill-progress-bar bg-base-color" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                <span>70%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--loading -->
    <div class="loading">
        <div class="circle"></div>
    </div>

<x-javascript/>

</body>

</html>
