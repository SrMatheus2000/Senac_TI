import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { ContatoComponent } from './components/contato/contato.component';
import { GaleriaComponent } from './components/galeria/galeria.component';
import { InicioComponent } from './components/inicio/inicio.component';
import { ProdutosComponent } from './components/produtos/produtos.component';
import { ServicosComponent } from './components/servicos/servicos.component';

const routes: Routes = [];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }

export const RotaConstante: Routes = [
  { path: "contato", component: ContatoComponent },
  { path: "galeria", component: GaleriaComponent },
  { path: "inicio", component: InicioComponent },
  { path: "produtos", component: ProdutosComponent },
  { path: "servicos", component: ServicosComponent },
  { path: "**", redirectTo: "inicio" }
];