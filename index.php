<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from duruthemes.com/demo/html/ornava/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Dec 2025 05:33:54 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rupankan - Interior & exterior</title>
    <link rel="icon" type="image/x-icon" href="img/logo222.png">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Outfit:ital,wght@0,100..900;1,100..900&amp;display=swap">
    <link rel="stylesheet" href="css/plugins.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
  
    <!-- Preloader -->
   <?php include 'components/preloader.php'; ?>
   
    <!-- Cursor -->
    <?php include 'components/cursor.php'; ?>

       <!-- Navbar -->
    <?php include 'components/navbar.php'; ?>


    <!-- Parallax Image -->
    <aside class="kenburns-section vegas-container" id="kenburnsSliderContainer" data-overlay-dark="6"
        style="height: 595.2px;">
        <div class="vegas-slide vegas-transition-fade2 vegas-transition-fade2-in vegas-transition-fade2-out"
            style="transition: 1000ms;">
            <div class="vegas-slide-inner vegas-animation-kenburnsUpRight"
                style="background-image: url(&quot;img/banner.jpg&quot;); background-color: rgba(0, 0, 0, 0); background-position: center center; background-size: cover; animation-duration: 20000ms;">
            </div>
        </div>
        <div class="vegas-slide vegas-transition-fade2 vegas-transition-fade2-in" style="transition: 1000ms;">
            <div class="vegas-slide-inner vegas-animation-kenburnsUpRight"
                style="background-image: url(&quot;img/banner2.jpg&quot;); background-color: rgba(0, 0, 0, 0); background-position: center center; background-size: cover; animation-duration: 20000ms;">
            </div>
        </div>
        <div class="vegas-overlay"></div>
        <div class="vegas-timer vegas-timer-running">
            <div class="vegas-timer-progress" style="transition-duration: 9900ms;"></div>
        </div>
        <div class="vegas-wrapper" style="overflow: hidden; padding: 0px;">
            <div class="kenburns-inner h-100">
                <div class="v-middle">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h6>RUPANKAN ARCHO INTERIORS.</h6>
                                <!-- <h2>Design Your Living Story</h2> -->

                                <style>
                                    .text-rotate {
                                        position: relative;
                                        height: 230px;
                                        overflow: hidden;
                                        margin-block: 25px;

                                    }

                                    .text-rotate span {
                                        position: absolute;
                                        width: 100%;
                                        left: 0;
                                        top: 100%;
                                        opacity: 0;
                                        font-weight: 700;
                                        transition: all 0.7s ease;
                                        font-size: 100px;
                                        color: #fff;
                                        line-height: 1.1em;
                                        margin-bottom: 30px;
                                        letter-spacing: 6px;
                                        text-transform: uppercase;
                                    }

                                    .text-rotate span.active {
                                        top: 0;
                                        opacity: 1;
                                    }

                                    .text-rotate span.out {
                                        top: -100%;
                                        opacity: 0;
                                    }

                                    /* ✅ Tablet Responsive */
                                    @media (max-width: 991px) {
                                        .text-rotate {
                                            height: 350px;
                                        }

                                        .text-rotate span {
                                            font-size: 70px;
                                            letter-spacing: 1px;
                                            line-height: 1.3;
                                        }
                                    }

                                    /* ✅ Mobile Responsive */
                                    @media (max-width: 576px) {
                                        .text-rotate {
                                            height: 350px;
                                        }

                                        .text-rotate span {
                                            font-size: 55px;
                                            letter-spacing: 1px;
                                            line-height: 1.3;
                                        }
                                    }
                                </style>
                                <div class="text-rotate">
                                    <span class="active">Design Your Living Story</span>
                                    <span>Modern Interior Solutions</span>
                                    <span>Luxury Space Planning</span>
                                    <span>Creative Architectural Design</span>
                                    <span>Timeless Home Concepts</span>
                                    <span>Interior Designers</span>
                                    <span>Project Management Consultants</span>
                                    <span>Turnkey Contractors</span>
                                    <span>Vastu Consultants</span>
                                    <span>3D Designers</span>
                                    <span>Exterior Developers</span>
                                </div>

                                <script>
                                    let texts = document.querySelectorAll(".text-rotate span");
                                    let index = 0;

                                    setInterval(() => {
                                        texts[index].classList.remove("active");
                                        texts[index].classList.add("out");

                                        index = (index + 1) % texts.length;

                                        texts[index].classList.remove("out");
                                        texts[index].classList.add("active");
                                    }, 2500);
                                </script>


                                <a href="portfolio.php" class="durubtn"><span class="text-wrapper"><span
                                            class="text slide-up">Explore project</span><span
                                            class="text slide-down">Explore project</span></span></a>
                            </div>
                            <div class="col-md-1 offset-md-2 text-center">
                                <a href="portfolio.php" class="hover-this circle-button-overlay">
                                    <div class="circle-button in-bord hover-anim">
                                        <div class="rotate-circle">
                                            <svg class="textcircle" viewBox="0 0 500 500">
                                                <defs>
                                                    <path id="textcircle"
                                                        d="M250,400 a150,150 0 0,1 0,-300a150,150 0 0,1 0,300Z"></path>
                                                </defs>
                                                <text>
                                                    <textPath xlink:href="#textcircle" startOffset="0">RUPANKAN ARCHO
                                                        INTERIORS </textPath>
                                                </text>
                                            </svg>
                                        </div>
                                        <div class="in-circle text-center"><img src="img/logowhite.png" alt=""></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><a href="#" data-scroll-nav="1" class="mouse smoothscroll"> <span class="mouse-icon"><span
                        class="mouse-wheel"></span> </span></a>
        </div>
    </aside>


    <!-- About -->
    <section class="about section-padding" data-scroll-index="1">
        <div class="container">
            <div class="section-linetitle">
                <div class="d-flex align-items-center">
                    <div class="leter">
                        <h4>A</h4>
                    </div>
                    <div class="line"></div>
                </div>
                <div class="title">
                    <h6 class="sub-title">About.</h6>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 col-md-12 mb-30">
                    <div class="section-title">RUPANKAN ARCHO INTERIORS</div>
                    <p>RUPANKAN ARCHO INTERIORS is a creative architecture and interior design studio dedicated to
                        crafting elegant, functional, and timeless spaces. We specialize in residential, commercial, and
                        luxury interior projects that reflect style, comfort, and innovation.</p>
                    <ul class="page-list list-unstyled mb-25">
                        <li>
                            <div class="page-list-icon"> <span class="ti-check"></span> </div>
                            <div class="page-list-text">
                                <p>Bespoke interior solutions.</p>
                            </div>
                        </li>
                        <li>
                            <div class="page-list-icon"> <span class="ti-check"></span> </div>
                            <div class="page-list-text">
                                <p>Modern and timeless design vision.</p>
                            </div>
                        </li>
                        <li>
                            <div class="page-list-icon"> <span class="ti-check"></span> </div>
                            <div class="page-list-text">
                                <p>Design that tells your story.</p>
                            </div>
                        </li>
                    </ul>
                    <a href="about.php" class="durubtn4"> <span class="text-wrapper"><span class="text slide-up">About
                                more</span><span class="text slide-down">Read more</span></span></a>
                </div>
                <div class="col-lg-5 offset-lg-2 col-md-12">
                    <div class="year15 line vert-move">
                        <div class="txt">Years of experience</div><span>15</span>
                    </div>
                    <img src="img/about.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Services -->
    <section class="services section-padding">
        <div class="container">
            <div class="section-linetitle">
                <div class="d-flex align-items-center">
                    <div class="leter">
                        <h4 class="white">S</h4>
                    </div>
                    <div class="line white"></div>
                </div>
                <div class="title">
                    <h6 class="sub-title white">Services.</h6>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item mb-25"> <a href="#"><span class="arrow fa-thin fa-arrow-up-right"></span></a>
                            <div class="icon"><i class="flaticon-houses"></i></div>
                            <h5>Architecture</h5>
                            <p>Architectural designs that balance aesthetics, interior, function and innovative
                                thinking.</p>
                        </div>
                        <div class="item mb-25"> <a href="#"><span class="arrow fa-thin fa-arrow-up-right"></span></a>
                            <div class="icon"><i class="flaticon-living-room"></i></div>
                            <h5>Interior design</h5>
                            <p>We create elegant, functional interiors that reflect your lifestyle and personal taste.
                            </p>
                        </div>
                        <div class="item mb-25"> <a href="#"><span class="arrow fa-thin fa-arrow-up-right"></span></a>
                            <div class="icon"><i class="flaticon-interior-design"></i></div>
                            <h5>3D modelling</h5>
                            <p>High-quality 3D modelling solutions for architecture, interiors, exterior, design and
                                products.</p>
                        </div>
                        <div class="item mb-25"> <a href="#"><span class="arrow fa-thin fa-arrow-up-right"></span></a>
                            <div class="icon"><i class="flaticon-medieval-house"></i></div>
                            <h5>Urban design</h5>
                            <p>Sustainable urban design that enhances community life and environmental harmony.</p>
                        </div>
                        <div class="item mb-25"> <a href="#"><span class="arrow fa-thin fa-arrow-up-right"></span></a>
                            <div class="icon"><i class="flaticon-blueprint"></i></div>
                            <h5>Planing</h5>
                            <p>Strategic planning that guides spaces toward functionality, innovation and lasting value.
                            </p>
                        </div>
                        <div class="item mb-25"> <a href="#"><span class="arrow fa-thin fa-arrow-up-right"></span></a>
                            <div class="icon"><i class="flaticon-houses"></i></div>
                            <h5>Decor plan</h5>
                            <p>Creative decor plans that balance style, comfort and functional harmony.</p>
                        </div>
                        <div class="item mb-25"> <a href="#"><span class="arrow fa-thin fa-arrow-up-right"></span></a>
                            <div class="icon"><i class="flaticon-kitchen"></i></div>
                            <h5>Kitchen design</h5>
                            <p>Transforming everyday cooking with elegant modern and functional kitchen design.</p>
                        </div>
                        <div class="item mb-25"> <a href="#"><span class="arrow fa-thin fa-arrow-up-right"></span></a>
                            <div class="icon"><i class="flaticon-bathtub"></i></div>
                            <h5>Bathroom design</h5>
                            <p>Elevating daily routines with timeless, modern and elegant bathroom design.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 d-flex justify-content-center">
                <a href="services.php" target="_blank" class="durubtn4"> <span class="text-wrapper"><span
                            class="text slide-up">Services
                            more</span><span class="text slide-down">Read more</span></span></a>
            </div>
        </div>
        <div class="dots-half bg-img bg-imgfixed" data-overlay-dark="6" data-background="img/banner2.jpg"></div>
    </section>
    <!-- Portfolio 2 -->
    <section class="portfolio2 section-padding bg-darkbrown">
        <div class="container">
            <div class="section-linetitle">
                <div class="d-flex align-items-center">
                    <div class="leter">
                        <h4>P</h4>
                    </div>
                    <div class="line"></div>
                </div>
                <div class="title">
                    <h6 class="sub-title">Portfolio.</h6>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="portfolio2-container">
                        <div class="owl-carousel owl-theme">
                            <div class="item mb-25">
                                <div class="img"> <img src="img/01.jpg" alt=""> </div>
                                <div class="icon-wrapper"> <i class="ti-arrow-top-right default-icon"></i>
                                    <a href="portfolio.php" class="hover-icon-link" title="View Project"> <i
                                            class="ti-arrow-top-right hover-icon"></i> </a>
                                </div>
                                <div class="con">
                                    <h5>Casa Minimal Kitchen</h5>
                                    <div class="line"></div>
                                    <div class="details">
                                        <span><i class="fa-light fa-ruler-combined"></i>30 m²</span>
                                        <span><i class="fa-light fa-building"></i>Casa</span>
                                        <span><i class="fa-light fa-location-dot"></i>NY, USA</span>
                                        <span><i class="fa-light fa-circle-check"></i>Completed</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item mb-25">
                                <div class="img"> <img src="img/03.jpg" alt=""> </div>
                                <div class="icon-wrapper"> <i class="ti-arrow-top-right default-icon"></i>
                                    <a href="portfolio.php" class="hover-icon-link" title="View Project"> <i
                                            class="ti-arrow-top-right hover-icon"></i> </a>
                                </div>
                                <div class="con">
                                    <h5>Armada Center</h5>
                                    <div class="line"></div>
                                    <div class="details">
                                        <span><i class="fa-light fa-ruler-combined"></i>1,450 m²</span>
                                        <span><i class="fa-light fa-building"></i>4</span>
                                        <span><i class="fa-light fa-location-dot"></i>SF, USA</span>
                                        <span><i class="fa-light fa-spinner fa-spin"></i> In Progress</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item mb-25">
                                <div class="img"> <img src="img/02.jpg" alt=""> </div>
                                <div class="icon-wrapper"> <i class="ti-arrow-top-right default-icon"></i>
                                    <a href="portfolio.php" class="hover-icon-link" title="View Project"> <i
                                            class="ti-arrow-top-right hover-icon"></i> </a>
                                </div>
                                <div class="con">
                                    <h5>Vista Modern Villa</h5>
                                    <div class="line"></div>
                                    <div class="details">
                                        <span><i class="fa-light fa-ruler-combined"></i>400 m²</span>
                                        <span><i class="fa-light fa-building"></i>2</span>
                                        <span><i class="fa-light fa-location-dot"></i>Houston</span>
                                        <span><i class="fa-light fa-circle-check"></i>Completed</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item mb-25">
                                <div class="img"> <img src="img/04.jpg" alt=""> </div>
                                <div class="icon-wrapper"> <i class="ti-arrow-top-right default-icon"></i>
                                    <a href="portfolio.php" class="hover-icon-link" title="View Project"> <i
                                            class="ti-arrow-top-right hover-icon"></i> </a>
                                </div>
                                <div class="con">
                                    <h5>The Horizon Residence</h5>
                                    <div class="line"></div>
                                    <div class="details">
                                        <span><i class="fa-light fa-ruler-combined"></i>750 m²</span>
                                        <span><i class="fa-light fa-building"></i>3</span>
                                        <span><i class="fa-light fa-location-dot"></i>Washington</span>
                                        <span><i class="fa-light fa-spinner fa-spin"></i> In Progress</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item mb-25">
                                <div class="img"> <img src="img/05.jpg" alt=""> </div>
                                <div class="icon-wrapper"> <i class="ti-arrow-top-right default-icon"></i>
                                    <a href="portfolio.php" class="hover-icon-link" title="View Project"> <i
                                            class="ti-arrow-top-right hover-icon"></i> </a>
                                </div>
                                <div class="con">
                                    <h5>Loft Living Room</h5>
                                    <div class="line"></div>
                                    <div class="details">
                                        <span><i class="fa-light fa-ruler-combined"></i>50 m²</span>
                                        <span><i class="fa-light fa-building"></i>Loft</span>
                                        <span><i class="fa-light fa-location-dot"></i>Miami</span>
                                        <span><i class="fa-light fa-circle-check"></i>Completed</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item mb-25">
                                <div class="img"> <img src="img/06.jpg" alt=""> </div>
                                <div class="icon-wrapper"> <i class="ti-arrow-top-right default-icon"></i>
                                    <a href="portfolio.php" class="hover-icon-link" title="View Project"> <i
                                            class="ti-arrow-top-right hover-icon"></i> </a>
                                </div>
                                <div class="con">
                                    <h5>Noir Bedroom Design</h5>
                                    <div class="line"></div>
                                    <div class="details">
                                        <span><i class="fa-light fa-ruler-combined"></i>40 m²</span>
                                        <span><i class="fa-light fa-building"></i>Noir</span>
                                        <span><i class="fa-light fa-location-dot"></i>Seattle</span>
                                        <span><i class="fa-light fa-spinner fa-spin"></i> In Progress</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials 2 -->
    <section class="testimonials2 pt-80 mt-100 mb-0">
        <div class="container">
            <div class="bg-img bg-imgfixed" data-overlay-dark="6">
                <video autoplay muted loop playsinline style="width:100%; height:100%; object-fit:cover;">
                    <source src="img/RUPANKAN.mp4" type="video/mp4">
                </video>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-12 mb-60">
                    <div class="item-cover animate-box" data-animate-effect="fadeInLeft">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="cont"> <span class="quote-icon"><img src="img/quote.svg" alt=""></span>
                                    <p>A seamless design journey from start to finish. Every detail was thoughtfully
                                        planned and perfectly executed.</p>
                                    <div class="icons"> <i class="fa-solid fa-star"></i> <i
                                            class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                            class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> </div>
                                    <div class="info">
                                        <div class="author-img valign">
                                            <div class="circle"> <img src="img/team/4.jpg" alt=""> </div>
                                        </div>
                                        <div class="author-info valign">
                                            <div class="full-width">
                                                <h6>Emily Collins</h6>
                                                <p>Interior Consultant</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="cont"> <span class="quote-icon"><img src="img/quote.svg" alt=""></span>
                                    <p>They transformed our space beyond expectations. Elegant and truly timeless design
                                        work throughout.</p>
                                    <div class="icons"> <i class="fa-solid fa-star"></i> <i
                                            class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                            class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> </div>
                                    <div class="info">
                                        <div class="author-img valign">
                                            <div class="circle"> <img src="img/team/1.jpg" alt=""> </div>
                                        </div>
                                        <div class="author-info valign">
                                            <div class="full-width">
                                                <h6>Martin Dan</h6>
                                                <p>Real Estate Developer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="cont"> <span class="quote-icon"><img src="img/quote.svg" alt=""></span>
                                    <p>Their vision and professionalism made the entire project effortless. We love
                                        every inch of our new space.</p>
                                    <div class="icons"> <i class="fa-solid fa-star"></i> <i
                                            class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                            class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> </div>
                                    <div class="info">
                                        <div class="author-img valign">
                                            <div class="circle"> <img src="img/team/5.jpg" alt=""> </div>
                                        </div>
                                        <div class="author-info valign">
                                            <div class="full-width">
                                                <h6>Lina Moretti</h6>
                                                <p>Creative Director</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ornava text -->
        <div class="ornava-text">RUPANKAN</div>
    </section>
    <!-- Scrolling -->
    <div class="scrolling scrolling-ticker">
        <div class="wrapper feather-shadow2">
            <div class="content"> <span><img src="img/asterisk-icon.svg" alt="" loading="lazy">Interior Design</span>
                <span><img src="img/asterisk-icon.svg" alt="" loading="lazy">Architecture</span> <span><img
                        src="img/asterisk-icon.svg" alt="" loading="lazy">Minimalist</span> <span><img
                        src="img/asterisk-icon.svg" alt="" loading="lazy">Modern Living</span> <span><img
                        src="img/asterisk-icon.svg" alt="" loading="lazy">Space Planning</span> <span><img
                        src="img/asterisk-icon.svg" alt="" loading="lazy">Lighting Design</span> <span><img
                        src="img/asterisk-icon.svg" alt="" loading="lazy">3D Visualization</span> <span><img
                        src="img/asterisk-icon.svg" alt="" loading="lazy">Sustainable Design</span> <span><img
                        src="img/asterisk-icon.svg" alt="" loading="lazy">Color Theory</span> <span><img
                        src="img/asterisk-icon.svg" alt="" loading="lazy">Furniture Layout</span> <span><img
                        src="img/asterisk-icon.svg" alt="" loading="lazy">CAD Drafting</span> <span><img
                        src="img/asterisk-icon.svg" alt="" loading="lazy">Scandinavian Style</span> <span><img
                        src="img/asterisk-icon.svg" alt="" loading="lazy">Open Concept</span> <span><img
                        src="img/asterisk-icon.svg" alt="" loading="lazy">Material Selection</span>
            </div>
            <div class="content"> <span><img src="img/asterisk-icon.svg" alt="" loading="lazy">Interior Design</span>
                <span><img src="img/asterisk-icon.svg" alt="" loading="lazy">Architecture</span> <span><img
                        src="img/asterisk-icon.svg" alt="" loading="lazy">Minimalist</span> <span><img
                        src="img/asterisk-icon.svg" alt="" loading="lazy">Modern Living</span> <span><img
                        src="img/asterisk-icon.svg" alt="" loading="lazy">Space Planning</span> <span><img
                        src="img/asterisk-icon.svg" alt="" loading="lazy">Lighting Design</span> <span><img
                        src="img/asterisk-icon.svg" alt="" loading="lazy">3D Visualization</span> <span><img
                        src="img/asterisk-icon.svg" alt="" loading="lazy">Sustainable Design</span> <span><img
                        src="img/asterisk-icon.svg" alt="" loading="lazy">Color Theory</span> <span><img
                        src="img/asterisk-icon.svg" alt="" loading="lazy">Furniture Layout</span> <span><img
                        src="img/asterisk-icon.svg" alt="" loading="lazy">CAD Drafting</span> <span><img
                        src="img/asterisk-icon.svg" alt="" loading="lazy">Scandinavian Style</span> <span><img
                        src="img/asterisk-icon.svg" alt="" loading="lazy">Open Concept</span> <span><img
                        src="img/asterisk-icon.svg" alt="" loading="lazy">Material Selection</span>
            </div>
        </div>
    </div>
    <!-- FAQs -->
    <section class="faqs section-padding ">
        <div class="container">
            <div class="section-linetitle">
                <div class="d-flex align-items-center">
                    <div class="leter">
                        <h4>F</h4>
                    </div>
                    <div class="line"></div>
                </div>
                <div class="title">
                    <h6 class="sub-title">FAQs.</h6>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12 mb-30">
                    <div class="section-title mb-25">Frequently Asked Questions</div>
                    <ul class="accordion-box clearfix">

                        <li class="accordion block">
                            <div class="acc-btn">
                                <span class="count">1.</span> What interior design services do you provide?
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <p>We provide complete interior design solutions including space planning, modular
                                        kitchen, false ceiling, lighting, furniture design, and 3D visualization.</p>
                                </div>
                            </div>
                        </li>

                        <li class="accordion block">
                            <div class="acc-btn">
                                <span class="count">2.</span> Do you also handle exterior design projects?
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <p>Yes, we specialize in modern exterior elevation design, facade design, landscape
                                        planning, and front elevation for residential and commercial buildings.</p>
                                </div>
                            </div>
                        </li>

                        <li class="accordion block">
                            <div class="acc-btn">
                                <span class="count">3.</span> Do you provide 3D design before starting the work?
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <p>Yes, we provide detailed 3D interior and exterior designs so clients can see the
                                        exact look before execution begins.</p>
                                </div>
                            </div>
                        </li>

                        <li class="accordion block">
                            <div class="acc-btn">
                                <span class="count">4.</span> Do you offer turnkey interior and exterior solutions?
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <p>Yes, we offer complete turnkey solutions including design, material, labor,
                                        execution, and final handover.</p>
                                </div>
                            </div>
                        </li>

                        <li class="accordion block">
                            <div class="acc-btn">
                                <span class="count">5.</span> How much time does an interior or exterior project take?
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <p>Project duration depends on size and complexity, but most interior and exterior
                                        projects are completed within 30 to 90 days.</p>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 mb-60 position-relative z-2"> <img class="animation-float1 float-overlap"
                        src="img/about4.jpg" alt=""> </div>
                <div class="col-lg-4 col-md-6 mb-20 position-relative z-1"> <img class="animation-float2"
                        src="img/about3.jpg" alt=""> </div>
            </div>
        </div>
    </section>
    <!-- Blog -->
    <section class="blog section-padding bg-darkbrown">
        <div class="container">
            <div class="section-linetitle">
                <div class="d-flex align-items-center">
                    <div class="leter">
                        <h4>B</h4>
                    </div>
                    <div class="line"></div>
                </div>
                <div class="title">
                    <h6 class="sub-title">Blog.</h6>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item mt-10 mb-30">
                            <a href="blog.php">
                                <div class="img"> <img src="img/07.jpg" class="img-fluid" alt=""></div>
                                <div class="cont">
                                    <h4><a href="post.php">Modern Bathroom Details</a></h4>
                                    <p>Soft lighting and clean materials define a calm, contemporary bathroom
                                        atmosphere.
                                    </p>
                                    <div class="author">
                                        <div>
                                            <h5><i class="fa-light fa-calendar"></i>29 Apr 2026</h5>
                                            <h5><i class="fa-light fa-user"></i>by <a href="#"
                                                    class="text-decoration-line-bottom">Martin Dan</a></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="more">
                                    <a href="post.php"> <span class="icon-wrap"><span class="icon"><i
                                                    class="ti-arrow-top-right"></i></span> </span></a>
                                </div>
                            </a>
                        </div>
                        <!-- Additional blog items omitted for brevity in this generated file but kept in original -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
     <?php include 'components/footer.php'; ?>

 

    <!-- jQuery -->
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/jquery-migrate-3.5.0.min.js"></script>
    <script src="js/modernizr-2.6.2.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/jquery.isotope.v3.0.2.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scrollIt.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/YouTubePopUp.js"></script>
    <script src="js/custom.js"></script>
</body>

<!-- Mirrored from duruthemes.com/demo/php/ornava/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Dec 2025 05:34:25 GMT -->

</html>
