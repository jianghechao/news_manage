<?php /* Smarty version Smarty-3.1.12, created on 2014-09-29 20:03:21
         compiled from "/data/web/news.valsun.cn/html/template/admintemplate/column.htm" */ ?>
<?php /*%%SmartyHeaderCode:15303566542947c723cf74-30680020%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a035be718ad58e188fe76ca7893a526efd6370d' => 
    array (
      0 => '/data/web/news.valsun.cn/html/template/admintemplate/column.htm',
      1 => 1411992198,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15303566542947c723cf74-30680020',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_542947c729a6e0_29324440',
  'variables' => 
  array (
    'columnlist' => 0,
    'column' => 0,
    'pageStr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542947c729a6e0_29324440')) {function content_542947c729a6e0_29324440($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admintemplate/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script src="./public/js/column.js" type="text/javascript"></script>
<div class="main">
	<table cellspacing="0" width="100%">
		<tr class="title">
			<th>栏目ID</th>
			<th>父栏目ID</th>
			<th>栏目名</th>
			<th>操作</th>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['column'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['column']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['columnlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['column']->key => $_smarty_tpl->tpl_vars['column']->value){
$_smarty_tpl->tpl_vars['column']->_loop = true;
?>
			<tr id="del<?php echo $_smarty_tpl->tpl_vars['column']->value['column_id'];?>
">
				<td><?php echo $_smarty_tpl->tpl_vars['column']->value['column_id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['column']->value['column_pid'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['column']->value['column_name'];?>
</td>
				<td colspan="2">
					<a href="index.php?mod=column&act=mod&column_id=<?php echo $_smarty_tpl->tpl_vars['column']->value['column_id'];?>
" id="updatecolumn">编辑</a>
					<a href="javascript:void(0)" onclick="return columnDel('<?php echo $_smarty_tpl->tpl_vars['column']->value['column_name'];?>
',<?php echo $_smarty_tpl->tpl_vars['column']->value['column_id'];?>
)">删除</a>
				</td>
			</tr>
		<?php } ?>
	</table>
	<div class="bottomvar">
		<div class="pagination"><?php echo $_smarty_tpl->tpl_vars['pageStr']->value;?>
</div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("admintemplate/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>