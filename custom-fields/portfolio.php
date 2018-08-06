<?php
/**
 * Created by PhpStorm.
 * User: Dan
 * Date: 04-Aug-18
 * Time: 3:26 PM
 */
use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('post_meta','Portfolio Item')
    ->where('post_template'	,'=', 'Templates/PortfolioTemplate.php')
    ->add_tab(__('Header Section'),array(
        Field::make('image','heading_background_image'),
        Field::make('image','heading_overlay_image'),
        Field::make('text','heading_title'),
        Field::make('rich_text','heading_description'),
    ))
	->add_tab(__('Content Section'),array(
		Field::make('text','content_title'),
		Field::make('complex','contentwrapper')
			->add_fields('text_field',array(
				Field::make('text','title'),
				Field::make('rich_text','content'),
				Field::make('checkbox','half_content','Half Width?')
					->set_option_value( 'yes' )
			))
			->add_fields('images_field',array(
				Field::make('text','title'),
				Field::make( 'complex', 'content' )
				     ->add_fields( array(
					     Field::make( 'image', 'icon' ),
				     )),
				Field::make('checkbox','half_content','Half Width?')
				     ->set_option_value( 'yes' )
			))
			->add_fields('gallery_field',array(
				Field::make('text','gallery_title')
			)),

	));


