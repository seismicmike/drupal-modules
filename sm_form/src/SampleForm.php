<?php

/**
 * @file
 * Sample Form using the Form abstract class.
 */

namespace Drupal\sm_form;

/**
 * A sample form using the Form class.
 */
class SampleForm extends Form {
  /**
   * Validate the field.
   *
   * @return bool
   *   Return TRUE for successful validation.
   */
  public function validate() {
    return TRUE;
  }

  /**
   * Submit the form.
   */
  public function submit() {
    dpm($this->formState['values']);
    // // Store the sub in the db.
    // $submission = Submission::createFromFormState($this->formState);
    // $submission->save();

    // // E-mail the sub to the configured recipient.
    // $recipient = variable_get('sm_form_recipient', 'seismicmike@gmail.com');
    // drupal_mail('sm_form', 'new_submission', $recipient, language_default(), [
    //   'submission' => $submission,
    // ]);

    drupal_set_message('Thank you for your submission.');
  }
}
