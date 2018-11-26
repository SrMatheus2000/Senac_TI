import invertebrado from "./invertebrado";

export default class poriferos extends invertebrado {
    private poros: number

    constructor(nome: string, olhos: number, dentes: number, antenas: boolean, poros: number) {
        super(nome, olhos, dentes, antenas);
        this.poros = poros;
    }
}