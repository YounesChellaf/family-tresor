<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class FinancialHelp extends Model
{
    protected $guarded=[];


    public function user(){
        return $this->belongsTo(User::class);
    }


    public static function new(Request $request){
        return FinancialHelp::create($request->all());
    }
}
