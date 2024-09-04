<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Divisons</title>
    <link rel="stylesheet" href="css/mission.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">


    <!-- Bootstrap CSS -->
    {{--  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> --}}
</head>

<body id="id">
    <nav class="navbar navbar-expand-lg" style="padding: .5rem 1rem;">
        <a class="navbar-brand text-primary" href="#">
            <img src="img/versa.webp" alt="">
        </a>
        <button style="background: #ff914c;" class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active text-primary" href="{{ route('home') }}">HOME</a>
                <a class="nav-item nav-link text-primary" href="#">ABOUT</a>
                <a class="nav-item nav-link text-primary" href="#">VERSALINK DEVELOPMENT INITIATIVE</a>
                <a class="nav-item nav-link text-primary" href="#">OUR DIVISIONS</a>
                <a class="nav-item nav-link text-primary" href="#">VERSALINK POST</a>
            </div>
        </div>
    </nav>

    <main style="padding: 1rem">

        <div data-aos="flip-right" style="margin-top: 2rem;padding:1rem;width: 50%;">
            <h1 class="text-primary text-left display-2">Check out <span class="text-light">our</span> divisions</h1>
        </div>
        <style>
            .body {
                font-family: Arial, sans-serif;
                line-height: 1.6;
                margin: 0;
                padding: 20px;
                margin-top: 3rem;
            }

            .division {
                display: flex;
                align-items: flex-start;
                margin-bottom: 40px;
                flex-wrap: wrap;
                /* Allows content to wrap in smaller screens */
            }

            .division img {
                width: 200px;
                height: 200px;
                margin-right: 30px;
                border-radius: 10px;
                flex-shrink: 0;
                /* Prevents the image from shrinking */
            }

            .division-content {
                max-width: 600px;
            }

            .division h2 {
                font-size: 1.5em;
                font-weight: bold;
                margin: 0 0 15px 0;
            }

            .division p {
                margin: 0;
            }

            /* Media query for screens smaller than 768px */
            @media (max-width: 768px) {
                .division {
                    flex-direction: column;
                    /* Stack image on top of text */
                    align-items: center;
                    /* Center items in smaller screens */
                    text-align: center;
                    /* Center-align text */
                }

                .division img {
                    margin-right: 0;
                    /* Remove right margin */
                    margin-bottom: 15px;
                    /* Add space below the image */
                    width: 100%;
                    /* Make image responsive */
                    max-width: 300px;
                    /* Set a max width for larger images */
                    height: auto;
                    /* Maintain aspect ratio */
                }

                .division-content {
                    max-width: 100%;
                    /* Allow content to use full width */
                }
            }

            /* Media query for very small screens (mobile devices) */
            @media (max-width: 480px) {
                .division h2 {
                    font-size: 1.3em;
                    /* Slightly smaller header */
                }

                .division img {
                    max-width: 250px;
                    /* Smaller max-width for tiny screens */
                }

                body {
                    padding: 10px;
                    /* Reduce padding on very small screens */
                }
            }
        </style>
        </head>
        <section class="body">

            <section class="division">
                <img src="https://via.placeholder.com/200" alt="Versa Brand">
                <div class="division-content">
                    <h2 class="text-primary"><span class="text-light">Versa</span> Brand</h2>
                    <p class="text-primary">A leading luxury fashion brand that celebrates Nigerian heritage.</p>
                </div>
            </section>

            <section class="division">
                <img src="https://via.placeholder.com/200" alt="VersaHome">
                <div class="division-content">
                    <h2 class="text-primary"><span class="text-light">Versa</span> Home</h2>
                    <p class="text-primary">A real estate developer creating sustainable and modern living spaces.</p>
                </div>
            </section>

            <section class="division">
                <img src="https://via.placeholder.com/200" alt="VersaFarms">
                <div class="division-content">
                    <h2 class="text-primary"><span class="text-light">Versa</span> Farms</h2>
                    <p class="text-primary">An agricultural enterprise committed to food security and sustainable
                        farming practices.</p>
                </div>
            </section>

            <section class="division">
                <img src="img/sport.jpg" alt="VersaSports">
                <div class="division-content">
                    <h2 class="text-primary"><span class="text-light">Versa</span> Sports</h2>
                    <p class="text-primary">A platform for nurturing young talent and promoting sports development.</p>
                </div>
            </section>

            <section class="division">
                <img src="https://via.placeholder.com/200" alt="VersaLogistics">
                <div class="division-content">
                    <h2 class="text-primary"><span class="text-light">Versa</span> Logistics</h2>
                    <p class="text-primary">A reliable and efficient logistics provider.</p>
                </div>
            </section>

            <section class="division">
                <img src="img/post.jpg" alt="Versapost">
                <div class="division-content">
                    <h2 class="text-primary"><span class="text-light">Versa</span> Post</h2>
                    <p class="text-primary">A media platform that produces engaging podcasts and magazines, covering a
                        wide range of topics and providing information.</p>
                </div>
            </section>

            <section class="division">
                <img src="https://via.placeholder.com/200" alt="Versalink Development Initiative">
                <div class="division-content">
                    <h2 class="text-primary"><span class="text-light">Versalink Development</span> Initiative (VDI)</h2>
                    <p class="text-primary">Our commitment to social responsibility extends beyond our business
                        operations. The Versalink Development Initiative (VDI) is a dedicated nonprofit organization
                        that focuses on addressing critical social challenges in Nigeria, such as education, healthcare,
                        and environmental sustainability.</p>
                </div>
            </section>
    </main>

    <!-- jQuery -->
    {{--    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Popper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}
    <!-- Bootstrap 5 JS Bundle (includes Popper) -->
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Popper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>

</html>
