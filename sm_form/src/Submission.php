<?php

/**
 * @file
 * Contains class Submission.
 *
 * Fully Qualified Name: Drupal\sm_form\Submission.
 */

namespace Drupal\sm_form;

/**
 * Class Submission.
 *
 * Model class for feedback submissions made via the SeismicMike Form.
 */
class Submission {
  /**
   * The submission ID.
   *
   * @var int
   */
  protected $sid;

  /**
   * The commenter's name.
   *
   * @var string
   */
  protected $name;

  /**
   * The commenter's e-mail address.
   *
   * @var string
   */
  protected $email;

  /**
   * The comments.
   *
   * @var string
   */
  protected $comments;

  /**
   * Save this submission to the database.
   */
  public function save() {
    $fields = $this->getDbFields();

    db_merge('sm_form_submission')
      ->key([
        'sid' => $this->getSid(),
      ])
      ->fields($fields)
      ->execute();
  }

  /**
   * Get a database array of this submission.
   *
   * @return array
   *   Associative array of data keyed by database field name.
   */
  public function getDbFields() {
    return [
      'name' => $this->getName(),
      'email' => $this->getEmail(),
      'comments' => $this->getComments(),
    ];
  }

  /**
   * Load a submission from the db by Submission ID.
   *
   * @param int $submission_id
   *   The Submission ID.
   *
   * @return Submission
   *   A new submission.
   */
  public static function loadFromDatabase($submission_id) {
    $query = db_select('sm_form_submission', 's')
      ->fields('s')
      ->condition('sid', $submission_id);

    $exists = (bool) $query->range(0, 1)->execute()->rowCount();

    if ($exists) {
      $db_record = $query->execute()->fetchAssoc();
      return self::createFromDatabaseArray($db_record);
    }

    throw new Exception('Submission Not Found');
  }

  /**
   * Create a new Submission from a database record loaded as PDO Object.
   *
   * @param object $db_record
   *   The database record.
   *
   * @return Submission
   *   A new submission.
   */
  public static function createFromDatabaseObject($db_record) {
    $submission = new self();
    $submission->setSid($db_record->sid);
    $submission->setName($db_record->name);
    $submission->setEmail($db_record->email);
    $submission->setComments($db_record->comments);
    return $submission;
  }

  /**
   * Create a new Submission from a database record loaded as an Array.
   *
   * @param array $db_record
   *   The database record.
   *
   * @return Submission
   *   A new submission.
   */
  public static function createFromDatabaseArray(array $db_record) {
    $submission = new self();
    $submission->setSid($db_record['sid']);
    $submission->setName($db_record['name']);
    $submission->setEmail($db_record['email']);
    $submission->setComments($db_record['comments']);
    return $submission;
  }

  /**
   * Create a new Submission from data submitted via the form.
   *
   * @param array $form_state
   *   The form state from the form submission.
   *
   * @return Submission
   *   A new submission.
   */
  public static function createFromFormState($form_state) {
    $submission = new self();
    $submission->setName($form_state['values']['name']);
    $submission->setEmail($form_state['values']['email']);
    $submission->setComments($form_state['values']['comments']);
    return $submission;
  }

  /**
   * Gets the The submission ID.
   *
   * @return int
   *   The submission id.
   */
  public function getSid() {
    return $this->sid;
  }

  /**
   * Sets the The submission ID.
   *
   * @param int $sid
   *   The sid.
   */
  public function setSid($sid) {
    $this->sid = $sid;

    return $this;
  }

  /**
   * Gets the The commenter's name.
   *
   * @return string
   *   The name.
   */
  public function getName() {
    return $this->name;
  }

  /**
   * Sets the The commenter's name.
   *
   * @param string $name
   *   The name.
   */
  public function setName($name) {
    $this->name = $name;

    return $this;
  }

  /**
   * Gets the The commenter's e-mail address.
   *
   * @return string
   *   The e-mail address.
   */
  public function getEmail() {
    return $this->email;
  }

  /**
   * Sets the The commenter's e-mail address.
   *
   * @param string $email
   *   The e-mail address.
   */
  public function setEmail($email) {
    $this->email = $email;

    return $this;
  }

  /**
   * Gets the The comments.
   *
   * @return string
   *   The comments.
   */
  public function getComments() {
    return $this->comment;
  }

  /**
   * Sets the The comments.
   *
   * @param string $comments
   *   The comments.
   */
  public function setComments($comments) {
    $this->comments = $comments;

    return $this;
  }

}
