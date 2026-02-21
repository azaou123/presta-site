<?php
/* Smarty version 4.5.5, created on 2026-02-21 21:51:13
  from '/opt/lampp/htdocs/presta/admin552enew9u61gh2blvik/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_699a1ac1722ea8_18598948',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09fb718a8e9d87d5c37c99582c4cbf7040faf5c3' => 
    array (
      0 => '/opt/lampp/htdocs/presta/admin552enew9u61gh2blvik/themes/default/template/content.tpl',
      1 => 1770111022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_699a1ac1722ea8_18598948 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
