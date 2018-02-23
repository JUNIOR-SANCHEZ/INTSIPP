

<form method="POST" action="<?php echo BASE_URL?>registro" id="frmRegistro" class="form-register">
    <input type="hidden" name="enviar" value="1"/>
    <h2 class="form-titulo">CREAR UNA CUENTA</h2>
    <div class="registra-inputs">
        <input class="input-100" type="text" name="txt_nombre" id="nombre" placeholder="Nombre" value="<?php if (isset($this->datos)) echo $this->datos['txt_nombre'];?>">
        <input class="input-100" type="text" name="txt_usuario" id="usuario" placeholder="Usuario" value="<?php if (isset($this->datos)) echo $this->datos['txt_usuario'];?>">
        <input class="input-100" type="text" name="txt_correo" id="correo" placeholder="Correo" value="<?php if (isset($this->datos)) echo $this->datos['txt_correo'];?>">
        <input class="input-100" type="text" name="txt_pass"  id="pass1" placeholder="Contraseña" value="<?php if (isset($this->datos)) echo $this->datos['txt_pass'];?>">
        <input class="input-100" type="text" name="txt_passConfirmar" id="pass1" placeholder="Confirmar Contraseña" value="<?php if (isset($this->datos)) echo $this->datos['txt_passConfirmar'];?>">
        <input type="submit" value="Registrar" class="btn-enviar" />

        <p class="form-link">¿YA TIENES UNA CUENTA? &nbsp; <a href="<?php echo BASE_URL?>login"> INGRESAR</a></p>
    </div>

</form>
