<?php
/* Smarty version 3.1.33, created on 2019-02-27 11:31:56
  from 'C:\laragon\www\infoccasion\themes\leo_trump\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c76671c2919d5_06849950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7af054c234f72631f687dcf5c7214d1aacc26f5' => 
    array (
      0 => 'C:\\laragon\\www\\infoccasion\\themes\\leo_trump\\templates\\index.tpl',
      1 => 1551263394,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c76671c2919d5_06849950 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_822281975c76671c28cee3_88081149', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_17172568305c76671c28da33_30754610 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_3117061745c76671c28f3d1_45342326 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_10490647815c76671c28e9b6_13253306 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3117061745c76671c28f3d1_45342326', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_822281975c76671c28cee3_88081149 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_822281975c76671c28cee3_88081149',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_17172568305c76671c28da33_30754610',
  ),
  'page_content' => 
  array (
    0 => 'Block_10490647815c76671c28e9b6_13253306',
  ),
  'hook_home' => 
  array (
    0 => 'Block_3117061745c76671c28f3d1_45342326',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17172568305c76671c28da33_30754610', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10490647815c76671c28e9b6_13253306', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
