import vertebrado from "./vertebrado"

export default class peixe extends vertebrado {
    protected habitat: string

    constructor(nome: string, dentes: number, olhos: number, vertebras: number, habitat: string) {
        super(nome, dentes, olhos, vertebras)
        this.habitat = habitat
    }
}