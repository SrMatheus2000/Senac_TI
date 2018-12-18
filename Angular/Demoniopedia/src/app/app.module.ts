import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule, RotaConstante } from './app-routing.module';
import { AppComponent } from './app.component';
import { HeaderComponent } from './components/header/header.component';
import { FooterComponent } from './components/footer/footer.component';
import { MenuComponent } from './components/menu/menu.component';
import { ContatoComponent } from './components/contato/contato.component';
import { InicioComponent } from './components/inicio/inicio.component';
import { ProdutosComponent } from './components/produtos/produtos.component';
import { ServicosComponent } from './components/servicos/servicos.component';
import { RouterModule } from '@angular/router';
import { ProdutoComponent } from './components/produtos/produto/produto.component';
import { ServicoComponent } from './components/servicos/servico/servico.component';
import { HttpModule } from '@angular/http';

@NgModule({
  declarations: [
    AppComponent,
    HeaderComponent,
    FooterComponent,
    MenuComponent,
    ContatoComponent,
    InicioComponent,
    ProdutosComponent,
    ServicosComponent,
    ProdutoComponent,
    ServicoComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpModule,
    RouterModule.forRoot(RotaConstante)
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule {}
