var btn = document.getElementById('enviar_veiculo');

btn.onclick = function(){
    if(formulario2.placa.value.length === 0){
        alert("Campo placa não pode estar em branco!!");
        return false;

    }else if(formulario2.modelo_veiculo.value == 0){
        alert("Selecione um opção no campo modelo!!");
        return false;

    }else if(formulario2.proprietario_veiculo.value == 0){
        alert("Selecione uma opção no campo proprietario!!");
        return false;
        
    }
   
}