<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UsersAdminResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'username'=>$this->username,
            'email'=>$this->email,
           'phone'=>$this->phone,
            'created_at'=>$this->created_at->format('d-m-Y'),
            'date'=>$this->created_at->diffForHumans(),
        ];
    }
}
