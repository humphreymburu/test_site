<?php
/**
 * @file
 * tree_researchers.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function tree_researchers_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "feeds" && $api == "feeds_importer_default") {
    return array("version" => "1");
  }
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_node_info().
 */
function tree_researchers_node_info() {
  $items = array(
    'tree_researchers' => array(
      'name' => t('Researchers'),
      'base' => 'node_content',
      'description' => t('Researchers Profiles'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
