<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SekolahResource extends JsonResource{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request){
        return [
            "nama" => $this->nama,
            "alamat" => $this->alamat
        ];
    }
}
