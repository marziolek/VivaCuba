<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists
 *
 * @package viva-cuba-dance-studio
 */

if ( ! class_exists( 'Timber' ) ) {
	echo 'Timber not activated. Make sure you activate the plugin in <a href="/wp-admin/plugins.php#timber">/wp-admin/plugins.php</a>';
	return;
}
$context = Timber::get_context();


global $paged;
if (!isset($paged) || !$paged){
	$paged = 1;
}
$context = Timber::get_context();
$args = array(
	'post_type' => 'post',
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
