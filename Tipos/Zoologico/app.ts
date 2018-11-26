import animal from "./animal"
import zoologico from "./zoologico"
import anfibio from "./anfibio"
import ave from "./ave"
import mamifero from "./mamifero"
import peixes from "./peixe"
import platelminto from "./platelminto"
import poriferos from "./porifero"
import reptil from "./reptil"

let animais: animal[] = []
// let animais = []
// let animais = new Array

let toto = new animal("toto", 50, 2)
let aranha = new animal("aranha", 0, 4)
let peixe = new animal("peixe", 20, 2)
let zebra = new animal("zebra", 30, 2)
let gato = new animal("gato", 40, 2)

animais.push(toto)
animais.push(aranha)
animais.push(peixe)
animais.push(zebra)
animais.push(gato)

let prisao = new zoologico("lugar nenhum", animais)

console.log(prisao.mostrarLista())