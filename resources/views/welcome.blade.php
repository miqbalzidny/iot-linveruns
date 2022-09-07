<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Title --}}
    <title>LINVER - Laravel Inverter</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/landing-page/images/favicon.png" type="image/png" />

    <!-- ===== All CSS files ===== -->
    <link rel="stylesheet" href="assets/landing-page/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/landing-page/css/animate.css" />
    <link rel="stylesheet" href="assets/landing-page/css/lineicons.css" />
    <link rel="stylesheet" href="assets/landing-page/css/ud-styles.css" />
</head>

<body>
    <!-- ====== Header Start ====== -->
    <header class="ud-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="#">
                            <h2>LINVER</h2>
                        </a>
                        <button class="navbar-toggler">
                            <span class="toggler-icon"> </span>
                            <span class="toggler-icon"> </span>
                            <span class="toggler-icon"> </span>
                        </button>

                        <div class="navbar-collapse">
                            <ul id="nav" class="navbar-nav mx-auto">
                                <li class="nav-item">
                                    <a class="ud-menu-scroll" href="#home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="ud-menu-scroll" href="#features">Features</a>
                                </li>
                                <li class="nav-item">
                                    <a class="ud-menu-scroll" href="#about">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="ud-menu-scroll" href="#faq">FAQ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="ud-menu-scroll" href="#team">Team</a>
                                </li>
                                <li class="nav-item">
                                    <a class="ud-menu-scroll" href="#contact">Contact</a>
                                </li>
                            </ul>
                            <ul id="nav" class="navbar-nav mx-auto">
                                @if (Route::has('login'))
                                    @auth
                                        <li class="nav-item">
                                            <a href="{{ url('/home') }}" class="ud-white-btn">Dashboard</a>
                                        </li>
                                    @else
                                        <li class="nav-item">
                                            <a href="{{ url('/login') }}" class="ud-login-btn">Sign In</a>
                                        </li>
                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a href="{{ url('/register') }}" class="ud-white-btn">Sign
                                                    Up</a>
                                            </li>
                                        @endif
                                    @endauth
                                @endif
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ====== Header End ====== -->

    <!-- ====== Hero Start ====== -->
    <section class="ud-hero" id="home">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-hero-content wow fadeInUp" data-wow-delay=".2s">
                        <h1 class="ud-hero-title">
                            LINVER - Laravel Inverter
                        </h1>
                        <p class="ud-hero-desc">
                            Design of Full-Bridge Single-Phase Inverter with Monitoring Internet of Things Using Laravel
                            Framework.
                        </p>
                        <ul class="ud-hero-buttons">
                            <li>
                                <a href="https://github.com/miqbalzidny/laravel-inverter/archive/refs/heads/main.zip"
                                    rel="nofollow noopener" target="_blank" class="ud-main-btn ud-white-btn">
                                    Download Now
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/miqbalzidny/laravel-inverter" rel="nofollow noopener"
                                    target="_blank" class="ud-main-btn ud-link-btn">
                                    Learn More <i class="lni lni-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    {{-- Icon Logo Brand --}}
                    <div class="ud-hero-brands-wrapper wow fadeInUp" data-wow-delay=".3s">
                        <img src="assets/landing-page/images/hero/brand.png" alt="brand" />
                    </div>
                    {{-- End Icon Logo Brand --}}

                    <div class="ud-hero-image wow fadeInUp" data-wow-delay=".25s">
                        <img src="assets/landing-page/images/hero/hero-image.svg" alt="hero-image" />
                        <img src="assets/landing-page/images/hero/dotted-shape.svg" alt="shape"
                            class="shape shape-1" />
                        <img src="assets/landing-page/images/hero/dotted-shape.svg" alt="shape"
                            class="shape shape-2" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Hero End ====== -->

    <!-- ====== Features Start ====== -->
    <section id="features" class="ud-features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-section-title">
                        <span>Features</span>
                        <h2>Main Features of Inverter</h2>
                        <p>
                            Some of the main features possessed by the inverter system.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="ud-single-feature wow fadeInUp" data-wow-delay=".1s">
                        <div class="ud-feature-icon">
                            <i class="lni lni-gift"></i>
                        </div>
                        <div class="ud-feature-content">
                            <h3 class="ud-feature-title">Soft Start</h3>
                            <p class="ud-feature-desc">
                                The function of the soft start is to avoid the surge in current when the inverter first
                                is run by generating the SPWM Duty Cycle slowly.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="ud-single-feature wow fadeInUp" data-wow-delay=".15s">
                        <div class="ud-feature-icon">
                            <i class="lni lni-move"></i>
                        </div>
                        <div class="ud-feature-content">
                            <h3 class="ud-feature-title">Undervoltage Protection</h3>
                            <p class="ud-feature-desc">
                                Undervoltage protection is used as a protection system on the battery so that the
                                battery voltage is not below the lower threshold.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="ud-single-feature wow fadeInUp" data-wow-delay=".2s">
                        <div class="ud-feature-icon">
                            <i class="lni lni-layout"></i>
                        </div>
                        <div class="ud-feature-content">
                            <h3 class="ud-feature-title">Overvoltage Protection</h3>
                            <p class="ud-feature-desc">
                                Overvoltage protection is functioned as an inverter protection system so as not to
                                experience too high voltage.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="ud-single-feature wow fadeInUp" data-wow-delay=".25s">
                        <div class="ud-feature-icon">
                            <i class="lni lni-layers"></i>
                        </div>
                        <div class="ud-feature-content">
                            <h3 class="ud-feature-title">Auto Feedback</h3>
                            <p class="ud-feature-desc">
                                Auto feedback functions to keep the output inverter stable even though it uses a load.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Features End ====== -->

    <!-- ====== About Start ====== -->
    <section id="about" class="ud-about">
        <div class="container">
            <div class="ud-about-wrapper wow fadeInUp" data-wow-delay=".2s">
                <div class="ud-about-content-wrapper">
                    <div class="ud-about-content">
                        <span class="tag">About Us</span>
                        <h2>LINVER - Laravel Inverter</h2>
                        <p>
                            Laravel inverter is a website system used to monitor the output sensor from single phase
                            inverter that has been made of arduino nano. The sensor used in this system is the PZEM-004t
                            sensor. Output sensors monitored are voltage, current, power, energy, frequency, and power
                            factor. This project is my thesis project, while studying in the Department of Electrical
                            Engineering, Universitas Sebelas Maret, Indonesia.
                        </p>

                        <p>
                            Inverters are useful for operating electronic devices that use AC voltage when there is only
                            a DC voltage. Making an inverter uses the PWM method as a DC voltage converter converted
                            into AC voltage.
                        </p>
                    </div>
                </div>
                <div class="ud-about-image">
                    <img src="assets/landing-page/images/about/about-image.svg" alt="about-image" />
                </div>
            </div>
        </div>
    </section>
    <!-- ====== About End ====== -->

    <!-- ====== FAQ Start ====== -->
    <section id="faq" class="ud-faq">
        <div class="shape">
            <img src="assets/landing-page/images/faq/shape.svg" alt="shape" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-section-title text-center mx-auto">
                        <span>FAQ</span>
                        <h2>Any Questions? Answered</h2>
                        <p>
                            Some common questions that have been answered regarding this final project.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="ud-single-faq wow fadeInUp" data-wow-delay=".1s">
                        <div class="accordion">
                            <button class="ud-faq-btn collapsed" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne">
                                <span class="icon flex-shrink-0">
                                    <i class="lni lni-chevron-down"></i>
                                </span>
                                <span>What is an inverter?</span>
                            </button>
                            <div id="collapseOne" class="accordion-collapse collapse">
                                <div class="ud-faq-body">
                                    Inverter is a device that can convert direct electric current (DC) into alternating
                                    current (AC) at a higher voltage.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ud-single-faq wow fadeInUp" data-wow-delay=".15s">
                        <div class="accordion">
                            <button class="ud-faq-btn collapsed" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo">
                                <span class="icon flex-shrink-0">
                                    <i class="lni lni-chevron-down"></i>
                                </span>
                                <span>How inverters work?</span>
                            </button>
                            <div id="collapseTwo" class="accordion-collapse collapse">
                                <div class="ud-faq-body">
                                    Simply put, an inverter that can change the DC electric current to the AC electric
                                    current consists of only an oscillator circuit, switch circuit, and a transformer.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ud-single-faq wow fadeInUp" data-wow-delay=".2s">
                        <div class="accordion">
                            <button class="ud-faq-btn collapsed" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree">
                                <span class="icon flex-shrink-0">
                                    <i class="lni lni-chevron-down"></i>
                                </span>
                                <span>What topology is used?</span>
                            </button>
                            <div id="collapseThree" class="accordion-collapse collapse">
                                <div class="ud-faq-body">
                                    This inverter uses full-bridge topology. Full-Bridge topology is a topology commonly
                                    used for most inverters in the world. This topology requires four switches to carry
                                    out the switching process.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ud-single-faq wow fadeInUp" data-wow-delay=".1s">
                        <div class="accordion">
                            <button class="ud-faq-btn collapsed" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour">
                                <span class="icon flex-shrink-0">
                                    <i class="lni lni-chevron-down"></i>
                                </span>
                                <span>What type of wave output is produced?</span>
                            </button>
                            <div id="collapseFour" class="accordion-collapse collapse">
                                <div class="ud-faq-body">
                                    This inverter produces pure sinus wave output. Pure sinus waves are inverter waves
                                    that are almost even better than perfect sinusoid waves in the electricity network
                                    in this case PLN.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ud-single-faq wow fadeInUp" data-wow-delay=".15s">
                        <div class="accordion">
                            <button class="ud-faq-btn collapsed" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive">
                                <span class="icon flex-shrink-0">
                                    <i class="lni lni-chevron-down"></i>
                                </span>
                                <span>What platforms are used to make this project?</span>
                            </button>
                            <div id="collapseFive" class="accordion-collapse collapse">
                                <div class="ud-faq-body">
                                    This project uses several platforms namely Proteus, Easya, Arduino, and Laravel.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ud-single-faq wow fadeInUp" data-wow-delay=".2s">
                        <div class="accordion">
                            <button class="ud-faq-btn collapsed" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix">
                                <span class="icon flex-shrink-0">
                                    <i class="lni lni-chevron-down"></i>
                                </span>
                                <span>What microcontroller is used to generate SPWM signals?</span>
                            </button>
                            <div id="collapseSix" class="accordion-collapse collapse">
                                <div class="ud-faq-body">
                                    To generate SPWM signals, this inverter uses Arduino Nano microcontroller.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== FAQ End ====== -->

    <!-- ====== Team Start ====== -->
    <section id="team" class="ud-team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-section-title mx-auto text-center">
                        <span>Our Team</span>
                        <h2>Meet The Team</h2>
                        <p>
                            The following are members of this project team.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-4 col-lg-4 col-sm-6">
                    <div class="ud-single-team wow fadeInUp" data-wow-delay=".1s">
                        <div class="ud-team-image-wrapper">
                            <div class="ud-team-image">
                                <img src="assets/landing-page/images/team/team-01.jpg" alt="team" />
                            </div>
                            <img src="assets/landing-page/images/team/dotted-shape.svg" alt="shape"
                                class="shape shape-1" />
                            <img src="assets/landing-page/images/team/shape-2.svg" alt="shape"
                                class="shape shape-2" />
                        </div>
                        <div class="ud-team-info">
                            <h5>M. Iqbal Zidny</h5>
                            <h6>Electrical Engineering Student</h6>
                        </div>
                        <ul class="ud-team-socials">
                            <li>
                                <a href="https://www.instagram.com/miqbalzidny/">
                                    <i class="lni lni-instagram-filled"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/muhammadiqbalzidny/">
                                    <i class="lni lni-facebook-filled"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/miqbalzidny_">
                                    <i class="lni lni-twitter-filled"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-6">
                    <div class="ud-single-team wow fadeInUp" data-wow-delay=".15s">
                        <div class="ud-team-image-wrapper">
                            <div class="ud-team-image">
                                <img src="assets/landing-page/images/team/team-02.jpg" alt="team" />
                            </div>

                            <img src="assets/landing-page/images/team/dotted-shape.svg" alt="shape"
                                class="shape shape-1" />
                            <img src="assets/landing-page/images/team/shape-2.svg" alt="shape"
                                class="shape shape-2" />
                        </div>
                        <div class="ud-team-info">
                            <h5>Joko Slamet Saputro, S.Pd., M.T.</h5>
                            <h6>1st Supervisor</h6>
                        </div>
                        <ul class="ud-team-socials">
                            <li>
                                <a href="https://web.facebook.com/bangdjeck">
                                    <i class="lni lni-facebook-filled"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-6">
                    <div class="ud-single-team wow fadeInUp" data-wow-delay=".2s">
                        <div class="ud-team-image-wrapper">
                            <div class="ud-team-image">
                                <img src="assets/landing-page/images/team/team-03.jpg" alt="team" />
                            </div>
                            <img src="assets/landing-page/images/team/dotted-shape.svg" alt="shape"
                                class="shape shape-1" />
                            <img src="assets/landing-page/images/team/shape-2.svg" alt="shape"
                                class="shape shape-2" />
                        </div>
                        <div class="ud-team-info">
                            <h5>Agus Ramelan, S.Pd., M.T.</h5>
                            <h6>2nd Supervisor</h6>
                        </div>
                        <ul class="ud-team-socials">
                            <li>
                                <a href="https://facebook.com/ajuz.ramelan">
                                    <i class="lni lni-facebook-filled"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/agus_ramelan/">
                                    <i class="lni lni-instagram-filled"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Team End ====== -->

    <!-- ====== Contact Start ====== -->
    <section id="contact" class="ud-contact">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="ud-contact-content-wrapper">
                        <div class="ud-contact-title">
                            <span>CONTACT US</span>
                            <h2>
                                Let’s talk about <br />
                                Love to hear from you!
                            </h2>
                        </div>
                        <div class="ud-contact-info-wrapper">
                            <div class="ud-single-info">
                                <div class="ud-info-icon">
                                    <i class="lni lni-map-marker"></i>
                                </div>
                                <div class="ud-info-meta">
                                    <h5>Our Location</h5>
                                    <a href="https://goo.gl/maps/Q8wbvxSAdAViqupH6" target="_blank">Sutami Street no.
                                        36A, Surakarta, Central Java</a>
                                </div>
                            </div>
                            <div class="ud-single-info">
                                <div class="ud-info-icon">
                                    <i class="lni lni-envelope"></i>
                                </div>
                                <div class="ud-info-meta">
                                    <h5>How Can We Help?</h5>
                                    <a href="mailto:m.iqbal.zidny@gmail.com"
                                        target="_blank">m.iqbal.zidny@gmail.com</a>
                                </div>
                            </div>
                            <div class="ud-single-info">
                                <div class="ud-info-icon">
                                    <i class="lni lni-envelope"></i>
                                </div>
                                <div class="ud-info-meta">
                                    <h5>Chat Us</h5>
                                    <a href="http://wa.me/6282241042243" target="_blank">+6282 2410 42243</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Contact End ====== -->

    <!-- ====== Footer Start ====== -->
    <footer class="ud-footer wow fadeInUp" data-wow-delay=".15s">
        <div class="shape shape-1">
            <img src="assets/landing-page/images/footer/shape-1.svg" alt="shape" />
        </div>
        <div class="shape shape-2">
            <img src="assets/landing-page/images/footer/shape-2.svg" alt="shape" />
        </div>
        <div class="shape shape-3">
            <img src="assets/landing-page/images/footer/shape-3.svg" alt="shape" />
        </div>
        <div class="ud-footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <ul class="ud-footer-bottom-left">
                            <li>
                                &copy; Copyright <strong><span>M. Iqbal Zidny</span></strong>. All Rights Reserved
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <p class="ud-footer-bottom-right">
                            Designed and Developed by
                            <a href="https://www.linkedin.com/in/miqbalzidny/" target="_blank"
                                rel="nofollow">miqbalzidny</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ====== Footer End ====== -->

    <!-- ====== All Javascript Files ====== -->
    <script src="assets/landing-page/js/bootstrap.bundle.min.js"></script>
    <script src="assets/landing-page/js/wow.min.js"></script>
    <script src="assets/landing-page/js/main.js"></script>
    <script>
        // ==== for menu scroll
        const pageLink = document.querySelectorAll(".ud-menu-scroll");

        pageLink.forEach((elem) => {
            elem.addEventListener("click", (e) => {
                e.preventDefault();
                document.querySelector(elem.getAttribute("href")).scrollIntoView({
                    behavior: "smooth",
                    offsetTop: 1 - 60,
                });
            });
        });

        // section menu active
        function onScroll(event) {
            const sections = document.querySelectorAll(".ud-menu-scroll");
            const scrollPos =
                window.pageYOffset ||
                document.documentElement.scrollTop ||
                document.body.scrollTop;

            for (let i = 0; i < sections.length; i++) {
                const currLink = sections[i];
                const val = currLink.getAttribute("href");
                const refElement = document.querySelector(val);
                const scrollTopMinus = scrollPos + 73;
                if (
                    refElement.offsetTop <= scrollTopMinus &&
                    refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
                ) {
                    document
                        .querySelector(".ud-menu-scroll")
                        .classList.remove("active");
                    currLink.classList.add("active");
                } else {
                    currLink.classList.remove("active");
                }
            }
        }

        window.document.addEventListener("scroll", onScroll);
    </script>
</body>

</html>
