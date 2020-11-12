function valComent(){
    // Var de verificação
    var coment            = document.getElementById('coment');

    // Var de warn
    var warn              = document.getElementById('alertShort');
    
    // Validação

    if (coment.value.length < 20){
        warn.style.display = "";
    } else{
        warn.style.display = "none";
        document.formComent.submit();
    }

}