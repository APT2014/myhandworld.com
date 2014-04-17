<?php
function APT_Pro_form_system_theme_settings_alter(&$form, &$form_state){
    $form['social'] = array(
        '#type' => 'fieldset',
        '#title' => 'Social setting',
        '#collapsible' => true,
        '#collapsed' => false,
    );
    
    $form['social']['social_display'] = array(
        '#type' => 'checkbox',
        '#title' => 'Display social icon',
        '#default_value' => theme_get_setting('social_display', 'APT_Pro'),
        '#description' => 'Checked this option to display social icon',
    );
    
    $form['social']['facebook_url'] = array(
        '#type' => 'textfield',
        '#title' => 'Facebook Url',
        '#default_value' => theme_get_setting('facebook_url', 'APT_Pro'),
        '#description' => 'Enter facebook url',
    );
    
    $form['social']['twitter_url'] = array(
        '#type' => 'textfield',
        '#title' => 'Twitter Url',
        '#default_value' => theme_get_setting('twitter_url', 'APT_Pro'),
        '#description' => 'Enter twitter url',
    );
    
    $form['social']['google_plus_url'] = array(
        '#type' => 'textfield',
        '#title' => 'Google Plus Url',
        '#default_value' => theme_get_setting('google_plus_url', 'APT_Pro'),
        '#description' => 'Enter google plus url',
    );
    
    $form['social']['youtube_url'] = array(
        '#type' => 'textfield',
        '#title' => 'Youtube Url',
        '#default_value' => theme_get_setting('youtube_url', 'APT_Pro'),
        '#description' => 'Enter youtube url',
    );
}