<?php
/**
 * Template Name: Portfolio
 * Created by PhpStorm.
 * User: Dan
 * Date: 04-Aug-18
 * Time: 2:40 PM
 */

get_header( "portfolio" );
?>

    <style>
        .heading-section {
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
				echo carbon_get_post_meta( get_the_ID(), "heading_title" );
				?>
            </h1>
            <div class="heading-description">
				<?php
				echo apply_filters( 'the_content', carbon_get_post_meta( get_the_ID(), "heading_description" ) );
				?>
            </div>
        </div>
        <div class="heading-image">
            <img src="<?php
			echo wp_get_attachment_url( carbon_get_post_meta( get_the_ID(), "heading_overlay_image" ) );
			?>" alt=""/>
        </div>
    </div>
    </div>
    <div class="portfolio-item-section">
		<?php

		$items = carbon_get_post_meta( get_the_ID(), "contentwrapper" );
		//print_r( $items );
		foreach ( $items as $item ) {
            if ( $item[_type] == "text_field" ) {
            if ( $item["half_content"] ){
            ?>

                <div class="portfolio-item text-field half">
                <?php
                } else{
                ?>
                <div class="portfolio-item text-field">
                    <?php } ?>
                    <h2 class="item-title"><?php echo $item["title"] ?></h2>

                    <div class="item-content">
                        <?php
                        echo apply_filters( 'the_content', $item["content"] );
                        ?>
                    </div>
                </div>
                <?php
                } elseif ( $item[_type] == "images_field" ) {
                        if ( $item["half_content"] ){
            ?>

            <div class="portfolio-item image-field half">
                <?php
                } else{
                ?>
                <div class="portfolio-item image-field">
                    <?php }  ?>
                    <h2 class="item-title"><?php echo $item["title"] ?></h2>

                    <div class="item-content">
		                <?php
		                foreach ($item["content"] as $singleImage){
		                    ?>
                                <img src="<?php echo wp_get_attachment_url($singleImage["icon"]); ?>" alt="" />

                            <?php
                        }
		                ?>
                    </div>
                </div>
<!--             </div>-->
    <?php
                }
			}
			?>



    </div>


<?php
//get_footer();