<?php print $header; ?>

<section class="h1-page">
  <div class="container">
    <h1><?php print variable_get('site_name'); ?></h1>
  </div>
</section>

<section id="main-wrapper" class="container">
  <?php print $breadcrumb; ?>

  <?php print $messages; ?>

  <?php print render($page['help']); ?>

  <?php if ($page['sidebar_first']): ?>
    <aside>
      <?php print render($page['sidebar_first']); ?>
    </aside> <!-- End first sidebar -->
  <?php endif; ?>

  <main role="main">
    <?php print render($page['front']); ?>
  </main> <!-- End main content box -->
</section> <!-- End container -->

<?php print render($page['over_footer']); ?>

<?php print $footer; ?>