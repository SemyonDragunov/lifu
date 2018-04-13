<header role="banner">
  <?php if ($header || $action): ?>
    <div class="header_wrapper">
      <div class="container">
        <section class="region region-header"><?php print render($header); ?></section>
        <section class="region region-action"><?php print render($action); ?></section>
      </div>
    </div>
  <?php endif; ?>

  <nav id="main-menu">
    <div class="menu">
      <?php
      $menu = menu_navigation_links('main-menu');
      print theme('links__main_menu', array(
        'links' => $menu,
        'attributes' => array(
          'id' => 'main-menu-links',
          'class' => array('links', 'clearfix', 'list-inline'),
        )));
      ?>
    </div>
  </nav>

  <section class="controls">
    <div class="container">
      <div class="logo column">
        <div class="cell">
          <?php if (!theme_get_setting('default_logo')): ?>
            <a href="/" title="Главная" rel="home" id="logo">
              <img src="<?php print theme_get_setting('logo'); ?>" alt="<?php print variable_get('site_name'); ?>" />
            </a>
          <?php else: ?>
            <a title="Главная" href="/"><?php print variable_get('site_name'); ?></a>
          <?php endif; ?>
        </div>
      </div>

      <div class="search column">
        <div class="cell">
          <section class="region region-search"><?php print render($search); ?></section>
        </div>
      </div>
    </div>
  </section>
</header>