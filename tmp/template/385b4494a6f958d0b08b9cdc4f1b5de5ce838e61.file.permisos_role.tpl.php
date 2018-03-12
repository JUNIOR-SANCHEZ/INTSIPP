<?php /* Smarty version Smarty-3.1.8, created on 2018-03-06 23:46:00
         compiled from "C:\xampp\htdocs\INTSIPP\views\acl\permisos_role.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20752162425a9f19dacb0601-22011735%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '385b4494a6f958d0b08b9cdc4f1b5de5ce838e61' => 
    array (
      0 => 'C:\\xampp\\htdocs\\INTSIPP\\views\\acl\\permisos_role.tpl',
      1 => 1520376360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20752162425a9f19dacb0601-22011735',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a9f19dadb2255_22614763',
  'variables' => 
  array (
    'role' => 0,
    'permisos' => 0,
    'pr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9f19dadb2255_22614763')) {function content_5a9f19dadb2255_22614763($_smarty_tpl) {?><div class="container">
<h2>Administracion de permisos de role</h2>

<p><strong>Role:</strong> <?php echo $_smarty_tpl->tpl_vars['role']->value['role'];?>
</p>

<form name="form1" method="post" action="">
    <input type="hidden" name="guardar" value="1" />
    
    <?php if (isset($_smarty_tpl->tpl_vars['permisos']->value)&&count($_smarty_tpl->tpl_vars['permisos']->value)){?>
        <table class="table table-bordered table-condensed table-striped" style="width: 500px;">
            <tr>
                <th>Permiso</th>
                <th style="text-align: center;">Habilitado</th>
                <th style="text-align: center;">Denegado</th>
                <th style="text-align: center;">Ignorar</th>
            </tr>
            
            <?php  $_smarty_tpl->tpl_vars['pr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['permisos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pr']->key => $_smarty_tpl->tpl_vars['pr']->value){
$_smarty_tpl->tpl_vars['pr']->_loop = true;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['pr']->value['nombre'];?>
</td>
                    <td style="text-align: center;"><input type="radio" name="perm_<?php echo $_smarty_tpl->tpl_vars['pr']->value['id'];?>
" value="1" <?php if (($_smarty_tpl->tpl_vars['pr']->value['valor']==1)){?>checked="checked"<?php }?>/></td>
                    <td style="text-align: center;"><input type="radio" name="perm_<?php echo $_smarty_tpl->tpl_vars['pr']->value['id'];?>
" value="" <?php if (($_smarty_tpl->tpl_vars['pr']->value['valor']=='')){?>checked="checked"<?php }?>/></td>
                    <td style="text-align: center;"><input type="radio" name="perm_<?php echo $_smarty_tpl->tpl_vars['pr']->value['id'];?>
" value="x" <?php if (($_smarty_tpl->tpl_vars['pr']->value['valor']==="x")){?>checked="checked"<?php }?>/>
                    </td>
                </tr>
            <?php } ?>
        </table>
    <?php }?>
    
    <p><button type="submit" class="btn btn-primary"><i class="icon-ok icon-white"> </i> Guardar</button></p>
</form> </div><?php }} ?>