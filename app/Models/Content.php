<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;
<<<<<<< Updated upstream
=======

    #one to many(inverse)
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
>>>>>>> Stashed changes
}