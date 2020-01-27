<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class PhoneNumber extends Model
{
    protected $guarded=[];


    public static function new(Request $request){
        return PhoneNumber::create([
            'name' => $request->name,
            'number' => $request->number
        ]);
    }



}
