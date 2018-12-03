import { Component } from '@angular/core'
import { Pessoa } from './../models/pessoa.model'

@Component({
  selector: 'app-main',
  templateUrl: './main.component.html',
  styleUrls: ['./main.component.css']
})
export class MainComponent {
  public pessoa = new Pessoa()
  public pessoas : Pessoa[] = []
  public numeroArray: Number = 0

  constructor() { 
    this.limparAtributos()
  }

  enviarCadastro(){
    this.pessoas.push(this.pessoa)
    this.numeroArray = this.pessoas.length
    this.pessoa = new Pessoa()  
    this.limparAtributos()
  }

  definirNome(texto): void{
    this.pessoa.Nome = ((<HTMLInputElement>texto.target).value)
  }

  definirSobrenome(texto): void{
    this.pessoa.Sobrenome = ((<HTMLInputElement>texto.target).value)
  }

  limparAtributos(): void{
    this.pessoa.Nome = ''
    this.pessoa.Sobrenome = ''
  }
}
