<?php

/**
 * @file
 * Implimentation of hook_form_system_theme_settings_alter()
 *
 * To use replace "adaptivetheme_subtheme" with your themeName and uncomment by
 * deleting the comment line to enable.
 *
 * @param $form: Nested array of form elements that comprise the form.
 * @param $form_state: A keyed array containing the current state of the form.
 */
/* -- Delete this line to enable.
function adaptivetheme_subtheme_form_system_theme_settings_alter(&$form, &$form_state)  {
  // Your knarly custom theme settings go here...
}
// */
function at_mhw_form_system_theme_settings_alter(&$form, &$form_state)  {
		$form['social'] = array(
		'#type' => 'fieldset',
		'#title' => 'Social setting',
		'#collapsible' => true,
		'#collaped' => false,
	);
	$form['social']['social_display'] = array(
		'#type' => 'checkbox',
		'#title' => 'Display social icon',
		'#default_value' => theme_get_setting('social_display', 'at_mhw'),
		'#description' => 'Check this option to show social icon',
	);
	$form['social']['facebook_url'] = array(
		'#type' => 'textfield',
		'#title' => 'Facebook Url',
		'#default_value' => theme_get_setting('facebook_url', 'at_mhw'),
		'#description' => 'Enter facebook url',
	);
	$form['social']['twitter_url'] = array(
		'#type' => 'textfield',
		'#title' => 'Twitter Url',
		'#default_value' => theme_get_setting('twitter_url', 'at_mhw'),
		'#description' => 'Enter twitter url'
	);
}