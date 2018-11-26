import vertebrado from "./vertebrado"

export default class mamifero extends vertebrado {
    protected corDoLeite: string

    constructor(nome: string, dentes: number, olhos: number, vertebras: number, leite: string) {
        super(nome, dentes, olhos, vertebras)
        this.corDoLeite = leite
    }

    public leite() {
        if (this.corDoLeite=="rosa") {
            console.log("Hipopotamo")
        } else {
            console.log("Animal qualquer")
        }
    }
}