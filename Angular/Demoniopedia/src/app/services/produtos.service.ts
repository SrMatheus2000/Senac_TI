import { Produto } from "../models/produto.model";
import { Injectable } from "@angular/core";
import { Http } from "@angular/http";

@Injectable()

export class ProdutosService {
    
    constructor(private http: Http) {}

    public getProdutosPromise(): Promise<Produto[]> {
        return this.http.get("http://localhost:3000/produtos")
        .toPromise()
        .then((prod: any) => prod.json())
    }

    public getProdutoPorIdAPI(id: number): Promise<Produto>{
        return this.http.get(`http://localhost:3000/produtos?id=${id}`)
        .toPromise()
        .then((prod: any) => prod.json());
    }

    // public produtos: Produto[] = []

// 
    // public produtos: Produto[] = [
    //     {
    //         id: 1,
    //         nome: 'Estatua de Baphomet',
    //         descricao: 'Estatua de Baphomet em bronze, chique chique',
    //         valor: 'Caro, Muito Caro',
    //         imagem: 'assets/img/produtos/estatua.jpg'
    //     },
    //     {
    //         id: 2,
    //         nome: 'Camiseta de Bode',
    //         descricao: 'Bodinhu =3',
    //         valor: 'Não tão caro assim',
    //         imagem: 'assets/img/produtos/camiseta.jpg'
    //     },
    //     {
    //         id: 3,
    //         nome: 'Grimório',
    //         descricao: 'Livro fodão',
    //         valor: 'Meio Caro',
    //         imagem: 'assets/img/produtos/grimorio.jpg'
    //     },
    //     {
    //         id: 4,
    //         nome: 'Pentagrama Invertido',
    //         descricao: 'Colar Punitu',
    //         valor: 'Bem Acessivel',
    //         imagem: 'assets/img/produtos/pentagrama.jpg'
    //     },
    //     {
    //         id: 5,
    //         nome: 'Biblia Satânica',
    //         descricao: 'Livrinhu',
    //         valor: 'Vale a pena',
    //         imagem: 'assets/img/produtos/biblia.jpg'
    //     },
    //     {
    //         id: 6,
    //         nome: 'Escrituras Satânicas',
    //         descricao: 'Outro Livrinhu',
    //         valor: 'Bem top',
    //         imagem: 'assets/img/produtos/escrituras.jpg'
    //     },
    //     {
    //         id: 7,
    //         nome: 'Anel de Baphomet',
    //         descricao: 'Anel Punitu',
    //         valor: 'Bem loko',
    //         imagem: 'assets/img/produtos/anel.jpg'
    //     },
    //     {
    //         id: 8,
    //         nome: 'Poster Baphomet',
    //         descricao: 'Poster Punitu',
    //         valor: 'Caro',
    //         imagem: 'assets/img/produtos/poster.jpg'
    //     },
    //     {
    //         id: 9,
    //         nome: 'Colar Brimstone',
    //         descricao: 'Colar foda',
    //         valor: 'Bem lecal',
    //         imagem: 'assets/img/produtos/brimstone.jpg'
    //     },
    //     {
    //         id: 10,
    //         nome: 'Bolsa Demônio',
    //         descricao: 'Bengay',
    //         valor: 'Meio Caro',
    //         imagem: 'assets/img/produtos/bolsa.jpg'
    //     }
    // ]

    // public getProdutos(): Array<Produto> {
    //     // console.log(this.produtos)
    //     return this.produtos
    // }

    // public getProdutosPromise(): Promise<Produto[]> {
    //     // console.log(this.produtos)
    //     return new Promise((resolve, reject) => {
    //         let funfou = true
    //         if (funfou){
    //             resolve(this.produtos)
    //         } else {
    //             reject({
    //                 tipo_erro: 'produto falso', 
    //                 mensagem: 'seu item é falso'
    //             })
    //         }
    //     })
    // }

    // public getProdutoPorId(id: number): Produto {
    //     let produtosInternos: Produto[]
    //     produtosInternos = this.getProdutos()
    //     return produtosInternos[id-1]
    // }
}