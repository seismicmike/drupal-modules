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
