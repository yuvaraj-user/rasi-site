    <!-- Header Section Start -->
    <?php 
        include('partials/header.php');

    ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/jquery.fullpage.min.css"/>
<style type="text/css">
.sticky {
    position: unset !important;
}    

.section {
  height: 100vh;  // Ensures sections are the full height of the viewport
}
/*section {
  height: 100vh;  // Ensures sections are the full height of the viewport
}*/
</style>

<div id="fullpage">

    <div class="section">

        <header id="header-sticky" class="header-1">
            <div class="container">
                <div class="mega-menu-wrapper">
                    <div class="header-main">
                        <div class="header-left">
                            <div class="logo">
                                <a href="index.php" class="header-logo">
                                    <!-- <img src="assets/img/logo/logo.png" alt="logo-img"> -->
                                    <img src="assets/img/rasi/logo with glow.png" alt="logo-img" class="top-company-logo">
                                </a>
                            </div>
                        </div>
                        <div class="header-right d-flex justify-content-end align-items-center">
                            <div class="mean__menu-wrapper">
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li class="has-dropdown active menu-thumb">
                                                <a href="index.php">
                                                    Home
                                                    <!-- <i class="fas fa-angle-down"></i> -->
                                                </a>
                                               <!--  <ul class="submenu has-homemenu">
                                                    <li>
                                                        <div class="homemenu-items">
                                                            <div class="homemenu">
                                                                <div class="homemenu-thumb">
                                                                    <img src="assets/img/header/home-1.jpg" alt="img">
                                                                    <div class="demo-button">
                                                                        <a href="index.html" class="theme-btn p5-bg">
                                                                            <span>Home 01</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="homemenu-content text-center">
                                                                    <h4 class="homemenu-title">
                                                                        Home Version 01
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="homemenu">
                                                                <div class="homemenu-thumb mb-15">
                                                                    <img src="assets/img/header/home-2.jpg" alt="img">
                                                                    <div class="demo-button">
                                                                        <a href="index-2.html" class="theme-btn p5-bg">
                                                                            <span>Home 02</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="homemenu-content text-center">
                                                                    <h4 class="homemenu-title">
                                                                        Home Version 02
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="homemenu">
                                                                <div class="homemenu-thumb mb-15">
                                                                    <img src="assets/img/header/home-3.jpg" alt="img">
                                                                    <div class="demo-button">
                                                                        <a href="index-3.html" class="theme-btn p5-bg">
                                                                            <span>Home 03</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="homemenu-content text-center">
                                                                    <h4 class="homemenu-title">
                                                                        Home Version 03
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul> -->
                                            </li>
                                            <li>
                                                <a href="#">
                                                Company
                                                    <i class="fa-solid fa-angle-down"></i>
                                                </a>
                                                 <ul class="submenu">
                                                    <li><a href="#">About us</a></li>
                                                    <li><a href="#">Vision Mission Purpose</a></li>
                                                    <li><a href="#">Polices</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    Products
                                                    <i class="fa-solid fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="#">Food</a></li>
                                                    <li><a href="#">Fodder</a></li>
                                                    <li><a href="#">Fiber</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    Innovation
                                                    <i class="fa-solid fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="#">Biotech</a></li>
                                                    <li><a href="#">Smart Agriculture</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    Sustainablity
                                                    <i class="fa-solid fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="#">CSR</a></li>
                                                    <li><a href="#">ESG</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="#">
                                                    Services
                                                    <i class="fa-solid fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="#">Partnering With Farmer</a></li>
                                                    <li><a href="#">Partnering With Trade</a></li>
                                                    <li><a href="#">Partnering With Supplier</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    Media
                                                    <i class="fa-solid fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="#">News</a></li>
                                                    <li><a href="#">Awards and Recognition</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Careers</a>
                                            </li> 
                                            <li>
                                                <a href="#">Contact Us</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- <div class="shop-adjust">
                                <div class="shop-bar">
                                    <div class="cart position-relative">
                                        <img src="assets/img/icon/shop-cart.svg" alt="icon">
                                        <span class="serial-count d-center">
                                            0
                                        </span>
                                    </div>
                                    Total <br>
                                    $0.00
                                </div>
                                <div class="header-button d-sm-block d-none">
                                    <a href="contact.html" class="cmn-btn d-center round100 cmn-white-clr">
                                        Get A Quote
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div> -->
                            <div class="header__hamburger d-xl-none my-auto">
                                <div class="sidebar__toggle">
                                    <i class="fas fa-bars"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Hero Section Start -->
        <section class="banner-section overflow-hidden">
            <div class="container-fluid p-0">
                <div class="video-container" style="display:inline;">
                    <video muted loop autoplay class="banner_video_tag">
                        <source src="assets/video/Corporate Video Website 720P.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
          <!--   <div class="banner-title-card col-3 text-center p-5">
                <h3>Innovation & Biotech</h3>
            </div> -->
        </section>
        <!-- Hero Section End -->

    </div>

    <div class="section">

        <!-- why choose us start -->
        <div class="section-full bg-no-repeat bg-center bg-white p100-bg" style="background-image:url(images/background/bg-map.png);">
                
            <div class="section-title text-center">
                <h5 class="p1-clr wow fadeInLeft mb-0" data-wow-delay="0.1s">
                    Why Chose Us
                </h5>
                <div class="mt-separator bg-primary fadeInLeft"></div>
            </div>
            <div class="container pt-5">
                        <div class="row">
                            <div class="col-lg-5 col-md-12  fadeInLeft" data-wow-delay="0.6s">
                                <div class="mt-box m-b30">
                                    <div class="mt-thum-bx mt-img-effect  mt-img-overlay2">
                                        <img src="assets/img/rasi/rasi-fact-file.jpg" alt="">
                                        <!-- <a href="https://player.vimeo.com/video/66491481" class="mfp-video play-now"> -->
                                            <!-- <i class="icon fa fa-play"></i> -->
                                            <!-- <span class="ripple"></span> -->
                                        <!-- </a> -->
                                    </div>
                                </div>                                                               
                            </div> 
                                                         
                            <div class="col-lg-7 col-md-12 wow fadeInRight" data-wow-delay="0.6s">
                                <div class="sx-shipment-wrap">
                                    <div class="mt-box m-b25">
                                        <h3 class="display-block m-b15 m-t0">We are a leading agriculture company delivering value to farmers for above four decades through continuous research and product innovation.</h3>
                                       <!--  <p class="m-b15">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, no when an unknown printer took a galley of
                                        type and scrambled.</p> -->
                                        <ul class="list-check-circle primary m-b20">
                                            <li> Our team of qualified researchers strive hard to address key challenges faced by farmers. </li>
                                            <li>With the help of advanced genetic engineering & breeding technologies we develop hybrid seeds with in-built biotic and abiotic resistance power to suit varying agro climatic conditions</li>
                                            <!-- <li>Dummy text of the printing and typesetting industry. Text of the printing.</li> -->
                                        </ul>
                                        <a href="#" class="site-button">Read more</a>
                                    </div>
                                </div>                               
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-delay="1s">
                                <div class="m-b30 text-black mt-icon-box-wraper center bdr-1 bdr-solid bdr-gray-light  bg-white p-a20">
                                    <div class="counter font-42 font-weight-800 m-b15 site-text-primary">4M+</div>
                                    <div class="d-flex justify-content-evenly align-items-center">
                                        <img src="assets/img/icon/count1.svg" alt="img">
                                        <h4 class="m-tb0">Satisfied Farmers</h4>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-delay="1s">
                                <div class="m-b30 text-black mt-icon-box-wraper center bdr-1 bdr-solid bdr-gray-light bg-white p-a20">
                                    <div class="counter font-42 font-weight-800 m-b15 site-text-primary">70K+</div>
                                    <div class="d-flex justify-content-evenly align-items-center">
                                        <img src="assets/img/icon/count2.svg" alt="img">
                                        <h4 class="m-tb0">Crop Varieties</h4>
                                    </div>                                    
                                </div>
                            </div>
                            
                            <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-delay="1s">
                                <div class="m-b30 text-black mt-icon-box-wraper center bdr-1 bdr-solid bdr-gray-light bg-white p-a20">
                                    <div class="counter font-42 font-weight-800 m-b15  site-text-primary">850K+</div>
                                    <div class="d-flex justify-content-evenly align-items-center">
                                        <img src="assets/img/icon/count3.svg" alt="img">
                                        <h4 class="m-tb0">Qualified Workforce</h4>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-delay="1s">
                                <div class="m-b30 text-black mt-icon-box-wraper center bdr-1 bdr-solid bdr-gray-light bg-white p-a20">
                                    <div class="counter font-42 font-weight-800 m-b15 site-text-primary">35K+</div>
                                    <div class="d-flex justify-content-evenly align-items-center">                             
                                        <img src="assets/img/icon/count4.svg" alt="img">
                                        <h4 class="m-tb0">Production Partners</h4>
                                    </div>
                                </div>
                            </div>  

                            <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-delay="1s">
                                <div class="m-b30 text-black mt-icon-box-wraper center bdr-1 bdr-solid bdr-gray-light bg-white p-a20">
                                    <div class="counter font-42 font-weight-800 m-b15 site-text-primary">40K+</div>
                                    <div class="d-flex justify-content-evenly align-items-center">
                                        <img src="assets/img/icon/count4.svg" alt="img">
                                        <h4 class="m-tb0">Point of Sales</h4>
                                    </div>
                                </div>
                            </div>     

                            <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-delay="1s">
                                <div class="m-b30 text-black mt-icon-box-wraper center bdr-1 bdr-solid bdr-gray-light bg-white p-a20">
                                    <div class="counter font-42 font-weight-800 m-b15 site-text-primary">200+</div>
                                    <div class="d-flex justify-content-evenly align-items-center">
                                        <img src="assets/img/icon/count2.svg" alt="img">
                                        <h4 class="m-tb0">Sales Offices</h4>
                                    </div>
                                </div>
                            </div>  

                            <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-delay="1s">
                                <div class="m-b30 text-black mt-icon-box-wraper center bdr-1 bdr-solid bdr-gray-light bg-white p-a20">
                                    <div class="counter font-42 font-weight-800 m-b15 site-text-primary">100K+</div>
                                    <div class="d-flex justify-content-evenly align-items-center">
                                        <img src="assets/img/icon/count3.svg" alt="img">
                                        <h4 class="m-tb0">Village Spread</h4>
                                    </div>
                                </div>
                            </div> 

                            <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-delay="1s">
                                <div class="m-b30 text-black mt-icon-box-wraper center bdr-1 bdr-solid bdr-gray-light bg-white p-a20">
                                    <div class="counter font-42 font-weight-800 m-b15 site-text-primary">100K+</div>
                                    <div class="d-flex justify-content-evenly align-items-center">
                                        <img src="assets/img/icon/count4.svg" alt="img">
                                        <h4 class="m-tb0">Years in Business</h4>
                                    </div>
                                </div>
                            </div> 

                        </div> 

            </div>
        </div>
        <!-- why choose us end -->
    </div>

    <div class="section">

        <!-- product categories section start -->
        <section class="white-bg">
            <!-- <img src="assets/img/rasi/polycrops-1024x683.jpg" class="jarallax-img" alt=""> -->
                
                <div class="container">
                    <div class="row">
                    
                        <!-- Block 1 -->
                        <div class="col-md-4 col-sm-6 col-xs-6 col-xs-100pc m-b30 wow fadeInLeft" data-wow-delay="0.6s">
                            <div class="animate-top">
                                <div class="mt-team-media">
                                    <a href="javascript:void(0);"><img src="assets/img/rasi/cotton-flowers_144627-37439.avif" class="" alt="" style="height: 450px;"></a>
                                </div>
                                <div class="mt-team-info text-center p-a20 text-white">
                                    <div class="mt-team-info-inner">
                                        <h4 class="mt-team-title m-b15">
                                            <a href="javascript:void(0);" class="text-white font-28 font-weight-900">Fiber</a>
                                        </h4>
                                    </div>
                                    <div>
                                        <p>Rasi Seeds is a leading hybrid seed company with proven capacity for producing good quality seeds of cotton.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Block 2 -->
                        <div class="col-md-4 col-sm-6 col-xs-6 col-xs-100pc m-b30 wow fadeInLeft" data-wow-delay="0.8s">
                            <div class="animate-top">
                                <div class="mt-team-media">
                                    <a href="javascript:void(0);"><img src="assets/img/rasi/vertical-shot-meadow-sunset-captured-canggu-bali_181624-7503.avif" alt="" style="height: 450px;"></a>
                                </div>
                                <div class="mt-team-info text-center p-a20 text-white">
                                    <div class="mt-team-info-inner">
                                        <h4 class="mt-team-title m-b15">
                                            <a href="javascript:void(0);" class="text-white font-28 font-weight-900">Food</a>
                                        </h4>
                                    </div>
                                    <div>
                                        <p>Rasi Seeds is a leading hybrid seed company with proven capacity for producing good quality seeds of Paddy, Maize, Wheat, Mustard & Millet.</p>
                                    </div>
                                </div>
                            </div>
                        </div>                            
                        <!-- Block 3 -->
                        <div class="col-md-4 col-sm-6 col-xs-6 col-xs-100pc m-b30 wow fadeInLeft" data-wow-delay="1s">
                            <div class="animate-top">
                                <div class="mt-team-media ">
                                    <a href="javascript:void(0);"><img src="assets/img/rasi/fodder.png" alt="" style="height: 450px;"></a>
                                </div>
                                <div class="mt-team-info text-center p-a20 text-white">
                                    <div class="mt-team-info-inner">
                                        <h4 class="mt-team-title m-b15">
                                            <a href="javascript:void(0);" class="text-white font-28 font-weight-900">Fodder</a>
                                        </h4>
                                    </div>
                                    <div>
                                        <p>Launched Sira Seeds (P) Ltd to meet the nutritional requirement of Indian livestock population.</p>
                                    </div>
                                </div>
                            </div>
                        </div>                        

                    </div>
                </div> 

        </section>
        <!-- product categories section end -->
    </div>


    <div class="section">

        <section class="white-bg">
            <div class="section-title text-center">
                <h5 class="p1-clr wow fadeInLeft mb-0" data-wow-delay="0.1s">
                    Innovation & Farmer Service
                </h5>
                <div class="mt-separator bg-primary fadeInLeft"></div>
            </div>

            <div class="container innovation-container p-3">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6 wow fadeInLeft inno_card" data-wow-delay="0.6s">
                        <img src="assets/img/rasi/scientist-lab-with-plant-foreground-blue-background_1316263-122844.jpg" style="height: 384px;">
                        <div class="inno-bottom-head">
                            <div>
                            <p class="text-white text-center font-weight-700">Biotech Innovation</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6 wow fadeInRight inno_card" data-wow-delay="0.6s">
                        <img src="assets/img/rasi/futuristic-technology-concept_23-2151908084.avif">
                        <div class="inno-bottom-head">
                            <p class="text-white text-center font-weight-700">Smart Agriculture</p>
                        </div>                    
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-6 wow fadeInUp inno_card" data-wow-delay="0.6s">
                        <img src="assets/img/rasi/young-indian-agronomist-banker-showing-some-information-farmer-smartphone-agriculture-field_75648-8078.avif">
                        <div class="inno-bottom-head">
                            <p class="text-white text-center font-weight-700">Partner With Farmer</p>
                        </div>                         
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 wow fadeInUp inno_card" data-wow-delay="0.6s">
                        <img src="assets/img/rasi/businessmen-standing-wheat-field-looking-laptop_255667-5259.avif">
                        <div class="inno-bottom-head">
                            <p class="text-white text-center font-weight-700">Partner With Vendor</p>
                        </div> 
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 wow fadeInUp inno_card" data-wow-delay="0.6s">
                        <img src="assets/img/rasi/businessman-farmer-with-tractors_155003-12235.avif">
                        <div class="inno-bottom-head">
                            <p class="text-white text-center font-weight-700">Partner With Trade</p>
                        </div>                     
                    </div>            
                </div>
            </div>

        </section>
    </div>


    <div class="section">

    <section class="white-bg p100-bg">
        <div class="row justify-content-center">
            <div class="col-xxl-6 col-xl-7 col-md-8 col-sm-11">
                <div class="section-title mb-60 text-center">
                    <h5 class="p1-clr wow fadeInLeft mb-0" data-wow-delay="0.1s">
                        Our Impact
                    </h5>
                    <div class="mt-separator bg-primary fadeInLeft"></div>
                </div>
            </div>
        </div>

        <div class="container-fluid ps-5 pe-5 wow fadeInLeft" data-wow-delay="0.1s">
            <div class="swiper herosection-slidewrap01">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" data-caption="caption-1">
                        <div class="impact-image-container">
                            <img class="impact-image" src="assets/img/rasi/impact/CSR1.png">
                        </div>
                        <div class="impact-title bg-custom-secondary p-3 ms-auto">
                            <h2 class="text-white text-center">MOBILE CLINIC</h2>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="impact-image-container">
                            <img class="impact-image" src="assets/img/rasi/impact/CSR2.png">
                        </div>
                        <div class="impact-title bg-custom-secondary p-3 ms-auto">
                            <h2 class="text-white text-center">AMUTHAM TRUST</h2>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="impact-image-container">
                            <img class="impact-image" src="assets/img/rasi/impact/CSR3.png">
                        </div>
                        <div class="impact-title bg-custom-secondary p-3 ms-auto">
                            <h2 class="text-white text-center">HOSPITAL EQUIPMENTS</h2>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="impact-image-container">
                            <img class="impact-image" src="assets/img/rasi/impact/CSR4.png">
                        </div>
                        <div class="impact-title bg-custom-secondary p-3 ms-auto">
                            <h2 class="text-white text-center">IDHAYANGAL TRUST</h2>
                        </div>
                    </div>


                </div>
              <!-- If we need navigation buttons -->
              <!-- <div class="cn-prev2"></div>
              <div class="cn-next2"></div> -->
              
                    <div class="hero-dot"></div>

                    <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>

    </div>

    <div class="section">

    <!--<< Sponsor Branding Start >>-->
    <section class="sponsor-branding-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-xl-7 col-md-8 col-sm-11">
                    <div class="section-title mb-60 text-center">
                        <h5 class="p1-clr wow fadeInLeft mb-0" data-wow-delay="0.1s">
                            Our Partners
                        </h5>
                        <div class="mt-separator bg-primary fadeInLeft"></div>
                    </div>
                </div>
            </div>
            <div class="swiper brand-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="brand-image">
                            <img src="assets/img/rasi/partners/cli-logo1.jpg" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-image">
                            <img src="assets/img/rasi/partners/cli-logo2.jpg" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-image">
                            <img src="assets/img/rasi/partners/cli-logo3.jpg" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-image">
                            <img src="assets/img/rasi/partners/cli-logo4.jpg" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-image">
                            <img src="assets/img/rasi/partners/cli-logo5.jpg" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>

</div>
    <!--<< Footer Section Start >>-->
    <?php 
        include('partials/footer.php');
        include('partials/bottom_script.php');

     ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/jquery.fullpage.min.js" integrity="sha512-bxzECOBohzcTcWocMAlNDE2kYs0QgwGs4eD8TlAN2vfovq13kfDfp95sJSZrNpt0VMkpP93ZxLC/+WN/7Trw2g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript">
    $('#fullpage').fullpage({
        scrollOverflow:true,
        scrollBar: true,
        navigation: true,
        autoScrolling: true, // Disable auto scrolling to use the default scrolling behavior
        fitToSection: true,
        scrollingSpeed: 200,
        loopBottom: false, // Prevent looping at the bottom
        loopTop: false, // Prevent looping at the top
        onLeave: function(origin, destination, direction) {
        console.log('Leaving section: ', origin);
        console.log('Entering section: ', destination);
      },
      afterLoad: function(anchorLink, index) {
        console.log('Loaded section: ', index);
      } 
    });

</script>
</body>

</html>