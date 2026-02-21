<?php
/* Smarty version 4.5.5, created on 2026-02-21 21:49:33
  from '/opt/lampp/htdocs/presta/themes/hummingbird/templates/_partials/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_699a1a5d42cb56_75373794',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24e45bd510287b8074311df0e43559fecd68c3ac' => 
    array (
      0 => '/opt/lampp/htdocs/presta/themes/hummingbird/templates/_partials/header.tpl',
      1 => 1750074754,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_699a1a5d42cb56_75373794 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_assignInScope('headerTopName', 'header-top');
$_smarty_tpl->_assignInScope('headerBottomName', 'header-bottom');?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_282528640699a1a5d424ac6_56764794', 'header_banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_602257942699a1a5d425589_57699951', 'header_nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1782229790699a1a5d4268e2_71769489', 'header_bottom');
?>

<?php }
/* {block 'header_banner'} */
class Block_282528640699a1a5d424ac6_56764794 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_banner' => 
  array (
    0 => 'Block_282528640699a1a5d424ac6_56764794',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header__banner">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBanner'),$_smarty_tpl ) );?>

  </div>
<?php
}
}
/* {/block 'header_banner'} */
/* {block 'header_nav'} */
class Block_602257942699a1a5d425589_57699951 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_602257942699a1a5d425589_57699951',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <nav class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['headerTopName']->value), ENT_QUOTES, 'UTF-8');?>
">
    <div class="container-md">
      <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['headerTopName']->value), ENT_QUOTES, 'UTF-8');?>
-desktop d-none d-md-flex row">
        <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['headerTopName']->value), ENT_QUOTES, 'UTF-8');?>
__left col-md-5">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );?>

        </div>

        <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['headerTopName']->value), ENT_QUOTES, 'UTF-8');?>
__right col-md-7">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2'),$_smarty_tpl ) );?>

        </div>
      </div>
    </div>
  </nav>
<?php
}
}
/* {/block 'header_nav'} */
/* {block 'header_bottom'} */
class Block_1782229790699a1a5d4268e2_71769489 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_bottom' => 
  array (
    0 => 'Block_1782229790699a1a5d4268e2_71769489',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['headerBottomName']->value), ENT_QUOTES, 'UTF-8');?>
">
    <div class="container-md <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['headerBottomName']->value), ENT_QUOTES, 'UTF-8');?>
__container">
      <div class="row gx-2 align-items-stretch <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['headerBottomName']->value), ENT_QUOTES, 'UTF-8');?>
__row">
        <div class="d-flex align-items-center col-auto logo order-xl-1 ms-lg-0 ms-2 me-lg-0 me-auto">
          <?php if ($_smarty_tpl->tpl_vars['shop']->value['logo_details']) {?>
            <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?><h1 class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['headerBottomName']->value), ENT_QUOTES, 'UTF-8');?>
__h1 mb-0"><?php }?>
              <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'renderLogo', array(), true);?>

            <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?></h1><?php }?>
          <?php }?>
        </div>

        <div class="search__mobile d-md-none d-flex col-auto">

          <div class="header-block d-flex align-items-center">
            <a class="header-block__action-btn" href="#" role="button" data-bs-toggle="offcanvas" data-bs-target="#searchCanvas" aria-controls="searchCanvas" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show search bar','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">
              <span class="material-icons header-block__icon">search</span>
            </a>
          </div>

          <div class="search__offcanvas js-search-offcanvas offcanvas offcanvas-top h-auto" data-bs-backdrop="false" data-bs-scroll="true" tabindex="-1" id="searchCanvas" aria-labelledby="offcanvasTopLabel">
            <div class="offcanvas-header">
              <div id="_mobile_search" class="search__container"></div>
              <button type="button" class="btn-close text-reset ms-1" data-bs-dismiss="offcanvas" aria-label="Close"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</button>
            </div>
          </div>
        </div>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>


        <div id="_mobile_user_info" class="d-md-none d-flex col-auto">
                    <div class="header-block">
            <span class="header-block__action-btn">
              <i class="material-icons header-block__icon" aria-hidden="true">&#xE7FD;</i>
              <span class="d-none d-md-inline header-block__title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
            </span>
          </div>
                  </div>

        <div id="_mobile_cart" class="d-md-none col-auto d-flex">
                    <div class="header-block d-flex align-items-center">
            <span class="header-block__action-btn">
              <i class="material-icons header-block__icon" aria-hidden="true">shopping_cart</i>
              <span class="header-block__badge"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['cart']->value['products_count']), ENT_QUOTES, 'UTF-8');?>
</span>
            </span>
          </div>
                  </div>
      </div>
    </div>
  </div>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'header_bottom'} */
}
