<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller{
    public function index(){
        $pengguna = Pengguna::get();
        return response()->json([
            'status' => true,
            'message' => 'success',
            'data' => $pengguna->makeHidden(['password', 'id', 'created_at','updated_at'])
        ]);
    }

    public function show($id){
        $pengguna = Pengguna::find($id)->get();
        if($pengguna == null) return response()->json([
            'status' => false,
            'message' => 'Pengguna tidak ditemukan',
            'data' => null
        ]);
        return response()->json([
            'status' => true,
            'message' => 'wajib ada password',
            'pengguna' => $pengguna
        ]);
    }

    public function store(Request $request){
        $payload = $request->all();
        if(!isset($payload['password'])){
            return response()->json([
                'status' => false,
                'message' => 'wajib ada password',
                'data' => null
            ]);
        }

        $pengguna = Pengguna::create($payload);
        return response()->json([
            'status' => true,
            'message' => 'Telah ditambahkan',
            'data' => $pengguna
        ]);
    }

    public function Update(Request $request, $id){
        $getdata = Pengguna::find($id)->first();
        // $updated = $request->all();
        return response()->json([
            // 'message' => dd($request->all()->nama)
        ]);
        

        // if($getdata == null) {
        //     return response()->json([
        //         'status' => false,
        //         'message' => 'Pengguna tidak ditemukan'
        //         // 'data' => []
        //     ]);
        // }
 
        // Pengguna::find($id)->update([
        //     'nama' => isset($request->nama) ?  $updated->nama: $getdata->nama ,
        //     'email' => isset($request->email) ? $updated->email : $getdata->email ,
        //     'password' => isset($request->password),
        // ]);

        // return response()->json([
        //     'status' => true,
        //     'message' => 'Success updated',
        //     'data' => $getdata
        // ]);
    }
}