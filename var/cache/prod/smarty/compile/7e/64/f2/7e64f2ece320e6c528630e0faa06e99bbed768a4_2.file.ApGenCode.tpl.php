<?php
/* Smarty version 3.1.33, created on 2019-02-27 11:31:57
  from 'C:\laragon\www\infoccasion\modules\appagebuilder\views\templates\hook\ApGenCode.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c76671d50d1f8_96800462',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e64f2ece320e6c528630e0faa06e99bbed768a4' => 
    array (
      0 => 'C:\\laragon\\www\\infoccasion\\modules\\appagebuilder\\views\\templates\\hook\\ApGenCode.tpl',
      1 => 1551263385,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c76671d50d1f8_96800462 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\hook\ApGenCode -->

<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['tpl_file']) && !empty($_smarty_tpl->tpl_vars['formAtts']->value['tpl_file'])) {?>
	<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['formAtts']->value['tpl_file'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>

<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['error_file']) && !empty($_smarty_tpl->tpl_vars['formAtts']->value['error_file'])) {?>
	<?php echo $_smarty_tpl->tpl_vars['formAtts']->value['error_message'];
}
}
}
