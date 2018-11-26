import vertebrado from "./vertebrado"

export default class platelminto extends vertebrado {
    private tipo: string

    constructor(nome: string, olhos: number, dentes: number, vertebras:number, tipo: string) {
        super(nome, olhos, dentes, vertebras)
        this.tipo = tipo
    }
}