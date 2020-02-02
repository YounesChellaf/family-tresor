<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class WeddingHelp extends Model
{
    protected $guarded=[];

    public function user(){
        return $this->belongsTo(User::class);
    }


    public static function new(Request $request){
        return WeddingHelp::create($request->all());
    }
}
