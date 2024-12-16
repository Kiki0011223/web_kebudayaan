<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'kupon_id', 'user_name', 'user_email', 'user_phone', 'payment_proof', 'status'
    ];

    /**
     * Relasi ke model Ticket.
     */
    public function kupon()
    {
        return $this->belongsTo(kupon::class, 'kupon_id');
    }
}
