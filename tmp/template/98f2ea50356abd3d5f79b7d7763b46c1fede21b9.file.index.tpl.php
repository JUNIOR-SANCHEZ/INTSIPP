<?php /* Smarty version Smarty-3.1.8, created on 2018-03-06 23:28:40
         compiled from "C:\xampp\htdocs\INTSIPP\views\acl\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:560356655a9f161894eb84-00726649%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98f2ea50356abd3d5f79b7d7763b46c1fede21b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\INTSIPP\\views\\acl\\index.tpl',
      1 => 1520375013,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '560356655a9f161894eb84-00726649',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a9f16189eb348_45839014',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9f16189eb348_45839014')) {function content_5a9f16189eb348_45839014($_smarty_tpl) {?><h2>Listas de control de acceso</h2>

<ul>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/roles">Roles</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/permisos">Permisos</a></li>
</ul><?php }} ?>