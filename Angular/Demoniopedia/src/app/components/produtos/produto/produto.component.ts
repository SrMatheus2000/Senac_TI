import { Component, OnInit } from "@angular/core"
import { Produto } from "src/app/models/produto.model"
import { ProdutosService } from "src/app/services/produtos.service"
import { ActivatedRoute } from "@angular/router"

@Component({
  selector: "app-produto",
  templateUrl: "./produto.component.html",
  styleUrls: ["./produto.component.css"],
  providers: [ProdutosService]
})
export class ProdutoComponent implements OnInit {
  public produto: Produto;
  
  constructor(
    private route: ActivatedRoute,
    private produtosService: ProdutosService
    ) {}

  ngOnInit() {
    this.produtosService.getProdutoPorIdAPI(
      this.route.snapshot.params["id"]
    ).then((prod: Produto) => {
      console.log(prod)
      this.produto = prod[0]
    });
  }
}
