<?php
/* Smarty version 4.5.5, created on 2026-02-21 21:49:33
  from '/opt/lampp/htdocs/presta/themes/hummingbird/templates/_partials/preload.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_699a1a5d3d71e9_12100448',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ed92acfa26489d32ba9327f66ebc9ea2f3f734c' => 
    array (
      0 => '/opt/lampp/htdocs/presta/themes/hummingbird/templates/_partials/preload.tpl',
      1 => 1750074754,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_699a1a5d3d71e9_12100448 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/presta/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->_assignInScope('themeDir', _PS_THEME_DIR_);
$_smarty_tpl->_assignInScope('preloadFilePath', ((string)$_smarty_tpl->tpl_vars['themeDir']->value)."assets/preload.html");
$_smarty_tpl->_assignInScope('assetsUrl', $_smarty_tpl->tpl_vars['urls']->value['theme_assets']);?>

<?php if (file_exists($_smarty_tpl->tpl_vars['preloadFilePath']->value)) {?>
  <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "preloadBlock", null, null);
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['preloadFilePath']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
  <?php echo smarty_modifier_replace($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'preloadBlock'),'href="../',"href=\"".((string)$_smarty_tpl->tpl_vars['assetsUrl']->value));?>

<?php }
}
}
