<?php

namespace App\Mail;

use Rap2hpoutre\FastExcel\FastExcel;

class Trata_email extends Mailable
{
    use Queueable, SerializesModels;

    protected $dados;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($dados, $bens)
    {
        $this->dados = $dados;        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $assunto = '[MONITORAMENTO -CADASTRO VEÍCULOS]';

        $data = \Carbon\Carbon::now()->format('YmdHis');
        $arquivo = 'Relatorio_'.$data.'.xlsx';

        $path = storage_path('app/public/');
        if(!file_exists($path.'tmp')){
            mkdir($path.'tmp', 0777);
        }

        (new FastExcel($this->dados))->export($path.'tmp/'.$arquivo, function($f){    

            return [                
                'Nome ' => $f->placa,
                'Modelo  ' => $f->modelo                              
            ]; 
           
        });
        
        return $this->subject($assunto)
            ->view('emails.modelo_email')
            ->attach(storage_path('app/public/tmp/'.$arquivo))
            ->with([
                'periodo' => $this->dados,
            ]);
    }
}

