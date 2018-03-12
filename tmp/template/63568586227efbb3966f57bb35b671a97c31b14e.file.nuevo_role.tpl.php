<?php /* Smarty version Smarty-3.1.8, created on 2018-03-08 16:51:00
         compiled from "C:\xampp\htdocs\INTSIPP\views\acl\nuevo_role.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16377844285aa15be428cda2-36926432%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63568586227efbb3966f57bb35b671a97c31b14e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\INTSIPP\\views\\acl\\nuevo_role.tpl',
      1 => 1520377723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16377844285aa15be428cda2-36926432',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5aa15be45dd031_82117637',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa15be45dd031_82117637')) {function content_5aa15be45dd031_82117637($_smarty_tpl) {?><style type="text/css">
    table.table td { vertical-align: middle; }
    table.table td input { margin: 0; }
</style>

<h2>Nuevo Role</h2>

<form name="form1" method="post" action="">
    <input type="hidden" value="1" name="guardar">
    
    <table class="table table-bordered" style="width: 350px;">
        <tr>
            <td style="text-align: right;">Role: </td>
            <td><input type="text" name="role" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['role'])===null||$tmp==='' ? '' : $tmp);?>
"></td>
        </tr>
    </table>
        
    <p><button type="submit" class="btn btn-primary"><li class="icon-ok icon-white"> </li> Guardar</button></p>
</form><?php }} ?>