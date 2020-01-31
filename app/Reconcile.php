<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Reconcile extends Model
{
    protected $guarded=[];

    public static function new(Request $request){
        return Reconcile::create($request->all());
    }
}
