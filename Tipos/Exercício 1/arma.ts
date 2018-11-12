export default class arma {
    // private calibre:string
    // private marca:string
    // private tipo:string
    private capacidade: number;
    private projeteisNoPente: number;
    private tirosPorSegundo: number;

    constructor(projeteis: number, capacidade: number, tirosPorSegundo: number = 1) {
        this.capacidade = capacidade;
        this.projeteisNoPente = projeteis;
        this.tirosPorSegundo = tirosPorSegundo;
    }

    public atirar(disparos: number = 1): void {
        for (let i = 0; i < disparos; i++) {
            if (this.projeteisNoPente == 0) 
                console.log("Não ha balas, por favor recarregue");
            else {
                this.projeteisNoPente -= this.tirosPorSegundo;
                console.log("BANG");
            }
        }
        console.log("Você tem " + this.projeteisNoPente + " balas em seu pente!");
    }

    public recarregar(): void {
        this.projeteisNoPente = this.capacidade;
    }

    public informarBalas(): number {
        return this.projeteisNoPente;
    }
}