<?php

/**
 * @file
 * Configuration for the SM Form Module.
 */

/**
 * Config form for the Form module.
 */
function sm_form_admin($form, &$form_state) {
  $form['sm_form_recipient'] = [
    '#type' => 'textfield',
    '#title' => 'Recipient to notify on feedback submission',
    '#required' => TRUE,
    '#element_validate' => ['sm_form_validate_email'],
    '#default_value' => variable_get('sm_form_recipient', 'seismicmike@gmail.com'),
  ];

  return system_settings_form($form);
}
