<?php

/**
 * @file
 */
?>
<?php

/*
 * Implements hook_preprocess_node.
 * 
 * Preprocess function for node layout.
 */
function jln_base_theme_preprocess_node(&$vars) {
  //Add teaser template to theme.
  $vars['theme_hook_suggestions'][] = 'node__' . $vars['view_mode'];
} 

 function jln_base_theme_preprocess_panels_pane(&$vars) {
  if ($vars['pane']->type == 'node' && $vars['pane']->position == 0) {
    $vars['classes_array'][] = 'first';
  }

  switch ($vars['pane']->subtype) {
    case 'page_title':
      $vars['theme_hook_suggestions'][] = 'panels_pane__page_title';
      break;
  }
}

function jln_base_theme_preprocess_field(&$vars) {

}
