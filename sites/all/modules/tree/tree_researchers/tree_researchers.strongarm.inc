<?php
/**
 * @file
 * tree_researchers.strongarm.inc
 */

/**
 * Implements hook_strongarm().
 */
function tree_researchers_strongarm() {
  $export = array();

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'language_content_type_tree_researchers';
  $strongarm->value = '0';
  $export['language_content_type_tree_researchers'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'menu_options_tree_researchers';
  $strongarm->value = array(
    0 => 'main-menu',
  );
  $export['menu_options_tree_researchers'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'menu_parent_tree_researchers';
  $strongarm->value = 'main-menu:0';
  $export['menu_parent_tree_researchers'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'node_options_tree_researchers';
  $strongarm->value = array(
    0 => 'status',
    1 => 'promote',
  );
  $export['node_options_tree_researchers'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'node_submitted_tree_researchers';
  $strongarm->value = 1;
  $export['node_submitted_tree_researchers'] = $strongarm;

  return $export;
}
