<?php
/**
 * Template Name: Portfolio List
 * Created by PhpStorm.
 * User: Dan
 * Date: 04-Aug-18
 * Time: 2:40 PM
 */

get_header();
echo do_shortcode(carbon_get_post_meta(get_the_ID(), 'header_slider_shortcode'));
$portfolioList = carbon_get_post_meta(get_the_ID(), 'portfolio_items');
?>
    <div class="custom_portfolio-list">
        <?php
        $i = 0;
        foreach ($portfolioList as $item) {

            if ($i % 2 != 0) {
                ?>
                <style>
                    .custom_list-item-bg.whit {
                        background-color: #FDFDFD;
                    }
                </style>
                <?php
            }

            ?>
            <div class="custom_list-item-bg <?php if($i%2!=0){echo ' whit';} ?>">
                <div class="custom_list-item">

                    <div class="title">
                        <a href="<?php echo $item['item_url'] ?>">
                            <h3 class="headline">
                                <?php echo $item['title']; ?>
                            </h3>
                        </a>
                    </div>

                    <div class="url-button ">
                        <a class="button button_left button_theme button_js kill_the_icon"
                           href="<?php echo $item['item_url']; ?>">Read more</a>
                    </div>
                    <div class="thumbnail">
                        <a href="<?php echo $item['item_url'] ?>">
                            <div class="img_wrap">

                                <img src="<?php echo wp_get_attachment_url($item['thumbnail']); ?>"
                                     alt="portfolio thumbnail">
                            </div>
                        </a>
                    </div>
                    <div class="date">
                        <span class="date-span"> Date</span> <?php echo $item['date']; ?>
                    </div>
                </div>
            </div>

            <?php
            $i++;
        }
        ?>

    </div>


<?php

get_footer();
