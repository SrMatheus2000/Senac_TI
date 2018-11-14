export default class animal {
    private quantidadeDeDentes: number
    private quantidadeDeOlhos: number
    private nome: string
    
    constructor(nome:string, dentes: number, olhos: number) {
        this.nome = nome
        this.quantidadeDeDentes = dentes
        this.quantidadeDeOlhos = olhos        
    }

    
}