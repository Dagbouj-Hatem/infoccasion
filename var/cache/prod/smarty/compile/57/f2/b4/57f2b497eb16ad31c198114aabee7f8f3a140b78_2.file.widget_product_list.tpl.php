<?php
/* Smarty version 3.1.33, created on 2019-02-27 11:31:57
  from 'C:\laragon\www\infoccasion\themes\leo_trump\modules\leobootstrapmenu\views\widgets\widget_product_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c76671d8602d3_64459407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57f2b497eb16ad31c198114aabee7f8f3a140b78' => 
    array (
      0 => 'C:\\laragon\\www\\infoccasion\\themes\\leo_trump\\modules\\leobootstrapmenu\\views\\widgets\\widget_product_list.tpl',
      1 => 1551263392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c76671d8602d3_64459407 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\infoccasion\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php','function'=>'smarty_function_math',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php if (isset($_smarty_tpl->tpl_vars['products']->value) && !empty($_smarty_tpl->tpl_vars['products']->value)) {?>
<div class="widget-products">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value) && !empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<div class="menu-title">
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_heading']->value, ENT_QUOTES, 'UTF-8');?>

	</div>
	<?php }?>
	<div class="widget-inner">
		<?php if (isset($_smarty_tpl->tpl_vars['products']->value) && $_smarty_tpl->tpl_vars['products']->value) {?>
			<div class="product-block">
				<?php $_smarty_tpl->_assignInScope('liHeight', 140);?>
				<?php $_smarty_tpl->_assignInScope('nbItemsPerLine', 3);?>
				<?php $_smarty_tpl->_assignInScope('nbLi', $_smarty_tpl->tpl_vars['limit']->value);?>
				<?php echo smarty_function_math(array('equation'=>"nbLi/nbItemsPerLine",'nbLi'=>$_smarty_tpl->tpl_vars['nbLi']->value,'nbItemsPerLine'=>$_smarty_tpl->tpl_vars['nbItemsPerLine']->value,'assign'=>'nbLines'),$_smarty_tpl);?>

				<?php echo smarty_function_math(array('equation'=>"nbLines*liHeight",'nbLines'=>ceil($_smarty_tpl->tpl_vars['nbLines']->value),'liHeight'=>$_smarty_tpl->tpl_vars['liHeight']->value,'assign'=>'ulHeight'),$_smarty_tpl);?>
	 

				<?php $_smarty_tpl->_assignInScope('mproducts', array_chunk($_smarty_tpl->tpl_vars['products']->value,$_smarty_tpl->tpl_vars['limit']->value));?>
				 
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, NULL, 'homeFeaturedProducts', array (
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
					<?php echo smarty_function_math(array('equation'=>"(total%perLine)",'total'=>(isset($_smarty_tpl->tpl_vars['__smarty_foreach_homeFeaturedProducts']->value['total']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_homeFeaturedProducts']->value['total'] : null),'perLine'=>$_smarty_tpl->tpl_vars['nbItemsPerLine']->value,'assign'=>'totModulo'),$_smarty_tpl);?>

					<?php if ($_smarty_tpl->tpl_vars['totModulo']->value == 0) {
$_smarty_tpl->_assignInScope('totModulo', $_smarty_tpl->tpl_vars['nbItemsPerLine']->value);
}?> 
					<div class="product-miniature js-product-miniature" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
					  	<div class="thumbnail-container clearfix">
					    	<div class="product-image">
						      	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7339968495c76671d84fa75_25109710', 'product_thumbnail');
?>

					    	</div>
						    <div class="product-meta">
						      	<div class="product-description">
							        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7315381585c76671d8554b9_27625435', 'product_name');
?>


							        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4448147705c76671d859361_18807686', 'product_price_and_shipping');
?>

						      	</div>
						    </div>
					  	</div>
					</div>			
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
		<?php }?>
	</div>
</div>
<?php }
}
/* {block 'product_thumbnail'} */
class Block_7339968495c76671d84fa75_25109710 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_thumbnail' => 
  array (
    0 => 'Block_7339968495c76671d84fa75_25109710',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
							          	<img
								            class="img-fluid"
								            src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['small_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
								            alt = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
"
								            data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
							          	>
							        </a>
						      	<?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_name'} */
class Block_7315381585c76671d8554b9_27625435 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_name' => 
  array (
    0 => 'Block_7315381585c76671d8554b9_27625435',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							          	<h1 class="h3 product-title" itemprop="name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></h1>
							        <?php
}
}
/* {/block 'product_name'} */
/* {block 'product_price_and_shipping'} */
class Block_4448147705c76671d859361_18807686 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_price_and_shipping' => 
  array (
    0 => 'Block_4448147705c76671d859361_18807686',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							          	<?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
								            <div class="product-price-and-shipping">
								            	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>

								            	<span class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
									                <span itemprop="priceCurrency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
"></span><span itemprop="price" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
									            </span>


								              	<?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
								                	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

								                	<span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
									                <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
									                  	<span class="discount-percentage"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</span>
									                <?php }?>
								              	<?php }?>
												

								              	

								              	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>


								              	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

								            </div>
							          	<?php }?>
							        <?php
}
}
/* {/block 'product_price_and_shipping'} */
}
