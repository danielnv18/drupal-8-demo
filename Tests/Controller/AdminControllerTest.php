<?php

/**
 * @file
 * Contains Drupal\demo\Tests\AdminController.
 */

namespace Drupal\demo\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the demo module.
 */
class AdminControllerTest extends WebTestBase
{


  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return array(
      'name' => "demo AdminController's controller functionality",
      'description' => 'Test Unit for module demo and controller AdminController.',
      'group' => 'Other',
    );
  }

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
  }

  /**
   * Tests demo functionality.
   */
  public function testAdminController() {
    // Check that the basic functions of module demo.
    $this->assertEqual(TRUE, TRUE, 'Test Unit Generated via App Console.');
  }
}
