export default class pessoa {
    protected login:string

    constructor(login:string) {
        this.login = login
    }

    /**
     * login
     */
    public logar(login:string) {
        console.log("Bem Vindo" + login)
    }

    /**
     * consultar_exame
     */
    public consultar_exame() {
        
    }

    /**
     * deslogar
     */
    public deslogar() {
        console.log("Você deslogou!")
    }
}