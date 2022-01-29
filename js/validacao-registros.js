var btn = document.getElementById('enviar');
var btn2 = document.getElementById('enviar2');
var btn3 = document.getElementById('enviar3');

btn.onclick = function(){
    if(registro_placas.codigo_veiculo.value == 0){
        alert("Escolha a Placa do Veiculo!!");
        return false;

    }
}
btn2.onclick = function(){
    if(registro_pessoa.codigo_pessoa.value == 0){
        alert("Escolha umaa Pessoa!!");
        return false;
        
    }
}
btn3.onclick = function(){
    if(registro_veiculo.codigo_veiculo.value == 0){
        alert("Escolha a Placa do Veiculo!!");
        return false;
        
    }
}