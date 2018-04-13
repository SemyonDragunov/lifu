<article class="product full">
  <div class="description column">
    <div class="wrapper">
      <?php if ($values): ?>
        <div class="values column <?php print $values_classes; ?>">
          <?php print $values; ?>
        </div>
      <?php endif; ?>

      <?php if ($controls): ?>
        <div class="controls column <?php print $controls_classes; ?>">
          <?php print $controls; ?>
        </div>
      <?php endif; ?>
    </div>

    <?php if ($body): ?>
      <div class="body <?php print $body_classes; ?>">
        <?php print $body; ?>
      </div>
    <?php endif; ?>
  </div>

  <?php if ($photo): ?>
    <div class="photo column <?php print $photo_classes; ?>">
      <?php print $photo; ?>
    </div>
  <?php endif; ?>
</article>
