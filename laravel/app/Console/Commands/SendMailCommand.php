<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;
use SendGrid;
use SendGrid\Mail\Mail;
use Illuminate\Support\Facades\Log;

class SendMailCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:send_mail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '公式宛にメールを送信する';

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
      try {
        $apiKey = env('SEND_GRID_APIKEY');
        $url = env('SEND_GRID_URL');

        $fromAddress = 'cytooon.official@gmail.com';
        $fromName = 'cytooon公式';
        $to = 'osushicrusher@gmail.com';
        $subject = 'テストメールです';
        $content = 'テストメールやで' . date('Y-m-d h:i:s');

        $email = new Mail();
        $email->setFrom($fromAddress, $fromName);
        $email->setSubject($subject);
        $email->addTo($to);
        $email->addContent('text/plain', $content);

        $sendgrid = new SendGrid($apiKey);

        //メール送信
        $response = $sendgrid->send($email);

        $message = '[' . date('Y-m-d h:i:s') . ']Subject: ' . $subject;

        $this->info($message);
        Log::info($message);

      } catch (Exception $e) {
        Log::error("error_message: " . $e->getMessage());
      }
    }
}
