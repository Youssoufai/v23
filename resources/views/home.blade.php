<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>VERSALINK</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />
    @vite (['resources/css/app.css','resources/js/app.js'])
    <!-- Favicon -->
    <link href="img/4.png" rel="icon" />
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap"
        rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
</head>

<body>
    <!-- Spinner Start -->
    <!-- <div
   id="spinner"
   class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
  >
   <div
    class="spinner-grow text-primary"
    style="width: 3rem; height: 3rem"
    role="status"
   >
    <span class="sr-only">Loading...</span>
   </div>
  </div> -->
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-[#333] navbar-light sticky-top p-0" id="newbg"
        style="padding:3rem; display:flex; align-items:center;">
        <a href="index.html" class="navbar-brand" style="margin-top: 3rem;display:flex; align-items:center;">
            <img src="img/versa.webp" alt="">
        </a>
        <button type="button" class="navbar-toggler me-4 text-primary" style="background-color:#ff914c;"
            data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
                <a href="{{ route('about') }}" class="nav-item nav-link active">About</a>
                <a href="{{ route('vdi') }}" class="nav-item nav-link active">Versalink Development Initiative</a>
                <a href="{{ route('divisions') }}" class="nav-item nav-link active">Our Divisions</a>
                <a href="{{ route('podcast') }}" class="nav-item nav-link active">Versalink Post</a>
            </div>
        </div>
    </nav>

    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="set">
        <div class="container-fluid p-0 pb-5">
            <div class="owl-carousel header-carousel position-relative">
                <div class="owl-carousel-item position-relative">
                    {{--         <img class="img-fluid bg-primary w-100" src="img/4.png" alt="" /> --}}
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                        style="background: #000000">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12 col-lg-8 text-center">
                                    <h5 class="text-uppercase mb-3 animated slideInDown" style="color: #ff914c;">
                                        Welcome To
                                    </h5>
                                    <h1 class="display-3 text-white animated slideInDown mb-4">
                                        VERSALINK
                                    </h1>
                                    <p class="text-white">
                                        Versalink Group is a Nigerian
                                        conglomerate committed to redefining
                                        excellence across multiple industries.
                                        Founded with a vision to be a leading
                                        force in the Nigerian business
                                        landscape.

                                    </p>
                                    <a class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft"
                                        onclick="myFunction()" id="myBtn">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- About Start -->
        <!-- About Start -->
        <!-- About Start -->
        <div class="container-fluid overflow-hidden my-5 px-lg-0">
            <div class="container about px-lg-0">
                <div class="row g-0 align-items-center">
                    <div class="col-lg-6" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="img-fluid w-100 h-100" src="img/4.png" style="object-fit: cover;"
                                alt="About Us Image" />
                        </div>
                    </div>
                    <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                        <div class="p-4 p-lg-5">
                            <div class="section-title text-start">
                                <h1 class="display-5 mb-4 text-primary">About Us</h1>
                            </div>
                            <p class="mb-4 pb-2">
                                Versalink Group is a Nigerian
                                conglomerate committed to redefining
                                excellence across multiple industries.
                                Founded with a vision to be a leading
                                force in the Nigerian business
                                landscape.

                            </p>
                            <a href="{{ route('vdi') }}" class="btn btn-primary py-3 px-5">Explore More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Mission Start -->
        <div class="container-fluid overflow-hidden my-5 px-lg-0">
            <div class="container mission px-lg-0">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="img/pd.jpg"
                                style="object-fit: cover; max-height: 500px;" alt="Mission Image" />
                        </div>
                    </div>
                    <div class="col-lg-6 mission-text py-5 wow fadeIn" data-wow-delay="0.5s">
                        <div class="p-4 p-lg-5">
                            <div class="section-title text-start">
                                <h1 class="display-5 mb-4 text-primary">Our Mission</h1>
                            </div>
                            <p class="mb-4 pb-2">
                                Our mission is to be the foremost provider of goods and services, setting new standards
                                for quality, innovation, and customer satisfaction in every sector we operate.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mission End -->

        <!-- Vision Start -->
        <div class="container-fluid overflow-hidden my-5 px-lg-0">
            <div class="container vision px-lg-0">
                <div class="row g-0 align-items-center">
                    <div class="col-lg-6 vision-text py-5 wow fadeIn" data-wow-delay="0.5s">
                        <div class="p-4 p-lg-5">
                            <div class="section-title text-start">
                                <h1 class="display-5 mb-4 text-primary">Our Vision</h1>
                            </div>
                            <p class="mb-4 pb-2">
                                We envision a world where businesses are catalysts for positive change, driving economic
                                growth and improving lives. Versalink Group aspires to lead this transformation,
                                measuring success not only by financial gains but also by the lasting impact we make on
                                the world.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="img-fluid w-100 h-100" src="img/mj.jpg" style="object-fit: cover;"
                                alt="Vision Image" />
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Vision End -->

        <!-- Vision End -->
        <!-- Vision End -->

        <!-- More About Start -->

        <!-- More About End -->
        <!-- About End -->

        <!-- Feature Start -->

        <!-- Feature End -->

        <!-- Projects Start -->
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
                    {{--       <div class="h-25 col-6 d-flex justify-content-center">
                  
                    <a href=""
                        class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft position-relative bottom-0">See
                        More</a>
                </div> --}}
                </div>
            </div>
            <!-- Projects End -->
            <!-- Quote Start -->
            <div class="container-fluid overflow-hidden my-5 px-lg-0">
                <div class="container quote px-lg-0">
                    <div class="row g-0 mx-lg-0">
                        <div class="col-lg-6 ps-lg-0" style="min-height: 400px">
                            <div class="position-relative h-100 bg-dark">
                                <img class="position-absolute img-fluid w-100 h-100" src="img/4.png"
                                    style="object-fit: cover" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-6 quote-text py-5 wow fadeIn" data-wow-delay="0.5s">
                            <div class="p-lg-5 pe-lg-0">
                                <div class="section-title text-start">
                                    <h1 class="display-5 mb-4 text-primary">Contact Us</h1>
                                </div>
                                <p class="mb-4 pb-2">
                                    Feel free to reach out to us
                                </p>
                                <form>
                                    <div class="row g-3">
                                        <div class="col-12 col-sm-6">
                                            <input type="text" class="form-control border-0"
                                                placeholder="Your Name" style="height: 55px" />
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <input type="email" class="form-control border-0"
                                                placeholder="Your Email" style="height: 55px" />
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <input type="text" class="form-control border-0"
                                                placeholder="Your Mobile" style="height: 55px" />
                                        </div>

                                        <div class="col-12">
                                            <textarea class="form-control border-0" placeholder="Message"></textarea>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100 py-3" type="submit">
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Quote End -->

            <!-- Team Start -->
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="section-title text-center">
                        <h1 class="display-5 mb-5 text-primary">Team <span style="color: white;">Members</span></h1>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="team-item">
                                <div class="overflow-hidden position-relative">
                                    <img class="img-fluid" src="img/abba.jpg" style="height: 391px; width:100%;"
                                        alt="" />
                                    <div class="team-social">
                                        <a class="btn btn-square" href=""><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="text-center border border-top-0 p-4">
                                    <h5 class="mb-0 text-primary">Abba Ibrahim Jidda</h5>
                                    <small>Team Member</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="team-item">
                                <div class="overflow-hidden position-relative">
                                    <img class="img-fluid"style="height: 391px; width:100%;" src="img/mj2.jpg"
                                        alt="" />
                                    <div class="team-social">
                                        <a class="btn btn-square" href=""><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="text-center border border-top-0 p-4">
                                    <h5 class="mb-0 text-primary">Muhammad Jawwad Abdulkadir</h5>
                                    <small>Team Member</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="team-item">
                                <div class="overflow-hidden position-relative">
                                    <img class="img-fluid" style="height: 391px; width:100%;"src="img/igor.JPG"
                                        alt="" />
                                    <div class="team-social">
                                        <a class="btn btn-square" href=""><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="text-center border border-top-0 p-4">
                                    <h5 class="mb-0 text-primary">Yusuf Muhammad</h5>
                                    <small>Team Member</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="team-item">
                                <div class="overflow-hidden position-relative">
                                    <img class="img-fluid" style="height: 391px; width:100%;"src="img/AK.jpg"
                                        alt="" />
                                    <div class="team-social">
                                        <a class="btn btn-square" href=""><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="text-center border border-top-0 p-4">
                                    <h5 class="mb-0 text-primary">Muhammad Alkali</h5>
                                    <small>Team Member</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="team-item">
                                <div class="overflow-hidden position-relative">
                                    <img class="img-fluid" style="height: 391px; width:100%;"src="img/senator.jpg"
                                        alt="" />
                                    <div class="team-social">
                                        <a class="btn btn-square" href=""><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="text-center border border-top-0 p-4">
                                    <h5 class="mb-0 text-primary">Nasir Giade</h5>
                                    <small>Team Member</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="team-item">
                                <div class="overflow-hidden position-relative">
                                    <img class="img-fluid" style="height: 391px; width:100%;"src="img/farouk.jpg"
                                        alt="" />
                                    <div class="team-social">
                                        <a class="btn btn-square" href=""><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="text-center border border-top-0 p-4">
                                    <h5 class="mb-0 text-primary">Farouk Abdulkadir</h5>
                                    <small>Team Member</small>
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
            <div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="container py-5">
                    <div class="row g-5 justify-content-between">
                        <div class="col-lg-3 col-md-6">
                            <h4 class="text-light mb-4">Address</h4>
                            <p class="mb-2">
                                <i class="fa fa-map-marker-alt me-3"></i>NO25, B close, 3rd Avenue.
                                Gwarinpa.
                                Abuja.
                            </p>
                            <p class="mb-2">
                                <i class="fa fa-phone-alt me-3"></i>+234 907 390 9293
                            </p>
                            <p class="mb-2">
                                <a href="Versalink.ng@gmail.com" target="_blank">
                                    <i class="fa fa-envelope me-3"></i>versalink.ng@gmail.com
                                </a>
                            </p>
                            <div class="d-flex pt-2">
                                <a class="btn btn-outline-light btn-social" href="https://x.com/versalinkng?s=11"
                                    target="_blank"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i
                                        class="fab fa-youtube"></i></a>
                                <a class="btn btn-outline-light btn-social"
                                    href="https://www.instagram.com/versalink.ng?igsh=YTF2cXFwMzBvdzZ5"
                                    target="_blank"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <h4 class="text-light mb-4">Quick Links</h4>
                            <a class="btn btn-link" href="{{ route('home') }}">Home</a>
                            <a class="btn btn-link" href="{{ route('about') }}">About Us</a>
                            <a class="btn btn-link" href="{{ route('vdi') }}">VDI</a>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <h4 class="text-light mb-4">Newsletter</h4>
                            <p>Kindly fill in your email address below to get updated through our monthly newsletter</p>
                            <div class="position-relative mx-auto" style="max-width: 400px">
                                <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text"
                                    placeholder="Your email" />
                                <button type="button"
                                    class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">
                                    SignUp
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="copyright">
                        <div class="row">
                            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                                &copy;
                                <a class="border-bottom" href="#">Versalink</a>, All
                                Right Reserved 2024.
                            </div>
                            <div class="col-md-6 text-center text-md-end">
                                Designed By
                                <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i
                class="bi bi-arrow-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('js/main.js') }}"></script>
        <script>
            function updateTime() {
                const days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
                const now = new Date();
                const dayName = days[now.getDay()];
                const hours = now.getHours();
                const minutes = now.getMinutes();
                const ampm = hours >= 12 ? 'PM' : 'AM';
                const formattedHours = hours % 12 || 12;
                const formattedMinutes = minutes.toString().padStart(2, '0');

                $('#day').text(`${dayName} - `);
                $('#time').text(`${formattedHours}:${formattedMinutes} ${ampm}`);
            }

            $(document).ready(function() {
                setInterval(updateTime, 1000);
                updateTime();
            });
        </script>
        <script>
            function myFunction() {
                var dots = document.getElementById("dots");
                var moreText = document.getElementById("more");
                var btnText = document.getElementById("myBtn");

                if (dots.style.display === "none") {
                    dots.style.display = "inline";
                    btnText.innerHTML = "Read more";
                    moreText.style.display = "none";
                } else {
                    dots.style.display = "none";
                    btnText.innerHTML = "Read less";
                    moreText.style.display = "inline";
                }
            }
        </script>
</body>

</html>
