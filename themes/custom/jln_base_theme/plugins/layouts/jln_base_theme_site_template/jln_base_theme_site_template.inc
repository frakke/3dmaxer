<?php
/**
 * @file
 * Plugin definition for site template layout.
 */

$plugin = array(
  'title' => t('JLN Base Theme site template'),
  'theme' => 'jln_base_theme_site_template',
  'icon' => 'jln-base-theme-site-template.png',
  'admin css' => 'jln_base_theme_site_template.css',
  'category' => 'JLN Base Theme',
  'regions' => array(
    'header' => t('Header'),
    'menu' => t('Menu'),
    'main' => t('Main'),
    'footer' => t('Footer'),
  ),
);