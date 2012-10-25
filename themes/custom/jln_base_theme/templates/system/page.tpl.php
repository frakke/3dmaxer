<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this
 * template. Instead they can be found in the html.tpl.php
 * template in this directory. The full documentation
 * for this file can be found in /modules/system/page.tpl.php.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 */
?>
<?php print render($page['content']) ?>
