<footer class="footer">
    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="f-about single-footer">
                        <h3 style="color: #397324;">
                            Head Office
                        </h3>
                        <ul class="contact-address" style="color: #7e8890;">
                            <li>
                                <a href="">
                                    <span>Address:</span>
                                    No.942, Third Floor (A), Kyaik Wine Pagoda Road, Block-3, Mayangone Township, Yangon.
                                </a>
                            </li>
                            <li>
                                <span>Email:</span>
                                <a href="md@nannhtikenann.com">
                                    md@nannhtikenann.com
                                </a>
                            </li>

                            <li>
                                <span>Email:</span>
                                <a href="info@nannhtikenann.com">
                                    info@nannhtikenann.com
                                </a>
                            </li>

                            <li>
                                <span>Email:</span>
                                <a href="nyuntwinhappy2009@gmail.com">
                                    nyuntwinhappy2009@gmail.com
                                </a>
                            </li>
                            <li>
                                <span>Call:</span>
                                <a href="tel:09 510 4520">
                                    09 510 4520,
                                </a>
                                <a href="tel:09 769 368 610">
                                    09 769 368 610,
                                </a>
                                <a href="tel:09 965 104 520">
                                    09 965 104 520,
                                </a>
                            </li>
                        </ul>
                        <div class="footer-social">
                            <ul>
                                <li>
                                    <a href="#"><i class="lni lni-facebook-original"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="lni lni-twitter-original"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="lni lni-linkedin-original"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="lni lni-pinterest"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="single-footer f-link">
                                <h3 style="color: #397324;">Quick Links</h3>
                                <ul>
                                    <li class="nav-item">
                                        <a class="active" href="<?php echo site_url('home'); ?>">Home</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="<?php echo site_url('about') ?>" class="active">About of our company</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="<?php echo site_url('jobseeker/index') ?>" class="active">Job Seeker </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="<?php echo site_url('activities/index') ?>" class="active">Working Activities</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="active" href="<?php echo site_url('inquiry/index') ?>">Contact Us </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="single-footer f-link">
                                <h3 style="color: #397324;">Overseas Jobs</h3>
                                <ul>
                                    <?php
                                    foreach ($countryies as $key => $value) {
                                    ?>
                                        <li>
                                            <a href="<?php echo site_url('overseajobs/index/' . $value['id']); ?>">
                                                <?php echo $value['name']; ?>
                                            </a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="single-footer newsletter">
                                <h3 style="color: #397324;">Social Media</h3>
                                <div id="fb-root">
                                    <div class="fb-page" data-href="https://www.facebook.com/Nann-Htike-Nann-CoLtd-105400050851950" data-tabs="timeline" data-height="240" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                    </div>

                                    <script>
                                        (function(d, s, id) {
                                            var js, fjs = d.getElementsByTagName(s)[0];
                                            if (d.getElementById(id)) return;
                                            js = d.createElement(s);
                                            js.id = id;
                                            js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.1&appId=310515396183252&autoLogAppEvents=1';
                                            fjs.parentNode.insertBefore(js, fjs);
                                        }(document, 'script', 'facebook-jssdk'));
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-12">
                        <div class="left">
                            <p>
                                Designed and Developed by<a href="" target="_blank" style="color: red;">KMail</a>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</footer>
<script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/wow.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/tiny-slider.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/glightbox.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/main.js"></script>
<script type="text/javascript">
    //====== Clients Logo Slider
    tns({
        container: ".client-logo-carousel",
        slideBy: "page",
        autoplay: true,
        autoplayButtonOutput: false,
        mouseDrag: true,
        gutter: 15,
        nav: false,
        controls: false,
        responsive: {
            0: {
                items: 1,
            },
            540: {
                items: 2,
            },
            768: {
                items: 3,
            },
            992: {
                items: 4,
            },
            1170: {
                items: 6,
            },
        },
    });
    //========= testimonial
    tns({
        container: ".testimonial-slider",
        items: 1,
        slideBy: "page",
        autoplayButtonOutput: false,
        autoplay: true,
        mouseDrag: true,
        gutter: 0,
        nav: false,
        controls: true,
        controlsText: [
            '<i class="lni lni-arrow-left"></i>',
            '<i class="lni lni-arrow-right"></i>',
        ],
        responsive: {
            0: {
                items: 1,
            },
            540: {
                items: 1,
            },
            768: {
                items: 1,
            },
            992: {
                items: 1,
            },
            1170: {
                items: 1,
            },
        },
    });

    //======== Home Slider
    var slider = new tns({
        container: ".home-slider",
        slideBy: "page",
        autoplay: true,
        autoplayButtonOutput: false,
        mouseDrag: true,
        gutter: 0,
        items: 1,
        nav: false,
        controls: true,
        controlsText: [
            '<i class="lni lni-arrow-left prev"></i>',
            '<i class="lni lni-arrow-right next"></i>',
        ],
        responsive: {
            1200: {
                items: 1,
            },
            992: {
                items: 1,
            },
            0: {
                items: 1,
            },
        },
    });
</script>
</body>

</html>

<script type="text/javascript">
    $('img[data-enlargeable]').addClass('img-enlargeable').click(function() {
        var src = $(this).attr('src');
        var modal;

        function removeModal() {
            modal.remove();
            $('body').off('keyup.modal-close');
        }
        modal = $('<div>').css({
            background: 'RGBA(0,0,0,.5) url(' + src + ') no-repeat center',
            backgroundSize: 'contain',
            width: '100%',
            height: '100%',
            position: 'fixed',
            zIndex: '10000',
            top: '0',
            left: '0',
            cursor: 'zoom-out'
        }).click(function() {
            removeModal();
        }).appendTo('body');
        //handling ESC
        $('body').on('keyup.modal-close', function(e) {
            if (e.key === 'Escape') {
                removeModal();
            }
        });
    });
</script>