<?php
/**
 * Template Name: Home
 * @package viva-cuba-dance-studio
 */
global $paged;
if (!isset($paged) || !$paged) {
	$paged = 1;
}

$context = Timber::get_context();
$context['slider'] = get_field('slider', 'options');
$context['footer_column_1'] = get_field('footer_column_1', 'options');
$context['footer_column_1_phone'] = get_field('footer_column_1_phone', 'options');
$context['footer_column_1_email'] = get_field('footer_column_1_email', 'options');
$context['footer_column_2_text'] = get_field('footer_column_2_text', 'options');
$context['footer_column_2_social_media'] = get_field('footer_column_2_social_media', 'options');
$context['footer_column_3'] = get_field('footer_column_3', 'options');
$argsEvents = array(
	'post_type' 		=> 'event',
	'posts_per_page' 	=> 8,
	'orderby'			=> 'menu_order',
	'order'     		=> 'DESC',
	'paged'				=> $paged
);
$context['posts'] = new Timber\PostQuery($argsEvents);
$context['preview_size'] = 23;

Timber::render( array( 'page-events.twig', 'page.twig' ), $context );
