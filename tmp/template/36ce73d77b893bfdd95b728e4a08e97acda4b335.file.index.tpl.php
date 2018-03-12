<?php /* Smarty version Smarty-3.1.8, created on 2018-03-10 21:52:06
         compiled from "C:\xampp\htdocs\INTSIPP\modules\usuarios\views\registro\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10312431045aa40d071406c5-61870018%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36ce73d77b893bfdd95b728e4a08e97acda4b335' => 
    array (
      0 => 'C:\\xampp\\htdocs\\INTSIPP\\modules\\usuarios\\views\\registro\\index.tpl',
      1 => 1520715125,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10312431045aa40d071406c5-61870018',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5aa40d07ac8901_09989455',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
    '_layoutPArams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa40d07ac8901_09989455')) {function content_5aa40d07ac8901_09989455($_smarty_tpl) {?>
<div class="container">
    <div class="row">
        <div class="col-lg-offset-3  col-lg-6">
<div class="jumbotron box-registro">
<form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
registro" id="frmRegistro" class="form-register">
    <input type="hidden" name="enviar" value="1"/>
        <h2 class="form-titulo">CREAR UNA CUENTA</h2>
        <label></label>
        <input class="form-control" type="text" name="txt_nombre" id="nombre" placeholder="Nombre" <?php if (isset($_smarty_tpl->tpl_vars['datos']->value['txt_nombre'])){?> value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['txt_nombre'];?>
" <?php }?>>
        <label></label>
        <input class="form-control" type="text" name="txt_usuario" id="usuario" placeholder="Usuario" <?php if (isset($_smarty_tpl->tpl_vars['datos']->value['txt_usuario'])){?> value=" <?php echo $_smarty_tpl->tpl_vars['datos']->value['txt_usuario'];?>
" <?php }?>>
        <label></label>
        <input class="form-control" type="email" name="txt_correo" id="correo" placeholder="Correo" <?php if (isset($_smarty_tpl->tpl_vars['datos']->value['txt_correo'])){?> value=" <?php echo $_smarty_tpl->tpl_vars['datos']->value['txt_correo'];?>
" <?php }?>>
        <label></label>
        <input class="form-control" type="text" name="txt_pass"  id="pass1" placeholder="Contraseña" <?php if (isset($_smarty_tpl->tpl_vars['datos']->value['txt_pass'])){?> value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['txt_pass'];?>
"<?php }?>>
        <label></label>
        <input class="form-control" type="text" name="txt_passConfirmar" id="pass1" placeholder="Confirmar Contraseña" <?php if (isset($_smarty_tpl->tpl_vars['datos']->value['txt_passConfirmar'])){?> value=" <?php echo $_smarty_tpl->tpl_vars['datos']->value['txt_passConfirmar'];?>
" <?php }?>>
        <label></label>
        <input type="submit" value="Registrar" class="btn btn-success" />
        <br><br>
        <p class="form-link">¿YA TIENES UNA CUENTA? &nbsp; <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutPArams']->value['root'];?>
login"> INGRESAR</a></p>

</form>
</div>
</div>
</div>
</div><?php }} ?>