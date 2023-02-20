<?php

namespace Drupal\Tests\breadcrumbs_visibility\FunctionalJavascript;

use Drupal\FunctionalJavascriptTests\WebDriverTestBase;
use Drupal\Core\Field\Entity\BaseFieldOverride;
use Drupal\node\Entity\NodeType;

/**
 * Tests that the module defined permission does limit user actions.
 *
 * @group breadcrumbs_visibility
 */
class PermissionTest extends WebDriverTestBase {

  /**
   * Use the 'minimal' installation profile.
   *
   * @var string
   */
  protected $profile = 'standard';

  /**
   * Modules to enable.
   *
   * @var array
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
  protected $defaultTheme = 'bartik';

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
      'administer content types',
    ]);
    $this->drupalLogin($account);
  }

  /**
   * Test the visibility of the breadcrumbs block on a per-node basis.
   */
  public function testNodeLevelPermission() {
    $session = $this->getSession();
    $web_assert = $this->assertSession();
    $page = $session->getPage();

    // Go to node creation page.
    $this->drupalGet('node/add/test');
    // Find the v-tab provided by the module and click it.
    $page->findLink('Page display options')->click();
    // Confirm the "display breadcrumbs" checkbox is checked by default.
    $page->hasCheckedField('#edit-display-breadcrumbs-value');
    // Get random title and save the node.
    $title = $this->randomString();
    $edit = [
      'title[0][value]' => $title,
    ];
    $this->submitForm($edit, 'Save');
    // Confirm a new Test type node was created.
    $web_assert->pageTextContains('Test ' . $title . ' has been created.');
    // Verify the breadcrumbs element exists in the markup.
    $web_assert->elementExists('css', '#block-bartik-breadcrumbs');
    // Grab the node id by its title and load the node edit page.
    $node = $this->drupalGetNodeByTitle($title);
    $this->drupalGet('node/' . $node->id() . '/edit');
    // Go to the Page Display Options v-tab section.
    $page->findLink('Page display options')->click();
    // Uncheck the "display breadcrumbs" checkbox and save the node.
    $page->uncheckField('edit-display-breadcrumbs-value');
    $this->submitForm([], 'Save');
    // Confirm the same node was updated successfully.
    $web_assert->pageTextContains('Test ' . $title . ' has been updated.');
    // Verify the breadcrumbs element doesn't exist in the markup.
    $web_assert->elementNotExists('css', '#block-bartik-breadcrumbs');
    // Logout.
    $this->drupalLogout();
    // Create a new user without the permission to edit breadcrumbs visibility.
    $account = $this->drupalCreateUser([
      'create test content',
      'edit any test content',
      'administer nodes',
    ]);
    // Login with the new user.
    $this->drupalLogin($account);
    // Edit the same existing node.
    $this->drupalGet('node/' . $node->id() . '/edit');
    // Go to the Page Display Options v-tab section.
    $page->findLink('Page display options')->click();
    // Confirm the checkbox is disabled with a descriptive message.
    $web_assert->elementAttributeContains('css', '#edit-display-breadcrumbs-value', 'disabled', 'disabled');
    $web_assert->elementTextContains('css', '#edit-display-breadcrumbs-value--description', 'Your account does not have permission to set the breadcrumb visibility.');
    // Logout to end test.
    $this->drupalLogout();
  }

  /**
   * Test the visibility of the breadcrumbs block on a per-content type basis.
   */
  public function testContentTypeLevelPermission() {
    $session = $this->getSession();
    $web_assert = $this->assertSession();
    $page = $session->getPage();

    // Go to the Test content type edit page.
    $this->drupalGet('admin/structure/types/manage/test');
    // Find the v-tab provided by the module and click it.
    $page->findLink('Page display defaults')->click();
    // Confirm the "display breadcrumbs" checkbox is checked by default.
    $page->hasCheckedField('#edit-display-breadcrumbs');
    // Uncheck the "display breadcrumbs" checkbox and save the content type
    // settings.
    $page->uncheckField('edit-display-breadcrumbs');
    $this->submitForm([], 'Save content type');
    // Go to node creation page.
    $this->drupalGet('node/add/test');
    // Find the v-tab provided by the module and click it.
    $page->findLink('Page display options')->click();
    // Confirm the "display breadcrumbs" checkbox is unchecked by default.
    $page->hasUncheckedField('#edit-display-breadcrumbs-value');
    // Logout.
    $this->drupalLogout();
    // Add a new user without the permission to edit content type breadcrumbs
    // visibility.
    $account = $this->drupalCreateUser([
      'administer content types',
    ]);
    // Login with the new user.
    $this->drupalLogin($account);
    // Go to the Test content type edit page.
    $this->drupalGet('admin/structure/types/manage/test');
    // Find the v-tab provided by the module and click it.
    $page->findLink('Page display defaults')->click();
    // Confirm the checkbox is disabled with a descriptive message.
    $web_assert->elementAttributeContains('css', '#edit-display-breadcrumbs', 'disabled', 'disabled');
    $web_assert->elementTextContains('css', '#edit-display-breadcrumbs--description', 'Your account does not have permission to set the breadcrumb visibility.');
    // Logout to end test.
    $this->drupalLogout();
  }

}
