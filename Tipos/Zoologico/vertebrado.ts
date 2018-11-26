import animal from "./animal"

export default class vertebrado extends animal {
    protected quantidadeDeVertebras: number

    constructor(nome: string, dentes: number, olhos: number, vertebras: number) {
        super(nome, dentes, olhos)
        this.quantidadeDeVertebras = vertebras
    }
}