

    $(document).ready(function(){
      $("#mais_item").click(mais_item);
      $("#menos_item").click(menos_item);
    });


    function mais_item(){

      var preco_produto = $("#carrinho_preco").text();
      var quantidade_produto = $("#carrinho_quantidade").val();

      document.getElementById("carrinho_subtotal").innerHTML = parseFloat(preco_produto) * parseFloat(quantidade_produto);

    }

    /*function SomaTotal(){
      var SomaTotal = 0;
      var obj = document.getElementById("carrinho_subtotal");
      var num01 = document.getElementById("num01").innerHTML;
      var num02 = document.getElementById("num02").innerHTML;



      obj.innerHTML = parseInt(subtotal) + parseInt(num02);
    }*/
