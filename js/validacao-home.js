var btn = document.getElementById('enviar');

btn.onclick = function(){
    if(formulario.placa_veiculo.value == 0){
        alert("Escolha a Placa do Veiculo!!");
        return false;
    }
    if(formulario.entrada_saida.value == 0){
        alert("Escolha se Entrada ou Saida!!");
        return false;
    }
   
}