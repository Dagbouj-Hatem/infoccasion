<?php
/* Smarty version 3.1.33, created on 2019-02-27 11:31:56
  from 'C:\laragon\www\infoccasion\themes\leo_trump\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c76671c394960_91195417',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb948c2ead48f691dedef9cbd2b5f4c1533f2774' => 
    array (
      0 => 'C:\\laragon\\www\\infoccasion\\themes\\leo_trump\\templates\\page.tpl',
      1 => 1551263394,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c76671c394960_91195417 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4127671305c76671c385e56_58966549', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_12757799745c76671c387d31_78450680 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_8452290765c76671c386c55_56514936 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12757799745c76671c387d31_78450680', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_3524177775c76671c38f932_59566495 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_11822286295c76671c3908e5_42911808 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_9784599175c76671c38ec30_72088084 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3524177775c76671c38f932_59566495', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11822286295c76671c3908e5_42911808', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_3950325465c76671c3929f9_86341786 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_21050525975c76671c391ef9_62605390 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3950325465c76671c3929f9_86341786', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_4127671305c76671c385e56_58966549 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4127671305c76671c385e56_58966549',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_8452290765c76671c386c55_56514936',
  ),
  'page_title' => 
  array (
    0 => 'Block_12757799745c76671c387d31_78450680',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_9784599175c76671c38ec30_72088084',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_3524177775c76671c38f932_59566495',
  ),
  'page_content' => 
  array (
    0 => 'Block_11822286295c76671c3908e5_42911808',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_21050525975c76671c391ef9_62605390',
  ),
  'page_footer' => 
  array (
    0 => 'Block_3950325465c76671c3929f9_86341786',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8452290765c76671c386c55_56514936', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9784599175c76671c38ec30_72088084', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21050525975c76671c391ef9_62605390', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
