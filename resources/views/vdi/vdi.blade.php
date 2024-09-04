<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Versalink Development Initiative</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/4.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('vdii/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vdii/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min4.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/vdi.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar text-white-50 row gx-0 align-items-center d-none d-lg-flex" id="diff">
            <div class="col-lg-6 px-5 text-start">
                <small><i class="fa fa-map-marker-alt me-2"></i>NO25, B close, 3rd Avenue, Gwarinpa, Abuja.</small>
                <small class="ms-4"><i class="fa fa-envelope me-2"></i>versalink.ng@gmail.com</small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small>Follow us:</small>
                <a class="text-white-50 ms-3" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="text-white-50 ms-3" href=""><i class="fab fa-twitter"></i></a>
                <a class="text-white-50 ms-3" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="text-white-50 ms-3" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
                <h1 class="fw-bold text-primary m-0">Versalink Development Initiative. (VDI)</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0 text-dark">
                    <a href="{{ route('home') }}" class="nav-item nav-link">Home</a>
                    <a href="{{ route('about') }}" class="nav-item nav-link">ABOUT</a>
                    <a href="{{ route('vdi') }}" class="nav-item nav-link">VERSALINK DEVELOPMENT INITIATIVE</a>
                    <a href="{{ route('podcast') }}" class="nav-item nav-link">OUR DIVISIONS</a>
                    <a href="{{ route('podcast') }}" class="nav-item nav-link">VERSALINK POST</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div id="diff">
        <div class="container-fluid p-0 mb-5" id="bash">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="tion" id="heigh">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-7 pt-5" id="color">
                                        <h1 class="display-4 text-primary mb-3 animated slideInDown"
                                            style="color: #FF6F0F; z-index:1000;">Let's Save More
                                            Lives
                                            With Our Helping Hand</h1>
                                        <p class="fs-5 mb-5 animated slideInDown" id="white">The Versalink
                                            Development
                                            Initiative (VDI) is the engine of our social impact efforts. This program
                                            goes
                                            beyond the bottom line, channeling our resources to create positive change.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Removed the carousel-control-prev and carousel-control-next buttons -->
            </div>
        </div>
        <!-- Carousel End -->

        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                            <img class="position-absolute w-100 h-100 pt-5 pe-5" src="img/bee.jpg" alt=""
                                style="object-fit: cover;">
                            <img class="position-absolute top-0 end-0 bg-white ps-2 pb-2" src="img/carousel-2.jpg"
                                alt="" style="width: 200px; height: 200px;">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="h-100">
                            <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">About Us
                            </div>
                            <h1 class="display-6 mb-5" style="color:#FF6F0F;">We Help People In Need</h1>
                            <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">
                                <p class="text-dark mb-2">As the founder of Versalink, I embarked on a journey driven
                                    by a
                                    deep belief in the power of connectivity to transform businesses.</p>
                                <span class="text-primary">Alamin Abbas, Founder</span>
                            </div>
                            <p class="mb-5">Our mission is to drive positive change by addressing key social,
                                economic,
                                and environmental challenges, ensuring that every individual has the opportunity to
                                thrive.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- About End -->


        <!-- Causes Start -->
        <!-- Causes End -->


        <!-- Service Start -->
        <!-- Service End -->


        <!-- Donate Start -->
        <div class="container-fluid donate my-5 py-5" data-parallax="scroll" data-image-src="img/carousel-2.jpg">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <h1 class="display-6 text-white mb-5">Our Vision
                        </h1>
                        <p class="text-white-50 mb-0">To create a world where every community can achieve its full
                            potential through inclusive and sustainable development.</p>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <div class="h-100 bg-white p-5 w-100">
                            <img src="img/carousel-2.jpg" alt="" class="w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Donate End -->

        <div class="container-xxl py-5">
            <div class="container">
                <div class="section-title text-center">
                    <h1 class="display-5 mb-5 text-primary">Our Activites</h1>
                </div>
                <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="col-12 text-center">
                        <ul class="list-inline mb-5" id="portfolio-flters">
                            <li class="mx-2 active" data-filter="*">All</li>
                        </ul>
                    </div>
                </div>
                <div class="row g-4 portfolio-container">
                    <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/summit.jpg" alt="" />
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href="img/summit.jpg"
                                        data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="border border-5 border-light border-top-0 p-4">
                                <p class="text-primary fw-medium mb-2">Versalink at Youth Agenda Summit (Oct 20, 2023)
                                </p>
                                <p class="lh-base mb-0">Versalink made a strong showing at the Youth Agenda Summit 2.0
                                    on
                                    October 20th, 2023. Our founder took center stage, granting a captivating interview
                                    where he emphasized the critical role young people play in shaping Nigeria's future.
                                    Overall the Summit was an insightful discussion.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.3s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/cup.jpg" alt="" />
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href="img/cup.jpg"
                                        data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="border border-5 border-light border-top-0 p-4">
                                <p class="text-primary fw-medium mb-2">Versa Cup: May 25th & 26th (2024)</p>
                                <p class="lh-base mb-0">Earlier this year Versalink hosted the Versa Cup, a grassroots
                                    football tournament, on May 25th and 26th. Eight teams battled it out,showcasing
                                    their
                                    skills and sportsmanship. But the focus wasn't just on winning (congrats to the
                                    champions!). It was about fostering a love for football, teamwork, and community
                                    also to
                                    empower the youths and promote talents. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.5s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/bee.jpg" alt="" />
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href="img/bee.jpg"
                                        data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="border border-5 border-light border-top-0 p-4">
                                <p class="text-primary fw-medium mb-2">Versalink Organized Spelling Bee at Betharbel
                                    IDP
                                    School (Nov 28, 2023). </p>
                                <p class="lh-base mb-0">The event ignited a love for learning among these talented
                                    students, highlighting the need for continued educational support. Versalink remains
                                    committed,to expand educational initiatives and empower IDP students to reach their
                                    full
                                    potential..</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.5s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/shuraim.JPEG" alt=""
                                    style="height: 300px; object-fit: cover;" />
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href="img/bee.jpg"
                                        data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="border border-5 border-light border-top-0 p-4">
                                <p class="text-primary fw-medium mb-2">Versalinks Ramadan Event </p>
                                <p class="lh-base mb-0">Versalinks hosted a successful Ramadan lecture series at Baze
                                    University under the theme
                                    "Holding Unto Our Deen in Today's World."
                                    The series kicked off on March 15th with an enlightening lecture by renowned scholar
                                    Abu jabir
                                    Abdullah, known as Pen Abdul. The series concluded with a final lecture by
                                    Nasiruddin Shuraim
                                    Abdulmumin, known as Nshuraim.
                                    Additional sessions featuring insightful talks by Ustaz Dantine and Sheikh Faisal
                                    were held on
                                    March 22nd.
                                    These esteemed speakers explored the crucial importance of maintaining faith in the
                                    complexities of modern life. Attendees gained valuable knowledge and inspiration to
                                    strengthen their spiritual foundation.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.5s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/vine.jpg" alt=""
                                    style="height: 300px; object-fit: cover;" />
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href="img/vine.jpg"
                                        data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="border border-5 border-light border-top-0 p-4">
                                <p class="text-primary fw-medium mb-2">Versalink Celebrates with Vine Heritage Home on
                                    Children's Day </p>
                                <p class="lh-base mb-0">Versalink brought joy to Vine Heritage Home (VVH)
                                    orphanage for Children's Day! A happy day for the kids and
                                    a rewarding experience for Versalink.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.5s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/comp.jpg" alt="" />
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href="img/bee.jpg"
                                        data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="border border-5 border-light border-top-0 p-4">
                                <p class="text-primary fw-medium mb-2">The VDI Short Story Prize (Inaugural Edition)
                                </p>
                                <p class="lh-base mb-0">In line with VDI's goal to support Nigeria's education sector,
                                    a crucial aspect of the program, this newly
                                    launched competition honors the memory of Ibrahim Jidda. It aims to inspire young
                                    writers, promote literary
                                    excellence, and contribute to social progress.</p>
                            </div>
                        </div>
                    </div>
                    {{--       <div class="h-25 col-6 d-flex justify-content-center">
                  
                    <a href=""
                        class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft position-relative bottom-0">See
                        More</a>
                </div> --}}
                </div>
            </div>
            <!-- Team Start -->
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
                        style="max-width: 500px;">
                        <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Team Members
                        </div>
                        <h1 class="display-6 mb-5" style="color:#FF6F0F;">Let's Meet With Our Ordinary Soldiers</h1>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="team-item position-relative rounded overflow-hidden">
                                <div class="overflow-hidden">
                                    <img class="img-fluid" style="height: 391px; width:261px;" src="img/abba.jpg"
                                        alt="">
                                </div>
                                <div class="team-text bg-light text-center p-4">
                                    <h5>Abba Ibrahim Jidda</h5>
                                    <p class="text-primary">Team Member</p>
                                    <div class="team-social text-center">
                                        <a class="btn btn-square" href=""><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="team-item position-relative rounded overflow-hidden">
                                <div class="overflow-hidden">
                                    <img class="img-fluid h-100" src="img/mj2.jpg" alt="">
                                </div>
                                <div class="team-text bg-light text-center p-4">
                                    <h5>Muhammad Jawwad Abdulkadir</h5>
                                    <p class="text-primary">Team Member</p>
                                    <div class="team-social text-center">
                                        <a class="btn btn-square" href=""><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="team-item position-relative rounded overflow-hidden">
                                <div class="overflow-hidden">
                                    <img class="img-fluid" style="height: 391px; width:261px;" src="img/AK.jpg"
                                        alt="">
                                </div>
                                <div class="team-text bg-light text-center p-4">
                                    <h5>Muhammad Alkali</h5>
                                    <p class="text-primary">Team Member</p>
                                    <div class="team-social text-center">
                                        <a class="btn btn-square" href=""><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="team-item position-relative rounded overflow-hidden">
                                <div class="overflow-hidden">
                                    <img class="img-fluid" style="height: 391px; width:261px;" src="img/senator.jpg"
                                        alt="">
                                </div>
                                <div class="team-text bg-light text-center p-4">
                                    <h5>Nasir Giade</h5>
                                    <p class="text-primary">Team Member</p>
                                    <div class="team-social text-center">
                                        <a class="btn btn-square" href=""><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="team-item position-relative rounded overflow-hidden">
                                <div class="overflow-hidden">
                                    <img class="img-fluid" style="height: 391px; width:261px;" src="img/farouk.jpg"
                                        alt="">
                                </div>
                                <div class="team-text bg-light text-center p-4">
                                    <h5>Farouk Abdulkadir</h5>
                                    <p class="text-primary">Team Member</p>
                                    <div class="team-social text-center">
                                        <a class="btn btn-square" href=""><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="team-item position-relative rounded overflow-hidden">
                                <div class="overflow-hidden">
                                    <img class="img-fluid" style="height: 391px; width:261px;" src="img/igor.JPG"
                                        alt="">
                                </div>
                                <div class="team-text bg-light text-center p-4">
                                    <h5>Yusuf Muhammad</h5>
                                    <p class="text-primary">Team Member</p>
                                    <div class="team-social text-center">
                                        <a class="btn btn-square" href=""><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team End -->


            <!-- Testimonial Start -->
            <!-- Testimonial End -->


            <!-- Footer Start -->
            <div class="container-fluid text-white-50 footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s"
                id="footerbg">
                <div class="container py-5">
                    <div class="row g-5">
                        <div class="col-lg-3 col-md-6">
                            <h1 class="fw-bold text-primary mb-4">Versa<span class="text-white">link</span></h1>
                            <p>Supporting access to quality education and lifelong learning opportunities for children
                                and
                                adults alike.
                            </p>
                            <div class="d-flex pt-2">
                                <a class="btn btn-square me-1" href="https://x.com/versalinkng?s=11"
                                    target="_blank"><i class="fab fa-twitter"></i></a>
                                {{-- <a class="btn btn-square me-1" href=""><i class="fab fa-facebook-f"></i></a> --}}
                                {{--          <a class="btn btn-square me-1" href=""><i class="fab fa-youtube"></i></a> --}}
                                <a class="btn btn-square me-0"
                                    href="https://www.instagram.com/versalink.vdi?igsh=ZGgyaXY0eGdpZDV1"
                                    target="_blank"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <h5 class="text-light mb-4">Address</h5>
                            <p><i class="fa fa-map-marker-alt me-3"></i>NO25, B close, 3rd Avenue.
                                Gwarinpa.
                                Abuja.</p>
                            <p><i class="fa fa-phone-alt me-3"></i>+234 907 390 9293</p>
                            <p><i class="fa fa-envelope me-3"></i>versalink.ng@gmail.com</p>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <h5 class="text-light mb-4">Quick Links</h5>
                            <a class="btn btn-link" href="{{ route('home') }}">Home</a>
                            <a class="btn btn-link" href="{{ route('about') }}">About</a>
                            <a class="btn btn-link" href="{{ route('podcast') }}">Versalink Post</a>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <h5 class="text-light mb-4">Newsletter</h5>
                            <p>Kindly fill in your email to receive monthly newsletters from versalink</p>
                            <div class="position-relative mx-auto" style="max-width: 400px;">
                                <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text"
                                    placeholder="Your email">
                                <button type="button"
                                    class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid copyright">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                                &copy; <a href="#">Versalink</a>, All Right Reserved.
                            </div>
                            <div class="col-md-6 text-center text-md-end">
                                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                                Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('vdii/wow/wow.min.js') }}"></script>
        <script src="{{ asset('vdii/easing/easing.min.js') }}"></script>
        <script src="{{ asset('vdii/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('vdii/owlcarousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('vdii/parallax/parallax.min.js') }}"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('js/vdi.js') }}"></script>
</body>

</html>
