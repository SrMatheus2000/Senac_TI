import pessoa from "./pessoa";

export default class operador extends pessoa {
    private senha_operador:string

    constructor(login:string, senha_operador:string) {
        super(login)
        this.senha_operador = senha_operador
    }

    /**
     * agendar_consulta
     */
    public agendar_consulta() {
        
    }
}