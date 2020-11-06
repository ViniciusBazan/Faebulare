function validCad(){

    // Var de controle para validar
    var formValid       = true;

    // Var de controle
    var name            = document.getElementById('name');
    var ltName          = document.getElementById('sobrenome');
    var email           = document.getElementById('email');
    var usuario         = email.value.substring(0, email.value.indexOf("@"));
    var dominio         = email.value.substring(email.value.indexOf("@")+ 1, email.value.length);
    var senha           = document.getElementById('password');
    var conf            = document.getElementById('conf');
    var regex     = /^(?=(?:.*?[A-Z]){1})(?=(?:.*?[0-9]){1})(?=(?:.*?[!@#$%*()_+^&}{:;?.]){1})(?=(?:.*?[a-z]){1})(?!.*\s)[0-9a-zA-Z!@#$%;*(){}_+^&]*$/;

    // Var de Warnings
    var nameWarn        = document.getElementById('WarnName');
    var sobWarn         = document.getElementById('WarnSob');
    var emailWarn       = document.getElementById('WarnEmail');
    var senhaWarn       = document.getElementById('WarnPass');
    var confWarn        = document.getElementById('WarnConf');

    // Validação

        // Name

        if (name.value.length > 20 || name.value.length < 3 || name.value.indexOf(" ") != -1){
            nameWarn.style.display = "";
            formValid = false;
        } else {
            nameWarn.style.display = "none";
        }

        // Sobrenome
        
        if (ltName.value.length > 60 || ltName.value.length < 3){
            sobWarn.style.display = "";
            formValid = false;
        } else {
            sobWarn.style.display = "none";
        }

        // Email

        if ((usuario.length >=1) &&
            (dominio.length >=3) &&
            (usuario.search("@")==-1) &&
            (dominio.search("@")==-1) &&
            (usuario.search(" ")==-1) &&
            (dominio.search(" ")==-1) &&
            (dominio.search(".")!=-1) &&
            (dominio.indexOf(".") >=1)&&
            (dominio.lastIndexOf(".") < dominio.length - 1)) {
                emailWarn.style.display = "none";
            } else {
                emailWarn.style.display = "";
                formValid = false;
            }

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


        // Validar formulario

        if (formValid == true){
            document.formCad.submit()
        }

}