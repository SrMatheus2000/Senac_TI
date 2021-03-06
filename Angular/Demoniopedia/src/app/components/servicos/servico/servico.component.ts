import { Component, OnInit } from "@angular/core"
import { Servico } from "src/app/models/servico.model"
import { ServicosService } from "src/app/services/servicos.service"
import { ActivatedRoute } from "@angular/router"

@Component({
  selector: "app-servico",
  templateUrl: "./servico.component.html",
  styleUrls: ["./servico.component.css"],
  providers: [ServicosService]
})
export class ServicoComponent implements OnInit {
  public servico: Servico;

  constructor(
    private route: ActivatedRoute,
    private servicosService: ServicosService
  ) { }

  ngOnInit() {
    this.servicosService
      .getServicoPorIdAPI(this.route.snapshot.params["id"])
      .then((prod: Servico) => {
        console.log(prod);
        this.servico = prod[0];
      });
  }
}