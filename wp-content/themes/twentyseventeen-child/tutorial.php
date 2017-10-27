<?php  
/**
*
* Template Name: Tutorial
*
**/
if(is_page(62)) {
	get_header();
} elseif(is_page(122)) {
	get_header('en');
}
?>

<?php show_admin_bar( false ); ?>

<div class="container-fluid">
	<div class="section tut-banner" id="tut-banner">
		<div class="row">
			<div class="col-md-12">
				<p class="tut-banner-title">Home</p>
			</div>
			<div class="col-md-12">
				<p class="tut-banner-title">Infusion</p>
			</div>
			<div class="col-md-12">
				<p class="tut-banner-title">Process</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 tut-banner-icon-box">
				<img class="tut-banner-icons img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/images/icons/1.png">
				<img class="tut-banner-icons img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/images/icons/2.png">
				<img class="tut-banner-icons img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/images/icons/3.png">
				<img class="tut-banner-icons img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/images/icons/4.png">
				<img class="tut-banner-icons img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/images/icons/5.png">
				<img class="tut-banner-icons img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/images/icons/6.png">
				<img class="tut-banner-icons img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/images/icons/7.png">
				<img class="tut-banner-icons img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/images/icons/8.png">
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<?php the_field('banner_description'); ?>
			</div>
		</div>
		<div class="row">
			<div class="tut-banner-disclaimer">
				<p>These processes are also based from various guides or manuals about hemophilia: </p>
				<p>&nbsp;&nbsp;&nbsp;  - Canadian Association of Nurses in Hemophilia Care (Western Division), (2009). Home treatment guide for people with bleeding disorders. (2nd ed.) </p>
				<p>&nbsp;&nbsp;&nbsp;  - Nursing Group of Hemophilia Region VI, (2010). Emergency care for patients with hemophilia: an instructional manual for medical professionals. </p>	
			</div>
		</div>
	</div>

	<div class="section tut-bene-warn" id="tut-bene-warn">
		<div class="row">
			<div class="col-md-6">
				<?php the_field('benefit_titles'); ?>
				<div class="col-md-12 tut-bene">
					<?php the_field('benefit_panel'); ?>
				</div>
			</div>
			<div class="col-md-6">
				<!-- <p class="tut-bene-warn-title" style="color: #6D9075">PANGANIB</p> -->
				<?php the_field('warning_title'); ?>
				<div class="col-md-12 tut-warn">
					<?php the_field('warning_panel'); ?>
				</div>
			</div>
		</div>
	</div>

	<div class="section tut-dosage-desc" id="tut-dosage-desc">
		<div class="row">
			<div class="col-md-12 tut-dosage-desc-container">
				<?php the_field('dosage_description_title'); ?>
			</div>
		</div>
		<div class="row">
			<div class="tut-dosage-desc-inst">
				<?php the_field('dosage_description_instructions'); ?>
				<div>
					<?php if (is_page(62)){ ?>
					<a href="#tut-dosage-calc" class="btn btn-default tut-dosage-calc-btn" role="button">Gamitin ang Calculator</a>
					<?php } else if (is_page(122)) {?>
					<a href="#tut-dosage-calc" class="btn btn-default tut-dosage-calc-btn" role="button">Use the Calculator</a>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>

	<div class="section tut-dosage-calc" id="tut-dosage-calc">
		<div class="row">
			<div class="col-md-12" >
				<p class="tut-dosage-calc-title" style="color:#619880;">Dosage <span style="color:rgb(166,189,179);">calculator</span></p>
			</div>
		</div>
		<div class="row">
			<div class="styleSelect" style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/images/drop-down-arrow.png') no-repeat right">
				<select class="hemo-types" id="hemo-types">
					<?php if (is_page(62)){ ?>
					<option value="0">Uri ng Hemophilia</option>
					<?php } else if (is_page(122)) {?>
					<option value="0">Type of Hemophilia</option>
					<?php } ?>
					<option value="1">Hemophilia A (Factor VIII)</option>
					<option value="2">Hemophilia B (Factor IX)</option>
				</select>
			</div>
			<div class="col-md-12">
				<div class="tut-dosage-calc-box">
					<div class="col-md-12 tut-dosage-calc-inner">
						<div class="col-md-6 col-xs-6 col-sm-6 calc-input-labels">
							<?php if (is_page(62)){ ?>
							<p>Timbang (kg)</p>
							<?php } else if (is_page(122)) {?>
							<p>Weight (kg)</p>
							<?php } ?>
						</div>
						<div class="col-md-6 col-xs-6 col-sm-6">
							<input type="number" class="calc-input" name="weight-text" id="weight-text">
						</div>	
					</div>
					<div class="col-md-12 tut-dosage-calc-inner">
						<div class="col-md-6 col-xs-6 col-sm-6 calc-input-labels">
							<p>Percent Activity</p>
						</div>
						<div class="col-md-6 col-xs-6 col-sm-6">
							<input type="number" class="calc-input" name="pec-act-text" id="pec-act-text">
						</div>	
					</div>
					<div class="calc-submit">
						<button type="button" class="btn btn-default calc-submit-button" onclick="computeDosage()">CALCULATE</button>
					</div>
					<div class="col-md-12 tut-dosage-calc-inner">
						<div class="col-md-6 col-xs-6 col-sm-6 calc-input-labels">
							<p>Dosage</p>
						</div>
						<div class="col-md-6 col-xs-6 col-sm-6">
							<input type="number" class="calc-input" readonly name="dosage-text" id="dosage-text">
						</div>	
					</div>
					<div class="clearfix"></div>
				</div>
				<div>
					<?php if (is_page(62)){ ?>
					<a href="#tut-first-step"><button class="btn btn-default tut-dosage-calc-btn calc-start-proc-btn">Simulan ang Proseso</button></a>
					<?php } else if (is_page(122)) {?>
					<a href="#tut-first-step"><button class="btn btn-default tut-dosage-calc-btn calc-start-proc-btn">Start the Process</button></a>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>

	<div class="section tut-reminder" id="tut-reminder">
		<div class="row">
			<div class="col-md-12">
				<?php the_field('reminder_title'); ?>
			</div>
		</div>
		<div class="row">
			<div class="tut-reminder-inst">
				<?php the_field('reminder_instructions'); ?>
			</div>
		</div>
	</div>

	<div class="section tut-first-step" id="tut-first-step">
		<div class="row">
			<div class="col-md-12">
				<?php the_field('first_step_title'); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-xs-12 step-tab-holder">
				<div class="step-tab">
					<button class="first-step-tablinks active" onclick="openStep(event,'first-step-tabcontent', 'first-step-tablinks', 'first-step-1')">1</button>
					<button class="first-step-tablinks" onclick="openStep(event, 'first-step-tabcontent', 'first-step-tablinks', 'first-step-2')">2</button>
					<button class="first-step-tablinks" onclick="openStep(event, 'first-step-tabcontent', 'first-step-tablinks', 'first-step-3')">3</button>
					<button class="first-step-tablinks" onclick="openStep(event, 'first-step-tabcontent', 'first-step-tablinks', 'first-step-4')">4</button>
				</div>

				<div id="first-step-1" class="first-step-tabcontent">
					<?php if (is_page(62)){ ?>
					<p style="font-size: 20px;">Ihanda ang mga kakailanganing kagamitan para sa pag-infuse at siguraduhing kumpleto at malinis ang mga ito.</p>
					<?php } else if (is_page(122)) {?>
					<p style="font-size: 20px; margin-bottom: 20px;">Prepare the following needed materials for infusion and make sure that it’s complete and sanitized. </p>
					<?php } ?>
					<div>
						<?php the_field('first_step_part_1'); ?>
						<div class="col-md-6" style="margin-top: 20px;">
							<img class="img-responsive first-image" src="data:image/png;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="<?php echo get_stylesheet_directory_uri();?>/images/Part_1_Step_1.png" />
						</div>	
					</div>
					<div class="col-md-12 col-xs-12 step-btn-holder">
						<?php if (is_page(62)){ ?>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-prev" onclick="openStep(event, 'fourth-step-tabcontent', 'fourth-step-tablinks', 'fourth-step-2', 'btn')" style="visibility: hidden">Bumalik</button>
						</div>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-next" onclick="openStep(event, 'first-step-tabcontent', 'first-step-tablinks', 'first-step-2', 'btn')" >Susunod</button>
						</div>
						<?php } else if (is_page(122)) {?>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-prev" onclick="openStep(event, 'fourth-step-tabcontent', 'fourth-step-tablinks', 'fourth-step-2', 'btn')" style="visibility: hidden">Back</button>
						</div>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-next" onclick="openStep(event, 'first-step-tabcontent', 'first-step-tablinks', 'first-step-2', 'btn')" >Next</button>
						</div>
						<?php } ?>
					</div>
				</div>

				<div id="first-step-2" class="first-step-tabcontent">
					<?php the_field('first_step_part_2'); ?>
					<div class="col-md-12 col-xs-12 step-btn-holder">
						<?php if (is_page(62)){ ?>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-prev" onclick="openStep(event, 'first-step-tabcontent', 'first-step-tablinks', 'first-step-1', 'btn')">Bumalik</button>
						</div>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-next" onclick="openStep(event, 'first-step-tabcontent', 'first-step-tablinks', 'first-step-3', 'btn')">Susunod</button>	
						</div>
						<?php } else if (is_page(122)) {?>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-prev" onclick="openStep(event, 'first-step-tabcontent', 'first-step-tablinks', 'first-step-1', 'btn')">Back</button>
						</div>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-next" onclick="openStep(event, 'first-step-tabcontent', 'first-step-tablinks', 'first-step-3', 'btn')">Next</button>	
						</div>
						<?php } ?>
					</div>
				</div>

				<div id="first-step-3" class="first-step-tabcontent">
					<?php the_field('first_step_part_3'); ?>
					<div class="col-md-12 col-xs-12 step-btn-holder">
						
						<?php if (is_page(62)){ ?>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-prev" onclick="openStep(event, 'first-step-tabcontent', 'first-step-tablinks', 'first-step-2', 'btn')">Bumalik</button>
						</div>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-next" onclick="openStep(event, 'first-step-tabcontent', 'first-step-tablinks', 'first-step-4', 'btn')">Susunod</button>
						</div>
						<?php } else if (is_page(122)) {?>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-prev" onclick="openStep(event, 'first-step-tabcontent', 'first-step-tablinks', 'first-step-2', 'btn')">Back</button>
						</div>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-next" onclick="openStep(event, 'first-step-tabcontent', 'first-step-tablinks', 'first-step-4', 'btn')">Next</button>	
						</div>
						<?php } ?>
					</div>
				</div>

				<div id="first-step-4" class="first-step-tabcontent">
					<?php the_field('first_step_part_4'); ?>
					<div class="col-md-12">
						<img class="img-responsive step-gif" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="<?php echo get_stylesheet_directory_uri();?>/images/gifs/Part_1_Step_4.gif"/>
					</div>
					<div class="col-md-12 col-xs-12 step-btn-holder">
						<?php if (is_page(62)){ ?>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-prev" onclick="openStep(event, 'first-step-tabcontent', 'first-step-tablinks', 'first-step-3', 'btn')">Bumalik</button>
						</div>
						<div class="col-md-6 col-xs-6">
							<a href="#tut-second-step"><button class="btn btn-default step-btn-next">Susunod</button></a>
						</div>
						<?php } else if (is_page(122)) {?>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-prev" onclick="openStep(event, 'first-step-tabcontent', 'first-step-tablinks', 'first-step-2', 'btn')">Back</button>
						</div>
						<div class="col-md-6 col-xs-6">
							<a href="#tut-second-step"><button class="btn btn-default step-btn-next">Next</button></a>
						</div>
						<?php } ?>
					</div>
				</div>	
			</div>
		</div>
	</div>

	<div class="section tut-second-step" id="tut-second-step">
		<div class="row">
			<div class="col-md-12">
				<?php the_field('second_step_title'); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 step-tab-holder">
				<div class="step-tab">
					<button class="second-step-tablinks active" onclick="openStep(event,'second-step-tabcontent', 'second-step-tablinks', 'second-step-1')">1</button>
					<button class="second-step-tablinks" onclick="openStep(event, 'second-step-tabcontent', 'second-step-tablinks', 'second-step-2' )">2</button>
					<button class="second-step-tablinks" onclick="openStep(event, 'second-step-tabcontent', 'second-step-tablinks', 'second-step-3')">3</button>
				</div>

				<div id="second-step-1" class="second-step-tabcontent">
					<?php the_field('second_step_part_1'); ?>
					<div class="col-md-12">
						<img class="img-responsive step-gif" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="<?php echo get_stylesheet_directory_uri();?>/images/gifs/Part_2_Step_1.gif"/>
					</div>
					<div class="col-md-12 col-xs-12 step-btn-holder">
						<?php if (is_page(62)){ ?>
						<div class="col-md-6 col-xs-6">
							<a href="#tut-first-step"><button class="btn btn-default step-btn-prev">Bumalik</button></a>
						</div>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-next" onclick="openStep(event, 'second-step-tabcontent', 'second-step-tablinks', 'second-step-2', 'btn')" >Susunod</button>
						</div>
						<?php } else if (is_page(122)) {?>
						<div class="col-md-6 col-xs-6">
							<a href="#tut-first-step"><button class="btn btn-default step-btn-prev">Back</button></a>
						</div>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-next" onclick="openStep(event, 'second-step-tabcontent', 'second-step-tablinks', 'second-step-2', 'btn')" >Next</button>
						</div>
						<?php } ?>
					</div>
				</div>

				<div id="second-step-2" class="second-step-tabcontent">
					<?php the_field('second_step_part_2'); ?>
					<div class="col-md-12">
						<img class="img-responsive step-gif" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="<?php echo get_stylesheet_directory_uri();?>/images/gifs/Part_2_Step_2.gif"/>
					</div>
					<div class="col-md-12 col-xs-12 step-btn-holder">
						<?php if (is_page(62)){ ?>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-prev" onclick="openStep(event, 'second-step-tabcontent', 'second-step-tablinks', 'second-step-1', 'btn')">Bumalik</button>
						</div>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-next" onclick="openStep(event, 'second-step-tabcontent', 'second-step-tablinks', 'second-step-3', 'btn')">Susunod</button>
						</div>
						<?php } else if (is_page(122)) {?>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-prev" onclick="openStep(event, 'second-step-tabcontent', 'second-step-tablinks', 'second-step-1', 'btn')">Back</button>
						</div>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-next" onclick="openStep(event, 'second-step-tabcontent', 'second-step-tablinks', 'second-step-3', 'btn')">Next</button>
						</div>
						<?php } ?>
					</div>
				</div>

				<div id="second-step-3" class="second-step-tabcontent">
					<?php the_field('second_step_part_3'); ?>
					<div class="col-md-12 col-xs-12 step-btn-holder">
						<?php if (is_page(62)){ ?>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-prev" onclick="openStep(event, 'second-step-tabcontent', 'second-step-tablinks', 'second-step-2', 'btn')">Bumalik</button>
						</div>
						<div class="col-md-6 col-xs-6">
							<a href="#tut-third-step"><button class="btn btn-default step-btn-next">Susunod</button></a>
						</div>
						<?php } else if (is_page(122)) {?>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-prev" onclick="openStep(event, 'second-step-tabcontent', 'second-step-tablinks', 'second-step-2', 'btn')">Back</button>
						</div>
						<div class="col-md-6 col-xs-6">
							<a href="#tut-third-step"><button class="btn btn-default step-btn-next">Next</button></a>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section tut-third-step" id="tut-third-step">
		<div class="row">
			<div class="col-md-12">
				<?php the_field('third_step_title'); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 step-tab-holder">
				<div class="step-tab">
					<button class="third-step-tablinks active" onclick="openStep(event,'third-step-tabcontent', 'third-step-tablinks', 'third-step-1')">1</button>
					<button class="third-step-tablinks" onclick="openStep(event, 'third-step-tabcontent', 'third-step-tablinks', 'third-step-2' )">2</button>
					<button class="third-step-tablinks" onclick="openStep(event, 'third-step-tabcontent', 'third-step-tablinks', 'third-step-3')">3</button>
					<button class="third-step-tablinks" onclick="openStep(event, 'third-step-tabcontent', 'third-step-tablinks', 'third-step-4')">4</button>
					<button class="third-step-tablinks" onclick="openStep(event, 'third-step-tabcontent', 'third-step-tablinks', 'third-step-5')">5</button>
					<button class="third-step-tablinks" onclick="openStep(event, 'third-step-tabcontent', 'third-step-tablinks', 'third-step-6')">6</button>
					<button class="third-step-tablinks" onclick="openStep(event, 'third-step-tabcontent', 'third-step-tablinks', 'third-step-7')">7</button>
				</div>

				<div id="third-step-1" class="third-step-tabcontent">
					<?php the_field('third_step_part_1'); ?>
					<div class="col-md-12">
						<img class="img-responsive step-gif" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="<?php echo get_stylesheet_directory_uri();?>/images/gifs/Part_3_Step_1.gif"/>
					</div>
					<div class="col-md-12 col-xs-12 step-btn-holder">
						<?php if (is_page(62)){ ?>
						<div class="col-md-6 col-xs-6">
							<a href="#tut-second-step"><button class="btn btn-default step-btn-prev">Bumalik</button></a>
						</div>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-next" onclick="openStep(event, 'third-step-tabcontent', 'third-step-tablinks', 'third-step-2', 'btn')" >Susunod</button>
						</div>
						<?php } else if (is_page(122)) {?>
						<div class="col-md-6 col-xs-6">
							<a href="#tut-second-step"><button class="btn btn-default step-btn-prev">Back</button></a>
						</div>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-next" onclick="openStep(event, 'third-step-tabcontent', 'third-step-tablinks', 'third-step-2', 'btn')" >Next</button>
						</div>
						<?php } ?>
					</div>
				</div>

				<div id="third-step-2" class="third-step-tabcontent">
					<?php the_field('third_step_part_2'); ?>
					<div class="col-md-12">
						<img class="img-responsive step-gif" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="<?php echo get_stylesheet_directory_uri();?>/images/gifs/Part_3_Step_2.gif"/>
					</div>
					<div class="col-md-12 col-xs-12 step-btn-holder">
						<?php if (is_page(62)){ ?>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-prev" onclick="openStep(event, 'third-step-tabcontent', 'third-step-tablinks', 'third-step-1', 'btn')">Bumalik</button>
						</div>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-next" onclick="openStep(event, 'third-step-tabcontent', 'third-step-tablinks', 'third-step-3', 'btn')">Susunod</button>
						</div>
						<?php } else if (is_page(122)) {?>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-prev" onclick="openStep(event, 'third-step-tabcontent', 'third-step-tablinks', 'third-step-1', 'btn')">Back</button>
						</div>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-next" onclick="openStep(event, 'third-step-tabcontent', 'third-step-tablinks', 'third-step-3', 'btn')">Next</button>
						</div>
						<?php } ?>
					</div>
				</div>

				<div id="third-step-3" class="third-step-tabcontent">
					<?php the_field('third_step_part_3'); ?>
					<div class="col-md-12">
						<img class="img-responsive step-gif" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="<?php echo get_stylesheet_directory_uri();?>/images/gifs/Part_3_Step_3.gif"/>
					</div>
					<div class="col-md-12 col-xs-12 step-btn-holder">
						<?php if (is_page(62)){ ?>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-prev" onclick="openStep(event, 'third-step-tabcontent', 'third-step-tablinks', 'third-step-2', 'btn')">Bumalik</button>
						</div>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-next" onclick="openStep(event, 'third-step-tabcontent', 'third-step-tablinks', 'third-step-4', 'btn')">Susunod</button>
						</div>
						<?php } else if (is_page(122)) {?>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-prev" onclick="openStep(event, 'third-step-tabcontent', 'third-step-tablinks', 'third-step-2', 'btn')">Back</button>
						</div>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-next" onclick="openStep(event, 'third-step-tabcontent', 'third-step-tablinks', 'third-step-4', 'btn')">Next</button>
						</div>
						<?php } ?>
					</div>
				</div>

				<div id="third-step-4" class="third-step-tabcontent">
					<?php the_field('third_step_part_4'); ?>
					<div class="col-md-12">
						<img class="img-responsive step-gif" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="<?php echo get_stylesheet_directory_uri();?>/images/gifs/Part_3_Step_4.gif"/>
					</div>
					<div class="col-md-12 col-xs-12 step-btn-holder">
						<?php if (is_page(62)){ ?>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-prev" onclick="openStep(event, 'third-step-tabcontent', 'third-step-tablinks', 'third-step-3', 'btn')">Bumalik</button>
						</div>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-next" onclick="openStep(event, 'third-step-tabcontent', 'third-step-tablinks', 'third-step-5', 'btn')">Susunod</button>
						</div>
						<?php } else if (is_page(122)) {?>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-prev" onclick="openStep(event, 'third-step-tabcontent', 'third-step-tablinks', 'third-step-3', 'btn')">Back</button>
						</div>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-next" onclick="openStep(event, 'third-step-tabcontent', 'third-step-tablinks', 'third-step-5', 'btn')">Next</button>
						</div>
						<?php } ?>
					</div>
				</div>

				<div id="third-step-5" class="third-step-tabcontent">
					<?php the_field('third_step_part_5'); ?>
					<div class="col-md-12">
						<img class="img-responsive step-gif" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="<?php echo get_stylesheet_directory_uri();?>/images/gifs/Part_3_Step_5.gif"/>
					</div>
					<div class="col-md-12 col-xs-12 step-btn-holder">
						<?php if (is_page(62)){ ?>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-prev" onclick="openStep(event, 'third-step-tabcontent', 'third-step-tablinks', 'third-step-4', 'btn')">Bumalik</button>
						</div>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-next" onclick="openStep(event, 'third-step-tabcontent', 'third-step-tablinks', 'third-step-6', 'btn')">Susunod</button>
						</div>
						<?php } else if (is_page(122)) {?>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-prev" onclick="openStep(event, 'third-step-tabcontent', 'third-step-tablinks', 'third-step-4', 'btn')">Back</button>
						</div>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-next" onclick="openStep(event, 'third-step-tabcontent', 'third-step-tablinks', 'third-step-6', 'btn')">Next</button>
						</div>
						<?php } ?>
					</div>
				</div>

				<div id="third-step-6" class="third-step-tabcontent">
					<?php the_field('third_step_part_6'); ?>
					<div class="col-md-12">
						<img class="img-responsive step-gif" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="<?php echo get_stylesheet_directory_uri();?>/images/gifs/Part_3_Step_6.gif"/>
					</div>
					<div class="col-md-12 col-xs-12 step-btn-holder">
						<?php if (is_page(62)){ ?>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-prev" onclick="openStep(event, 'third-step-tabcontent', 'third-step-tablinks', 'third-step-5', 'btn')">Bumalik</button>
						</div>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-next" onclick="openStep(event, 'third-step-tabcontent', 'third-step-tablinks', 'third-step-7', 'btn')">Susunod</button>
						</div>
						<?php } else if (is_page(122)) {?>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-prev" onclick="openStep(event, 'third-step-tabcontent', 'third-step-tablinks', 'third-step-5', 'btn')">Back</button>
						</div>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-next" onclick="openStep(event, 'third-step-tabcontent', 'third-step-tablinks', 'third-step-7', 'btn')">Next</button>
						</div>
						<?php } ?>
					</div>
				</div>

				<div id="third-step-7" class="third-step-tabcontent">
					<?php the_field('third_step_part_7'); ?>
					<div class="col-md-12">
						<img class="img-responsive step-gif" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="<?php echo get_stylesheet_directory_uri();?>/images/gifs/Part_3_Step_7.gif"/>
					</div>
					<div class="col-md-12 col-xs-12 step-btn-holder">
						<?php if (is_page(62)){ ?>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-prev" onclick="openStep(event, 'third-step-tabcontent', 'third-step-tablinks', 'third-step-6', 'btn')">Bumalik</button>
						</div>
						<div class="col-md-6 col-xs-6">
							<a href="#tut-third-step-pt2"><button class="btn btn-default step-btn-next">Susunod</button></a>
						</div>
						<?php } else if (is_page(122)) {?>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-prev" onclick="openStep(event, 'third-step-tabcontent', 'third-step-tablinks', 'third-step-6', 'btn')">Back</button>
						</div>
						<div class="col-md-6 col-xs-6">
							<a href="#tut-third-step-pt2"><button class="btn btn-default step-btn-next">Susunod</button></a>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section tut-third-step" id="tut-third-step-pt2">
		<div class="row">
			<?php the_field('third_step_title'); ?>
		</div>
		<div class="row">
			<div class="col-md-12 step-tab-holder">
				<div class="step-tab">
					<button class="third-step-pt2-tablinks active" onclick="openStep(event,'third-step-pt2-tabcontent', 'third-step-pt2-tablinks', 'third-step-8')"><span style="visibility: hidden">0</span>8</button>
					<button class="third-step-pt2-tablinks" onclick="openStep(event, 'third-step-pt2-tabcontent', 'third-step-pt2-tablinks', 'third-step-9')"><span style="visibility: hidden">0</span>9</button>
					<button class="third-step-pt2-tablinks" onclick="openStep(event, 'third-step-pt2-tabcontent', 'third-step-pt2-tablinks', 'third-step-10')">10</button>
					<button class="third-step-pt2-tablinks" onclick="openStep(event, 'third-step-pt2-tabcontent', 'third-step-pt2-tablinks', 'third-step-11')">11</button>
					<button class="third-step-pt2-tablinks" onclick="openStep(event, 'third-step-pt2-tabcontent', 'third-step-pt2-tablinks', 'third-step-12')">12</button>
					<button class="third-step-pt2-tablinks" onclick="openStep(event, 'third-step-pt2-tabcontent', 'third-step-pt2-tablinks', 'third-step-13')">13</button>
				</div>

				<div id="third-step-8" class="third-step-pt2-tabcontent">
					<?php the_field('third_step_part_8'); ?>
					<div class="col-md-12">
						<img class="img-responsive step-gif" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="<?php echo get_stylesheet_directory_uri();?>/images/gifs/Part_3_Step_8.gif"/>
					</div>
					<div class="col-md-12 col-xs-12 step-btn-holder">
						<?php if (is_page(62)){ ?>
						<div class="col-md-6 col-xs-6">
							<a href="#tut-third-step"><button class="btn btn-default step-btn-prev">Bumalik</button></a>
						</div>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-next" onclick="openStep(event, 'third-step-pt2-tabcontent', 'third-step-pt2-tablinks', 'third-step-9', 'btn')" >Susunod</button>
						</div>
						<?php } else if (is_page(122)) {?>
						<div class="col-md-6 col-xs-6">
							<a href="#tut-third-step"><button class="btn btn-default step-btn-prev">Back</button></a>
						</div>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-next" onclick="openStep(event, 'third-step-pt2-tabcontent', 'third-step-pt2-tablinks', 'third-step-9', 'btn')" >Next</button>
						</div>
						<?php } ?>
					</div>
				</div>

				<div id="third-step-9" class="third-step-pt2-tabcontent">
					<?php the_field('third_step_part_9'); ?>
					<div class="col-md-12">
						<img class="img-responsive step-gif" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="<?php echo get_stylesheet_directory_uri();?>/images/gifs/Part_3_Step_9.gif"/>
					</div>
					<div class="col-md-12 col-xs-12 step-btn-holder">
						<?php if (is_page(62)){ ?>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-prev" onclick="openStep(event, 'third-step-pt2-tabcontent', 'third-step-pt2-tablinks', 'third-step-8', 'btn')">Bumalik</button>
						</div>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-next" onclick="openStep(event, 'third-step-pt2-tabcontent', 'third-step-pt2-tablinks', 'third-step-10', 'btn')">Susunod</button>
						</div>
						<?php } else if (is_page(122)) {?>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-prev" onclick="openStep(event, 'third-step-pt2-tabcontent', 'third-step-pt2-tablinks', 'third-step-8', 'btn')">Back</button>
						</div>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-next" onclick="openStep(event, 'third-step-pt2-tabcontent', 'third-step-pt2-tablinks', 'third-step-10', 'btn')">Next</button>
						</div>
						<?php } ?>
					</div>
				</div>

				<div id="third-step-10" class="third-step-pt2-tabcontent">
					<?php the_field('third_step_part_10'); ?>
					<div class="col-md-12">
						<img class="img-responsive step-gif" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="<?php echo get_stylesheet_directory_uri();?>/images/gifs/Part_3_Step_10.gif"/>
					</div>
					<div class="col-md-12 col-xs-12 step-btn-holder">
						<?php if (is_page(62)){ ?>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-prev" onclick="openStep(event, 'third-step-pt2-tabcontent', 'third-step-pt2-tablinks', 'third-step-9', 'btn')">Bumalik</button>
						</div>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-next" onclick="openStep(event, 'third-step-pt2-tabcontent', 'third-step-pt2-tablinks', 'third-step-11', 'btn')">Susunod</button>
						</div>
						<?php } else if (is_page(122)) {?>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-prev" onclick="openStep(event, 'third-step-pt2-tabcontent', 'third-step-pt2-tablinks', 'third-step-9', 'btn')">Back</button>
						</div>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-next" onclick="openStep(event, 'third-step-pt2-tabcontent', 'third-step-pt2-tablinks', 'third-step-11', 'btn')">Next</button>
						</div>
						<?php } ?>
					</div>
				</div>

				<div id="third-step-11" class="third-step-pt2-tabcontent">
					<?php the_field('third_step_part_11'); ?>
					<div class="col-md-12">
						<img class="img-responsive step-gif" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="<?php echo get_stylesheet_directory_uri();?>/images/gifs/Part_3_Step_11.gif"/>
					</div>
					<div class="col-md-12 col-xs-12 step-btn-holder">
						<?php if (is_page(62)){ ?>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-prev" onclick="openStep(event, 'third-step-pt2-tabcontent', 'third-step-pt2-tablinks', 'third-step-10', 'btn')">Bumalik</button>
						</div>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-next" onclick="openStep(event, 'third-step-pt2-tabcontent', 'third-step-pt2-tablinks', 'third-step-12', 'btn')">Susunod</button>
						</div>
						<?php } else if (is_page(122)) {?>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-prev" onclick="openStep(event, 'third-step-pt2-tabcontent', 'third-step-pt2-tablinks', 'third-step-10', 'btn')">Back</button>
						</div>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-next" onclick="openStep(event, 'third-step-pt2-tabcontent', 'third-step-pt2-tablinks', 'third-step-12', 'btn')">Next</button>
						</div>
						<?php } ?>
					</div>
				</div>

				<div id="third-step-12" class="third-step-pt2-tabcontent">
					<?php the_field('third_step_part_12'); ?>
					<div class="col-md-12">
						<img class="img-responsive step-gif" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="<?php echo get_stylesheet_directory_uri();?>/images/gifs/Part_3_Step_12.gif"/>
					</div>
					<div class="col-md-12 col-xs-12 step-btn-holder">
						<?php if (is_page(62)){ ?>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-prev" onclick="openStep(event, 'third-step-pt2-tabcontent', 'third-step-pt2-tablinks', 'third-step-11', 'btn')">Bumalik</button>
						</div>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-next" onclick="openStep(event, 'third-step-pt2-tabcontent', 'third-step-pt2-tablinks', 'third-step-13', 'btn')">Susunod</button>
						</div>
						<?php } else if (is_page(122)) {?>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-prev" onclick="openStep(event, 'third-step-pt2-tabcontent', 'third-step-pt2-tablinks', 'third-step-11', 'btn')">Back</button>
						</div>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-next" onclick="openStep(event, 'third-step-pt2-tabcontent', 'third-step-pt2-tablinks', 'third-step-13', 'btn')">Next</button>
						</div>
						<?php } ?>
					</div>
				</div>

				<div id="third-step-13" class="third-step-pt2-tabcontent">
					<?php the_field('third_step_part_13'); ?>
					<div class="col-md-12">
						<img class="img-responsive step-gif" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="<?php echo get_stylesheet_directory_uri();?>/images/gifs/Part_3_Step_13.gif"/>
					</div>
					<div class="col-md-12 col-xs-12 step-btn-holder">
						<?php if (is_page(62)){ ?>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-prev" onclick="openStep(event, 'third-step-pt2-tabcontent', 'third-step-pt2-tablinks', 'third-step-12', 'btn')">Bumalik</button>
						</div>
						<div class="col-md-6 col-xs-6">
							<a href="#tut-fourth-step"><button class="btn btn-default step-btn-next">Susunod</button></a>
						</div>
						<?php } else if (is_page(122)) {?>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-prev" onclick="openStep(event, 'third-step-pt2-tabcontent', 'third-step-pt2-tablinks', 'third-step-12', 'btn')">Back</button>
						</div>
						<div class="col-md-6 col-xs-6">
							<a href="#tut-fourth-step"><button class="btn btn-default step-btn-next">Susunod</button></a>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section tut-fourth-step" id="tut-fourth-step">
		<div class="row">
			<div class="col-md-12">
				<?php the_field('fourth_step_title'); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 step-tab-holder">
				<div class="step-tab">
					<button class="fourth-step-tablinks active" onclick="openStep(event,'fourth-step-tabcontent', 'fourth-step-tablinks', 'fourth-step-1')">1</button>
					<button class="fourth-step-tablinks" onclick="openStep(event, 'fourth-step-tabcontent', 'fourth-step-tablinks', 'fourth-step-2' )">2</button>
					<button class="fourth-step-tablinks" onclick="openStep(event, 'fourth-step-tabcontent', 'fourth-step-tablinks', 'fourth-step-3')">3</button>
				</div>

				<div id="fourth-step-1" class="fourth-step-tabcontent">
					<?php the_field('fourth_step_part_1'); ?>
					<div class="col-md-12">
						<img class="img-responsive step-gif" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="<?php echo get_stylesheet_directory_uri();?>/images/gifs/Part_4_Step_1.gif"/>
					</div>
					<div class="col-md-12 col-xs-12 step-btn-holder">
						<?php if (is_page(62)){ ?>
						<div class="col-md-6 col-xs-6">
							<a href="#tut-third-step-pt2"><button class="btn btn-default step-btn-prev">Bumalik</button></a>
						</div>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-next" onclick="openStep(event, 'fourth-step-tabcontent', 'fourth-step-tablinks', 'fourth-step-2', 'btn')" >Susunod</button>
						</div>
						<?php } else if (is_page(122)) {?>
						<div class="col-md-6 col-xs-6">
							<a href="#tut-third-step-pt2"><button class="btn btn-default step-btn-prev">Back</button></a>
						</div>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-next" onclick="openStep(event, 'fourth-step-tabcontent', 'fourth-step-tablinks', 'fourth-step-2', 'btn')" >Next</button>
						</div>
						<?php } ?>
					</div>
				</div>

				<div id="fourth-step-2" class="fourth-step-tabcontent">
					<?php the_field('fourth_step_part_2'); ?>
					<div class="col-md-12 col-xs-12 step-btn-holder">
						<?php if (is_page(62)){ ?>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-prev" onclick="openStep(event, 'fourth-step-tabcontent', 'fourth-step-tablinks', 'fourth-step-1', 'btn')">Bumalik</button>
						</div>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-next" onclick="openStep(event, 'fourth-step-tabcontent', 'fourth-step-tablinks', 'fourth-step-3', 'btn')">Susunod</button>
						</div>
						<?php } else if (is_page(122)) {?>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-prev" onclick="openStep(event, 'fourth-step-tabcontent', 'fourth-step-tablinks', 'fourth-step-1', 'btn')">Back</button>
						</div>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-next" onclick="openStep(event, 'fourth-step-tabcontent', 'fourth-step-tablinks', 'fourth-step-3', 'btn')">Next</button>
						</div>
						<?php } ?>
					</div>
				</div>

				<div id="fourth-step-3" class="fourth-step-tabcontent">
					<?php the_field('fourth_step_part_3'); ?>
					<div class="col-md-12 col-xs-12 step-btn-holder">
						<?php if (is_page(62)){ ?>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-prev" onclick="openStep(event, 'fourth-step-tabcontent', 'fourth-step-tablinks', 'fourth-step-2', 'btn')">Bumalik</button>
						</div>
						<div class="col-md-6 col-xs-6">
							<a href="#tut-fourth-step"><button class="btn btn-default step-btn-next" style="visibility: hidden">Susunod</button></a>
						</div>
						<?php } else if (is_page(122)) {?>
						<div class="col-md-6 col-xs-6">
							<button class="btn btn-default step-btn-prev" onclick="openStep(event, 'fourth-step-tabcontent', 'fourth-step-tablinks', 'fourth-step-2', 'btn')">Back</button>
						</div>
						<div class="col-md-6 col-xs-6">
							<a href="#tut-fourth-step"><button class="btn btn-default step-btn-next" style="visibility: hidden">Susunod</button></a>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section tut-mistakes" id="tut-mistakes">
		<div class="row">
			<div class="col-md-12">
				<?php the_field('mistake_title'); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 tut-mistakes-holder">
				<div class="col-md-3 tut-mistakes-panels">
					<h2 class="mistake-number">1</h2>
					<?php the_field('mistake_panel_1'); ?>
					<img class="img-responsive mistake-image" src="data:image/png;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="<?php echo get_stylesheet_directory_uri();?>/images/mistakes/1.png"/>
				</div>
				<div class="col-md-3 tut-mistakes-panels">
					<h2 class="mistake-number">2</h2>
					<?php the_field('mistake_panel_2'); ?>
					<img class="img-responsive mistake-image" src="data:image/png;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="<?php echo get_stylesheet_directory_uri();?>/images/mistakes/2.png"/>
				</div>
				<div class="col-md-3 tut-mistakes-panels">
					<h2 class="mistake-number">3</h2>
					<?php the_field('mistake_panel_3'); ?>
					<img class="img-responsive mistake-image" src="data:image/png;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="<?php echo get_stylesheet_directory_uri();?>/images/mistakes/3.png"/>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-9 col-xs-9">
				<p class="mistakes-disclaimer">Reference: Canadian Association of Nurses in Hemophilia Care (Western Division), (2009). Home treatment guide for people with bleeding disorders. (2nd ed.)</p>
			</div>
			<div class="col-md-3 col-xs-3">
				<?php if (is_page(62)){ ?>
				<a href="#tut-fourth-step"><button class="btn btn-default tut-dosage-calc-btn mistakes-btn">Bumalik</button></a>
				<?php } else if (is_page(122)) {?>
				<a href="#tut-fourth-step"><button class="btn btn-default tut-dosage-calc-btn mistakes-btn">Back</button></a>
				<?php } ?>
			</div>
		</div>
	</div>

	<div class="section tut-end" id="tut-end">
		<div class="row">
			<?php if (is_page(62)){ ?>
			<div class="col-md-12">
				<p class="tut-end-title">CONGRATULATIONS!</p>
				<p class="tut-sub-title">Naisagawa mo ang home <br> infusion process.</p>
			</div>
			<div class="col-md-12 tut-end-btn-holder">
				<a href="/exam" class="btn btn-default tut-end-btn" role="button">Sagutan ang Pagsasanay</a>
			</div>
			<?php } else if (is_page(122)) {?>
			<div class="col-md-12">
				<p class="tut-end-title">CONGRATULATIONS!</p>
				<p class="tut-sub-title">You have completed the<br>home infusion process.</p>
			</div>
			<div class="col-md-12 tut-end-btn-holder-en">
				<a href="/exam-en" class="btn btn-default tut-end-btn" role="button">Answer the Test</a>
			</div>
			<?php } ?>
		</div>
	</div>

	<div class="clearfix"></div>

</div>
<!-- dot nav start -->
<div class="vNav">
	<ul class="vNav">
		<li><a href="#tut-banner"></a></li>
		<li><a href="#tut-bene-warn"></a></li>
		<li><a href="#tut-dosage-desc"></a></li>
		<li><a href="#tut-dosage-calc"></a></li>
		<li><a href="#tut-reminder"></a></li>
		<li><a href="#tut-first-step"></a></li>
		<li><a href="#tut-second-step"></a></li>
		<li><a href="#tut-third-step"></a></li>
		<li style="display:none;"><a href="#"></a></li>
		<li><a href="#tut-fourth-step"></a></li>
	</ul>
</div>
<!-- dot nav bar end -->
<?php get_footer(); ?>