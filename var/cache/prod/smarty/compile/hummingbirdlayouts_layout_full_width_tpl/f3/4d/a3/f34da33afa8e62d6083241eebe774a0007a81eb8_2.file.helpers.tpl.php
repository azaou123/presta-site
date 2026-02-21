<?php
/* Smarty version 4.5.5, created on 2026-02-21 21:49:33
  from '/opt/lampp/htdocs/presta/themes/hummingbird/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_699a1a5d3b8ca0_56016033',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f34da33afa8e62d6083241eebe774a0007a81eb8' => 
    array (
      0 => '/opt/lampp/htdocs/presta/themes/hummingbird/templates/_partials/helpers.tpl',
      1 => 1750074754,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_699a1a5d3b8ca0_56016033 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/opt/lampp/htdocs/presta/var/cache/prod/smarty/compile/hummingbirdlayouts_layout_full_width_tpl/f3/4d/a3/f34da33afa8e62d6083241eebe774a0007a81eb8_2.file.helpers.tpl.php',
    'uid' => 'f34da33afa8e62d6083241eebe774a0007a81eb8',
    'call_name' => 'smarty_template_function_renderLogo_569359550699a1a5d3adea2_50214667',
  ),
));
?>

<?php }
/* smarty_template_function_renderLogo_569359550699a1a5d3adea2_50214667 */
if (!function_exists('smarty_template_function_renderLogo_569359550699a1a5d3adea2_50214667')) {
function smarty_template_function_renderLogo_569359550699a1a5d3adea2_50214667(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a class="navbar-brand d-block" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['pages']['index']), ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src']), ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['shop']->value['name']), ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width']), ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height']), ENT_QUOTES, 'UTF-8');?>
"
    >
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_569359550699a1a5d3adea2_50214667 */
}
