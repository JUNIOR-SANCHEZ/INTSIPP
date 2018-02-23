

<div class="jumbotron box-login">
    
    <form action="{$_layoutParams.root}login" method="POST" id="flogin" name="flogin">
        <input type="hidden" name="enviar" value="1"/>
        <label for="usuario">Ingresar Usuario</label>
            <input type="text" id="usuario" class="form-control" name="txt_usuario" placeholder="Usuario" value="{if isset($datos)} {$datos.txt_usuario}{/if}">
            <label for="clave">Ingresar Contrase&ntilde;a</label>
            <input type="password" id="clave" class="form-control" name="txt_pass" placeholder="Contraseña" value="{if isset($datos)}) {$datos.txt_pass} {/if}">
        

        <input class="btn btn-success" type="submit" value="ENTRAR"/>
        <br>
        <br>
        <a href="{$_layoutParams.root}registro">¿Necesitas una cuenta?</a>
    </form>
</div>