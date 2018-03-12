<?php /* Smarty version Smarty-3.1.8, created on 2018-03-08 23:56:53
         compiled from "C:\xampp\htdocs\INTSIPP\views\pruebas\ajax\pruebas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7382614545aa1aa889dc8e4-26087681%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf7aa12cfb68faefe88ebedfae5a3eb3e3b65f7f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\INTSIPP\\views\\pruebas\\ajax\\pruebas.tpl',
      1 => 1520549619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7382614545aa1aa889dc8e4-26087681',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5aa1aa88aa2e00_19085855',
  'variables' => 
  array (
    'datos' => 0,
    'row' => 0,
    'paginacion' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa1aa88aa2e00_19085855')) {function content_5aa1aa88aa2e00_19085855($_smarty_tpl) {?>

<div class="container">



    
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

<?php echo (($tmp = @$_smarty_tpl->tpl_vars['paginacion']->value)===null||$tmp==='' ? '' : $tmp);?>
 

</div><?php }} ?>