// function bhaskcara(){
// 	let a = document.getElementById("a").value;
// 	let b = document.getElementById("b").value;
// 	let c = document.getElementById("c").value;
//
// 	let x1 = (-b+Math.sqrt(b*b-4*a*c))/(2*a);
//
// 	let x2 = (-b-Math.sqrt(b*b-4*a*c))/(2*a);
//
// 	document.getElementById("x1").innerHTML="X1 = " + x1;
// 	document.getElementById("x2").innerHTML="X2 = " + x2;
// }

$(document).ready(() => {

    let n = 0;
    let n1 = 0;
    let a = "";

    $("#1").click(() => {
        n += "1";
        $("#resultado").text(parseFloat(n));
    });

    $("#2").click(() => {
        n += "2";
        $("#resultado").text(parseFloat(n));
    });

    $("#3").click(() => {
        n += "3";
        $("#resultado").text(parseFloat(n));
    });

    $("#4").click(() => {
        n += "4";
        $("#resultado").text(parseFloat(n));
    });

    $("#5").click(() => {
        n += "5";
        $("#resultado").text(parseFloat(n));
    });

    $("#6").click(() => {
        n += "6";
        $("#resultado").text(parseFloat(n));
    });

    $("#7").click(() => {
        n += "7";
        $("#resultado").text(parseFloat(n));
    });

    $("#8").click(() => {
        n += "8";
        $("#resultado").text(parseFloat(n));
    });

    $("#9").click(() => {
        n += "9";
        $("#resultado").text(parseFloat(n));
    });

    $("#0").click(() => {
        n += "0";
        $("#resultado").text(parseFloat(n));
    });

    $("#C").click(() => {
        n = "0";
        $("#resultado").text(parseFloat(n));
    });

    $("#mais").click(() => {
        a = "+";
        n1 = parseInt(n);
        // $("#resultado").text(parseFloat(n) + "+");
        n = "0";
    });

    $("#menos").click(() => {
        a = "-";
        n1 = parseInt(n);
        n = "0";
    });

    $("#mult").click(() => {
        a = "*";
        n1 = parseInt(n);
        n = "0";
    });

    $("#div").click(() => {
        a = "/";
        n1 = parseInt(n);
        n = "0";
    });

    $("#igual").click(() => {

        let resultado;

        n = parseInt(n);
        n1 = parseInt(n1);

        if (a === "+") {
            resultado = n1 + n;
        } else if (a === "-") {
            resultado = n1 - n;
        } else if (a === "*") {
            resultado = n1 * n;
        } else if (a === "/") {
            resultado = n1 / n;
        }

        n = resultado;
        n1 = "0";

        $("#resultado").text(resultado);
    });
});