<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Order;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function orders(){
      return $this->hasMany(Order::class);
    }

    public function hasRole(){

      if($this->role === 2){
        return 1&&2;
      }else if($this->role === 1){
        return 1;
      }else{
        return redirect()->back();
      }
    }
    public function getUsersRoleAttribute()
    {
        return $this->role === 2 ? 'СEO' : ($this->role === 1?'Admin':'User');
    }
    public function getFormatNumberAttribute()
    {
        return '+'.substr($this->phone, 0, 3).'('.substr($this->phone, 3, 2).')'.' '.substr($this->phone, 5, 3).'-'.substr($this->phone, 8, 2).'-'.substr($this->phone, 10, 2);
    }
}
