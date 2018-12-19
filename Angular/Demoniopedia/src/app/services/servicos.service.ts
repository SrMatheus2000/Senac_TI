import { Servico } from "../models/servico.model";
import { Injectable } from "@angular/core";
import { Http } from "@angular/http";

@Injectable()

export class ServicosService {
    
    constructor(private http: Http) { }

    public getServicosPromise(): Promise<Servico[]> {
        return this.http.get("http://localhost:3000/servicos")
        .toPromise()
        .then((prod: any) => prod.json())
    }

    public getServicoPorIdAPI(id: number): Promise<Servico> {
        return this.http.get(`http://localhost:3000/servicos?id=${id}`)
        .toPromise()
        .then((prod: any) => prod.json());
    }
}