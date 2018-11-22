function draw(){

    let string = $("#string").val();
    // console.log(string);
    let tamanho = string.length;
    // console.log(tamanho);
    $("#tamanho").text("O tamanho da String é de: " + tamanho + " caracteres.");

    if(string.length == 20){
        $("#string").css("border", "solid fuchsia").focus();
        $("#aviso").text("String não pode ter mais de 20 caracteres!");
    } else {
        $("#string").css("border", "");
        $("#aviso").html("");
    }
}