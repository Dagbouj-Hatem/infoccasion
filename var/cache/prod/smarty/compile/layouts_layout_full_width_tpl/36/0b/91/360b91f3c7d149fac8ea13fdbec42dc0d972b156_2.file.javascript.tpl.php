<?php
/* Smarty version 3.1.33, created on 2019-02-27 11:31:56
  from 'C:\laragon\www\infoccasion\themes\leo_trump\templates\_partials\javascript.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c76671cbcf728_47234282',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '360b91f3c7d149fac8ea13fdbec42dc0d972b156' => 
    array (
      0 => 'C:\\laragon\\www\\infoccasion\\themes\\leo_trump\\templates\\_partials\\javascript.tpl',
      1 => 1551263394,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c76671cbcf728_47234282 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['javascript']->value['external'], 'js');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['js']->value) {
?>
  <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js']->value['attribute'], ENT_QUOTES, 'UTF-8');?>
><?php echo '</script'; ?>
>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['javascript']->value['inline'], 'js');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['js']->value) {
?>
  <?php echo '<script'; ?>
 type="text/javascript">
    <?php echo $_smarty_tpl->tpl_vars['js']->value['content'];?>

  <?php echo '</script'; ?>
>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php if (isset($_smarty_tpl->tpl_vars['vars']->value) && count($_smarty_tpl->tpl_vars['vars']->value)) {?>
  <?php echo '<script'; ?>
 type="text/javascript">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vars']->value, 'var_value', false, 'var_name');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['var_name']->value => $_smarty_tpl->tpl_vars['var_value']->value) {
?>
    var <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
 = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['var_value']->value ));?>
;
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php echo '</script'; ?>
>
<?php }
echo '<script'; ?>
 type="text/javascript">
	var choosefile_text = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose file','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
";
	var turnoff_popup_text = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do not show this popup again','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
";

	var size_item_quickview = 94;
	var style_scroll_quickview = 'horizontal';
	
	var size_item_page = 94;
	var style_scroll_page = 'horizontal';
	
	var size_item_quickview_attr = 94;	
	var style_scroll_quickview_attr = 'horizontal';
	
	var size_item_popup = 140;
	var style_scroll_popup = 'vertical';
<?php echo '</script'; ?>
><?php }
}
