<?php
/* Smarty version 3.1.33, created on 2019-02-27 11:31:57
  from 'C:\laragon\www\infoccasion\modules\leobootstrapmenu\views\widgets\widget_html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c76671dc1fe18_96074400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2dc2a25f3da0ad4876642182627701f29c9a361a' => 
    array (
      0 => 'C:\\laragon\\www\\infoccasion\\modules\\leobootstrapmenu\\views\\widgets\\widget_html.tpl',
      1 => 1551263387,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c76671dc1fe18_96074400 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['html']->value)) {?>
<div class="widget-html">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value) && !empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<div class="menu-title">
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_heading']->value, ENT_QUOTES, 'UTF-8');?>

	</div>
	<?php }?>
	<div class="widget-inner">
		<?php echo $_smarty_tpl->tpl_vars['html']->value;?>

	</div>
</div>
<?php }
}
}
