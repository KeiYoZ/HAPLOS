<?php get_header(); ?>
<!-- container start -->
<div class="container-fluid">
	<!-- First section start -->
	<div class="section" style="background-color: #609a82; margin-top:70px;">
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
				<input type="button" class="start-process" value="Puntahan ang proseso">
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
	<div class="section" id="contact_haplos" style="background-color: #609a82; padding-top:120px;">
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
	<div class="section" id="mga_ospital" style="background-color: #609a82; padding-top:130px;">
		<div class="row">
			<div class="col-md-7 col-centered section-5-container">
				<p class="text-center section-5-title"><?php the_field('section_5_title'); ?></p>
			</div>
		</div>
	</div>
	<!-- Fifth section end -->
</div>
<!-- container end -->
</body>
</html>