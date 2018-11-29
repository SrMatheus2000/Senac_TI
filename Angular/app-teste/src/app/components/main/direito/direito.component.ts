import { Component, OnInit, Output, OnChanges } from '@angular/core';
import { EventEmitter } from 'events';
// import { $ } from 'protractor';

@Component({
  selector: 'app-direito',
  templateUrl: './direito.component.html',
  styleUrls: ['./direito.component.css']
})

export class DireitoComponent implements OnChanges,OnInit {
  /*
  // filhoPai() {
  //   this.textoNoMain.emit("Texto Emitido")
  // }
  // @Output() public textoNoMain = new EventEmitter
*/
  constructor() {}

  ngOnChanges() {}

  ngOnInit() {
    // this.filhoPai();
  }

  nome = ""
  sobrenome = ""
  nomes = []

  public enviar():void{
    // let id: string = (<HTMLInputElement>evento.target).id;
    this.nome = ((document.getElementById("nome") as HTMLInputElement).value);
    this.sobrenome = ((document.getElementById("sobrenome") as HTMLInputElement).value);
   
    // this.nome = document.getElementById("nome").innerText
    // this.sobrenome = document.getElementById("sobrenome").innerHTML;
    console.log(this.nome)
    console.log(this.sobrenome);
    // this.nome = (<HTMLInputElement>evento.target).id;
    // this.sobrenome = (<HTMLInputElement>evento.target).value;
   
    this.nomes.push(this.nome, this.sobrenome);
  }
}
