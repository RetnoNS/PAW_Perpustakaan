<?php

namespace App\Models;

<<<<<<< Updated upstream
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    //
=======
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'tanggal_peminjaman',
        'user_id',
        'book_id',
    ];

    /**
     * Relationship with the User model.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Relationship with the Book model.
     */
    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id');
    }

    public function getHargaBuku()
    {
        return $this->booking->book->price; // Mengambil harga dari buku yang dipinjam
    }

>>>>>>> Stashed changes
}
