<?php /* Smarty version Smarty-3.1.8, created on 2018-03-08 00:12:31
         compiled from "C:\xampp\htdocs\INTSIPP\views\usuarios\permisos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9601957205aa071df6ab635-39191467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbeed876b4e4420b970c79e6703d1ae435ef98ec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\INTSIPP\\views\\usuarios\\permisos.tpl',
      1 => 1520378004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9601957205aa071df6ab635-39191467',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'permisos' => 0,
    'pr' => 0,
    'role' => 0,
    'usuario' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5aa071df9d6d10_32927555',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa071df9d6d10_32927555')) {function content_5aa071df9d6d10_32927555($_smarty_tpl) {?><div class="container">
<style type="text/css">
    table.table td { vertical-align: middle; }
    table.table td input, select { margin: 0; }
</style>

<h2>Permisos de Usuario</h2>

<p>
    <strong>Usuario:</strong> <?php echo $_smarty_tpl->tpl_vars['info']->value['usuario'];?>
 | <strong>Role:</strong> <?php echo $_smarty_tpl->tpl_vars['info']->value['role'];?>

</p>

<form name="form1" method="post" action="">
    <input type="hidden" value="1" name="guardar">
    
    <?php if (isset($_smarty_tpl->tpl_vars['permisos']->value)&&count($_smarty_tpl->tpl_vars['permisos']->value)){?>
        <table class="table table-bordered table-striped table-condensed" style="width: 500px;">        
            <?php  $_smarty_tpl->tpl_vars['pr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['permisos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pr']->key => $_smarty_tpl->tpl_vars['pr']->value){
$_smarty_tpl->tpl_vars['pr']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['role']->value[$_smarty_tpl->tpl_vars['pr']->value]['valor']==1){?>
                    <?php $_smarty_tpl->tpl_vars["v"] = new Smarty_variable("habilitado", null, 0);?>
                <?php }else{ ?>
                    <?php $_smarty_tpl->tpl_vars["v"] = new Smarty_variable("denegado", null, 0);?>
                <?php }?>
                
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value[$_smarty_tpl->tpl_vars['pr']->value]['permiso'];?>
</td>

                    <td>
                        <select name="perm_<?php echo $_smarty_tpl->tpl_vars['usuario']->value[$_smarty_tpl->tpl_vars['pr']->value]['id'];?>
">
                            <option value="x"<?php if ($_smarty_tpl->tpl_vars['usuario']->value[$_smarty_tpl->tpl_vars['pr']->value]['heredado']){?> selected="selected"<?php }?>>Heredado(<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
)</option>
                            <option value="1"<?php if (($_smarty_tpl->tpl_vars['usuario']->value[$_smarty_tpl->tpl_vars['pr']->value]['valor']==1&&$_smarty_tpl->tpl_vars['usuario']->value[$_smarty_tpl->tpl_vars['pr']->value]['heredado']=='')){?> selected="selected"<?php }?>>Habilitado</option>
                            <option value=""<?php if (($_smarty_tpl->tpl_vars['usuario']->value[$_smarty_tpl->tpl_vars['pr']->value]['valor']==''&&$_smarty_tpl->tpl_vars['usuario']->value[$_smarty_tpl->tpl_vars['pr']->value]['heredado']=='')){?> selected="selected"<?php }?>>Denegado</option>
                        </select>
                    </td>
                </tr>

            <?php } ?>
        </table>

        <p><button type="submit" value="guardar" class="btn btn-primary"><i class="icon-ok icon-white"> </i> Guardar</button></p>
    <?php }?>
</form></div><?php }} ?>