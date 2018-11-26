import Animal from "./animal"

export default class invertebrado extends Animal {
    private quantidadeDeAntenas: boolean

    constructor(nome: string, olhos: number, dentes: number, antenas: boolean) {
        super(nome, olhos, dentes);
        this.quantidadeDeAntenas = antenas
    }
}