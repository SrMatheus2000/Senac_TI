import animal from "./animal";

export default class zoologico {
    private endereco: string
    private listaDeAnimais: Array<animal>

    constructor(end: string, list: Array<animal>) {
        this.endereco = end
        this.listaDeAnimais = list
    }

    public mostrarEndereco(): string {
        return this.endereco
    }

    public mostrarLista(): Array<animal>{
        return this.listaDeAnimais
    }

}