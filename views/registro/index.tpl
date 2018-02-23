

<div class="jumbotron box-registro">
<form method="POST" action="{$_layoutParams.root}registro" id="frmRegistro" class="form-register">
    <input type="hidden" name="enviar" value="1"/>
        <h2 class="form-titulo">CREAR UNA CUENTA</h2>
        <label></label>
        <input class="form-control" type="text" name="txt_nombre" id="nombre" placeholder="Nombre" {if isset($datos.txt_nombre)} value="{$datos.txt_nombre}" {/if}>
        <label></label>
        <input class="form-control" type="text" name="txt_usuario" id="usuario" placeholder="Usuario" {if isset($datos.txt_usuario)} value=" {$datos.txt_usuario}" {/if}>
        <label></label>
        <input class="form-control" type="text" name="txt_correo" id="correo" placeholder="Correo" {if isset($datos.txt_correo)} value=" {$datos.txt_correo}" {/if}>
        <label></label>
        <input class="form-control" type="text" name="txt_pass"  id="pass1" placeholder="Contraseña" {if isset($datos.txt_pass)} value="{$datos.txt_pass}"{/if}>
        <label></label>
        <input class="form-control" type="text" name="txt_passConfirmar" id="pass1" placeholder="Confirmar Contraseña" {if isset($datos.txt_passConfirmar)} value=" {$datos.txt_passConfirmar}" {/if}>
        <label></label>
        <input type="submit" value="Registrar" class="btn btn-success" />
        <br><br>
        <p class="form-link">¿YA TIENES UNA CUENTA? &nbsp; <a href="{$_layoutPArams.root}login"> INGRESAR</a></p>

</form>
</div>