<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package viva-cuba-dance-studio
 */

global $paged;
if (!isset($paged) || !$paged){
	$paged = 1;
}
$context = Timber::get_context();
$args = array(
	'post_type' => 'event',
	'posts_per_page' => 8,
	'paged' => $paged
);
/* THIS LINE IS CRUCIAL */
/* in order for WordPress to know what to paginate */
/* your args have to be the defualt query */
	query_posts($args);
/* make sure you've got query_posts in your .php file */


$context['posts'] = Timber::get_posts();
$templates = array( 'index.twig' );
$context['preview_size'] = 80;
$context['pagination'] = Timber::get_pagination();

$context['footer_column_1'] = get_field('footer_column_1', 'options');
$context['footer_column_1_phone'] = get_field('footer_column_1_phone', 'options');
$context['footer_column_1_email'] = get_field('footer_column_1_email', 'options');
$context['footer_column_2_text'] = get_field('footer_column_2_text', 'options');
$context['footer_column_2_social_media'] = get_field('footer_column_2_social_media', 'options');
$context['footer_column_3'] = get_field('footer_column_3', 'options');

Timber::render( $templates, $context );
