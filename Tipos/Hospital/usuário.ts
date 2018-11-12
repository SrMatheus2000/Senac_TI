import pessoa from "./pessoa";

export default class usuario extends pessoa {
    private senha_usuario:string

    constructor(login:string, senha_usuario:string) {
        super(login)
        this.senha_usuario = senha_usuario
    }

}