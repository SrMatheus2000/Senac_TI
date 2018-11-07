class pessoa {
    private nome:string
    private sobrenome:string
    private carro:string
    private arma:string

    constructor(nome:string, sobrenome: string, carro:string, arma:string) {
      this.nome = nome
      this.sobrenome = sobrenome
      this.carro = carro
      this.arma = arma 
    }

    public dizerNome() {
        console.log("Seu nome é: " + this.nome + " " + this.sobrenome)
    }

    public informarCarro(): string {
        // console.log("Seu carro é um: " + this.carro)
        return this.carro
    }

    public informarArma(): string {
        // console.log("Sua arma é uma: " + this.arma)
        return this.arma
    }
}

let matheus = new pessoa("Matheus", "Wandscheer", "Kaddet", "Bazuca")
matheus.dizerNome()
console.log (matheus.informarArma())
console.log (matheus.informarCarro())