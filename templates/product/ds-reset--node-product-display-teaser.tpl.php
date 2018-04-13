<article class="product teaser" <?php print $attributes; ?>>
  <?php print render($content['product:field_product_photo']); ?>
  <h3 class="title"><a href="<?php print $node_url;?>"><?php print $node->title; ?></a></h3>
  <?php print render($content['product:commerce_price']); ?>
  <a class="button" href="/node/<?php print $content['field_product_display_products']['#object']->nid; ?>">Подробнее</a>
</article>