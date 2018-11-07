import arma from "./arma";

export class metralhadora extends arma {

   public rajada() {

    //    for (let i = 0; i < 3; i++) {
    //        this.atirar()
    //    }

       if (this.projeteisNoPente == 0)
           console.log("Não ha balas, por favor recarregue")
       else {
           for (let i = 0; i < 3; i++){
               this.projeteisNoPente -= 1
               console.log("BANG")
           }
           console.log("Você ainda tem " + this.projeteisNoPente + " balas em seu pente!")
       }
       
   }
}