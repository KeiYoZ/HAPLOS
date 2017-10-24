<?php 
/*
Template Name: Front Page English
*/
?>

<?php 
if(is_page(125)) {
	get_header('en');
}
?>

<!-- dot nav start -->
<div class="vNav">
	<ul class="vNav">
		<li><a href="#top"></a></li>
		<li><a href="#ano_ang_haplos"></a></li>
		<li><a href="#hemophilia"></a></li>
		<li><a href="#contact_haplos"></a></li>
		<li><a href="#mga_ospital"></a></li>
	</ul>
</div>
<!-- dot nav bar end -->
<!-- container start -->
<div class="container-fluid">
	<!-- First section start -->
	<div class="section" style="background-color: #6d9075; padding-top:70px;">
		<div class="row section-1-container">
			<div class="col-md-12">
				<p class='homeinfusionprocess'><?php the_field('section_1_title'); ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<img class="hand-injection img-responsive" src="<?php the_field('section_1_image'); ?>" alt="">
			</div>
			<div class="col-md-6">
				<p class="hip-desc"><?php the_field('section_1_description'); ?></p>
				<input type="button" class="start-process" value="Go to process">
			</div>
		</div>
	</div>
	<!-- First section end -->

	<!-- Second section start -->
	<div class="section" id="ano_ang_haplos" style="background-color: #e6e4da;">
		<div class="row section-2-container">
			<div class="col-md-6">
				<img src="<?php the_field('section_2_image'); ?>" alt="" class="img-responsive section-2-image">
			</div>
			<div class="col-md-6">
				<p class="section-2-text"><?php the_field('section_2_description'); ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 section-2-title-container">
				<span><?php the_field('section_2_title'); ?></span>
			</div>
		</div>
	</div>
	<!-- Second section end -->

	<!-- Third section start -->
	<div class="section section-3-container" id="hemophilia">
		<div class="row">
			<div class="col-md-12">
				<span class="section-3-title-1"><?php the_field('section_3_title_1'); ?></span>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 section-3-text">
				<span><?php the_field('section_3_description'); ?></span>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<span class="section-3-title-2"><?php the_field('section_3_title_2'); ?></span>
			</div>
		</div>
	</div>
	<!-- Third section end -->

	<!-- Fourth section start -->
	<div class="section" id="contact_haplos" style="background-color: #6d9075; padding-top:120px;">
		<div style="margin:0 auto;">
			<div class="row">
				<div class="col-md-12">
					<p class="contact text-center"><?php the_field('section_4_title'); ?></p>
				</div>
			</div>
			<div class="contact-wrapper">
				<div class="col-1"><img src="<?php the_field('section_4_contact_1_image'); ?>"/></div>
				<div class="col-2 contact-text" style="width:auto;"><span><?php the_field('section_4_contact_1_text'); ?></span></div>
				<div class="clear"></div>
				<div class="col-1"><img src="<?php the_field('section_4_contact_2_image'); ?>"/></div>
				<div class="col-2 contact-text" style="width:auto;"><span><?php the_field('section_4_contact_2_text'); ?></span></div>
				<div class="clear"></div>
				<div class="col-1"><img src="<?php the_field('section_4_contact_3_image'); ?>"/></div>
				<div class="col-2 contact-text" style="width:auto;"><span><?php the_field('section_4_contact_3_text'); ?></span></div>
				<div class="clear"></div>
				<div class="col-1"><img src="<?php the_field('section_4_contact_4_image'); ?>"/></div>
				<div class="col-2 contact-text"><span><?php the_field('section_4_contact_4_text'); ?></span></div>
			</div>
		</div>
	</div>
	<!-- Fourth section end -->

	<!-- Fifth section start -->
	<div class="section section-5-container" id="mga_ospital" style="background-color: #6d9075; padding-top:80px;s">
		<div class="row">
			<div class="col-md-7 col-centered">
				<p class="text-center section-5-title"><?php the_field('section_5_title'); ?></p>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-sm-12">
					<p class="treatment-header">CEBU CITY</p>
					<p class="hospital-name">Hemophilia Center of Cebu,</p>
					<p class="hospital-details">Perpetual Succour Hospital, Gorordo Avenue, Cebu City 6000</p>
					<p class="doc">Dr.Lynda Mae Lepatan</p>
				</div>
				<div class="col-lg-6 col-sm-12">
					<p class="treatment-header">MANILA</p>
					<p class="hospital-name">Hemophilia Treatment Center,</p>
					<p class="hospital-details">P2/F Benavides Cancer Institute, University of Santo Tomas Hospital, Espana Boulevard, Manila 1014
					</p>
					<p class="contact-text">+632 731 3001 local 2680</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-sm-12">
					<p class="treatment-header">DAVAO CITY</p>
					<p class="hospital-name">Mindanao Hemophilia and Bleeding Disorder Treatment Center, </p>
					<p class="hospital-details">Brokenshire Hospital, Madapo Hill, Davao del Sur, Davao City 8000</p>
					<p class="doc">Dr. Jeannie B. Ong</p>
					<p class="contact-text">+6382 305 3525 local 4502</p>
				</div>
				<div class="col-lg-6 col-sm-12">
					<p class="treatment-header"><br></p>
					<p class="hospital-name">Section of Pediatric Hematology-Oncology </p>
					<p class="hospital-details">Cancer Institute, Room 112, UPCM-Philippine General Hospital, Taft Avenue 1000, Manila</p>
					<p class="contact-text">+632 554 8400 local 4121</p><div class="clearfix"></div>
					<p class="contact-text"> +63 943 278 8800</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-sm-12">
					<p class="treatment-header">QUEZON CITY</p>
					<p class="hospital-name">Cancer and Hematology Center, </p>
					<p class="hospital-details">Mezzanine, Philippine Children’s Medical Center, Quezon Avenue, Quezon City </p>
					<p class="contact-text">+632 924 6601 local 314</p>
				</div>
			</div>
		</div>
	</div>
	<!-- Fifth section end -->
</div>
<!-- container end -->
</body>
</html>