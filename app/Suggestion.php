<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Suggestion extends Model
{
    protected $guarded=[];

    public static function new(Request $request){
        return Suggestion::create($request->all());
    }
}
