class Processa_rotina_email extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'routine:nome_da_rotina';

    /**
     * The console command description. nome_da_rotina
     *
     * @var string
     */
    protected $description = 'Verifica quais veiculos se encontram instalados, ativos e sem modelo bem cliente vinculado';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * Verifica os processamentos cadastrados e realiza notificação por e-mail caso alguns veiculos ativos possuam cod_modelo_bem_cliente vazio
     * 
     */
    public function handle()
    {
        $bens = Veiculo::get();

        $dados = 'vazio';
        $destinatarios = 'christian.paiva@gmail.com.br';

        Mail::to($destinatarios)->send(new Trata_email($dados, $bens));

    }
}
