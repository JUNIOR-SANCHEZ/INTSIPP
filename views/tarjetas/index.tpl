                   

<div class="row">
    <h1>Generador de certificados</h1>
        <form role="form" method="post" action="{$_layoutParams.root}tarjetas" enctype="multipart/form-data" />
            <input type="hidden" name="enviar" value="1" />
            <div class="col-lg-6">
                <h3>General</h3>
                <div class="form-group">
                    <label for="formato">Formato</label>
                    <p class="help-block">Formato del certificado</p>
                    <div class="row">
                        <div class="col-md-5">
                            <select class="form-control" name="formato" id="formato">
                                <option  value="" data-ancho="" data-alto="">Personalizado</option>
                            </select>
                        </div>
                        <div class="col-md-1">
                            <p>ó</p>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="input-group-targ">
                                        <input type="text" class="form-control" name="ancho" id="ancho" placeholder="ancho" {if isset($datos)} value="{$datos.ancho}" {/if} />
                                        <div class="input-group-addon">mm</div>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="alto" id="alto" placeholder="alto"  {if isset($datos)} value="{$datos.ancho}" {/if} />
                                        <div class="input-group-addon">mm</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="fondo">Archivo orígen</label>
                    <p class="help-block">Listado de Nombres a certificar (archivo .txt. Un renglón por certificado).</p>
                    <input type="file" name="source" id="source" >
                </div>
                <div class="form-group">
                    <label for="fondo">Fondo de certificado</label>
                    <p class="help-block">Imagen de fondo del certificado (debería tener las mismas medidas que el formato).</p>
                    <input type="file" name="bg" id="bg" accept="image/*">
                </div>
                <div class="form-group">
                    <label for="destino">Carpeta destino</label>
                    <div class="input-group">
                        <div class="input-group-addon">resultado/</div>
                        <input class="form-control" type="text" name="destino" placeholder="" {if isset($datos.destino)} value="{$datos.destino}" {/if}>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">

                <h3>Texto</h3>
                <div class="form-group">
                    <label for="formato">Fuente</label>
                    <p class="help-block">Fuente del texto</p>
                    <div class="row">
                        <div class="col-md-5">
                            <select class="form-control" name="fontFamily" id="fontFamily">
                                
                            </select>
                        </div>
                        <div class="col-md-2">
                            <div class="row">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="fontSize" id="fontSize" placeholder="12" value="">
                                    <div class="input-group-addon">pt</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default" data-value="L"><span class="fa fa-align-left"></span></button>
                                <button type="button" class="btn btn-default" data-value="C"><span class="fa fa-align-center"></span></button>
                                <button type="button" class="btn btn-default" data-value="R"><span class="fa fa-align-left"></span></button>
                            </div>
                            <input type="hidden" name="textAlign" id="textAlign" value="L">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="formato">Posición</label>
                    <p class="help-block">Especifica la posición del texto en el certificado</p>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="input-group">
                                <input type="text" class="form-control" name="posx" id="posx" placeholder="x" value="">
                                <div class="input-group-addon">mm</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group">
                                <input type="text" class="form-control" name="posy" id="posy" placeholder="y" value="">
                                <div class="input-group-addon">mm</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <button type="button" class="btn btn-info" id="popoverPos"><span class="fa fa-info-circle"></span> ¿Cómo posicionar ?</button>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="unArchivo">Formato de salida</label>
                    <div class="radio">
                        <label>
                            <input type="radio" name="unArchivo" id="unArchivo" value="1" value="1" />
                            Agrupar todos los certificados en un archivo
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="unArchivo" id="unArchivo" value="0"/>
                            Generar cada certificado en un archivo separado
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <br/>
                    <input type="submit" class="btn btn-default pull-right" value="Submit" />
                </div>
            </div>
        </form>
    
                   
                    
</div>