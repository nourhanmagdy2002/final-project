<?php

namespace App\Actions;

use App\Models\Contacts;

class SaveContactInfo
{
    public static function save($data,$id){
        return Contacts::query()->updateOrCreate(array_merge(['user_id'=>$id],$data));

    }

}
