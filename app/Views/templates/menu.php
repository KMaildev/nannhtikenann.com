<header class="header">
    <div class="navbar-area" style="background-color: white;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>
                        <a class="navbar-brand logo" href="<?php echo site_url('home'); ?>">
                            <img class="logo1" src="<?php echo base_url(); ?>/logo.jpg" alt="Logo" />
                        </a>
                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ml-auto">

                                <li class="nav-item">
                                    <a class="active" href="<?php echo site_url('home'); ?>">Home</a>
                                </li>

                                <li class="nav-item">
                                    <a href="<?php echo site_url('about') ?>" class="active">About of our company</a>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="active">Oversea Jobs</a>
                                    <ul class="sub-menu">
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

                        <div class="button">
                            <a href="tel:09 965 104 520" class="btn">
                                <i class="lni lni-phone"></i>
                                Call Now
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>