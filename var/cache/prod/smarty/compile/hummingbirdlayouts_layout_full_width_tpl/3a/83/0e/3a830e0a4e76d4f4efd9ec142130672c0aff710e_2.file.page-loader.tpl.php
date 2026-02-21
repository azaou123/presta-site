<?php
/* Smarty version 4.5.5, created on 2026-02-21 21:49:33
  from '/opt/lampp/htdocs/presta/themes/hummingbird/templates/components/page-loader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_699a1a5d5af2d4_46965396',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a830e0a4e76d4f4efd9ec142130672c0aff710e' => 
    array (
      0 => '/opt/lampp/htdocs/presta/themes/hummingbird/templates/components/page-loader.tpl',
      1 => 1750074754,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_699a1a5d5af2d4_46965396 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_assignInScope('componentName', 'page-loader');?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_68495529699a1a5d5ae7d8_59140044', 'page_loader');
?>

<?php }
/* {block 'page_loader'} */
class Block_68495529699a1a5d5ae7d8_59140044 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_loader' => 
  array (
    0 => 'Block_68495529699a1a5d5ae7d8_59140044',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="page-loader js-page-loader d-none">
    <div class="spinner-border text-primary" role="status">
      <span class="visually-hidden"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Loading...','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
    </div>
  </div>
<?php
}
}
/* {/block 'page_loader'} */
}
