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
		
		for (var i=1; i <= 15; i++){
			var exam_item = document.getElementById(i);
			var exam_form = exam_item.getElementsByTagName("form");
			var exam_row = exam_form[0].getElementsByTagName("div");
			var exam_container = exam_row[0].getElementsByTagName("div");
			var exam_choices = exam_container[0].getElementsByTagName("p");
			var exam_inputs = exam_choices[2].getElementsByTagName("input");
			var user_answer = "";
			if (i < 6){
				if (exam_inputs[0].checked){
					user_answer = 't';
				}else if (exam_inputs[1].checked){
					user_answer = 'f';
				}
			}else if (i > 5){
				if (exam_inputs[0].checked){
					user_answer = '1';
				}else if (exam_inputs[1].checked){
					user_answer = '2';
				}else if (exam_inputs[2].checked){
					user_answer = '3';
				}else if (exam_inputs[3].checked){
					user_answer = '4';
				}
			}
			if (user_answer == answer_key_en[i-1]){
				user_score++;
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
