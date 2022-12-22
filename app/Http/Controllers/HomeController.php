<?php

namespace App\Http\Controllers;

use App\Helpers\HttpClient;
use Illuminate\Http\Request;

class HomeController extends Controller{
    public function index(){
        $responsePengguna = HttpClient::fetch('GET', 
        'http://localhost:1212/api/pengguna');
        $pengguna = $responsePengguna['data'];
        return view('httpClient.home', compact('pengguna'));
    }
}
