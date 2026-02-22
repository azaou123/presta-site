{**
 * Hummingbird Child - Product page override
 *}
{extends file='catalog/product.tpl'}

{block name='page_content'}
  {$smarty.block.parent}

  {* Add custom info block *}
  <div class="custom-product-info alert alert-info mt-3">
    <i class="material-icons">local_shipping</i>
    <strong>Info livraison :</strong> Livraison offerte à domicile
  </div>
{/block}