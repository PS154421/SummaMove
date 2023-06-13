<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oefening extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'oefeningen';

    protected $fillable = ["naam", "beschrijving"];
}
