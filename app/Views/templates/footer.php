<footer class="footer">
    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="single-footer f-link">
                                <h3>For Candidates</h3>
                                <ul>
                                    <li><a href="resume.html">User Dashboard</a></li>
                                    <li><a href="add-resume.html">Add resume</a></li>
                                    <li><a href="job-details.html">Jobs details</a></li>
                                    <li><a href="browse-categories.html">Browser-categories</a></li>
                                    <li><a href="blog-single.html">Blog</a></li>
                                    <li><a href="blog-single-sidebar.html">Blog single</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="single-footer f-link">
                                <h3>For Employers</h3>
                                <ul>
                                    <li><a href="blog-grid-sidebar.html">Post New</a></li>
                                    <li><a href="resume.html">My Resume</a></li>
                                    <li><a href="blog-grid-sidebar.html">Blog Grid</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="job-list.html">Jobs Listing</a></li>
                                    <li><a href="job-details.html">Jobs details</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="single-footer newsletter">
                                <h3>Join Our Newsletter</h3>
                                <p>
                                    Subscribe to get the latest jobs posted, candidates...
                                </p>
                                <form action="#" method="" class="newsletter-inner">
                                    <input placeholder="Your email address" class="common-input" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'" required="" type="email" />
                                    <div class="button">
                                        <button class="btn">
                                            Subscribe Now! <span class="dir-part"></span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="f-about single-footer">
                        <div class="logo">
                            <a href="index.html"><img src="<?php echo base_url(); ?>/assets/images/logo/logo.svg" alt="Logo" /></a>
                        </div>
                        <p>
                            Start building your creative website with our awesome template
                            Massive.
                        </p>
                        <ul class="contact-address">
                            <li><span>Address:</span> 3909 Witmer Rd, Niagara Falls,United States</li>
                            <li>
                                <span>Email:</span>
                                <a href="mailto:avsjobportal@gmail.com">avsjobportal@gmail.com</a>
                            </li>
                            <li><span>Call:</span><a href="tel:123-456-789">123-456-789</a></li>
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
                                Designed and Developed by<a href="https://themeforest.net/user/avs_technolabs" target="_blank">AVS Technolabs</a>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</footer>

<a href="#" class="scroll-top btn-hover">
    <i class="lni lni-chevron-up"></i>
</a>


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