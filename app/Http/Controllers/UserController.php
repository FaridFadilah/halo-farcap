<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Resources\SekolahResource;
use App\Http\Resources\UserResource;
use App\Models\Sekolah;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function aktif($id){
        User::find($id)->update(['aktif' => true]);
        return redirect()->back()->with('message', "Status Updated ");
    }

    public function index(){
        $users = UserResource::collection(User::all());
        $sekolah = SekolahResource::collection(Sekolah::all());
        return view("user.list",compact("users", "sekolah"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $sekolah = SekolahResource::collection(Sekolah::all());
        return view("user.store", compact("sekolah"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request){
        // dd($request->all());
        $request->aktif = true;
        User::create($request->validated());
        return redirect()->route("user.index")->with("message", "Created Success");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $user = User::find($id)->get();
        return view("user.detail",compact("user"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        return view("user.edit", ["user"=> User::find($id)->get()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $user = User::query()->where("id", $id)->first();
        $user->fill($request->all());
        $user->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $user = User::query()->where("id", $id)->delete();
        return redirect()->back();
    }
}