import { Component, OnInit, Input } from '@angular/core';

@Component({
  selector: 'app-esquerdo',
  templateUrl: './esquerdo.component.html',
  styleUrls: ['./esquerdo.component.css']
})
export class EsquerdoComponent implements OnInit {

  constructor() { }

  ngOnInit() {
  }

  @Input() public numero: number
  
}
