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
        {if isset($widgets.top_default)}
            {foreach item=tp from=$widgets.top_default}
                {$tp}
            {/foreach}
        {/if}
                        
	</header>
        {if isset($widgets.sidebar)}
        {foreach item=wd from=$widgets.sidebar}
            {$wd}
        {/foreach}
        {/if}
        <!-- end header -->
        
        {if isset($_mensaje)} 
            <div class="container">
            <div class="alert alert-success" role="alert">{$_mensaje}</div>
            </div>
        {/if}
        {if isset($_error)} 
            <div class="container">
            <div class="alert alert-success" role="alert">{$_error}</div>{/if}
            </div>
        {include file=$_contenido}
        
      {if isset($widgets.footer)}
            {foreach item=tp from=$widgets.footer}
                {$tp}
            {/foreach}
        {/if}
       
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

{if isset($_layoutParams.js) && count($_layoutParams.js)}
    {foreach item=js from=$_layoutParams.js}
        <script src="{$js}" type="text/javascript"></script>
    {/foreach}

{/if}
                      
</body>
</html>