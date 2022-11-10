    <div class="section pt-5 pb-5" style="background-color: #ffffff;">
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-6">
                    <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                        <img src="<?=base_url('assets/img/logoTrepcamp.svg')?>" width="200">
                    </a>
                    <p class="text-muted" style="color: #6A6A6A;">TrepCamp is a Training Academy  in entrepreneurial creativity, 
                        leadership, and innovation, with the main purpose of preparing aspiring entrepreneurs 
                        to acquire the knowledge and strengthen their competencies as 
                        they embark on their entrepreneurial journey.</p>
                    <a href="#" style="text-decoration: none;"><span style="color: #333333;font-weight: 700;">About Us</span></a>
                </div>
                <div class="col-lg-3 offset-lg-3 columna-info">
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><i class="fas fa-map-marker-alt"></i><span style="color: #333333;font-weight: 400;"> 28 Liberty Street Silicon Valley, California. EE. UU.</span></li>
                        <li class="nav-item mb-2"><i class="fas fa-phone-alt"></i><span style="color: #333333;font-weight: 400;"> 4563635635</span></li>
                        <li class="nav-item mb-2"><i class="fas fa-envelope"></i><span style="color: #333333;font-weight: 700;"> info@trepcamp.com</span></li>
                        
                    </ul>
                    <ul class="nav col-md-8 justify-content-start list-unstyled d-flex">
                        <li class="ms-2">
                            <a href="https://www.facebook.com/emtech.inst"><img src="<?= base_url('assets/img/tiktok.png') ?>"></a>
                        </li>
                        <li class="ms-2">
                            <a href="https://www.instagram.com/emtech.inst/"><img src="<?= base_url('assets/img/instagram.png') ?>"></a>
                        </li> 
                        <li class="ms-2">
                            <a href="https://www.facebook.com/emtech.inst"><img src="<?= base_url('assets/img/facebook.png') ?>"></a>
                        </li>
                        <li class="ms-2">
                            <a href="https://www.linkedin.com/school/emtechinstitute/"><img src="<?= base_url('assets/img/linkedin.png') ?>"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<!-- FOOTER -->
    
    <footer class="container">
        <div class="row">
            <div class="col-lg-6 div-copyright">
                    <p style="margin-top: 3rem;color: #333333;">© Copyright 2022 TrepCamp.org. All rights reserved.</p>
            </div>
            <div class="col-lg-6">
                <ul class="lista-privacy justify-content-end d-flex list-unstyled" style="margin-top: 3rem;">
                    <li class="ms-3"><a class="text-muted" href="#" style="text-decoration: none;"><span style="color: #333333;font-weight: 700;">Privacy policy</span> </a></li>
                    <li class="ms-3"><a class="text-muted" href="#" style="text-decoration: none;"><span style="color: #333333;font-weight: 700;">Terms of use</span></a></li>
                </ul>
            </div>
            
        </div>
    </footer>
</main>
    <script src="<?= base_url('assets/plugins/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js') ?>"></script>
    <!-- <script src="<?= base_url('assets/plugins/jquery/js/query-3.6.0.min.js') ?>"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.counterup/1.0/jquery.counterup.min.js"></script>
        <script src="<?= base_url('assets/js/wow.min.js') ?>"></script>
        <script src="<?= base_url('assets/plugins/OwlCarousel2-2.3.4/dist/owl.carousel.min.js') ?>"></script>
        <script src="<?= base_url('assets/plugins/slick-1.8.1/slick/slick.min.js') ?>"></script>
        <script>
            new WOW().init();
        </script>
        <?php if(isset($scriptVista)){ echo $scriptVista; } ?>
        <script>
            $('.one-time').slick({
                dots: false,
                arrows:false,
                infinite: true,
                speed: 200,
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay:true,
                responsive: [
                    {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                    },
                    {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                    },
                    {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });

            $('.sliderTestimonial').slick({
                dots: false,
                arrows:false,
                infinite: true,
                speed: 200,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay:true,
                responsive: [
                    {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                    },
                    {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                    },
                    {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });

            $('.sliderInstagram').slick({
                dots: false,
                arrows:false,
                infinite: true,
                speed: 200,
                slidesToShow: 2,
                slidesToScroll: 1,
                autoplay:true,
                responsive: [
                    {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                    },
                    {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                    },
                    {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });

        </script>
    </body>
</html>