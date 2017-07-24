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
$context['posts'] = Timber::get_posts();
$templates = array( 'index.twig' );
if ( is_home() ) {
	array_unshift( $templates, 'home.twig' );
};
$context['pagination'] = Timber::get_pagination();


$context['footer_column_1'] = get_field('footer_column_1', 'options');
$context['footer_column_1_phone'] = get_field('footer_column_1_phone', 'options');
$context['footer_column_1_email'] = get_field('footer_column_1_email', 'options');
$context['footer_column_2_text'] = get_field('footer_column_2_text', 'options');
$context['footer_column_2_social_media'] = get_field('footer_column_2_social_media', 'options');
$context['footer_column_3'] = get_field('footer_column_3', 'options');
Timber::render( $templates, $context );
