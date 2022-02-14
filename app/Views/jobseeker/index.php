<?php echo view('templates/header'); ?>
<?php echo view('templates/menu'); ?>


<br>
<div class="breadcrumbs overlay" style="background-image: url('<?php echo base_url('/images/bg1.jpeg'); ?>')">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Apply Your Job</h1>
                    <p>
                        We help <span style="color: red;">all people</span> get jobs
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="job-post section">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-12">
                <div class="job-information">
                    <h3 class="title" style="color: #397324;">Job Seeker</h3>
                    <p>
                        Apply Your Job, get it and immediately get noticed by the right recruiters....
                    </p>
                    <br>
                    <?php echo view('templates/shared/error_message'); ?>
                    <form class="form" method="POST" action="<?php echo site_url('jobseeker/save'); ?>">
                        <div class="row">
                            <div class="col-md-12">
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label style="color: #397324;">Name*</label>
                                    <input class="form-control" type="text" autocomplete="off" name="name" />
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label style="color: #397324;">NRC No</label>
                                    <input class="form-control" type="text" autocomplete="off" name="nrc_no" />
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label style="color: #397324;">Email Address</label>
                                    <input class="form-control" type="text" autocomplete="off" name="email" />
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label style="color: #397324;">Phone Number*</label>
                                    <input class="form-control" type="text" autocomplete="off" name="phone" />
                                </div>
                            </div>


                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label style="color: #397324;">Date Of Birth</label>
                                    <input class="form-control" type="date" name="date_of_birth" />
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label style="color: #397324;">Age</label>
                                    <input class="form-control" type="number" name="age" min="0" max="100" />
                                </div>
                            </div>


                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label style="color: #397324;">Gender</label>
                                    <select class="select" name="gender">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label style="color: #397324;">Health Status</label>
                                    <input class="form-control" type="text" autocomplete="off" name="health_status" placeholder="Good" />
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label style="color: #397324;">Height</label>
                                    <input class="form-control" type="text" autocomplete="off" name="height" placeholder="6 feet" />
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label style="color: #397324;">Weight</label>
                                    <input class="form-control" type="text" autocomplete="off" name="weight" placeholder="130 LB" />
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label style="color: #397324;">Education</label>
                                    <input class="form-control" type="text" autocomplete="off" name="education" />
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label style="color: #397324;">Language Skill</label>
                                    <input class="form-control" type="text" autocomplete="off" name="skill" placeholder="English 4 Skill, Japanese Language, etc" />
                                </div>
                            </div>


                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label style="color: #397324;">Current Address</label>
                                    <input class="form-control" type="text" autocomplete="off" name="current_address" />
                                </div>
                            </div>


                            <div class="col-lg-12 button">
                                <button class="btn">
                                    Apply Now
                                </button>
                            </div>


                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php echo view('templates/footer'); ?>