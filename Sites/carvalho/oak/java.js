function teste(){
$.post("ajax.php", {
    nome: $("#nome").val(),
    cpf: $("#cpf").val(),
    telefone:$("#telefone").val(),
    email: $("#email").val(),
    senha: $("#senha").val()
}, (data) => {
    // alert(data);
    // sleep(5000);
    // $('#form')[0].reset();
    // return false;
});
}
