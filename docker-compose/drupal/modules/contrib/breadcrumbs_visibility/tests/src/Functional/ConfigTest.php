<?php

namespace Drupal\Tests\breadcrumbs_visibility\Functional;

use Drupal\Tests\BrowserTestBase;

/**
 * Tests routes info pages and links.
 *
 * @group breadcrumbs_visibility
 */
class ConfigTest extends BrowserTestBase {

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'breadcrumbs_visibility',
  ];

  /**
   * Specify the theme to be used in testing.
   *
   * @var string
   */
  protected $defaultTheme = 'stable';

  /**
   * Tests entity saves all components of the entity on the DB.
   */
  public function testSaveConfig() {
    $config = \Drupal::config('breadcrumbs_visibility.content_type.article');
    // By default, the breadcrumb is not set.
    $this->assertEquals($config->get('display_breadcrumbs'), NULL);
    $config = \Drupal::service('config.factory')->getEditable('breadcrumbs_visibility.content_type.article');
    $config->set('display_breadcrumbs', 0)->save();
    // Verify the default choice can be overridden to display "off".
    $this->assertEquals($config->get('display_breadcrumbs'), 0);
    $config = \Drupal::service('config.factory')->getEditable('breadcrumbs_visibility.content_type.article');
    $config->set('display_breadcrumbs', 1)->save();
    // Verify the default choice can be overridden to display "on".
    $this->assertEquals($config->get('display_breadcrumbs'), 1);
  }

}
