<?php
/* Smarty version 3.1.33, created on 2019-02-27 11:31:55
  from 'C:\laragon\www\infoccasion\modules\ps_legalcompliance\views\templates\hook\hookDisplayProductPriceBlock_before_price.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c76671bc85072_37221230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0666e490a7730784e07b389c278730c16ddf9c81' => 
    array (
      0 => 'C:\\laragon\\www\\infoccasion\\modules\\ps_legalcompliance\\views\\templates\\hook\\hookDisplayProductPriceBlock_before_price.tpl',
      1 => 1551259738,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c76671bc85072_37221230 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '15019194755c76671bc6d437_04280166';
?>

<?php if (isset($_smarty_tpl->tpl_vars['smartyVars']->value)) {?>
        <?php if (isset($_smarty_tpl->tpl_vars['smartyVars']->value['before_price']) && isset($_smarty_tpl->tpl_vars['smartyVars']->value['before_price']['from_str_i18n'])) {?>
        <span class="aeuc_from_label">
            <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['smartyVars']->value['before_price']['from_str_i18n'],'htmlall' )), ENT_QUOTES, 'UTF-8');?>

        </span>
    <?php }
}
}
}
