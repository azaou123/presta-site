<?php
/* Smarty version 4.5.5, created on 2026-02-21 21:49:33
  from 'module:ps_specialsviewstemplateshookps_specials.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_699a1a5d1102c3_46434318',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69eca6f7099f96303240f391e6c6743858b25719' => 
    array (
      0 => 'module:ps_specialsviewstemplateshookps_specials.tpl',
      1 => 1750074754,
      2 => 'module',
    ),
    'd18a4ecc6a7bfb6ed2731509d830639e78926def' => 
    array (
      0 => '/opt/lampp/htdocs/presta/themes/hummingbird/templates/components/section-title.tpl',
      1 => 1750074754,
      2 => 'file',
    ),
    'de491b63d6ee49863435a91b52469dfe2a635730' => 
    array (
      0 => '/opt/lampp/htdocs/presta/themes/hummingbird/templates/catalog/_partials/productlist.tpl',
      1 => 1750074754,
      2 => 'file',
    ),
    '058d944f23707ba66ad4caa450201c54b324cdc7' => 
    array (
      0 => '/opt/lampp/htdocs/presta/themes/hummingbird/templates/catalog/_partials/miniatures/product.tpl',
      1 => 1750074754,
      2 => 'file',
    ),
    '62fd880929937870d7e0af6465a904f6265c943d' => 
    array (
      0 => '/opt/lampp/htdocs/presta/themes/hummingbird/templates/catalog/_partials/product-flags.tpl',
      1 => 1750074754,
      2 => 'file',
    ),
    '898689e00d598e881aeb6ae8781d3032b35deb4b' => 
    array (
      0 => '/opt/lampp/htdocs/presta/themes/hummingbird/templates/components/qty-input.tpl',
      1 => 1750074754,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_699a1a5d1102c3_46434318 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="sale-products mt-3">
    <div class="container">
        

  <h2 class="h2 section-title">En promo</h2>

        
<div class="products row">
      

  <article
    class="product-miniature js-product-miniature col-12 col-xs-6 col-lg-4 col-xl-3"
    data-id-product="2"
    data-id-product-attribute="9"
  >
    <div class="card">
      <a href="http://localhost/presta/2-9-brown-bear-printed-sweater.html#/1-taille-s" class="product-miniature__link">
        
  <ul class="product-flags js-product-flags">
          <li class="badge discount">-20%</li>
          <li class="badge new">Neuf</li>
      </ul>


        
          <div class="product-miniature__image-container thumbnail-container">
                          <picture>
                
                
                <img
                  class="product-miniature__image card-img-top"
                  srcset="
                    http://localhost/presta/21-default_xs/brown-bear-printed-sweater.jpg 120w,
                    http://localhost/presta/21-default_m/brown-bear-printed-sweater.jpg 200w,
                    http://localhost/presta/21-default_md/brown-bear-printed-sweater.jpg 320w,
                    http://localhost/presta/21-product_main/brown-bear-printed-sweater.jpg 720w"
                  sizes="(min-width: 1300px) 320px, (min-width: 768px) 120px, 50vw"
                  src="http://localhost/presta/21-default_md/brown-bear-printed-sweater.jpg"
                  width="320"
                  height="320"
                  loading="lazy"
                  alt="Pull imprimé ours brun"
                  title="Pull imprimé ours brun"
                  data-full-size-image-url="http://localhost/presta/21-home_default/brown-bear-printed-sweater.jpg"
                >
              </picture>
            
            
              <button class="product-miniature__quickview_touch btn js-quickview" data-link-action="quickview">
                <i class="material-icons">&#xE417;</i>
              </button>
            
          </div>
        
      </a>

      
        <div class="product-miniature__infos card-body">
          
            <div class="product-miniature__quickview">
              <button class="product-miniature__quickview_button btn btn-link js-quickview btn-with-icon" data-link-action="quickview">
                <i class="material-icons" aria-hidden="true">&#xE417;</i>
                Aperçu rapide
              </button>
            </div>
          

          <div class="product-miniature__infos__top">
            
              <a href="http://localhost/presta/2-9-brown-bear-printed-sweater.html#/1-taille-s"><p class="product-miniature__title">Pull imprimé colibri</p></a>
            
          </div>

          <div class="product-miniature__infos__bottom">
            
              <div class="product-miniature__variants">
                              </div>
            

            
              
<div class="product-list-reviews" data-id="2" data-url="http://localhost/presta/module/productcomments/CommentGrade">
  <div class="grade-stars small-stars"></div>
  <div class="comments-nb"></div>
</div>

            

            <div class="product-miniature__prices">
              
                                  

                  <span class="product-miniature__price" aria-label="Prix">
                                                              28,72 €
                                      </span>

                  

                  
                              

              
                                  <div class="product-miniature__discount-price">
                                          

                      <span class="product-miniature__regular-price" aria-label="Prix de base">35,90 €</span>
                                      </div>
                              
            </div>

                          <form action="http://localhost/presta/panier" method="post" class="d-flex flex-wrap flex-md-nowrap gap-3 align-items-center mt-3">
                <input type="hidden" value="2" name="id_product">

                <input type="hidden" name="token" value="0422ff6a359a023f6bc1a3195c56a51b" />

                <div class="quantity-button js-quantity-button w-100 w-sm-auto">
                  

    
<div class="input-group flex-nowrap mb-0">
  <button role="button" aria-label="decrement" class="btn decrement js-decrement-button" type="button">
    <i class="material-icons" aria-hidden="true">&#xE15B;</i>
    <i class="material-icons confirmation d-none">&#xE5CD;</i>
    <div class="spinner-border spinner-border-sm align-middle d-none" role="status"></div>
  </button>

  <input
          id="quantity_wanted_2"
          value="1"
          min="1"
              class="form-control"
      name="qty"
      aria-label="Quantité"
      type="text"
      inputmode="numeric"
      pattern="[0-9]*"
      value="1"
      min="1"
      />

  <button role="button" aria-label="increment" class="btn increment js-increment-button" type="button">
    <i class="material-icons" aria-hidden="true">&#xE145;</i>
    <i class="material-icons confirmation d-none">&#xE5CA;</i>
    <div class="spinner-border spinner-border-sm align-middle d-none" role="status"></div>
  </button>
</div>
                </div>

                <button data-button-action="add-to-cart" class="btn btn-primary flex-grow-1 flex-md-grow-0">
                  <i class="material-icons" aria-hidden="true">&#xe854;</i>
                  <span class="visually-hidden">Ajouter au panier</span>
                </button>
              </form>
                      </div>
        </div>
      
    </div>
  </article>

      

  <article
    class="product-miniature js-product-miniature col-12 col-xs-6 col-lg-4 col-xl-3"
    data-id-product="1"
    data-id-product-attribute="1"
  >
    <div class="card">
      <a href="http://localhost/presta/1-1-hummingbird-printed-t-shirt.html#/1-taille-s/8-couleur-blanc" class="product-miniature__link">
        
  <ul class="product-flags js-product-flags">
          <li class="badge discount">-20%</li>
          <li class="badge new">Neuf</li>
      </ul>


        
          <div class="product-miniature__image-container thumbnail-container">
                          <picture>
                
                
                <img
                  class="product-miniature__image card-img-top"
                  srcset="
                    http://localhost/presta/1-default_xs/hummingbird-printed-t-shirt.jpg 120w,
                    http://localhost/presta/1-default_m/hummingbird-printed-t-shirt.jpg 200w,
                    http://localhost/presta/1-default_md/hummingbird-printed-t-shirt.jpg 320w,
                    http://localhost/presta/1-product_main/hummingbird-printed-t-shirt.jpg 720w"
                  sizes="(min-width: 1300px) 320px, (min-width: 768px) 120px, 50vw"
                  src="http://localhost/presta/1-default_md/hummingbird-printed-t-shirt.jpg"
                  width="320"
                  height="320"
                  loading="lazy"
                  alt="T-shirt imprimé colibri"
                  title="T-shirt imprimé colibri"
                  data-full-size-image-url="http://localhost/presta/1-home_default/hummingbird-printed-t-shirt.jpg"
                >
              </picture>
            
            
              <button class="product-miniature__quickview_touch btn js-quickview" data-link-action="quickview">
                <i class="material-icons">&#xE417;</i>
              </button>
            
          </div>
        
      </a>

      
        <div class="product-miniature__infos card-body">
          
            <div class="product-miniature__quickview">
              <button class="product-miniature__quickview_button btn btn-link js-quickview btn-with-icon" data-link-action="quickview">
                <i class="material-icons" aria-hidden="true">&#xE417;</i>
                Aperçu rapide
              </button>
            </div>
          

          <div class="product-miniature__infos__top">
            
              <a href="http://localhost/presta/1-1-hummingbird-printed-t-shirt.html#/1-taille-s/8-couleur-blanc"><p class="product-miniature__title">T-shirt imprimé colibri</p></a>
            
          </div>

          <div class="product-miniature__infos__bottom">
            
              <div class="product-miniature__variants">
                                  <div class="variant-links">
      <a href="http://localhost/presta/1-1-hummingbird-printed-t-shirt.html#/1-taille-s/8-couleur-blanc"
       class="color"
       title="Blanc"
       aria-label="Blanc"
       style="background-color: #ffffff"    ></a>
      <a href="http://localhost/presta/1-2-hummingbird-printed-t-shirt.html#/1-taille-s/11-couleur-noir"
       class="color"
       title="Noir"
       aria-label="Noir"
       style="background-color: #434A54"    ></a>
  
  <span class="js-count count"></span>
</div>
                              </div>
            

            
              
<div class="product-list-reviews" data-id="1" data-url="http://localhost/presta/module/productcomments/CommentGrade">
  <div class="grade-stars small-stars"></div>
  <div class="comments-nb"></div>
</div>

            

            <div class="product-miniature__prices">
              
                                  

                  <span class="product-miniature__price" aria-label="Prix">
                                                              19,12 €
                                      </span>

                  

                  
                              

              
                                  <div class="product-miniature__discount-price">
                                          

                      <span class="product-miniature__regular-price" aria-label="Prix de base">23,90 €</span>
                                      </div>
                              
            </div>

                          <form action="http://localhost/presta/panier" method="post" class="d-flex flex-wrap flex-md-nowrap gap-3 align-items-center mt-3">
                <input type="hidden" value="1" name="id_product">

                <input type="hidden" name="token" value="0422ff6a359a023f6bc1a3195c56a51b" />

                <div class="quantity-button js-quantity-button w-100 w-sm-auto">
                  

    
<div class="input-group flex-nowrap mb-0">
  <button role="button" aria-label="decrement" class="btn decrement js-decrement-button" type="button">
    <i class="material-icons" aria-hidden="true">&#xE15B;</i>
    <i class="material-icons confirmation d-none">&#xE5CD;</i>
    <div class="spinner-border spinner-border-sm align-middle d-none" role="status"></div>
  </button>

  <input
          id="quantity_wanted_1"
          value="1"
          min="1"
              class="form-control"
      name="qty"
      aria-label="Quantité"
      type="text"
      inputmode="numeric"
      pattern="[0-9]*"
      value="1"
      min="1"
      />

  <button role="button" aria-label="increment" class="btn increment js-increment-button" type="button">
    <i class="material-icons" aria-hidden="true">&#xE145;</i>
    <i class="material-icons confirmation d-none">&#xE5CA;</i>
    <div class="spinner-border spinner-border-sm align-middle d-none" role="status"></div>
  </button>
</div>
                </div>

                <button data-button-action="add-to-cart" class="btn btn-primary flex-grow-1 flex-md-grow-0">
                  <i class="material-icons" aria-hidden="true">&#xe854;</i>
                  <span class="visually-hidden">Ajouter au panier</span>
                </button>
              </form>
                      </div>
        </div>
      
    </div>
  </article>

  </div>
        <div class="sale-products-footer text-center">
            <a class="all-product-link btn btn-outline-primary" href="http://localhost/presta/promotions">
                Tous les produits en promotion<i class="material-icons rtl-flip" aria-hidden="true">&#xE315;</i>
            </a>
        </div>
    </div>
</section>
<?php }
}
