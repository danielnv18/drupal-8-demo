<?php
/**
 * @file
 * Contains \Drupal\example\Controller\ExampleController.
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
  public function demo() {
    $element = array(
      '#type' => 'markup',
      '#markup' => 'Hello, world',
    );
    return $element;
  }

}