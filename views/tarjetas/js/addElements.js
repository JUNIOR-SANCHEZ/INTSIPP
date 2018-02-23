$(document).ready(function(){
     var formato = [
                        {formato:"A3",ancho:420,alto:297},
                        {formato:"A4",ancho:297,alto:210},
                        {formato:"A5",ancho:210,alto:148},
                        {formato:"Letter",ancho:279,alto:216},
                        {formato:"Legal",ancho:356,alto:216}
                    ];
     for(var i = 0;i < formato.length; i++){
        $("#formato").append('<option value='+formato[i]["formato"]+' data-ancho='+formato[i]["ancho"]+' data-alto= '+formato[i]["alto"]+'>'+formato[i]["formato"]+'</option>');
    }
    
     var fuente = ["Arial","Times"]; 
     for(var i = 0;i < fuente.length; i++){
        $("#fontFamily").append('<option value='+fuente[i]+'>'+fuente[i]+'</option>');
    }
    
});

