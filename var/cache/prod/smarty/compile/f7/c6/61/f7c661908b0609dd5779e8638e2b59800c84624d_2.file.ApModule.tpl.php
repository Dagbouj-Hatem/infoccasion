<?php
/* Smarty version 3.1.33, created on 2019-02-27 11:31:56
  from 'C:\laragon\www\infoccasion\modules\appagebuilder\views\templates\hook\ApModule.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c76671c124783_90328354',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7c661908b0609dd5779e8638e2b59800c84624d' => 
    array (
      0 => 'C:\\laragon\\www\\infoccasion\\modules\\appagebuilder\\views\\templates\\hook\\ApModule.tpl',
      1 => 1551263385,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c76671c124783_90328354 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\hook\ApModule -->
<?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';
echo $_smarty_tpl->tpl_vars['apContent']->value;
echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';
}
}
