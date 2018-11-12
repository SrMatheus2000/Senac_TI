import pessoa from "./pessoa";
import operador from "./operador"

export default class medico extends pessoa {
    private senha:string

    constructor(login:string, senha:string) {
        super(login)
        this.senha = senha
    }

    /**
     * login
     */
    public logar(login:string, senha:string) {
        
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