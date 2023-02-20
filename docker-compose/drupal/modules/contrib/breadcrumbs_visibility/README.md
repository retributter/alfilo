Breadcrumbs Visibility
---------------------

 * Introduction
 * Using the module
 * Maintainers

INTRODUCTION
------------
By default in Drupal, breadcrumbs display on every node. Modifying this behavior via the Block UI (in Drupal 8, breadcrumbs are a block) is not ideal, and is unmanageable on a per-node basis. Enter *Breadcrumbs Visibility*, which adds an on/off checkbox to nodes for making the breadcrumbs visible. 

In addition, a per-content type default setting is provided on the node type edit form.

USING THE MODULE
-----------------------------------
**Content type default**

After enabling this module, go to any node content type's edit page
(e.g., `/admin/structure/types/manage/page`). Expand the "Page display defaults" fieldset and choose either whether or not to *Default to "Display breadcrumbs on."*
* **NOTE:** only users with the `administer breadcrumbs visibility config` permission will be able to control this.
* **NOTE:** this setting is only a default; once a node is saved, its entity-level setting takes precedence. Changing the node type default will only change the starting state of the checkbox for newly created nodes.

**Per node setting**

Once this module is enabled, a new on/off checkbox will appear in the advanced tabs on all node edit form, under the "Page display options" section. When the checkbox is "on", breadcrumbs will be visible. When the checkbox is "off", breadcrumbs will not be visible.

```

MAINTAINERS
-----------
Current maintainers:
 * [lreynaga](https://www.drupal.org/u/lreynaga)
 * [gravelpot](https://www.drupal.org/u/gravelpot)
 * [mark_fullmer](https://www.drupal.org/u/mark_fullmer)
 * [twfahey](https://www.drupal.org/u/twfahey)

This project has been sponsored by:
* [The University of Texas at Austin](https://www.drupal.org/university-of-texas-at-austin)