<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'tanggal_peminjaman',
        'tanggal_pengembalian',
        'denda',
        'status',
        'booking_id',
        'user_id',
    ];

    /**
     * Relationship with the Booking model.
     */
    public function booking()
    {
        return $this->belongsTo(Booking::class, 'booking_id');
    }

    /**
     * Relationship with the User model.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function getDendaAttribute($value)
    {
        if ($this->status === 'belum' && now()->greaterThan($this->tanggal_pengembalian)) {
            $daysOverdue = now()->diffInDays($this->tanggal_pengembalian);
            return $daysOverdue * 10000; // Rp 10.000 per hari
        }

        return $value;
    }

}
