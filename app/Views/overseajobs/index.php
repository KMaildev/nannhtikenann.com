<?php echo view('templates/header'); ?>
<?php echo view('templates/menu'); ?>

<br>
<div class="breadcrumbs overlay" style="background-image: url('<?php echo base_url('/images/bg2.jpeg'); ?>')">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Browse Jobs In <?php echo $title['name']; ?></h1>
                    <p>
                        Match your skills. Find more jobs.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="find-job job-list section">
    <div class="container">
        <div class="single-head">
            <div class="row">
                <?php
                foreach ($overseajobs as $key => $value) {
                ?>
                    <div class="col-lg-12 col-sm-12 col-12">
                        <div class="single-job">
                            <div class="job-image">
                                <img src="<?php echo base_url('/images/job-search.png') ?>" alt="#" style="width: 99%;" />
                            </div>
                            <div class="job-content">
                                <h4>
                                    <?php echo $value['name']; ?>
                                </h4>
                                <p>
                                    <?php echo $value['description']; ?>
                                </p>
                                <ul>
                                    <li>
                                        <i class="lni lni-phone"></i>
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

                                    <li>
                                        <i class="lni lni-phone"></i>
                                        <a href="mailto:info@nannhtikenann.com">
                                            info@nannhtikenann.com
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="job-button">
                                <ul>
                                    <li><a href="<?php echo site_url('jobseeker/index') ?>">Apply Now</a></li>
                                    <li><a href="<?php echo site_url('inquiry/index') ?>">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<?php echo view('templates/footer'); ?>