<?php
/**
 * @file
 * tree_about.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function tree_about_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_node_info().
 */
function tree_about_node_info() {
  $items = array(
    'about_tree' => array(
      'name' => t('About Tree'),
      'base' => 'node_content',
      'description' => t('Any Content related to UW Tree e.g About Us ,Contacts, Mission and Get involved etc.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
