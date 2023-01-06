<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public function Todos()
    {
        return $this->hasMany(Todo::class);
    }
    protected $fillable = [
        'kinds',

    ];
    
}
