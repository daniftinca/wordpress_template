<?php
/**
 * Created by PhpStorm.
 * User: Dan
 * Date: 19-Aug-18
 * Time: 2:04 PM
 */

use Carbon_Fields\Container;
use Carbon_Fields\Field;



Container::make( 'post_meta', 'Portfolio Item' )
    ->where( 'post_template', '=', 'Templates/PortfolioList.php' )
    ->add_tab( __( 'Header Section' ), array(
        Field::make('text','header_slider_shortcode')
    ))
    ->add_tab(__('List'),array(
        Field::make('complex','portfolio_items')
            ->add_fields(array(
                Field::make('text','title'),
                Field::make('image','thumbnail'),
                Field::make('text','item_url'),
                Field::make('date','date')
                    ->set_storage_format( "M d, Y" ),
            ))
    ));