<?php echo view('templates/header'); ?>
<?php echo view('templates/menu'); ?>

<section class="featured-job section">
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2 style="color: #50a78e; text-shadow: 2px 2px 2px black;">
                        Company Activities
                    </h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">
                        Some Of Our Work
                    </p>
                </div>
            </div>
        </div>
        <div class="single-head">
            <div class="row">
                <?php
                foreach ($activities as $activitie) {
                    $temp_arr = explode(',', $activitie['photo']);
                    $total_count = count($temp_arr);
                    for ($i = 0; $i < $total_count; $i++) {
                ?>
                        <div class="col-lg-3 col-md-3 col-12 mb-2" style="box-shadow: 1px 1px 1px 1px #b45727;">
                            <div class="single-job wow fadeInUp" data-wow-delay=".2s">
                                <div class="shape"></div>
                                <div class="feature">
                                    Activities
                                </div>
                                <div class="image">
                                    <img src="<?php echo site_url(); ?>/../admin/<?php print_r($temp_arr[$i]); ?>" alt="Company Activities" data-enlargeable="" style="width: 100%; height: 200px; object-fit:contain;" />
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<?php echo view('templates/footer'); ?>