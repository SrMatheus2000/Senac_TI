import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { ContatoComponent } from './components/contato/contato.component';
import { InicioComponent } from './components/inicio/inicio.component';
import { ProdutosComponent } from './components/produtos/produtos.component';
import { ServicosComponent } from './components/servicos/servicos.component';
import { ProdutoComponent } from './components/produtos/produto/produto.component';

const routes: Routes = [];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }

export const RotaConstante: Routes = [
  { path: "inicio", component: InicioComponent },
  { path: "produtos", component: ProdutosComponent },
  { path: "produtos/:id", component: ProdutoComponent },
  { path: "servicos", component: ServicosComponent },
  { path: "contato", component: ContatoComponent },
  { path: "**", redirectTo: "inicio" }
];