import { Component } from '@angular/core';

@Component({
  selector: "main",
  templateUrl: "./main.component.html",
  styleUrls: ["./main.component.css"]
})

export class MainComponent {
  public variavelDoMain:number = 8  
  public texto

  public definirTexto(x){
    this.texto = x
  }
  
}