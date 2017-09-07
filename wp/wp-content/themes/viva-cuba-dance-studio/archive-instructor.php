<?php
/**
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
	'post_type' 	 => 'instructor',
	'orderby'   	 => 'menu_order',
	'order'     	 => 'ASC',
	'posts_per_page' => 9999
);
$context['instruktorzy'] = Timber::get_posts($args);
$styles = get_field_object('field_597e0992cc56e');
$context['instruktorzy_style'] = $styles['choices'];

Timber::render( array( 'page-instruktorzy.twig' ), $context );
