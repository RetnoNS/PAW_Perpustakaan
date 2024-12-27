<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Denda extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'kategori',
        'jumlah_denda',
        'status',
        'loan_id',
    ];

    /**
     * Relationship with the Loan model.
     */
    public function loan()
    {
        return $this->belongsTo(Loan::class, 'loan_id');
    }
}
