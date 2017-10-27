<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

</div><!-- #content -->
<script type="text/javascript">
	hidePanels("first-step-tabcontent");
	hidePanels("second-step-tabcontent");
	hidePanels("third-step-tabcontent");
	hidePanels("third-step-pt2-tabcontent");
	hidePanels("fourth-step-tabcontent");

	function hidePanels(tabGroup){
		// Get all elements with class="tabcontent" and hide them
		var tabcontent = document.getElementsByClassName(tabGroup);
		for (i = 1; i < tabcontent.length; i++) {
			tabcontent[i].style.display = "none";
		}
	}
</script>

<script type="text/javascript">
	window.addEventListener('load', function(){
		var allimages= document.getElementsByTagName('img');
		for (var i=0; i<allimages.length; i++) {
			if (allimages[i].getAttribute('data-src')) {
				allimages[i].setAttribute('src', allimages[i].getAttribute('data-src'));
			}
		}
	}, false)
</script>

<script type="text/javascript">
	
	function getExamScore(){
		var answer_key_en = ['f', 't', 't', 'f', 't', '1', '3', '1', '3', '2', '2', '4', '4', '1', '1'];
		var user_score = 0;

		var user_answers_array = [];
		
		for (var i=1; i <= 15; i++){
			var exam_item = document.getElementById(i);
			var exam_form = exam_item.getElementsByTagName("form");
			var exam_row = exam_form[0].getElementsByTagName("div");
			var exam_container = exam_row[0].getElementsByTagName("div");
			var exam_choices = exam_container[0].getElementsByTagName("p");
			
			var user_answer = "";
			var user_answer_set = [];

			user_answer_set["number"] = i;
			user_answer_set["answer"] = "no answer";
			if (i < 6){
				var exam_inputs = exam_choices[2].getElementsByTagName("input");

				if (exam_inputs[0].checked){
					user_answer = 't';
					//user_answers_array.push(exam_inputs[0].value);
					user_answer_set["answer"] = exam_inputs[0].value;
				}else if (exam_inputs[1].checked){
					user_answer = 'f';
					//user_answers_array.push(exam_inputs[1].value);
					user_answer_set["answer"] = exam_inputs[1].value;
				}
			}else if (i > 5){

				var exam_input_1 = exam_choices[2].getElementsByTagName("input");
				var exam_input_2 = exam_choices[3].getElementsByTagName("input");
				var exam_input_3 = exam_choices[4].getElementsByTagName("input");
				var exam_input_4 = exam_choices[5].getElementsByTagName("input");

				if (exam_input_1[0].checked){
					user_answer = '1';
					//user_answers_array.push(exam_input_1[0].value);
					user_answer_set["answer"] = exam_input_1[0].value;
				}else if (exam_input_2[0].checked){
					user_answer = '2';
					//user_answers_array.push(exam_input_2[0].value);
					user_answer_set["answer"] = exam_input_2[0].value;
				}else if (exam_input_3[0].checked){
					user_answer = '3';
					//user_answers_array.push(exam_input_3[0].value);
					user_answer_set["answer"] = exam_input_3[0].value;
				}else if (exam_input_4[0].checked){
					user_answer = '4';
					//user_answers_array.push(exam_input_4[0].value); 
					user_answer_set["answer"] = exam_input_4[0].value;
				}
			}

			if (user_answer == answer_key_en[i-1]){
				user_score++;
				user_answer_set["result"] = "correct";
			}else{
				user_answer_set["result"] = "wrong";
			}

			user_answers_array.push(user_answer_set);
		}

		for (var ctr = 0; ctr < user_answers_array.length; ctr++){

			var act_ctr = ctr + 1;

			if (user_answers_array[ctr]["result"] == "correct"){
				document.getElementById("answer-no-"+act_ctr).innerHTML = user_answers_array[ctr]["number"] + " <span>" + user_answers_array[ctr]["answer"] + "</span>";
			}else if(user_answers_array[ctr]["result"] == "wrong"){
				document.getElementById("answer-no-"+act_ctr).innerHTML = user_answers_array[ctr]["number"] + " <span style='font-weight: bold; color: red'>" + user_answers_array[ctr]["answer"] + "</span>";
			}
		}

		document.getElementById("user-score").innerHTML = "Score: <span style='text-decoration:underline;'>" + user_score + "</span>/15";
		return true;
	}

</script>

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="wrap">
		<?php
		get_template_part( 'template-parts/footer/footer', 'widgets' );

		if ( has_nav_menu( 'social' ) ) : ?>
		<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'social',
				'menu_class'     => 'social-links-menu',
				'depth'          => 1,
				'link_before'    => '<span class="screen-reader-text">',
				'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
			) );
			?>
		</nav><!-- .social-navigation -->
	<?php endif;

	get_template_part( 'template-parts/footer/site', 'info' );
	?>
</div><!-- .wrap -->
</footer><!-- #colophon -->
</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
