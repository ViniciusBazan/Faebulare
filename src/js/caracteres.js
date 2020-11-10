$(document).on("input", "#coment", function () {
    var limite = 600;
    var caracteresDigitados = $(this).val().length;
    var caracteresRestantes = limite - caracteresDigitados;

    $(".caracteres").text(caracteresRestantes);

    if (caracteresRestantes > 400){
        $(".caracteres").css("color", "green");
    } else if(caracteresRestantes > 200){
        $(".caracteres").css("color", "orange");
    } else{
        $(".caracteres").css("color", "red");
    }
});