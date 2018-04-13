<section id="user-controls">
  <a class="icon-user" href="/user<?php print $uid = $GLOBALS['user']->uid != 0 ? '/' . $GLOBALS['user']->uid : ''; ?>">Личный кабинет</a>
  <div class="clearfix"></div>
  <?php if ($GLOBALS['user']->uid != 0): ?>
    <a class="icon-logout" href="/user/logout">Выйти</a>
  <?php endif; ?>
</section>