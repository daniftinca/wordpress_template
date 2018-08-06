<?php
/**
 * Template Name: Portfolio
 * Created by PhpStorm.
 * User: Dan
 * Date: 04-Aug-18
 * Time: 2:40 PM
 */

get_header("portfolio");
?>

<style>
	.portfolio-content{
		background-image: url("<?php
			echo
			wp_get_attachment_url(
				carbon_get_post_meta(
					get_the_ID(),"heading_background_image"
				))
		?>");
	}

</style>

<div class="portfolio-content">

	<div class="heading-section">
		<div class="heading-info">
			<h1 class="heading-title">
				<?php
				echo carbon_get_post_meta(
					get_the_ID(),"heading_title"
				);
				?>
			</h1>
			<div class="heading-description">
				<?php
				echo
				apply_filters( 'the_content',
					carbon_get_post_meta(
					get_the_ID(),"heading_description"
				));
				?>
			</div>
		</div>
		<div class="heading-image">
			<img src="<?php
			echo
			wp_get_attachment_url(
				carbon_get_post_meta(
					get_the_ID(),"heading_overlay_image"
				));
			?>" alt="" />
		</div>
	</div>




</div>


<?php
//get_footer();