import { Servico } from "../models/servico.model";

export class ServicosService {
    
    // constructor() {}
    public servicos: Servico[] = [
        {
            id: 1,
            nome: 'Exorcismo Leve',
            descricao: 'Para assombracoes fracas',
            valor: 'uma pexincha'
        },
        {
            id: 2,
            nome: 'Exorcismo Medio',
            descricao: 'Para assombracoes medias',
            valor: 'mais ou menos'
        },
        {
            id: 3,
            nome: 'Exorcismo Pesado',
            descricao: 'Para assombracoes fodonas',
            valor: 'bem caro'
        },
        {
            id: 4,
            nome: 'Invocação',
            descricao: 'Invoca um demonio lecal',
            valor: 'depende do demonio'
        },
        {
            id: 5,
            nome: 'Proteção Demoniaca',
            descricao: 'pede a protecao de um demonio',
            valor: 'caro'
        }
    ]
    
    public getServicos(): Array<Servico> {
        // console.log(this.servicos)
        return this.servicos
    }

    public getServicoPorId(id: number): Servico {
        let servicosInternos: Servico[]
        servicosInternos = this.getServicos()
        return servicosInternos[id-1]
    }
}