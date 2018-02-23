<?php /* Smarty version Smarty-3.1.8, created on 2018-02-16 21:36:54
         compiled from "C:\xampp\htdocs\festival\views\registro\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20126281175a873ebe1236c2-92758371%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f762e0f4501ea15c2e6ad85a92a34ec5c6fff681' => 
    array (
      0 => 'C:\\xampp\\htdocs\\festival\\views\\registro\\index.tpl',
      1 => 1518813414,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20126281175a873ebe1236c2-92758371',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a873ebe2106c5_10056783',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
    '_layoutPArams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a873ebe2106c5_10056783')) {function content_5a873ebe2106c5_10056783($_smarty_tpl) {?>

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
        <input class="form-control" type="text" name="txt_correo" id="correo" placeholder="Correo" <?php if (isset($_smarty_tpl->tpl_vars['datos']->value['txt_correo'])){?> value=" <?php echo $_smarty_tpl->tpl_vars['datos']->value['txt_correo'];?>
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
</div><?php }} ?>