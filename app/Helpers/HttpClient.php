<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;

class HttpClient{
  static function fetch($method, $url, $body = [], $files = []){
    // Jika method == Get, kembalikan response dengan method get
    $headers = [];
    $token = session()->get('token', '');
    if($token != ""){
      $headers['authorization'] = 'Bearer ' . $token;
    }
    if($method == "GET") return Http::get($url)->json([]);
    // Jika terdapat file, client berupa multipart
    if(sizeof($files) > 0){
      $client = Http::asMultipart()->withHeaders($headers);
      // attach file pada clients
      foreach($files as $key => $file){
        $path = $file->getPathname();
        $name = $file->getClientOriginalName();
        // attach file
        $client->attach($key, file_get_contents($path), $name);
      }
      // fetch api
      return $client->post($url, $body);
    }
    // fetch post
    return Http::withHeaders($headers)->post($url, $body)->json();
  }
}