<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;
    protected $guarded = ["id"];

    public function book_category()
    {
        return $this->hasMany(Book::class);
    }
}
