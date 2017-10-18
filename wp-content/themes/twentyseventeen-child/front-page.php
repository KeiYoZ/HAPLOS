<?php get_header(); ?>
<!-- container start -->
<div class="container-fluid">
	<!-- First section start -->
	<div class="section" style="background-color: #6d9075; margin-top:70px;">
		<div class="row" style="padding-top:70px; padding-left:280px;">
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
				<input type="button" class="btn btn-danger" value="Test Alert">
			</div>
		</div>
	</div>

	<!-- First section end -->

	<!-- Second section start -->
	<div class="section" id="ano_ang_haplos" style="background-color: #e6e4da;">
		<div class="row" style="padding-top:200px;">
			<div class="col-md-6">
				<img src="<?php the_field('section_2_image'); ?>" alt="" class="img-responsive section-2-image">
			</div>
			<div class="col-md-6">
				<p class="section-2-text"><?php the_field('section_2_description'); ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12" style="margin-top:100px;">
				<span><?php the_field('section_2_title'); ?></span>
			</div>
		</div>
	</div>
	<!-- Second section end -->

	<!-- Third section start -->
	<div class="section" id="hemophilia" style="background-color: #e6e5db; padding-top:200px; padding-left:180px;">
		<div class="row">
			<div class="col-md-12">
				<span class="section-3-title-1"><?php the_field('section_3_title_1'); ?></span>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 section-3-text">
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
	<div class="section" id="contact_haplos" style="background-color: #609a82; padding-top:120px;">
		<div class="row">
			<div class="col-md-12" style="margin:0 auto;">
				<p class="contact text-center"><?php the_field('section_4_title'); ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2 text-center col-centered">
				<img style="float:left;" src="<?php the_field('section_4_contact_1_image'); ?>"/>
				<p class="contact-text" style="vertical-align:middle;"><?php the_field('section_4_contact_1_text'); ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2 text-center col-centered">
				<img style="float:left;" src="<?php the_field('section_4_contact_2_image'); ?>"/>
				<p class="contact-text"><?php the_field('section_4_contact_2_text'); ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 text-cente col-centered">
				<img style="float:left;" src="<?php the_field('section_4_contact_3_image'); ?>"/>
				<p class="contact-text"><?php the_field('section_4_contact_3_text'); ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 text-center col-centered">
				<img style="float:left;" src="<?php the_field('section_4_contact_4_image'); ?>"/>
				<p class="contact-text"><?php the_field('section_4_contact_4_text'); ?></p>
			</div>
		</div>
	</div>
	<!-- Fourth section end -->

	<!-- Fifth section start -->
	<div class="section" id="mga_ospital" style="background-color: #609a82; padding-top:130px;">
		<div class="row">
			<div class="col-md-7 col-centered">
				<p class="text-center section-5-title"><?php the_field('section_5_title'); ?></p>
			</div>
		</div>
	</div>
	<!-- Fifth section end -->
</div>
<!-- container end -->
</body>
</html>