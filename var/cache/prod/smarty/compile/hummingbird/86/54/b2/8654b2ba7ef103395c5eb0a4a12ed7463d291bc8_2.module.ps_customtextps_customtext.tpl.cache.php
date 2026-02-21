<?php
/* Smarty version 4.5.5, created on 2026-02-21 21:49:32
  from 'module:ps_customtextps_customtext.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_699a1a5ca8e947_74720388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8654b2ba7ef103395c5eb0a4a12ed7463d291bc8' => 
    array (
      0 => 'module:ps_customtextps_customtext.tpl',
      1 => 1750074754,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_699a1a5ca8e947_74720388 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1670270830699a1a5ca8d887_60829972';
?>

<div id="custom-text">
  <div class="container">
    <div class="custom-text__content rich-text">
      <?php echo $_smarty_tpl->tpl_vars['cms_infos']->value['text'];?>

    </div>
  </div>
</div>
<?php }
}
