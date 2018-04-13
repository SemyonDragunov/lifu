<?php
$category_img_values = field_get_items('taxonomy_term', $term, 'field_shop_category_image');
if ($category_img_values):
  $category_img_url = image_style_url('category_teaser', $category_img_values[0]['uri']);
else:
  $category_img_url = '/sites/all/themes/drupalife_store/noimage.png';
endif;

$url = url('taxonomy/term/' . $term->tid);
?>
<article class="category teaser">
  <a href="<?php print $url; ?>" class="link">
    <img src="<?php print $category_img_url; ?>" alt="<?php print $term->name; ?>" class="category-image">
    <h3><?php print $term->name; ?></h3>
  </a>
</article>