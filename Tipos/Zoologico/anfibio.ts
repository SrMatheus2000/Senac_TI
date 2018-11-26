import vertebrado from "./vertebrado";

export default class anfibio extends vertebrado {
    protected nada: boolean

    constructor(nome: string, dentes: number, olhos: number, vertebras: number, podeNadar: boolean) {
        super(nome, dentes, olhos, vertebras);
        this.nada = podeNadar;
    }

    public nadar() {
        console.log("Anfíbios nadam")
    }
}