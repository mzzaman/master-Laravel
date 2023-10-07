<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = ['author_id', 'first_name', 'last_name', 'age', 'gender'];

    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }
}
