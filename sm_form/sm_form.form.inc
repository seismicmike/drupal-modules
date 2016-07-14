<?php

/**
 * @file
 * Contains the form for SM Form.
 */

use Drupal\sm_form\SampleForm as Form;

/**
 * Builds the feedback submission form.
 *
 * @param array $form
 *   The form that is being built.
 * @param array &$form_state
 *   Any pre-existing data related to this form.
 *
 * @return array
 *   An array of form elements for drupal_get_form to render.
 */
function sm_form_form($form, &$form_state) {
  $form = new Form($form, $form_state);

  $form->addTextField('name', 'Name', '', TRUE);

  $form->addTextField('email', 'E-mail Address', '', TRUE, '', [
    '#element_validate' => ['sm_form_validate_email'],
  ]);

  $form->addTextArea('comments', 'Comments', '', TRUE, '', [
    '#rows' => 5,
  ]);

  $sub_form = new Form();

  $sub_form->addSelect('gender', 'Gender', drupal_map_assoc(['Male', 'Female']));

  $sub_form->addRadios('notifications', 'Notification Preferences', [
    'none' => 'I prefer not to receive notifications',
    'email_only' => 'I prefer to receive notifications by e-mail',
    'sms_only' => 'I prefer to receive notifications by SMS',
    'both' => 'I prefer to receive both SMS and E-mail notifications',
  ]);

  $sub_form->addCheckboxes('notifications2', 'I would like to receive notifications by the following:', [
    'courier' => 'Courier',
    'pigeon' => 'Carrier Pigeon',
    'smoke' => 'Smoke Signals',
    'pony' => 'Pony Express',
    'telegram' => 'Telegraph',
    'snail' => 'Postal Mail',
    'phone' => 'Phone Call',
    'email' => 'E-Mail',
    'sms' => 'SMS',
  ]);

  $sub_fields = $sub_form->getForm();

  $form->addFieldSet('profile', 'Profile Settings', $sub_fields, '');

  $form->addSubmit();

  return $form->getForm();
}

/**
 * Handle submission of the feedback form.
 *
 * @param array $form
 *   The form.
 * @param array &$form_state
 *   The data/configuration of the form at time of submission.
 */
function sm_form_form_submit($form, &$form_state) {
  $form = new Form($form, $form_state);
  $form->submit();
}
