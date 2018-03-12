<?php /* Smarty version Smarty-3.1.8, created on 2018-03-08 20:20:34
         compiled from "C:\xampp\htdocs\INTSIPP\views\pruebas\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9843489655a90e48ec675c4-04008547%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5bc61ae7afa305923fbd52d59f245ffb84fdf05' => 
    array (
      0 => 'C:\\xampp\\htdocs\\INTSIPP\\views\\pruebas\\index.tpl',
      1 => 1520536834,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9843489655a90e48ec675c4-04008547',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a90e48eec4be4_04357131',
  'variables' => 
  array (
    'datos' => 0,
    'row' => 0,
    'paginacion' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a90e48eec4be4_04357131')) {function content_5a90e48eec4be4_04357131($_smarty_tpl) {?><div class="container">
<?php if (isset($_smarty_tpl->tpl_vars['datos']->value)){?>
    <div class="container">
        <table class="table-condensed">
            <thead>
                <tr>
                    <th>NOMBRE</th>
                    <th>CIUDAD</th>
                    <th>EDAD</th>
                </tr>
            </thead>
            <tbody>
                <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                <tr>
                    <td> <?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
 </td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['row']->value['ciudad'];?>
 </td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['row']->value['edad'];?>
 </td>
                </tr>
                <?php } ?>
            </tbody>

        </table>
    </div>
<?php }else{ ?>
    <h3>NO HAY REGISTROS</h3>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['paginacion']->value)){?> <?php echo $_smarty_tpl->tpl_vars['paginacion']->value;?>
 <?php }?>

</div>
    <?php }} ?>