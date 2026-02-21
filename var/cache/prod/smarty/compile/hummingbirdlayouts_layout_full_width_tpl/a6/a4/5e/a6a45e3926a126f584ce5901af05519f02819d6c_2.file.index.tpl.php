<?php
/* Smarty version 4.5.5, created on 2026-02-21 21:49:33
  from '/opt/lampp/htdocs/presta/themes/hummingbird/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_699a1a5d392c40_03247674',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6a45e3926a126f584ce5901af05519f02819d6c' => 
    array (
      0 => '/opt/lampp/htdocs/presta/themes/hummingbird/templates/index.tpl',
      1 => 1750074754,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_699a1a5d392c40_03247674 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1652111687699a1a5d38bac0_98816577', 'breadcrumb');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_498347196699a1a5d38c1d5_87173271', 'content_columns');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'breadcrumb'} */
class Block_1652111687699a1a5d38bac0_98816577 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_1652111687699a1a5d38bac0_98816577',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'breadcrumb'} */
/* {block 'left_column'} */
class Block_156236332699a1a5d38c532_71104711 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'page_title'} */
class Block_1447013446699a1a5d38d9b2_15722076 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <header class="page-header">
                <h1 class="h1"><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
              </header>
            <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_2065295841699a1a5d38d595_41769365 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1447013446699a1a5d38d9b2_15722076', 'page_title', $this->tplIndex);
?>

          <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_1186429442699a1a5d38fcd2_38147940 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_1106732563699a1a5d3904c8_09356078 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

                <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_2069978395699a1a5d3901b1_86150504 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1106732563699a1a5d3904c8_09356078', 'hook_home', $this->tplIndex);
?>

              <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_922661725699a1a5d38f987_51441412 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <section id="content" class="page-content page-home">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1186429442699a1a5d38fcd2_38147940', 'page_content_top', $this->tplIndex);
?>


              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2069978395699a1a5d3901b1_86150504', 'page_content', $this->tplIndex);
?>

            </section>
          <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_1559435903699a1a5d3914f2_49184533 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <!-- Footer content -->
              <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_1879567924699a1a5d3911d7_94799157 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <footer class="page-footer">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1559435903699a1a5d3914f2_49184533', 'page_footer', $this->tplIndex);
?>

            </footer>
          <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_2096340727699a1a5d38d271_29830387 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <!-- TODO INSIDE -->
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2065295841699a1a5d38d595_41769365', 'page_header_container', $this->tplIndex);
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_922661725699a1a5d38f987_51441412', 'page_content_container', $this->tplIndex);
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1879567924699a1a5d3911d7_94799157', 'page_footer_container', $this->tplIndex);
?>

        <!-- TODO INSIDE -->
      <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_418453377699a1a5d38ca40_15412559 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="content-wrapper" class="wrapper__content">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2096340727699a1a5d38d271_29830387', 'content', $this->tplIndex);
?>


      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

    </div>
  <?php
}
}
/* {/block 'content_wrapper'} */
/* {block 'right_column'} */
class Block_1889244902699a1a5d3924b3_84460206 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content_columns'} */
class Block_498347196699a1a5d38c1d5_87173271 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_columns' => 
  array (
    0 => 'Block_498347196699a1a5d38c1d5_87173271',
  ),
  'left_column' => 
  array (
    0 => 'Block_156236332699a1a5d38c532_71104711',
  ),
  'content_wrapper' => 
  array (
    0 => 'Block_418453377699a1a5d38ca40_15412559',
  ),
  'content' => 
  array (
    0 => 'Block_2096340727699a1a5d38d271_29830387',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_2065295841699a1a5d38d595_41769365',
  ),
  'page_title' => 
  array (
    0 => 'Block_1447013446699a1a5d38d9b2_15722076',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_922661725699a1a5d38f987_51441412',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1186429442699a1a5d38fcd2_38147940',
  ),
  'page_content' => 
  array (
    0 => 'Block_2069978395699a1a5d3901b1_86150504',
  ),
  'hook_home' => 
  array (
    0 => 'Block_1106732563699a1a5d3904c8_09356078',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_1879567924699a1a5d3911d7_94799157',
  ),
  'page_footer' => 
  array (
    0 => 'Block_1559435903699a1a5d3914f2_49184533',
  ),
  'right_column' => 
  array (
    0 => 'Block_1889244902699a1a5d3924b3_84460206',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_156236332699a1a5d38c532_71104711', 'left_column', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_418453377699a1a5d38ca40_15412559', 'content_wrapper', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1889244902699a1a5d3924b3_84460206', 'right_column', $this->tplIndex);
?>

<?php
}
}
/* {/block 'content_columns'} */
}
