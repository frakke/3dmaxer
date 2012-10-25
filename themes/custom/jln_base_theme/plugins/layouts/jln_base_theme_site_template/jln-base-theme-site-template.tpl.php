<?php
/**
 * @file
 * Theme implementation to output page 
 */
?>
<div<?php print $css_id ? " id=\"$css_id\" class=\"page-wrapper\"" : " id=\"page-wrapper\""; ?>>

  <div id="page-container">

    <header>
      <?php print render($content['header']); ?>
    </header>
  
    <?php if (!empty($content['menu'])): ?>
      <nav class="page-menu section clearfix" role="navigation">
        <?php print render($content['menu']); ?>
      </nav>
    <?php endif; ?>
  
    <?php if (!empty($content['main'])): ?>
      <div class="main">
        <?php print render($content['main']); ?>
      </div>
    <?php endif; ?>
  
    <footer>
      <?php print render($content['footer']); ?>
    </footer>
  </div>
</div>


