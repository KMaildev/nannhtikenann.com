<header class="header">
    <div class="navbar-area">
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
                                        <li><a href="browse-jobs.html">Browse Jobs</a></li>
                                        <li>
                                            <a href="browse-categories.html">Browse Categories</a>
                                        </li>
                                        <li><a href="add-resume.html">Add Resume</a></li>
                                        <li><a href="job-alerts.html">Job Alerts</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="active">Job Seeker </a>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="active">Working Activities</a>
                                </li>

                                <li class="nav-item">
                                    <a href="<?php echo site_url('inquiry/index') ?>">Contact Us </a>
                                </li>
                            </ul>
                        </div>

                        <div class="button">
                            <a href="javacript:" data-toggle="modal" data-target="#signup" class="btn">Sign Up</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>