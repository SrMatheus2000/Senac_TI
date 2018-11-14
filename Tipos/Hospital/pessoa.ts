import medico from "./médico";

export default class pessoa {
    protected login:string

    constructor(login:string) {
        this.login = login
    }

    /**
     * login
     */
    public logar(login:string, senha: string = "") {
        console.log("Bem Vindo " + login)
    }

    /**
     * consultar_exame
     */
    public consultar_exame() {
        console.log("Exame Consultado")
    }

    /**
     * deslogar
     */
    public deslogar() {
        // if (logado == true) 
            console.log("Você deslogou!")
    }
}