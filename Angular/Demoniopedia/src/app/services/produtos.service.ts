import { Produto } from "../models/produto.model";

export class ProdutosService {
    
    // constructor() {}
    public produtos: Produto[] = [
        {
            id: 1,
            nome: 'Estatua de Baphomet',
            descricao: 'Estatua de Baphomet em bronze, chique chique',
            valor: 'Caro, Muito Caro'
        },
        {
            id: 2,
            nome: 'Camiseta de Bode',
            descricao: 'Bodinhu =3',
            valor: 'Não tão caro assim'
        },
        {
            id: 3,
            nome: 'Grimório',
            descricao: 'Livro fodão',
            valor: 'Meio Caro'
        },
        {
            id: 4,
            nome: 'Pentagrama Invertido',
            descricao: 'Colar Punitu',
            valor: 'Bem Acessivel'
        },
        {
            id: 5,
            nome: 'Biblia Satânica',
            descricao: 'Livrinhu',
            valor: 'Vale a pena'
        },
        {
            id: 6,
            nome: 'Escrituras Satânicas',
            descricao: 'Outro Livrinhu',
            valor: 'Bem top'
        },
        {
            id: 7,
            nome: 'Anel de Baphomet',
            descricao: 'Anel Punitu',
            valor: 'Bem loko'
        },
        {
            id: 8,
            nome: 'Poster Baphomet',
            descricao: 'Poster Punitu',
            valor: 'Caro'
        },
        {
            id: 9,
            nome: 'Colar Brimstone',
            descricao: 'Colar foda',
            valor: 'Bem lecal'
        },
        {
            id: 10,
            nome: 'Bolsa Demônio',
            descricao: 'Bengay',
            valor: 'Meio Caro'
        }
    ]
    
    public getProdutos(): Array<Produto> {
        // console.log(this.produtos)
        return this.produtos
    }

    public getProdutoPorId(id: number): Produto {
        let produtosInternos: Produto[]
        produtosInternos = this.getProdutos()
        return produtosInternos[id-1]
    }
}