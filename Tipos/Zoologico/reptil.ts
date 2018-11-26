import vertebrado from "./vertebrado";

export default class reptil extends vertebrado {
    private aquatico: boolean

    constructor(nome: string, olhos: number, dentes: number, vertebras: number, aquatico: boolean) {
        super(nome, olhos, dentes, vertebras)
        this.aquatico = aquatico
    }
}