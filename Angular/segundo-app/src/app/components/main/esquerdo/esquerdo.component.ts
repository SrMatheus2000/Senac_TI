import { Component, Input } from '@angular/core';

@Component({
  selector: "app-esquerdo",
  templateUrl: "./esquerdo.component.html",
  styleUrls: ["./esquerdo.component.css"]
})

export class LeftComponent {
  @Input() public numero: number
}