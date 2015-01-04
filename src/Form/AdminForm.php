<?php

/**
 * @file
 * Contains Drupal\demo\Form\AdminForm.
 */

namespace Drupal\demo\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class AdminForm extends ConfigFormBase
{

  /**
   * {@inheritdoc}
   */
  public function getFormID() {
    return 'admin_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('demo.admin_form_config');
    $form['name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Name'),
      '#description' => $this->t(''),
      '#default_value' => $config->get('name'),
    ];
    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    return parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    parent::submitForm($form, $form_state);

    $this->config('demo.admin_form_config')
          ->set('name', $form_state->getValue('name'))
        ->save();
  }
}
