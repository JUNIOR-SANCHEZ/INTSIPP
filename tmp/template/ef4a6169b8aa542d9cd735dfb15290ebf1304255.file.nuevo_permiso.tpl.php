<?php /* Smarty version Smarty-3.1.8, created on 2018-03-07 00:14:48
         compiled from "C:\xampp\htdocs\INTSIPP\views\acl\nuevo_permiso.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6216199505a9f20c0e15886-04589836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef4a6169b8aa542d9cd735dfb15290ebf1304255' => 
    array (
      0 => 'C:\\xampp\\htdocs\\INTSIPP\\views\\acl\\nuevo_permiso.tpl',
      1 => 1520378088,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6216199505a9f20c0e15886-04589836',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a9f20c11994b3_64660055',
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9f20c11994b3_64660055')) {function content_5a9f20c11994b3_64660055($_smarty_tpl) {?><div class="container">
<style type="text/css">
    table.table td { vertical-align: middle; }
    table.table td input { margin: 0; }
</style>

<h2>Nuevo Permiso</h2>

<form name="form1" method="post" action="">
    <input type="hidden" name="guardar" value="1">
    
    <table class="table table-bordered" style="width: 350px;">
        <tr>
            <td style="text-align: right;">Permiso: </td>
            <td><input type="text" name="permiso" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['permiso'])===null||$tmp==='' ? '' : $tmp);?>
"></td>
        </tr>

        <tr>
            <td style="text-align: right;">Key: </td>
            <td><input type="text" name="key" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['key'])===null||$tmp==='' ? '' : $tmp);?>
"></td>
        </tr>
    </table>
        
    <p><button type="submit" class="btn btn-primary">Guardar</button></p>
</form>
        
</div><?php }} ?>