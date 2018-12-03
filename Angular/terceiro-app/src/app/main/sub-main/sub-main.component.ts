import { Component, Input, OnChanges } from '@angular/core'

@Component({
  selector: 'app-sub-main',
  templateUrl: './sub-main.component.html',
  styleUrls: ['./sub-main.component.css']
})

export class SubMainComponent implements OnChanges {

  /*
    Aqui defino o NOME do meu Input, que vai ficar vinculado na classe pai
    Lembrando que a variável atribuida deve ser do mesmo tipo
  */

  @Input() public NumeroDePessoas: Number = 0

  /*
    Criada variável interna para receber o mesmo valor do Input e poder manipular
    quando precisar internamente na classe
  */

  public Numero: Number = 0

  constructor() {}

  /*
    O ngOnChanges ficará "ouvindo" as mudanças do nosso INPUT
    e será disparado toda vez que o valor dele for alterado
    usamos quando queremos ter um comportamento dinânmico com as alterações de valores
    no nosso caso, queremos sempre que nossa variável NUMERO tenha o mesmo valor do INPUT
    por isso alteramos o seu valor para ficar IGUAL sempre que houver mudanças de valores no INPUT
  */

  ngOnChanges(){
    this.Numero = this.NumeroDePessoas
    // Console log apenas para registrar a mudança de valor no console( mesma funcao de um println ou print em outras linguagens)
    // console.log('filho',this.Numero)
  }
}
