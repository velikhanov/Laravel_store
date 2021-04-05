<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Order extends Model
{
    use HasFactory;

    public function user(){
      return $this->belongsTo(User::class);
    }
    public function getFormatNumberOrderAttribute()
    {
        return '+'.substr($this->phone, 0, 3).'('.substr($this->phone, 3, 2).')'.' '.substr($this->phone, 5, 3).'-'.substr($this->phone, 8, 2).'-'.substr($this->phone, 10, 2);
    }
}
