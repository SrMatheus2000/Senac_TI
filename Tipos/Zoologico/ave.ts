import vertebrado from "./vertebrado";

export default class aves extends vertebrado {
    protected voa: boolean

    constructor(nome: string, dentes: number, olhos: number, vertebras: number, voa: boolean) {
        super(nome, dentes, olhos, vertebras);
        this.voa = voa
    }

    public voar() {
        if (this.voa == true) {
            console.log("Ave pode voar")
        } else {
            console.log("Ave nao pode voar")
        }
    }
}