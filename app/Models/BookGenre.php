<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookGenre extends Model
{
    use HasFactory;

    // Nama tabel yang sesuai
    protected $table = 'book_genre';

    // Kolom yang dapat diisi secara massal
    protected $fillable = [
        'book_id',
        'genre_id',
    ];

    /**
     * Relasi ke model Book
     */
    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id');
    }

    /**
     * Relasi ke model Genre
     */
    public function genre()
    {
        return $this->belongsTo(Genre::class, 'genre_id');
    }
}
