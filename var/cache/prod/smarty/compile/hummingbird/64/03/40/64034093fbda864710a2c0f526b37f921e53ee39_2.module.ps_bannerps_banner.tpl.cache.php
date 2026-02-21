<?php
/* Smarty version 4.5.5, created on 2026-02-21 21:49:32
  from 'module:ps_bannerps_banner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_699a1a5ce12589_05359257',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64034093fbda864710a2c0f526b37f921e53ee39' => 
    array (
      0 => 'module:ps_bannerps_banner.tpl',
      1 => 1750074754,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_699a1a5ce12589_05359257 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '73727219699a1a5ce0edb7_72758495';
?>
<a class="banner d-block text-center" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['banner_link']->value), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['banner_desc']->value), ENT_QUOTES, 'UTF-8');?>
">
  <?php if ((isset($_smarty_tpl->tpl_vars['banner_img']->value))) {?>
    <img
      src="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['banner_img']->value), ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['banner_desc']->value), ENT_QUOTES, 'UTF-8');?>
"
      title="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['banner_desc']->value), ENT_QUOTES, 'UTF-8');?>
"
      class="img-fluid"
      loading="lazy"
      <?php if (!empty($_smarty_tpl->tpl_vars['banner_width']->value)) {?>
        width="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['banner_width']->value), ENT_QUOTES, 'UTF-8');?>
"
      <?php }?>
      <?php if (!empty($_smarty_tpl->tpl_vars['banner_height']->value)) {?>
        height="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['banner_height']->value), ENT_QUOTES, 'UTF-8');?>
"
      <?php }?>
      >
  <?php } else { ?>
    <span><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['banner_desc']->value), ENT_QUOTES, 'UTF-8');?>
</span>
  <?php }?>
</a>
<?php }
}
