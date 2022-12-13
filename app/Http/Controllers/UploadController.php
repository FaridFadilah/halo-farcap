<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller{
    public function upload(Request $request){
        if($request->method() == "GET") return view("upload");
        $file = $request->file("gambar");
        // dd($file);
        $file->move("gambar", $file->getClientOriginalName());
        return redirect()->back();
    }
}
