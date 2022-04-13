<?php

use \App\Models\User;
if (! function_exists('sendNotif')){
  function sendNotif(string $data = "NAN", $Is_Channel = false){
    $data = str_replace('
',PHP_EOL,$data);
    request('url',env('Bot_Api_Token'));
  }
}
