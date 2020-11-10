function  addReply(reply, nome){

    var replySpan = document.getElementById("replySpan");
    var replyText = document.getElementById("replyText");

    replySpan.innerHTML = "<input type='number' id='reply' name='reply' style='display:none;' value="+reply+" readonly>";
    replyText.innerHTML = "Você está respondendo o comentario do(a) "+nome+". <a href='#opniao' class='alink-normal opaci muda scrollSuave' onclick='rmReply()'>Clique aqui para cancelar a resposta</a>";

}

function rmReply(){
    var replySpan = document.getElementById("replySpan");
    var replyText = document.getElementById("replyText");

    replySpan.innerHTML = "";
    replyText.innerHTML = "";
}