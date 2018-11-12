import pessoa from "./pessoa";

export default class medico extends pessoa {
    private senha_medico:string

    constructor(login:string, senha:string) {
        super(login)
        this.senha_medico = senha;
    }

    /**
     * consultar_agenda
     */
    public consultar_agenda() {
        
    }


}