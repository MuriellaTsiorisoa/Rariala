<?php

namespace App\Http\Controllers;
use Laravel\Socialite\Facades\Socialite;
use Google\Client;
use Google\Service\Gmail;

use Google\Service\Gmail\Message;


use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // Gère le callback de Google après l'authentification
    public function handleGoogleCallback()
    {
        
        // Récupérez l'utilisateur authentifié
        $user = Socialite::driver('google')->user();

        // Vous pouvez accéder au jeton d'accès OAuth via $user->token
        $accessToken = $user->token;
        dd($accessToken);
        

        // Faites ce que vous voulez avec le jeton d'accès ici

        // Redirigez l'utilisateur ou effectuez une autre action
    }

    public function sendEmail()
    {
        // Récupérer le jeton d'accès depuis la session
        $accessToken = session('google_access_token');

        if (!$accessToken) {
            return redirect()->route('redirectToGoogle');
        }

        // Configurer le client Google
        $client = new Client();
        $client->setAccessToken($accessToken);

        // Configurer le service Gmail
        $service = new Gmail($client);

        // Créer le contenu de l'e-mail
        $strSubject = 'Test Email';
        $strRawMessage = "From: your-email@gmail.com\r\n";
        $strRawMessage .= "To: recipient-email@gmail.com\r\n";
        $strRawMessage .= "Subject: $strSubject\r\n";
        $strRawMessage .= "MIME-Version: 1.0\r\n";
        $strRawMessage .= "Content-Type: text/plain; charset=utf-8\r\n";
        $strRawMessage .= 'Content-Transfer-Encoding: 7bit' . "\r\n\r\n";
        $strRawMessage .= 'This is a test email sent using the Gmail API';

        // Encoder le message
        $rawMessage = base64_encode($strRawMessage);
        $rawMessage = str_replace(['+', '/', '='], ['-', '_', ''], $rawMessage);
        $msg = new Message();
        $msg->setRaw($rawMessage);

        // Envoyer l'e-mail
        try {
            $service->users_messages->send('me', $msg);
            echo 'Email sent!';
        } catch (\Exception $e) {
            echo 'An error occurred: ' . $e->getMessage();
        }
    }


    
}
