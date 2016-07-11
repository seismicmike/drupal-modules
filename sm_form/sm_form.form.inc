<?php

/**
 * @file
 * Contains the form for SM Form.
 */

use Drupal\sm_form\Submission;

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
  $form['name'] = [
    '#type' => 'textfield',
    '#title' => 'Name',
    '#required' => TRUE,
  ];

  $form['email'] = [
    '#type' => 'textfield',
    '#title' => 'E-mail Address',
    '#required' => TRUE,
    '#element_validate' => ['sm_form_validate_email'],
  ];

  $form['comments'] = [
    '#type' => 'textarea',
    '#rows' => 5,
    '#required' => TRUE,
  ];

  $form['actions']['submit'] = [
    '#type' => 'submit',
    '#value' => 'Submit',
  ];

  return $form;
}

/**
 * Handle submission of the feedback form.
 *
 * @param array $form
 *   The form.
 * @param array &$form_state
 *   The data/configuration of the form at time of submission.
 */
function sm_form_submit($form, &$form_state) {
  // Store the sub in the db.
  $submission = Submission::createFromFormState($form_state);
  $submission->save();

  // E-mail the sub to the configured recipient.
  $recipient = variable_get('sm_form_recipient', 'seismicmike@gmail.com');
  drupal_mail('sm_form', 'new_submission', $recipient, language_default(), [
    'submission' => $submission,
  ]);
}
