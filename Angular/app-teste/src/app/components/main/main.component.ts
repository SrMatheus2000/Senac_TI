import { Component, OnInit, OnChanges } from '@angular/core';
import { numero } from 'src/app/models/numero.model';

@Component({
  selector: 'app-main',
  templateUrl: './main.component.html',
  styleUrls: ['./main.component.css']
})
export class MainComponent implements OnChanges, OnInit {
  private numeroInteiro
  private numeroDoInput
  public numeros = []

  constructor() {
    // this.numeroDoInput = numero
   }

  ngOnInit() {
     for(let index = 0; index < 201; index++) {
      this.numeros.push(new numero(index))
    }
  }

  ngOnChanges(){
    this.numeroInteiro = this.numeroDoInput
    console.log(this.numeroInteiro)
  }

  public variavelDoMain: number = 8
  public texto

  public definirTexto(x) {
    this.texto = x
  }

}
