<?php /* Smarty version Smarty-3.1.8, created on 2018-03-10 21:59:18
         compiled from "C:\xampp\htdocs\INTSIPP\modules\usuarios\views\login\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18776620885aa0d720c1c854-11501712%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92f425f68c6b9845fc78601a73b7cc8a89d312e0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\INTSIPP\\modules\\usuarios\\views\\login\\index.tpl',
      1 => 1520715557,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18776620885aa0d720c1c854-11501712',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5aa0d720cd5631_52356421',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa0d720cd5631_52356421')) {function content_5aa0d720cd5631_52356421($_smarty_tpl) {?><div class="container">
    <div class="row">
        <div class="col-lg-offset-4 col-lg-4">
            <div class="jumbotron box-login">
                <form action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/login" method="POST" id="flogin" name="flogin">
                    <input type="hidden" name="enviar" value="1"/>
                    
                    <label for="usuario">Ingresar Usuario</label>
                        <input type="text" id="usuario" class="form-control" name="txt_usuario" placeholder="Usuario" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value)){?> <?php echo $_smarty_tpl->tpl_vars['datos']->value['txt_usuario'];?>
<?php }?>">
                        <label for="clave">Ingresar Contrase&ntilde;a</label>
                        <input type="password" id="clave" class="form-control" name="txt_pass" placeholder="Contraseña" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value)){?>) <?php echo $_smarty_tpl->tpl_vars['datos']->value['txt_pass'];?>
 <?php }?>">
                        <br>
                        <input class="btn btn-success" type="submit" value="ENTRAR"/>
                        <br>
                        <br>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
registro">¿Necesitas una cuenta?</a>
                </form>
            </div>
        </div>
    </div>
</div>
<?php }} ?>