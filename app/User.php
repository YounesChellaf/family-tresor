<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','phone_number','card_number'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function status(){
        switch ($this->confirmed) {
            case true:
                echo '<label class="label label-success">مؤكـــــد</label>';
                break;
            case false:
                echo '<label class="label label-warning">غيـر مؤكـد </label>';
                break;

            default:
                break;
        }
    }

    public function financials(){
        return $this->hasMany(FinancialHelp::class);
    }
    public function reconciles(){
        return $this->hasMany(Reconcile::class);
    }
    public function weddings(){
        return $this->hasMany(WeddingHelp::class);
    }
}

