<?php
/*
Template Name: Exam Template
*/
if(is_page(128)){
	get_header('en');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exam</title>
</head>
<body>
	<!-- examination start -->
	<!-- exam intro -->
	<div class="section" style="background-color: #609a82; padding-top:70px; padding-bottom:190px;">
		<div class="row" style="margin-top:30px;">
			<div class="col-lg-6 col-centered text-center">
				<p class="exam-header"><?php the_field('exam_header'); ?></p>
				<p class="exam-subheader"><?php the_field('exam_subheader'); ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-centered text-center">
				<p class="exam-intro"><?php the_field('exam_intro'); ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-centered text-center" style="margin-top:150px;">
				<a href="#1"><input type="button" class="start-exam" value="Start"></a>
			</div>
		</div>
	</div>
	<!-- exam intro end -->

	<?php
	if( have_rows('p1_questions') ):
		while ( have_rows('p1_questions') ) : the_row();
			global $id;
			$id += 1;
			?>
			<div class="section" style="background-color: #609a82; padding-bottom: 150px; padding-top:4%;" id="<?php echo $id ?>">
				<div class="row">
					<div class="col-lg-6 col-centered text-center">
						<p class="exam-header"><?php the_field('exam_header'); ?></p>
						<p class="exam-subheader"><?php the_field('exam_subheader'); ?></p>
					</div>
				</div>
				<form action="">
					<div class="row">
						<div class="col-lg-6 col-sm-12 exam-container">
							<p class="exam-part-head"><?php the_field('p1_question_header'); ?></p>
							<p class="exam-question">
								<?php the_sub_field('true_or_false_question'); ?>
							</p>
							<p class="exam-radio-btn exam-question">
								<input type="radio" value="t">True<br>
								<input type="radio" value="f">False
							</p>
						</div>
					</div>
					<div class="container" style="margin-top:3%;">
						<div class="row">
							<a href="#<?php echo $id - 1; ?>"><input type="button" class="start-exam" value="Back"></a>
							<a href="#<?php echo $id + 1; ?>"><input type="button" class="start-exam" value="Next" style="float:right;"></a>
						</div>
					</div>
				</form>
			</div>
			<?php
		endwhile;
	else :
	endif;
	?>

	<?php 
	if( have_rows('p2_questions') ): ?>
	<?php 
	while( have_rows('p2_questions') ): the_row(); $id += 1; ?>
	<div class="section" style="background-color: #609a82; padding-bottom: 150px; padding-top:4%;" id="<?php echo $id; ?>">
		<div class="row">
			<div class="col-lg-6 col-centered text-center">
				<p class="exam-header"><?php the_field('exam_header'); ?></p>
				<p class="exam-subheader"><?php the_field('exam_subheader'); ?></p>
			</div>
		</div>
		<form action="">
			<div class="row">
				<div class="col-lg-6 col-sm-12 exam-container">
					<p class="exam-part-head"><?php the_field('p2_question_header'); ?></p>
					<p class="exam-question">
						<?php the_sub_field('multiple_choice_question'); ?>
					</p>
					<?php 
					if( have_rows('p2_choices') ): ?>
					<?php 
					while( have_rows('p2_choices') ): the_row();
						?>
						<p class="exam-radio-btn exam-question">
							<input type="radio" value="<?php the_sub_field('choices'); ?>"><?php the_sub_field('choices'); ?>
						</p>
					<?php endwhile; ?>
				<?php endif;?>
			</div>
		</div>
		<div class="container" style="margin-top:3%;">
			<div class="row">
				<a href="#<?php echo $id - 1; ?>"><input type="button" class="start-exam" value="Back"></a>
				<a href="#<?php echo $id + 1; ?>"><input type="button" class="start-exam" value="Next" style="float:right;"></a>
			</div>
		</div>
	</form>
</div>
<?php endwhile;?>
<?php endif;?>
<!-- examination end -->
<!-- dot nav start -->
<div class="vNav">
	<ul class="vNav">
		<li><a href="#top<?php echo $anchor_id; ?>"></a></li>
		<?php
		$anchor_id = 1;
		while($anchor_id <= $id){
			?>
			<li><a href="#<?php echo $anchor_id; ?>"></a></li>
			<?php
			$anchor_id++;
		}
		?>
	</ul>
</div>
<!-- dot nav bar end -->
</body>
</html>