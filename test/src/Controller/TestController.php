<?php

namespace Drupal\test\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * An amt_dayview controller.
 */
class TestController extends ControllerBase {

  /**
   * Base function to load the view and its data for the route.
   *
   * @return array
   *   Return the view callback function and attachments.
   */
  public function testTemplateCallback() {
    return [
      '#theme' => 'test_template',
      '#var1' => 'Dolore duis sit ea dolor duis ex sunt quis in pariatur reprehenderit consectetur voluptate aliquip laboris commodo dolore.',
    ];
  }


}
