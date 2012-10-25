<?php
/**
 * @file
 * Pane template file for header elements
 *
 * outputs logo if enabled
 */
?>
<?php if ($logo): ?>
  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
    <img src="<?php print $logo; ?>" alt="<?php print t('Logo'); ?>" />
  </a>
<?php endif; ?>
