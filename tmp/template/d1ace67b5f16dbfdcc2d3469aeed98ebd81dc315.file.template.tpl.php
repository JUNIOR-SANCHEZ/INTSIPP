<?php /* Smarty version Smarty-3.1.8, created on 2018-03-11 08:12:03
         compiled from "C:\xampp\htdocs\INTSIPP\views\layout\startBootstrap\template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13242319135aa4581ae41a55-98473337%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1ace67b5f16dbfdcc2d3469aeed98ebd81dc315' => 
    array (
      0 => 'C:\\xampp\\htdocs\\INTSIPP\\views\\layout\\startBootstrap\\template.tpl',
      1 => 1520750085,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13242319135aa4581ae41a55-98473337',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5aa4581b0fb9c1_50283412',
  'variables' => 
  array (
    'widgets' => 0,
    'tp' => 0,
    '_mensaje' => 0,
    '_error' => 0,
    '_contenido' => 0,
    'wd' => 0,
    '_layoutParams' => 0,
    'js' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa4581b0fb9c1_50283412')) {function content_5aa4581b0fb9c1_50283412($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript"></script>
</head>
<body>
    
        <?php if (isset($_smarty_tpl->tpl_vars['widgets']->value['top'])){?>
            <?php  $_smarty_tpl->tpl_vars['tp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['widgets']->value['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tp']->key => $_smarty_tpl->tpl_vars['tp']->value){
$_smarty_tpl->tpl_vars['tp']->_loop = true;
?>
                <?php echo $_smarty_tpl->tpl_vars['tp']->value;?>

            <?php } ?>
        <?php }?>
<!--    ======================================================================= 
                                        HTML - BOOTSTRAP 
        =====================================================================-->
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
<!--    ======================================================================= 
         ***************            ==== FIN ===                ***************
        =====================================================================-->                        
            

<!--    ======================================================================= 
            MENSAJES DE CONFIRMACION O ERROR QUE SE ENVIA DE LOS CONTROLADORES 
            PARA REALIZAR INSERCCIONES A LA BD
        =====================================================================-->
        <?php if (isset($_smarty_tpl->tpl_vars['_mensaje']->value)){?> <div class="alert alert-success" role="alert"><?php echo $_smarty_tpl->tpl_vars['_mensaje']->value;?>
</div><?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['_error']->value)){?> <div class="alert alert-success" role="alert"><?php echo $_smarty_tpl->tpl_vars['_error']->value;?>
</div><?php }?>
<!--    ======================================================================= 
         ***************            ==== FIN ===                ***************
        =====================================================================-->        
        
<!--    ======================================================================= 
                INCLUIREMOS LA VISTA ENVIADA DEL CONTROLADOR AL LAYOUT
        =====================================================================-->        
        <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['_contenido']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--    ======================================================================= 
         ***************            ==== FIN ===                ***************
        =====================================================================-->


</div>
<div class="col-lg-3">
    <!--    ======================================================================= 
                            MENU LATERAL DE LA APLICACION
        =====================================================================-->
        <?php if (isset($_smarty_tpl->tpl_vars['widgets']->value['sidebar'])){?>
            <?php  $_smarty_tpl->tpl_vars['wd'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wd']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['widgets']->value['sidebar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['wd']->key => $_smarty_tpl->tpl_vars['wd']->value){
$_smarty_tpl->tpl_vars['wd']->_loop = true;
?>
                <?php echo $_smarty_tpl->tpl_vars['wd']->value;?>

            <?php } ?>
        <?php }?>
<!--    ======================================================================= 
         ***************            ==== FIN ===                ***************
        =====================================================================-->

<!--    ======================================================================= 
            BOOTSTRAP - HTML
        =====================================================================-->
            </div>
        </div>
    </div>
<!--    ======================================================================= 
         ***************            ==== FIN ===                ***************
        =====================================================================-->

<!--    ======================================================================= 
            VARIABLE PARA JAVASCRIPT QUE PERMITE OBTENER RUTA RAIZ DE LA
            APLICAION
        =====================================================================-->        
        <script type="text/javascript">
        var _root_ = '<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
';
        </script>
<!--    ======================================================================= 
                CARGA AUTOMATICA DE LOS ARCHIVOS .JS  DESDE EL CONTROLADOR
        =====================================================================-->
        <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['js'])&&count($_smarty_tpl->tpl_vars['_layoutParams']->value['js'])){?>
            <?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value){
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
                <script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
" type="text/javascript"></script>
            <?php } ?>

        <?php }?>
<!--    ======================================================================= 
         ***************            ==== FIN ===                ***************
        =====================================================================-->


</body>
</html><?php }} ?>