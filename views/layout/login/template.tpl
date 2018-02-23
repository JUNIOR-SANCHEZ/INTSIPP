<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>{$titulo|default:"sin titulo"}</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://bootstraptaste.com" />
<!-- css -->

<link href="{$_layoutParams.root}public/css/bootstrap.min.css" rel="stylesheet" />
<link href="{$_layoutParams.root}public/css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="{$_layoutParams.root}public/css/jcarousel.css" rel="stylesheet" />
<link href="{$_layoutParams.root}public/css/flexslider.css" rel="stylesheet" />
<link href="{$_layoutParams.root}public/css/style.css" rel="stylesheet" />
<link href="{$_layoutParams.ruta_css}login.css" rel="stylesheet" />

<!-- Theme skin -->
<link href="{$_layoutParams.root}public/skins/default.css" rel="stylesheet" />

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
                    <a class="navbar-brand" href="{$_layoutParams.root}"><span>I</span>NTSIPP</a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        {foreach item=menu from=$_layoutParams.menu}
                            <li><a href="{$menu.enlace}">{$menu.titulo}</a></li>
                            {/foreach}
                        
                    </ul>
                </div>
            </div>
        </div>
                        
	</header>
        <!-- end header -->
        {if isset($_mensaje)} <div class="alert alert-success" role="alert">{$_mensaje}</div>{/if}
        {if isset($_error)} <div class="alert alert-success" role="alert">{$_error}</div>{/if}
        {include file=$_contenido}
        
       
       
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
        
</div>
                        
<!-- Placed at the end of the document so the pages load faster -->
<script src="{$_layoutParams.root}public/js/jquery.js"></script>
<script src="{$_layoutParams.root}public/js/jquery.easing.1.3.js"></script>
<script src="{$_layoutParams.root}public/js/bootstrap.min.js"></script>
<script src="{$_layoutParams.root}public/js/jquery.fancybox.pack.js"></script>
<script src="{$_layoutParams.root}public/js/jquery.fancybox-media.js"></script>
<script src="{$_layoutParams.root}public/js/google-code-prettify/prettify.js"></script>
<script src="{$_layoutParams.root}public/js/portfolio/jquery.quicksand.js"></script>
<script src="{$_layoutParams.root}public/js/portfolio/setting.js"></script>
<script src="{$_layoutParams.root}public/js/jquery.flexslider.js"></script>
<script src="{$_layoutParams.root}public/js/animate.js"></script>
<script src="{$_layoutParams.root}public/js/custom.js"></script>
                      
</body>
</html>