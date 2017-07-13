<?php
/**
 * Template Name: Home
 * @package viva-cuba-dance-studio
 */

$context = Timber::get_context();
$context['slider'] = get_field('slider', 'options');
$args = array(
	'post_type' => 'post',
	'numberposts' => 3,
	'orderby' => 'date',
	'order' => 'DESC'
);
$context['posts'] = Timber::get_posts($args);
$argsEvents = array(
	'post_type' => 'event',
	'numberposts' => 3,
	'orderby' => 'date',
	'order' => 'DESC'
);
$context['events'] = Timber::get_posts($argsEvents);

Timber::render( array( 'page-home.twig', 'page.twig' ), $context );