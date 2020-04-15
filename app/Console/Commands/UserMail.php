<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;  // TODO comando
use App\Mail\UserWelcome;
use App\User;

class UserMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:mail {id : Representa al id del usuario registrado}
                                        {--flag= : Condicional}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Envio email a un usuario';

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
     * @return mixed
     */
    public function handle()
    {
        $user = User::find($this->argument('id')); // TODO comando

        if ($user) {

            $option = $this->option('flag');;
            echo $option . "\n";

            Mail::to($user->email)->send(new UserWelcome($user));  // TODO email
            echo "Email enviado correctamente \n ";
        } else {
            echo "El usuario con el id indicado no existe \n";
        }
        
    }
}
