export class numero {

    public tipo: string
    public numero: number

    constructor(numero: number) {
        this.numero=numero
        if (numero % 2 == 0) {
            this.tipo = "par"
        } else {
            this.tipo = "impar"
        }
    }   
}