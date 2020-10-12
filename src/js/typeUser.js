$("#tipo2").click(function(){
    $("#sup").prop( "disabled", true ); //Disable
    $("#sup").prop( "required", false );
    $("#sup").attr( "placeholder", "Campo desativado");
    $("#groupSup").attr( "style", "display:none;");

    if ($("#groupSup").attr("style") === "display:none;"){
        $("#WarnES").attr("style", "display:none;"); 
    }
});

$("#tipo1").click(function(){
    $("#sup").prop( "disabled", false ); //Enable
    $("#sup").prop( "required", true );
    $("#sup").attr( "placeholder", "Supervisor@domínio.com");
    $("#groupSup").attr( "style", "display:block;");
});
