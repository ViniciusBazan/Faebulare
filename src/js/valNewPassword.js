function validNewps(){
    // Var de controle para validar
    var formValid       = true;

    // Var de controle
    var senha           = document.getElementById('newpw');
    var conf            = document.getElementById('confnewpw');
    var regex     = /^(?=(?:.*?[A-Z]){1})(?=(?:.*?[0-9]){1})(?=(?:.*?[!@#$%*()_+^&}{:;?.]){1})(?=(?:.*?[a-z]){1})(?!.*\s)[0-9a-zA-Z!@#$%;*(){}_+^&]*$/;

    // Var de Warn

    var senhaWarn       = document.getElementById('WarnPass');
    var confWarn        = document.getElementById('WarnConf');

    // Validação

    // Senha

        if (!regex.exec(senha.value) || senha.value.length < 8 || senha.value.length > 16){
            senhaWarn.style.display = "";
            formValid = false;
        } else {
            senhaWarn.style.display = "none";
        }

    // Confirmar senha

        if (senha.value !== conf.value){
            confWarn.style.display = "";
            formValid = false;
        } else {
            confWarn.style.display = "none";
        }

    // Validação para enviar

    if (formValid == true){
        document.formRec.submit()
    }

}
