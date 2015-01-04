<?php

/**
 * @file
 * Contains Drupal\demo\Plugin\Block\DemoBlock.
 */

namespace Drupal\demo\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'DemoBlock' block.
 *
 * @Block(
 *  id = "demo_block",
 *  admin_label = @Translation("Demo Block")
 * )
 */
class DemoBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#markup' => 'Block demo',
    ];
  }

  /**
   * Overrides \Drupal\block\BlockBase::blockForm().
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form = parent::blockForm($form, $form_state);
    $config = $this->getConfiguration();

    $form['name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Name'),
      '#description' => $this->t(''),
      '#default_value' => isset($config['name'])?$config['name']:"",
    ];

    return $form;
  }

  /**
   * Overrides \Drupal\block\BlockBase::blockSubmit().
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['name'] = $form_state->getValue('name');
  }
}
