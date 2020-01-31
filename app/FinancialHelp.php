<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class FinancialHelp extends Model
{
    protected $guarded=[];

    public static function new(Request $request){
        return FinancialHelp::create($request->all());
    }
}
