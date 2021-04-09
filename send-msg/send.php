<?php
class Viber
{
    private $url_api = "https://chatapi.viber.com/pa/";

    private $token = "4cb273e48367e7c3-c74e1bf7193eb1bc-9cfb3478c9352e42";

    public function message_post
    (
        $from,          // ID администратора Public Account.
        array $sender,  // Данные отправителя.
        $text,           // Текст.
        $contact
    )
    {
        $data['from']   = $from;
        $data['sender'] = $sender;
        $data['type']   = 'text';
        $data['text']   = $text;
        return $this->call_api('post', $data);
    }

    private function call_api($method, $data)
    {
        $url = $this->url_api.$method;

        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\nX-Viber-Auth-Token: ".$this->token."\r\n",
                'method'  => 'POST',
                'content' => json_encode($data)
            )
        );
        $context  = stream_context_create($options);
        $response = file_get_contents($url, false, $context);
        return json_decode($response);
    }
}
$Viber = new Viber();
$Viber->message_post(
    'S4Bd52Qlh8/oSCFJQ2o42g==',
    [
        'name' => 'BotArtur', // Имя отправителя. Максимум символов 28.
        'avatar' => '' // Ссылка на аватарку. Максимальный размер 100кб.
    ],
    'Test'
);
?>