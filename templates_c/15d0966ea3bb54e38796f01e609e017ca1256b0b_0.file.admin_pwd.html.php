<?php
/* Smarty version 3.1.30, created on 2017-10-26 21:00:28
  from "/home/wwwroot/5.0wpt.com/templates/admin_pwd.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f1dc6ce57030_76122492',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15d0966ea3bb54e38796f01e609e017ca1256b0b' => 
    array (
      0 => '/home/wwwroot/5.0wpt.com/templates/admin_pwd.html',
      1 => 1508078378,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin_header.html' => 1,
    'file:admin_footer.html' => 1,
  ),
),false)) {
function content_59f1dc6ce57030_76122492 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">修改密码</h3>
						</div>
						<div class="panel-body">
							<form class="form-auth-small" action="admin.php?ac=pwd" method="post">
								<input type="password" name="oldpwd" class="form-control" placeholder="请输入原密码">
								<br>
								<input type="password" name="pwd" class="form-control" placeholder="请输入新密码">
								<br>
								<input type="password" name="pwd2" class="form-control" placeholder="确认新密码">
								<br>
								<button type="submit" class="btn btn-primary">修改</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="clearfix"></div>
<?php $_smarty_tpl->_subTemplateRender("file:admin_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
