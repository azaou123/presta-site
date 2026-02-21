<?php
/* Smarty version 4.5.5, created on 2026-02-21 21:49:32
  from '/opt/lampp/htdocs/presta/themes/hummingbird/templates/components/section-title.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_699a1a5cc42c16_18249582',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd18a4ecc6a7bfb6ed2731509d830639e78926def' => 
    array (
      0 => '/opt/lampp/htdocs/presta/themes/hummingbird/templates/components/section-title.tpl',
      1 => 1750074754,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_699a1a5cc42c16_18249582 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '1801018349699a1a5cc3bce2_54906110';
$_smarty_tpl->_assignInScope('componentName', 'section-title');?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2073486710699a1a5cc41c50_70932260', 'section_title');
?>

<?php }
/* {block 'section_title'} */
class Block_2073486710699a1a5cc41c50_70932260 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'section_title' => 
  array (
    0 => 'Block_2073486710699a1a5cc41c50_70932260',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <h2 class="h2 <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['title']->value), ENT_QUOTES, 'UTF-8');?>
</h2>
<?php
}
}
/* {/block 'section_title'} */
}
