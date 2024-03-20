function mostrarAlerta() {
    var mensagem = "Conta criada com sucesso!";
    var secMensagem = "É necessário preencher todos os dados!";
    var senhaInvalidaMensagem = "As senhas não coincidem!";

    var email = document.getElementById("email").value;
    var senha = document.getElementById("senha").value;
    var confirmSenha = document.getElementById("confirm").value;

    var divAlertaValid = document.createElement('div');
    divAlertaValid.style.backgroundColor = 'lightblue';
    divAlertaValid.style.padding = '10px';
    divAlertaValid.style.border = '1px solid black';
    divAlertaValid.style.position = 'absolute';
    divAlertaValid.style.padding = '10px';
    divAlertaValid.style.borderRadius= '10px';
    divAlertaValid.style.backgroundColor= 'rgb(255, 255, 254)';
    divAlertaValid.style.color= 'rgb(21, 255, 0)';
    divAlertaValid.textContent = mensagem;

    var divAlertaInvalid = document.createElement('div');
    divAlertaInvalid.style.backgroundColor = 'lightblue';
    divAlertaInvalid.style.padding = '10px';
    divAlertaInvalid.style.border = '1px solid black';
    divAlertaInvalid.style.position = 'absolute';
    divAlertaInvalid.style.padding = '10px';
    divAlertaInvalid.style.borderRadius= '10px';
    divAlertaInvalid.style.backgroundColor= 'rgb(255, 255, 254)';
    divAlertaInvalid.style.color= 'red';
    divAlertaInvalid.textContent = secMensagem;

    var divAlertaSenhaInvalida = document.createElement('div');
    divAlertaSenhaInvalida.style.backgroundColor = 'lightblue';
    divAlertaSenhaInvalida.style.padding = '10px';
    divAlertaSenhaInvalida.style.border = '1px solid black';
    divAlertaSenhaInvalida.style.position = 'absolute';
    divAlertaSenhaInvalida.style.padding = '10px';
    divAlertaSenhaInvalida.style.borderRadius= '10px';
    divAlertaSenhaInvalida.style.backgroundColor= 'rgb(255, 255, 254)';
    divAlertaSenhaInvalida.style.color= 'red';
    divAlertaSenhaInvalida.textContent = senhaInvalidaMensagem;

    if(email === "" || senha === "" || confirmSenha === ""){
        document.body.appendChild(divAlertaInvalid);  
    } else if (senha !== confirmSenha) {
        document.body.appendChild(divAlertaSenhaInvalida);
    } else {
        document.body.appendChild(divAlertaValid);
    }
}