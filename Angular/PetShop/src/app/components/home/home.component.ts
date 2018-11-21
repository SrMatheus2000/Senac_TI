import { Component } from '@angular/core';

@Component({
  selector: "main",
  templateUrl: "./home.component.html",
  styleUrls: ["./home.component.css"]
})
export class MainComponent {
  // data binding
  
  // string interpolation
  // title = "home!!!";

  // property binding
  // caminhoIMG = "assets/img/";
  // cerebro = this.caminhoIMG + "cerebro.jpg";

  // event binding
  // imagem = this.caminhoIMG + "cerebro.jpg"
  // exibir(){
  //   this.imagem = this.caminhoIMG + "cerebro.jpg";
  // }
  // ocultar(){
  //   this.imagem = ''
  // }

  // f_imagem(){
  //   if (this.imagem == this.caminhoIMG + "cerebro.jpg")
  //     this.imagem = ""
  //   else
  //     this.imagem = this.caminhoIMG + "cerebro.jpg"
  // }
  texto1 = "Olá Mundo"
  texto2 = this.texto1
  disparar(valor: Event){
    // console.log(this.a);
    // console.log(valor);
    if (valor["data"] === null) {
      this.texto2 = this.texto2.substr(0, this.texto2.length-1);
    } else {
      this.texto2 += valor["data"];
    }
    // this.texto2 = valor
  }



}