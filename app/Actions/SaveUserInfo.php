<?php

namespace App\Actions;

use App\Models\User;

class SaveUserInfo
{
    public static function save($data,$id=null,){
        return User::query()->updateOrCreate([
            'id'=>$id,
            'type'=>'client'
        ],$data);
    }

}
