class arma {
    // private calibre:string
    // private marca:string
    // private tipo:string
    private capacidade:number
    private projeteisNoPente:number

    constructor(projeteis:number, capacidade:number){
        this.capacidade = capacidade
        this.projeteisNoPente = projeteis
    }

    public atirar(): void { 
        if (this.projeteisNoPente == 0)
            console.log("Não ha balas, por favor recarregue")
        else {
            this.projeteisNoPente -= 1
            console.log("BANG")
            console.log("Você ainda tem " + this.projeteisNoPente + " balas em seu pente!")
        }
    }

    public recarregar(): void {
        this.projeteisNoPente = this.capacidade
    }

    public informarBalas(): number {
        return this.projeteisNoPente
    }
}

let pistola = new arma(10, 10)
pistola.atirar()