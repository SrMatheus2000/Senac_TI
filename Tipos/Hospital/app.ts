import pessoa from "./pessoa"
import usuario from "./usuário"
import medico from "./médico"
import operador from "./operador"

let cirurgiao = new medico("cir", "123")

cirurgiao.logar("Matheus", "123");
cirurgiao.deslogar()

cirurgiao.logado = true