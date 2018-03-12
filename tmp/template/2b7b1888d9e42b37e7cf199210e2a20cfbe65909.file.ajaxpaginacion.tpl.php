<?php /* Smarty version Smarty-3.1.8, created on 2018-03-08 23:56:12
         compiled from "C:\xampp\htdocs\INTSIPP\views\pruebas\ajaxpaginacion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16093933325aa197854000f6-52690290%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b7b1888d9e42b37e7cf199210e2a20cfbe65909' => 
    array (
      0 => 'C:\\xampp\\htdocs\\INTSIPP\\views\\pruebas\\ajaxpaginacion.tpl',
      1 => 1520549772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16093933325aa197854000f6-52690290',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5aa197854df853_19953041',
  'variables' => 
  array (
    'datos' => 0,
    'row' => 0,
    'paginacion' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa197854df853_19953041')) {function content_5aa197854df853_19953041($_smarty_tpl) {?>
<div class="container">
<div class="well well-small">
    <form id="form1" class="form-inline">
        Nombre: <input type="text" name="nombre" id="nombre">
        <button type="button" id="btnEnviar" class="btn btn-dark"><i class="glyphicon glyphicon-share"></i></button>
        
    </form>
</div>
</div>


<div id="lista_registros">
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

<?php if (isset($_smarty_tpl->tpl_vars['paginacion']->value)){?> <?php echo $_smarty_tpl->tpl_vars['paginacion']->value;?>
 <?php }?>

</div>
</div>    <?php }} ?>