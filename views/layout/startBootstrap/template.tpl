<!DOCTYPE html>
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
    
        {if isset($widgets.top)}
            {foreach item=tp from=$widgets.top}
                {$tp}
            {/foreach}
        {/if}
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
        {if isset($_mensaje)} <div class="alert alert-success" role="alert">{$_mensaje}</div>{/if}
        {if isset($_error)} <div class="alert alert-success" role="alert">{$_error}</div>{/if}
<!--    ======================================================================= 
         ***************            ==== FIN ===                ***************
        =====================================================================-->        
        
<!--    ======================================================================= 
                INCLUIREMOS LA VISTA ENVIADA DEL CONTROLADOR AL LAYOUT
        =====================================================================-->        
        {include file=$_contenido}
<!--    ======================================================================= 
         ***************            ==== FIN ===                ***************
        =====================================================================-->


</div>
<div class="col-lg-3">
    <!--    ======================================================================= 
                            MENU LATERAL DE LA APLICACION
        =====================================================================-->
        {if isset($widgets.sidebar)}
            {foreach item=wd from=$widgets.sidebar}
                {$wd}
            {/foreach}
        {/if}
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
        var _root_ = '{$_layoutParams.root}';
        </script>
<!--    ======================================================================= 
                CARGA AUTOMATICA DE LOS ARCHIVOS .JS  DESDE EL CONTROLADOR
        =====================================================================-->
        {if isset($_layoutParams.js) && count($_layoutParams.js)}
            {foreach item=js from=$_layoutParams.js}
                <script src="{$js}" type="text/javascript"></script>
            {/foreach}

        {/if}
<!--    ======================================================================= 
         ***************            ==== FIN ===                ***************
        =====================================================================-->


</body>
</html>