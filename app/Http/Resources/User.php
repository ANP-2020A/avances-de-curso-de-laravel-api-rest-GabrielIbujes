<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class User extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            //'userable'=>$this->userable,
            //'credential_number'=>$this->when(Auth::user()->userable_type =='App\Admin',$this->userable->credential_number),
            //$this->mergeWhen(Auth::user()->userbale_tye == 'App\Admin',$this->userable),
            $this->merge($this->userable),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
