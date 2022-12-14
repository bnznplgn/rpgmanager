<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Character extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'speciality',
        'magic',
        'strength',
        'agility',
        'intelligence',
        'lifepoint',
        'user_id'
    ];

    private string $name; 

    private string $description; 

    private string $speciality; 

    private int $magic; 

    private int $strength;
    
    private int $agility; 

    private int $intelligence;
     
    private int $lifepoint ; 
}
