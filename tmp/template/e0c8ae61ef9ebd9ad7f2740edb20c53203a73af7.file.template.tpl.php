<?php /* Smarty version Smarty-3.1.8, created on 2018-03-10 18:16:52
         compiled from "C:\xampp\htdocs\INTSIPP\views\layout\login\template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11820704745a97a305682250-05135784%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0c8ae61ef9ebd9ad7f2740edb20c53203a73af7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\INTSIPP\\views\\layout\\login\\template.tpl',
      1 => 1520702212,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11820704745a97a305682250-05135784',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a97a305bba0d1_41514773',
  'variables' => 
  array (
    'titulo' => 0,
    '_layoutParams' => 0,
    'menu' => 0,
    'widgets' => 0,
    'wd' => 0,
    '_mensaje' => 0,
    '_error' => 0,
    '_contenido' => 0,
    'js' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a97a305bba0d1_41514773')) {function content_5a97a305bba0d1_41514773($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['titulo']->value)===null||$tmp==='' ? "sin titulo" : $tmp);?>
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://bootstraptaste.com" />
<!-- css -->

<link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/css/bootstrap.min.css" rel="stylesheet" />
<link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/css/jcarousel.css" rel="stylesheet" />
<link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/css/flexslider.css" rel="stylesheet" />
<link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/css/style.css" rel="stylesheet" />
<link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
login.css" rel="stylesheet" />

<!-- Theme skin -->
<link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/skins/default.css" rel="stylesheet" />

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div id="wrapper">
	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
"><span>I</span>NTSIPP</a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value){
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['menu']->value['enlace'];?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value['titulo'];?>
</a></li>
                            <?php } ?>
                        
                    </ul>
                </div>
            </div>
        </div>
                        
	</header>
        <?php if (isset($_smarty_tpl->tpl_vars['widgets']->value['sidebar'])){?>
        <?php  $_smarty_tpl->tpl_vars['wd'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wd']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['widgets']->value['sidebar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['wd']->key => $_smarty_tpl->tpl_vars['wd']->value){
$_smarty_tpl->tpl_vars['wd']->_loop = true;
?>
            <?php echo $_smarty_tpl->tpl_vars['wd']->value;?>

        <?php } ?>
        <?php }?>
        <!-- end header -->
        <?php if (isset($_smarty_tpl->tpl_vars['_mensaje']->value)){?> <div class="alert alert-success" role="alert"><?php echo $_smarty_tpl->tpl_vars['_mensaje']->value;?>
</div><?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['_error']->value)){?> <div class="alert alert-success" role="alert"><?php echo $_smarty_tpl->tpl_vars['_error']->value;?>
</div><?php }?>
        <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['_contenido']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        
       
       
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
        
</div>

<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jquery.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jquery.easing.1.3.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/bootstrap.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jquery.fancybox.pack.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jquery.fancybox-media.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/google-code-prettify/prettify.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/portfolio/jquery.quicksand.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/portfolio/setting.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jquery.flexslider.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/animate.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/custom.js"></script>

<script type="text/javascript">
var _root_ = '<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
';
</script>

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

</body>
</html><?php }} ?>