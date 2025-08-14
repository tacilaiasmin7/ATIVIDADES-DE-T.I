function mensagem(){
    const men = document.getElementById ("mensagem");
    const nomeDigitado ="diadecomprar";
    const name = document.getElementById("nome").value;
    const bot= document.getElementById ("botao");
    if (name == nomeDigitado){
        men.innerHTML = "cupom válido!"
    }
    else{
        men.innerHTML= "Desculpe não encontramos o seu cupom"
    }
}
