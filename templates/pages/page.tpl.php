<?php print $header; ?>

<section class="h1-page">
    <div class="container">
        <h1><?php print $title; ?></h1>
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
        <?php if (!empty($tabs)): ?>
            <?php print render($tabs); ?>
        <?php endif; ?>
        <?php print render($page['content']); ?>
    </main> <!-- End main content box -->
</section> <!-- End container -->

<?php print render($page['over_footer']); ?>

<?php print $footer; ?>