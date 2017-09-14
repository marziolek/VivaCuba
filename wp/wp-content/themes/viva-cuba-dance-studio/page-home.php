<?php
/**
 * Template Name: Home
 * @package viva-cuba-dance-studio
 */

$context = Timber::get_context();
$context['slider'] = get_field('slider', 'options');
$context['footer_column_1'] = get_field('footer_column_1', 'options');
$context['footer_column_1_phone'] = get_field('footer_column_1_phone', 'options');
$context['footer_column_1_email'] = get_field('footer_column_1_email', 'options');
$context['footer_column_2_text'] = get_field('footer_column_2_text', 'options');
$context['footer_column_2_social_media'] = get_field('footer_column_2_social_media', 'options');
$context['footer_column_3'] = get_field('footer_column_3', 'options');
$args = array(
	'post_type' 	=> 'post',
	'numberposts' 	=> 3,
	'orderby'		=> 'date',
	'order' 		=> 'DESC'
);
$context['posts'] = Timber::get_posts($args);
$argsEvents = array(
	'post_type' 	=> 'event',
	'numberposts' 	=> 3,
	'orderby'		=> 'menu_order',
	'order'     	=> 'DESC'
);
$context['events'] = Timber::get_posts($argsEvents);
$context['preview_size'] = 23;

Timber::render( array( 'page-home.twig', 'page.twig' ), $context );
