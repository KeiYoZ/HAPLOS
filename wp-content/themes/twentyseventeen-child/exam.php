<?php
/*
Template Name: Exam Template
*/

if(is_page(160)){
	get_header();
} else if(is_page(128)){
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
							<?php if(is_page(160)){?>
							<p class="exam-radio-btn exam-question">
								<input type="radio" name="choice" value="t">Tama<br>
								<input type="radio" name="choice" value="f">Mali
							</p>
							<?php }else if(is_page(128)){ ?>
							<p class="exam-radio-btn exam-question">
								<input type="radio" name="choice" value="t">True<br>
								<input type="radio" name="choice" value="f">False
							</p>
							<?php } ?>
						</div>
					</div>
					<div class="container" style="margin-top:3%;">
						<?php if(is_page(160)){?>
						<div class="row">
							<a href="#<?php echo $id - 1; ?>"><input type="button" class="start-exam" value="Bumalik"></a>
							<a href="#<?php echo $id + 1; ?>"><input type="button" class="start-exam" value="Susunod" style="float:right;"></a>
						</div>
						<?php }else if(is_page(128)){ ?>
						<div class="row">
							<a href="#<?php echo $id - 1; ?>"><input type="button" class="start-exam" value="Back"></a>
							<a href="#<?php echo $id + 1; ?>"><input type="button" class="start-exam" value="Next" style="float:right;"></a>
						</div>
						<?php } ?>
					</div>
				</form>
			</div>
			<?php
		endwhile;
	else :
	endif;
	?>

	<?php 
	if( have_rows('p2_questions') ): 
		$rowCount = count( get_field('p2_questions') );
		$previousCount = $rowCount - $id;
		$rowCount = $rowCount + $previousCount;
	?>
	
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
							<input type="radio" name="choice" value="<?php the_sub_field('choices'); ?>"><?php the_sub_field('choices'); ?>
						</p>
						<?php endwhile; ?>
					<?php endif;?>
				</div>
			</div>
			<div class="container" style="margin-top:3%;">
				<?php if(is_page(128)){ ?>
					<?php if ($rowCount > $id){ ?>
					<div class="row">
						<a href="#<?php echo $id - 1; ?>"><input type="button" class="start-exam" value="Back"></a>
						<a href="#<?php echo $id + 1; ?>"><input type="button" class="start-exam" value="Next" style="float:right;"></a>
					</div>
					<?php } else {?>
					<div class="row">
						<a href="#<?php echo $id - 1; ?>"><input type="button" class="start-exam" value="Back"></a>
						<a href="#<?php echo $id + 1; ?>"><input type="button" class="start-exam" onclick="return getExamScore()" value="Finish" style="float: right;"></a>
					</div>
					<?php } ?>
				<?php } else if(is_page(160)){ ?>
					<?php if ($rowCount > $id){ ?>
					<div class="row">
						<a href="#<?php echo $id - 1; ?>"><input type="button" class="start-exam" value="Bumalik"></a>
						<a href="#<?php echo $id + 1; ?>"><input type="button" class="start-exam" value="Susunod" style="float:right;"></a>
					</div>
					<?php } else {?>
					<div class="row">
						<a href="#<?php echo $id - 1; ?>"><input type="button" class="start-exam" value="Bumalik"></a>
						<a href="#<?php echo $id + 1; ?>"><input type="button" class="start-exam" onclick="return getExamScore()" value="Tapusin" style="float: right;"></a>
					</div>
					<?php } ?>

				<?php } ?>
			</div>
		</form>
	</div>
	<?php endwhile;?>
	<?php endif;?>
<!-- examination end -->
	<div class="section" style="background-color: #609a82; padding-bottom: 150px; padding-top:4%;" id="16">
		<div class="row">
			<div class="col-lg-6 col-centered text-center">
				<p class="exam-header"><?php the_field('exam_header'); ?></p>
				<p class="exam-subheader"><?php the_field('exam_subheader'); ?></p>
			</div>
			<div class="row">
				<p class="user-score" id="user-score"></p>
			</div>
			<div class="row answer-keys">
				<div class="col-md-4">
					<ul style="list-style: none; color: white;">
						<li id="answer-no-1"></li>
						<li id="answer-no-2"></li>
						<li id="answer-no-3"></li>
						<li id="answer-no-4"></li>
						<li id="answer-no-5"></li>
					</ul>
				</div>
				<div class="col-md-4">
					<ul style="list-style: none; color: white;">
						<li id="answer-no-6"></li>
						<li id="answer-no-7"></li>
						<li id="answer-no-8"></li>
						<li id="answer-no-9"></li>
						<li id="answer-no-10"></li>
					</ul>
				</div>
				<div class="col-md-4">
					<ul style="list-style: none; color: white;">
						<li id="answer-no-11"></li>
						<li id="answer-no-12"></li>
						<li id="answer-no-13"></li>
						<li id="answer-no-14"></li>
						<li id="answer-no-15"></li>
					</ul>
				</div>
			</div>
			<hr>
			<div class="row">
				<?php if (is_page(128)) {?>
				<a href="/exam-en" class="re-exam-btn"><input type="button" class="start-exam" value="Answer the Practice Test again"></a>
				<?php }else if(is_page(160)){ ?>
				<a href="/exam" class="re-exam-btn"><input type="button" class="start-exam" value="Sagutan Muli ang Pagsasanay"></a>
				<?php } ?>
			</div>
		</div>
	</div>
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
<?php get_footer(); ?>