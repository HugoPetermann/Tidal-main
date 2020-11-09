<?php /* Smarty version Smarty-3.1.12, created on 2020-11-09 18:23:34
         compiled from "C:\xampp\htdocs\WebApp\tpl\pages\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19271861635fa96205970600-72056651%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96307e794ce42eecea7daf5fa0f448f2ca4c91dc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WebApp\\tpl\\pages\\index.tpl',
      1 => 1604942611,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19271861635fa96205970600-72056651',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5fa96205a7b757_43114962',
  'variables' => 
  array (
    'NbProd' => 0,
    'liste' => 0,
    'product' => 0,
    'NbProd2' => 0,
    'liste2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fa96205a7b757_43114962')) {function content_5fa96205a7b757_43114962($_smarty_tpl) {?><div>
     

	Il y a <?php echo $_smarty_tpl->tpl_vars['NbProd']->value;?>
 produits dans le panier.<br>
     Liste 1 :<br>
     <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['liste']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
	    <?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
<br>
		<?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
<br>
	    <?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
<br>
	      Voir plus d'info<br>
	      <br>
	<?php } ?>

	<br>
	Il y a <?php echo $_smarty_tpl->tpl_vars['NbProd2']->value;?>
 produits dans le panier.<br>
	Liste 2 :<br>
	<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['liste2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
	    <?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
<br> 
		<?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
<br>
	    <?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
<br>
	       Voir plus d'info<br>
	       <br>
	<?php } ?>


</div><?php }} ?>