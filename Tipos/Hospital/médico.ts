import pessoa from "./pessoa";
import operador from "./operador"

export default class medico extends pessoa {
    private senha:string
    public logado:boolean = false

    constructor(login:string, senha:string) {
        super(login)
        this.senha = senha
    }

    /**
     * login
     */
    public logar(login:string, senha:string) {
        let logado = true
        console.log("Bem Vindo médico " + login);
    }

    /**
     * consultar_agenda
     */
    public consultar_agenda() {
        
    }

    /**
     * receitar
     */
    public receitar() {
        
    }
}