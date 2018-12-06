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

@NgModule({
  declarations: [
    AppComponent,
    HeaderComponent,
    FooterComponent,
    MenuComponent,
    ContatoComponent,
    InicioComponent,
    ProdutosComponent,
    ServicosComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    RouterModule.forRoot(RotaConstante)
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
