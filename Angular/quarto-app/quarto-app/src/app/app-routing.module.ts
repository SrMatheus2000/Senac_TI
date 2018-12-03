import { NgModule } from "@angular/core";
import { Routes, RouterModule } from "@angular/router";

import { FirstComponent } from "./components/first/first.component";
import { SecondComponent } from "./components/second/second.component";
import { ThirdComponent } from "./components/third/third.component";
import { FourthComponent } from "./components/fourth/fourth.component";
import { FifthComponent } from "./components/fifth/fifth.component";

const routes: Routes = [];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule {}

export const RotaConstante: Routes = [
  { path: 'first', component: FirstComponent },
  { path: 'second', component: SecondComponent },
  { path: 'third', component: ThirdComponent },
  { path: 'fourth', component: FourthComponent },
  { path: 'fifth', component: FifthComponent },
  { path: '**', redirectTo: 'first' }
]