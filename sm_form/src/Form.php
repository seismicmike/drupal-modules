<?php

/**
 * @file
 * Contains the Form class.
 */

namespace Drupal\sm_form;

/**
 * An object oriented form builder.
 */
abstract class Form {
  protected $form;
  protected $formState;

  /**
   * Constructor.
   *
   * @param array $form
   *   The form.
   * @param array $form_state
   *   The form state.
   */
  public function __construct(array $form = array(), array &$form_state = array()) {
    $this->form = $form;
    $this->formState = &$form_state;
    $this->formState['count'] = 0;
  }

  /**
   * Get the form.
   *
   * @return array
   *   The form api form array.
   */
  public function getForm() {
    return $this->form;
  }

  /**
   * Get the form state.
   *
   * @return array
   *   The form api form state array.
   */
  public function getFormState() {
    return $this->formState;
  }

  /**
   * Validate the form.
   *
   * @return bool
   *   Return TRUE for successful validation.
   */
  abstract public function validate();

  /**
   * Submit the form.
   */
  abstract public function submit();

  /**
   * Add a field to the form.
   *
   * @param string $name
   *   The machine name of the field.
   * @param array $properties
   *   The properties of the field. This should be the Form API definition of
   *   the field.
   */
  public function addField($name, array $properties) {
    $this->form[$name] = $properties;
    $this->formState['count']++;
    return $this;
  }

  /**
   * Add a fieldset.
   *
   * @param string $name
   *   The fieldset name.
   * @param string $title
   *   The title.
   * @param array $sub_fields
   *   An array of Form API fields to put into the fieldset.
   * @param string $description
   *   The description.
   * @param array $properties
   *   An array of forrm api properties for this fieldset.
   */
  public function addFieldSet($name, $title, array $sub_fields, $description = '', array $properties = array()) {
    $properties['#type'] = 'fieldset';
    $properties['#title'] = $title;
    $properties['#description'] = $description;
    $properties = array_merge($properties, $sub_fields);

    return $this->addField($name, $properties);
  }

  /**
   * Add a submit button.
   *
   * @param string $label
   *   The submit button label.
   */
  public function addSubmit($label = 'Submit') {
    $this->form['actions']['submit'] = [
      '#type' => 'submit',
      '#value' => $label,
    ];
  }

  /**
   * Add a text field.
   *
   * @param string $name
   *   The name of the field.
   * @param string $title
   *   The title of the field.
   * @param string $description
   *   A description to use for the field.
   * @param bool $required
   *   Whether the field is required.
   * @param string $default_value
   *   The default value of the field.
   * @param array $properties
   *   Any additional Form API properies of this field.
   */
  public function addTextField($name, $title, $description = '', $required = FALSE, $default_value = '', $properties = array()) {
    $properties['#type'] = 'textfield';
    $properties['#title'] = $title;
    $properties['#description'] = $description;
    $properties['#required'] = $required;
    $properties['#default_value'] = $default_value;
    return $this->addField($name, $properties);
  }

  /**
   * Add a text area.
   *
   * @param string $name
   *   The name of the field.
   * @param string $title
   *   The title of the field.
   * @param string $description
   *   A description to use for the field.
   * @param bool $required
   *   Whether the field is required.
   * @param string $default_value
   *   The default value of the field.
   * @param array $properties
   *   Any additional Form API properies of this field.
   */
  public function addTextArea($name, $title, $description = '', $required = FALSE, $default_value = '', $properties = array()) {
    $properties['#type'] = 'textarea';
    $properties['#title'] = $title;
    $properties['#description'] = $description;
    $properties['#required'] = $required;
    $properties['#default_value'] = $default_value;
    return $this->addField($name, $properties);
  }

  /**
   * Add a checkbox.
   *
   * @param string $name
   *   The name of the field.
   * @param string $title
   *   The title of the field.
   * @param string $description
   *   A description to use for the field.
   * @param bool $required
   *   Whether the field is required.
   * @param string $default_value
   *   The default value of the field.
   * @param array $properties
   *   Any additional Form API properies of this field.
   */
  public function addCheckbox($name, $title, $description = '', $required = FALSE, $default_value = '', $properties = array()) {
    $properties['#type'] = 'checkbox';
    $properties['#title'] = $title;
    $properties['#description'] = $description;
    $properties['#required'] = $required;
    $properties['#default_value'] = $default_value;
    return $this->addField($name, $properties);
  }

  /**
   * Add a set of checkboxes.
   *
   * @param string $name
   *   The name of the field.
   * @param string $title
   *   The title of the field.
   * @param array $options
   *   The options to present to the user.
   * @param string $description
   *   A description to use for the field.
   * @param bool $required
   *   Whether the field is required.
   * @param array $default_value
   *   The default value(s) of the field.
   * @param array $properties
   *   Any additional Form API properies of this field.
   */
  public function addCheckboxes($name, $title, array $options, $description = '', $required = FALSE, array $default_value = array(), $properties = array()) {
    $properties['#type'] = 'checkboxes';
    $properties['#options'] = $options;
    $properties['#title'] = $title;
    $properties['#description'] = $description;
    $properties['#required'] = $required;
    $properties['#default_value'] = $default_value;
    return $this->addField($name, $properties);
  }

  /**
   * Add a set of radios.
   *
   * @param string $name
   *   The name of the field.
   * @param string $title
   *   The title of the field.
   * @param array $options
   *   The options to present to the user.
   * @param string $description
   *   A description to use for the field.
   * @param bool $required
   *   Whether the field is required.
   * @param string $default_value
   *   The default value of the field.
   * @param array $properties
   *   Any additional Form API properies of this field.
   */
  public function addRadios($name, $title, array $options, $description = '', $required = FALSE, $default_value = '', $properties = array()) {
    $properties['#type'] = 'radios';
    $properties['#options'] = $options;
    $properties['#title'] = $title;
    $properties['#description'] = $description;
    $properties['#required'] = $required;
    $properties['#default_value'] = $default_value;
    return $this->addField($name, $properties);
  }

  /**
   * Add a set of select drop down.
   *
   * @param string $name
   *   The name of the field.
   * @param string $title
   *   The title of the field.
   * @param array $options
   *   The options to present to the user.
   * @param string $description
   *   A description to use for the field.
   * @param bool $required
   *   Whether the field is required.
   * @param string $default_value
   *   The default value of the field.
   * @param array $properties
   *   Any additional Form API properies of this field.
   */
  public function addSelect($name, $title, array $options, $description = '', $required = FALSE, $default_value = '', $properties = array()) {
    $properties['#type'] = 'select';
    $properties['#options'] = $options;
    $properties['#title'] = $title;
    $properties['#description'] = $description;
    $properties['#required'] = $required;
    $properties['#default_value'] = $default_value;
    return $this->addField($name, $properties);
  }

}
