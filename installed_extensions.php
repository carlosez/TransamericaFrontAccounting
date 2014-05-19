<?php

/* List of installed additional extensions. If extensions are added to the list manually
	make sure they have unique and so far never used extension_ids as a keys,
	and $next_extension_id is also updated. More about format of this file yo will find in 
	FA extension system documentation.
*/

$next_extension_id = 3; // unique id for next installed extension

$installed_extensions = array (
  0 => 
  array (
    'name' => '5 digit American general coa',
    'package' => 'chart_en_US-5digit',
    'version' => '2.3.0-4',
    'type' => 'chart',
    'active' => false,
    'path' => 'sql',
    'sql' => 'en_US-new2.sql',
  ),
  1 => 
  array (
    'name' => 'Company Dashboard',
    'package' => 'dashboard',
    'version' => '2.3.15-5',
    'type' => 'extension',
    'active' => false,
    'path' => 'modules/dashboard',
  ),
  2 => 
  array (
    'name' => 'Theme Dashboard',
    'package' => 'dashboard_theme',
    'version' => '2.3.15-3',
    'type' => 'theme',
    'active' => false,
    'path' => 'themes/dashboard',
  ),
);
?>