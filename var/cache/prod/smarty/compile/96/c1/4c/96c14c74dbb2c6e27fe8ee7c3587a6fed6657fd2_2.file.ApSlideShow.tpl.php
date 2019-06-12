<?php
/* Smarty version 3.1.33, created on 2019-02-27 11:31:51
  from 'C:\laragon\www\infoccasion\modules\appagebuilder\views\templates\hook\ApSlideShow.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7667175092e5_03656990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96c14c74dbb2c6e27fe8ee7c3587a6fed6657fd2' => 
    array (
      0 => 'C:\\laragon\\www\\infoccasion\\modules\\appagebuilder\\views\\templates\\hook\\ApSlideShow.tpl',
      1 => 1551263385,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7667175092e5_03656990 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\hook\ApSlideShow -->
<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['lib_has_error']) && $_smarty_tpl->tpl_vars['formAtts']->value['lib_has_error']) {?>
    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['lib_error']) && $_smarty_tpl->tpl_vars['formAtts']->value['lib_error']) {?>
        <div class="alert alert-warning leo-lib-error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['lib_error'], ENT_QUOTES, 'UTF-8');?>
</div>
    <?php }
} else { ?>
<div id="slideshow-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="ApSlideShow">
	<?php if (isset($_smarty_tpl->tpl_vars['content_slider']->value)) {?>
		<?php echo $_smarty_tpl->tpl_vars['content_slider']->value;?>
	<?php }?>
</div>
<?php }
}
}
