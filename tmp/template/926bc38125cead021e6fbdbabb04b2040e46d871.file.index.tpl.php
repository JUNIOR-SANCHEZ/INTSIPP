<?php /* Smarty version Smarty-3.1.8, created on 2018-03-01 07:52:04
         compiled from "C:\xampp\htdocs\INTSIPP\views\login\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9422698705a97a314e8f832-46624913%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '926bc38125cead021e6fbdbabb04b2040e46d871' => 
    array (
      0 => 'C:\\xampp\\htdocs\\INTSIPP\\views\\login\\index.tpl',
      1 => 1519411826,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9422698705a97a314e8f832-46624913',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a97a314f39253_86660116',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a97a314f39253_86660116')) {function content_5a97a314f39253_86660116($_smarty_tpl) {?>

<div class="jumbotron box-login">
    
    <form action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
login" method="POST" id="flogin" name="flogin">
        <input type="hidden" name="enviar" value="1"/>
        <label for="usuario">Ingresar Usuario</label>
            <input type="text" id="usuario" class="form-control" name="txt_usuario" placeholder="Usuario" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value)){?> <?php echo $_smarty_tpl->tpl_vars['datos']->value['txt_usuario'];?>
<?php }?>">
            <label for="clave">Ingresar Contrase&ntilde;a</label>
            <input type="password" id="clave" class="form-control" name="txt_pass" placeholder="Contraseña" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value)){?>) <?php echo $_smarty_tpl->tpl_vars['datos']->value['txt_pass'];?>
 <?php }?>">
        

        <input class="btn btn-success" type="submit" value="ENTRAR"/>
        <br>
        <br>
        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
registro">¿Necesitas una cuenta?</a>
    </form>
</div><?php }} ?>