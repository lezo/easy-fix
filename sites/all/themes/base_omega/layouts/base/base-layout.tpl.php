<div<?php print $attributes; ?>>
  <header class="l-header">
      <div class="l-header-wrapper">
          <?php print render($page['header']); ?>
      </div>
      <div class="l-header-menu">
          <?php print render($page['navigation']); ?>
      </div>
  </header>

  <div class="l-main clearfix">

    <?php print render($page['sidebar_first']); ?>

    <div class="l-content">
      <?php print render($page['highlighted']); ?>

      <a id="main-content"></a>

      <?php if ($title): ?>
          <?php print render($title_prefix); ?>
            <h1><?php print $title; ?></h1>
          <?php print render($title_suffix); ?>
      <?php endif; ?>

      <?php print $messages; ?>

      <?php print render($tabs); ?>

      <?php print render($page['help']); ?>

      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>

      <?php print render($page['content']); ?>

    </div>

    <?php print render($page['sidebar_second']); ?>

  </div>
</div>
<footer class="l-footer">
    <?php print render($page['footer']); ?>
</footer>
