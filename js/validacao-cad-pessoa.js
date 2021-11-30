var btn = document.getElementById('enviar');

btn.onclick = function(){
    if(formulario.nome.value.length === 0){
        alert("Nome não pode estar em branco!!");
        return false;

    }else if(formulario.cpf.value.length === 0){
        alert("CPF não pode estar em branco!!");
        return false;

    }else if(formulario.telefone.value.length === 0){
        alert("Telefone não pode estar em branco!!");
        return false;
        
    }else if(formulario.num_apart.value.length === 0){
        alert("Numero do Apartamento não pode estar em branco!!");
        return false;
        
    }else if(formulario.cpf.value.length != 11){
        alert("CPF deve conter 11 numeros!!");
        return false;
        
    }
   
}