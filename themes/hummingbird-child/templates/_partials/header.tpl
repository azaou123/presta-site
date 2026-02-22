{**
 * Hummingbird Child - Header override
 *}
<!DOCTYPE html>
<html lang="{$language.iso_code}">
<head>
  {block name='head'}
    {include file='_partials/head.tpl'}
  {/block}
</head>
<body id="{$page.page_name}" class="{$page.body_classes|classnames}">

{block name='hook_after_body_opening_tag'}
  {hook h='displayAfterBodyOpeningTag'}
{/block}

<main>
  {block name='header'}
    <header id="header" class="header">
      {block name='header_nav'}
        <nav class="header-nav">
          <div class="container">
            <div class="row">
              {hook h='displayNav1'}
            </div>
          </div>
        </nav>
      {/block}
      <div class="header-top">
        <div class="container">
          <div class="row">
            <div class="col-md-3" id="_desktop_logo">
              <a href="{$urls.base_url}">
                <img class="logo img-fluid" src="{$shop.logo}" alt="{$shop.name}">
              </a>
            </div>
            <div class="col-md-9">
              {hook h='displayTop'}
            </div>
          </div>
          <!-- Custom header message -->
          <div class="row">
            <div class="col-12 text-center">
              <p class="custom-header-message" style="color: var(--brand-primary);">Bienvenue sur NutriSport – Livraison offerte dès 50€</p>
            </div>
          </div>
        </div>
      </div>
    </header>
  {/block}

  {block name='notifications'}
    {include file='_partials/notifications.tpl'}
  {/block}

  {block name='content'}
    <!-- Page content will be inserted here by child templates -->
  {/block}

  {block name='footer'}
    {include file='_partials/footer.tpl'}
  {/block}
</main>

{block name='javascript_bottom'}
  {include file='_partials/javascript.tpl'}
{/block}

{block name='hook_before_body_closing_tag'}
  {hook h='displayBeforeBodyClosingTag'}
{/block}
</body>
</html>