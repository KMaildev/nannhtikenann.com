<?php echo view('templates/header'); ?>
<?php echo view('templates/menu'); ?>
<?php echo view('templates/slider'); ?>

<section class="call-action style2">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-8 col-md-8 col-12">
				<div class="text">
					<h2>Apply Your Job, get it and immediately get noticed by the right recruiters....</h2>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<div class="button">
					<a href="<?php echo site_url('jobseeker/index'); ?>" class="btn">Apply Your Job</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="about-us section">
	<div class="container">
		<div class="row align-items-center justify-content-center">

			<div class="col-md-12 col-lg-12 col-sm-12" style="border: 1px solid #f6b633; padding: 12px; margin: 12px; background-color: #b7e0a8; border-radius: 4px;">
				<div>
					<span class="wow fadeInDown" data-wow-delay=".2s">
						About Of Our Company
					</span>
					<h2 style="color: #50a78e; text-shadow: 2px 2px 2px black; font-size: 25px;" data-wow-delay=".2s">
						Nann Htike Nann Co.,Ltd
					</h2>
					<p class="wow fadeInUp" data-wow-delay=".6s" style="text-align: justify; padding: 4px; color: white;">
						Nann Htike Nann Co.,Ltd is a professional employment solution provider legal agency for both local and foreign worker/ employee in Myanmar region. We do provide Human Resource, HR consultancy to our prestige employer in any HR matters. Our license was awarded by Ministry Of Manpower (MOM) license number: 6/2014. Our experience team are dedicated to provide exclusive personalized recruitment service to suit different customers’ needs in their industry and employment requirement. We promise to provide our excellent service, hassle free and commit to resolve any issues arise before and after sales service.
					</p>
				</div>
			</div>

			<div class="col-lg-6 col-md-10 col-12" style="background-color: #b7e0a8; padding: 12px; border: 1px solid #f6b633; border-radius: 4px;">
				<div class="content-right wow fadeInRight" data-wow-delay=".5s">

					<center>
						<h2 style="color: #50a78e; text-shadow: 2px 2px 2px black; font-size: 25px;">
							Company Statement
						</h2>
					</center>

					<div class="single-list">
						<i class="lni lni-grid-alt"></i>
						<div class="list-bod" style="background-color: #397324; padding: 6px; border-radius: 4px;">
							<center>
								<h5 style="color: white;">Our Vision</h5>
							</center>
							<p style="color: white;">
								To growth together with our
								Client, business partner and
								stake holder. Your success is our
								success as well
							</p>
						</div>
					</div>

					<div class="single-list">
						<i class="lni lni-search"></i>

						<div class="list-bod" style="background-color: #f2efef; padding: 6px; border-radius: 4px;">
							<center>
								<h5 style="color: black;">Our Mission</h5>
							</center>
							<p style="color: black; ">
								To provide the most suitable,
								hassle free emplyee to our
								Myanmar employer
							</p>
						</div>
					</div>

					<div class="single-list">
						<i class="lni lni-stats-up"></i>

						<div class="list-bod" style="background-color: #f6b633; padding: 6px; border-radius: 4px;">
							<center>
								<h5 style="color: white;">Our Business value</h5>
							</center>
							<p style="color: white;">
								Service Excellent
								Speedy Employment
								Sales Ethics
							</p>
						</div>
					</div>
				</div>
				<br>
			</div>

			<div class="col-lg-6 col-md-10 col-12">
				<div class="content-left wow fadeInLeft" data-wow-delay=".3s">
					<div calss="row">
						<div calss="col-lg-6 col-12">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-6">
									<img class="single-img" src="<?php echo base_url('/images/1.jpeg') ?>" alt="#" style="border-radius: 4px;" />
								</div>
								<div class="col-lg-6 col-md-6 col-6">
									<img class="single-img mt-50" src="<?php echo base_url('/images/2.jpeg') ?>" alt="#" style="border-radius: 4px;" />
								</div>
							</div>
						</div>
						<div calss="col-lg-6 col-12">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-6">
									<img class="single-img minus-margin" src="<?php echo base_url('/images/3.jpeg') ?>" alt="#" style="border-radius: 4px;" />
								</div>
								<div class="col-lg-6 col-md-6 col-6">
									<div class="media-body">
										<p class="" data-wow-delay=".3s">
											Help You To Get The
											Best Job That Fits You
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="find-job section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h2 class="wow fadeInUp" data-wow-delay=".4s">
						WE CREATE ANY JOB OPPORTUNITY FOR MYANMAR PEOPLE
					</h2>
					<p class="wow fadeInUp" data-wow-delay=".6s">
						Our Quality Management tools and trainers are monitoring all candidates with the best of their efforts to be ready for clients applications need.
					</p>
					<br>
					<?php
					foreach ($countryies as $key => $value) {
					?>
						<a href="<?php echo site_url('overseajobs/index/' . $value['id']); ?>">
							<span class="wow fadeInDown" data-wow-delay=".2s">
								<?php echo $value['name']; ?>
							</span>
						</a>
					<?php } ?>
				</div>
			</div>
		</div>

		<div class="single-head">
			<div class="row">
				<?php
				foreach ($overseajobs as $key => $value) {
					if ($key == 10) {
						break;
					}
				?>
					<div class="col-lg-12 col-sm-12 col-12">
						<div class="single-job">
							<div class="job-image">
								<img src="<?php echo base_url('/images/job-search.png') ?>" alt="#" style="width: 99%;" />
							</div>
							<div class="job-content">
								<h4>
									<?php echo $value->name; ?>
								</h4>
								<p>
									<?php echo $value->description; ?>
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