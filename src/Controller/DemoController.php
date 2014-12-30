<?php
/**
 * @file
 * Contains \Drupal\demo\Controller\ExampleController.
 */

namespace Drupal\demo\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Provides route responses for the Example module.
 */
class DemoController extends ControllerBase {

  /**
   * Returns a simple page.
   *
   * @return array
   *   A simple renderable array.
   */
  public function demo($name = 'World') {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Hello @name!', ['@name' => $name])
    ];
  }
}