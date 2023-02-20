<?php

namespace Drupal\Tests\breadcrumbs_visibility\Functional;

use Drupal\Tests\node\Traits\ContentTypeCreationTrait;
use Drupal\Tests\BrowserTestBase;
use Drupal\Core\Field\Entity\BaseFieldOverride;
use Drupal\Core\Url;
use Drupal\node\Entity\NodeType;

/**
 * Tests routes info pages and links.
 *
 * @group breadcrumbs_visibility
 */
class EntityTest extends BrowserTestBase {

  use ContentTypeCreationTrait;

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'node',
    'breadcrumbs_visibility',
  ];

  /**
   * Specify the theme to be used in testing.
   *
   * @var string
   */
  protected $defaultTheme = 'stable';

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();

    $nodeType = NodeType::create([
      'type' => 'test',
      'name' => 'Test',
    ]);
    $nodeType->save();
    $entity = BaseFieldOverride::create([
      'field_name' => 'status',
      'entity_type' => 'node',
      'bundle' => 'test',
    ]);
    $entity->setDefaultValue(TRUE)->save();

    $account = $this->drupalCreateUser([
      'create test content',
      'edit own test content',
      'administer nodes',
      'administer breadcrumbs visibility config',
    ]);
    $this->drupalLogin($account);
  }

  /**
   * Test that the display_breadcrumbs checkbox works.
   */
  public function testNodeForm() {
    $title = $this->randomString();
    $this->drupalGet(Url::fromRoute('node.add', ['node_type' => 'test']));
    $this->assertSession()->fieldValueEquals('display_breadcrumbs[value]', '1');
    $this->getSession()->getPage()->fillField('title[0][value]', $title);
    $this->getSession()->getPage()->findButton('Save')->submit();
    $node = $this->getNodeByTitle($title);
    $this->assertEquals("1", $node->display_breadcrumbs->value);

    $title = $this->randomString();
    $this->drupalGet(Url::fromRoute('node.add', ['node_type' => 'test']));
    $this->getSession()->getPage()->fillField('title[0][value]', $title);
    $this->getSession()->getPage()->uncheckField('display_breadcrumbs[value]');
    $this->getSession()->getPage()->findButton('Save')->submit();
    $node = $this->getNodeByTitle($title);
    $this->assertEquals("0", $node->display_breadcrumbs->value);
  }

}
