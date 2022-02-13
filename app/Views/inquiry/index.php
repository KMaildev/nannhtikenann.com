<?php echo view('templates/header'); ?>
<?php echo view('templates/menu'); ?>

<section id="contact-us" class="contact-us section">
    <div class="container">
        <div class="contact-head wow fadeInUp" data-wow-delay=".4s">
            <div class="row">

                <div class="col-md-6 col-lg-6 col-sm-12">
                    <div class="single-head m-auto">
                        <div class="contant-inner-title">
                            <h4>Contact Information</h4>
                            <p>
                                Nann Htike Nann Co.,Ltd
                            </p>
                        </div>
                        <div class="single-info">
                            <i class="lni lni-phone"></i>
                            <ul>
                                <li>
                                    <a href="tel:09 510 4520">
                                        09 510 4520
                                    </a>
                                    <a href="tel:09 769 368 610">
                                        09 769 368 610
                                    </a>
                                    <a href="tel:09 965 104 520">
                                        09 965 104 520
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="single-info">
                            <i class="lni lni-envelope"></i>
                            <ul>
                                <li>
                                    <a href="md@nannhtikenann.com">
                                        md@nannhtikenann.com
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="single-info">
                            <i class="lni lni-envelope"></i>
                            <ul>
                                <li>
                                    <a href="info@nannhtikenann.com">
                                        info@nannhtikenann.com
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="single-info">
                            <i class="lni lni-envelope"></i>
                            <ul>
                                <li>
                                    <a href="nyuntwinhappy2009@gmail.com">
                                        nyuntwinhappy2009@gmail.com
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="single-info">
                            <i class="lni lni-map"></i>
                            <ul>
                                <li>
                                    No.942, Third Floor (A), Kyaik Wine Pagoda Road, Block-3, Mayangone Township, Yangon.
                                </li>
                            </ul>
                        </div>
                        <div class="contact-social">
                            <h5>Follow Us on</h5>
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/Nann-Htike-Nann-CoLtd-105400050851950"><i class="lni lni-facebook-original"></i></a>
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


                <div class="col-md-6 col-lg-6 col-sm-12">
                    <div class="form-main">
                        <?php echo view('templates/shared/error_message'); ?>
                        <form class="form" method="POST" action="<?php echo site_url('inquiry/save'); ?>">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Your Name" name="name" value="<?php echo set_value('name'); ?>" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Your Subject" name="subject" value="<?php echo set_value('subject'); ?>" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <input type="email" placeholder="Your Email" name="email" value="<?php echo set_value('email'); ?>" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Your Phone" name="phone" value="<?php echo set_value('phone'); ?>" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group message">
                                        <textarea placeholder="Your Message" name="message"><?php echo set_value('message'); ?></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group button">
                                        <button class="btn">
                                            Submit Message
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?php echo view('templates/footer'); ?>