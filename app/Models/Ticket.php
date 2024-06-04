<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'name',
        'price',
        'quantity', // Tambahkan kolom quantity
        'max_buy',  // Tambahkan kolom max_buy
        // tambahkan field lain yang diperlukan
    ];
    public function event()
    {
      return $this->belongsTo(Event::class);
    }
}
