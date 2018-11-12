import pessoa from "./pessoa"

export default class operador extends pessoa {
    private senha_operador:string
    public consultas:any
    
    constructor(login:string, senha_operador:string) {
        super(login)
        this.senha_operador = senha_operador
    }
    
    /**
     * agendar_consulta
     */
    public agendar_consulta(nome_paciente: string, nome_medico: string, data_consulta: string, cod_consulta:number) {
        this.consultas[cod_consulta] = [nome_paciente, nome_medico, data_consulta]
    }
    
    /**
     * desmarcar_consulta
     */
    public desmarcar_consulta(cod_consulta:number) {
        this.consultas[cod_consulta] = 0
    }
}