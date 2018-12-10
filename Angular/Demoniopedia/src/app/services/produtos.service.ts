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