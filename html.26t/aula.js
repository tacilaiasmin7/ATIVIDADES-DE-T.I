// Lista de usuários (no lugar de um banco de dados)
const usuarios = [
    { login: "joao", senha: "123" },
    { login: "maria", senha: "456" },
    { login: "ana", senha: "789" }
];

// Função para fazer login
function fazerLogin() {
    const user = document.getElementById("usuario").value;
    const pass = document.getElementById("senha").value;
    let encontrado = false;
    const msgElement = document.getElementById("mensagem"); // Guardamos a referência do elemento de mensagem

    // Laço de repetição para procurar o usuário
    for (let i = 0; i < usuarios.length; i++) {
        if (user === usuarios[i].login && pass === usuarios[i].senha) {
            encontrado = true;
            setTimeout(() => {

                titulo.innerHTML = "Redirecionando👉";
                window.location.href = "https://www.buser.com.br/?utm_source=google&utm_medium=cpc&utm_campaign=%5BInstitucional%5D-%5Bbuser%5D_%5Bbuser%5D---NU_636591187633&utm_term=buser&gad_source=1&gad_campaignid=13614012159&gbraid=0AAAAACSM69gz_pRdyhFoO7IgSmOHwkps4&gclid=EAIaIQobChMIod2O99CojwMVp1dIAB0BvhAjEAAYASAAEgIZh_D_BwE"

            }, 3000);
        }
    }


    // Mostra a mensagem
    if (encontrado) {
        msgElement.style.color = "green";
        msgElement.textContent = "✅ Bem-vindo, " + user + "!";
    } else {
        msgElement.style.color = "red";
        msgElement.textContent = "❌ Usuário ou senha incorretos!";
    }

    // Limpa os campos de login e senha
    document.getElementById("usuario").value = '';
    document.getElementById("senha").value = '';

    // Restaura a mensagem original após 3 segundos
    setTimeout(() => {
        // Para garantir que estamos restaurando a mensagem correta,
        // vamos verificar se o elemento ainda existe e se o conteúdo
        // não foi alterado por outra coisa (embora neste código simples não deva acontecer)
        if (msgElement) {
            msgElement.style.color = "black"; // Resetando a cor para a padrão ou que você preferir
            titulo.innerHTML = "Redirecionando👉";
        }
    }, 3000); // 3000 milissegundos = 3 segundos
}