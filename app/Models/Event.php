<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ["name","start_date","color","order_id"];

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

}
