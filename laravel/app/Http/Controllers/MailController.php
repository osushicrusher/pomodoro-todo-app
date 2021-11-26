<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MailRequest;
use App\User;

use SendGrid;
use SendGrid\Mail\Mail;
use \Symfony\Component\HttpFoundation\Response;

class MailController extends Controller
{
    public function store(Request $request) {
      $apiKey = env('SEND_GRID_APIKEY');
      $url = env('SEND_GRID_URL');

      //全ユーザーのemail取得
      $users = User::select('email')->get();

      $email = new Mail();
      $email->setFrom($request->from, 'cytooon公式');
      $email->setSubject($request->subject);
      $email->addTo('osushicrusher@gmail.com');
      $email->addContent('text/plain', $request->content);

      $sendgrid = new SendGrid($apiKey);

      //メール送信
      $response = $sendgrid->send($email);

      header("Content-Type: application/json; charset=utf-8");
      if($response->statusCode() == Response::HTTP_ACCEPTED) {
        $status = 'SUCCESS';
      } else {
        $status = 'ERROR';
      }
      return back()->with('result', $status);
    }
}
