<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Telegram\Bot\FileUpload\InputFile;
use Telegram\Bot\Laravel\Facades\Telegram;

// Table 
/*
    CREATE TABLE `bysat`.`TB_USER_TELEGRAM` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `name_user` VARCHAR(45) NOT NULL,
    `id_chat` INT UNSIGNED NOT NULL,
    `flg_status` INT NULL DEFAULT 0,
    PRIMARY KEY (`id`));

    ALTER TABLE `bysat`.`TB_USER_TELEGRAM` 
    ADD COLUMN `cod_cliente` INT NULL AFTER `flg_status`,
    ADD COLUMN `usuario_spy` INT NULL AFTER `cod_cliente`,
    ADD COLUMN `cod_tipo_usuario` INT NULL AFTER `usuario_spy`;

*/

// Rota para Testes https://api.telegram.org/bot1603725223:AAF-a4Hwjy0TQk6EcRM8OvGS3t3xxhSDO_A/getUpdates

class TelegramBotController extends Controller
{
    public function updatedActivity()
    {
        // Obtém as atualizações recebidas pelo bot
        $activity = Telegram::getUpdates();
        
        var_dump($activity);
    }
 
    public function sendMessage()
    {
        return view('mensagem_telegram/message');
    }
 
    public function storeMessage(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'message' => 'required'
        ]);
 
        $text = "A new contact us query\n"
            . "<b>Email Contato: </b>\n"
            . "$request->email\n"
            . "<b>Mensagem: </b>\n"
            . $request->message;
 
        Telegram::sendMessage([
            'chat_id' => env('TELEGRAM_CHANNEL_ID', '1632296111'),
            'parse_mode' => 'HTML',
            'text' => $text
        ]);
 
        return redirect()->back();
    }
    
    public function sendPhoto()
    {
        return view('mensagem_telegram/photo');
    }
 
    public function storePhoto(Request $request)
    {
        $request->validate([
            'file' => 'file|mimes:jpeg,png,gif'
        ]);
 
        $photo = $request->file('file');
 
        Telegram::sendPhoto([
            'chat_id' => env('TELEGRAM_CHANNEL_ID', '1632296111'),
            'photo' => InputFile::createFromContents(file_get_contents($photo->getRealPath()), str_random(10) . '.' . $photo->getClientOriginalExtension())
        ]);
 
        return redirect()->back();
    }
}
