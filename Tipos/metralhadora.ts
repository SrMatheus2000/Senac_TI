import arma from "./arma";

export default class metralhadora extends arma {
    private tirosPorDisparo: number;

    constructor(projeteis: number, capacidade: number, tirosPorDisparo: number) {
        super(projeteis, capacidade);
        this.projeteisNoPente = projeteis;
        this.capacidade = capacidade;
        this.tirosPorDisparo = tirosPorDisparo;
    }

    public atirar() {
        // for (let i = 0; i < 3; i++) {
        //     this.atirar()
        // }

        for (let i = 0; i < this.tirosPorDisparo; i++) {
            if (this.projeteisNoPente == 0){
                console.log("Não ha balas, por favor recarregue");
                return
            }
            else {
                this.projeteisNoPente -= 1;
                console.log("BANG");
            }
        }
        console.log("Você ainda tem " + this.projeteisNoPente + " balas em seu pente!");
    }
}