import { Component, Output, EventEmitter } from '@angular/core';

@Component({
  selector: "app-direito",
  templateUrl: "./direito.component.html",
  styleUrls: ["./direito.component.css"]
})

export class RightComponent {
  @Output() public textoNoMain = new EventEmitter

  filhoPai(){
	  this.textoNoMain.emit("Texto Emitido")
  }
}