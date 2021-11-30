var btn = document.getElementById('enviar_modelo');

btn.onclick = function(){
   console.log(formulario.marca.value);
    if(formulario.marca.value.length == 0){
        alert("Campo marca não pode estar em branco!!");
        return false;

    }else if(formulario.modelo.value.length == 0){
        alert("Campo modelo não pode estar em branco!!");
        return false;

    }else if(formulario.cor.value.length == 0){
        alert("Campo cor não pode estar em branco!!");
        return false;
        
    }else if(formulario.modelo_veiculo_modal.value == 0){
        alert("Selecione uma opção no campo tipo!!");
        return false;
        
    }
   
}