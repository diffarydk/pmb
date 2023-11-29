<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Document extends Model
{
    use HasFactory, HasUlids;

        protected $fillable = [
            'user_id',
            'nama',
            'no_telp',
            'email',
            'ktp',
            'nilai',
            'ijazah',
            'nilai_akhir',
            'status',
        ];

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class); // Use belongsTo for a one-to-one relationship
    }
}